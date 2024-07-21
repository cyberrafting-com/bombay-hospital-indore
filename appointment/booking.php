<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// sendEmail("New Query","New record created successfully");
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET["fetch"]) && $_GET["fetch"] === "doctor"){
        getDoctors();
    }
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if (!empty($_POST["mobile"]) && strlen($_POST["mobile"]) == 10 && !empty($_POST["otp"]) && strlen($_POST["otp"]) == 6) {
        if ($_SESSION["OTP_" . $_POST["mobile"]] == $_POST["otp"]) {
            if (isset($_GET["appointment"]) && $_GET["appointment"] === "query")
                saveQuery($_POST["name"], $_POST["email"], $_POST["mobile"], $_POST["health_package"], $_POST["appointment_date"], $_POST["message"]);
            else if (isset($_GET["appointment"]) && $_GET["appointment"] === "doctor")
                saveDoctorAppointment($_POST["name"], $_POST["email"], $_POST["mobile"], $_POST["department_id"], $_POST["doctor_id"], $_POST["appointment_date"], $_POST["message"]);

            echo json_encode(["status" => true, "message" => "Your appointment request has been received. We will get back to you soon."]);
            exit();
        }
        echo json_encode(["status" => false, "message" => "Invalid OTP."]);
        exit();
    }
    echo json_encode(["status" => false, "message" => "Invalid request."]);
    exit();
}
echo json_encode(["status" => false, "message" => "Method not allowed."]);
exit();

function getDoctors()
{
    $conn = getDBConnection();
    $data=[
        "doctors"=>[],
        "departments"=>[],
    ];
    if (!empty($conn)) {
        $sql = "Select id,name,department,email,mobile,waiting_time_in_days from doctors where hospital_location='indore' order by name asc";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $data["doctors"][]=[
                "id"=> $row["id"],
                "name"=> $row["name"],
                "email"=> $row["email"],
                "mobile"=> $row["mobile"],
                "department"=>$row["department"],
                "waiting_time_in_days"=>(int)$row["waiting_time_in_days"]
            ];
          }
        } 
        
        $sql = "Select id,name from departments where FIND_IN_SET('indore', hospital_location) order by name asc";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            
            $data["departments"][]=[
                "id"=> $row["id"],
                "name"=> $row["name"]
            ];
          }
        } 
        $conn->close();

    }
    echo json_encode(array_merge(["status" => true],$data));
    exit();
}

function saveDoctorAppointment($name, $email, $mobile, $department_id, $doctor_id, $appointment_date, $message)
{
    $conn = getDBConnection();
    if (!empty($conn)) {
        //date_default_timezone_set("Asia/Kolkata");
		date_default_timezone_set('UTC');

        $date = date("Y-m-d H:i:s");
        $sql = "INSERT INTO appointments (name,email,mobile,department_id,doctor_id,appointment_date,message,created,hospital_location) VALUES ('$name', '$email', '$mobile', '$department_id', '$doctor_id', '$appointment_date','$message','$date','indore')";
        if ($conn->query($sql) === TRUE) {
            sendEmail("New Doctor Booking", getTemplate());
            sendEmailToUser(["email"=>$email,"name"=>$name],"BH Indore: Appointment request received.",getTemplateForUser("patient"));
            $doctor_name= substr($_POST["doctor_name"], 0, 90);
			$name= substr($name, 0, 90);
			$appointment_date=$_POST["appointment_date"];
			$smstemplate="Dear Patient. Your online appointment request has been received. We will get back to you soon-BH.";
			//pushToTxtlocal("8828433355",$smstemplate);
			//pushToTxtlocal("9820628047",$smstemplate);
			pushToTxtlocal($_POST["mobile"],$smstemplate);
			if(!empty($_POST["doctor_name"])){
				$smstemplate="You have a new appointment. Ptn Name: {$name}, Mobile: {$mobile}, Package: --, Appointment for: {$doctor_name}, Appointment Date: {$appointment_date}-BH";
				pushToTxtlocal($_POST["doctor_mobile"],$smstemplate);
				pushToTxtlocal("9820628047",$smstemplate);
				sendEmailToUser(["email"=>isset($_POST["doctor_email"])?$_POST["doctor_email"]:"","name"=>$_POST["doctor_name"]],"You have a new appointment on ".date("l, jS F Y",strtotime($_POST["appointment_date"])), getTemplateForUser("doctor"));
			}
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
}

function saveQuery($name, $email, $mobile, $health_package, $appointment_date, $message)
{
    $conn = getDBConnection();
    if (!empty($conn)) {
        $date = date("Y-m-d H:i:s");
        $sql = "INSERT INTO queries (name,email,mobile,health_package,appointment_date,message,created,hospital_location) VALUES ('$name', '$email', '$mobile', '$health_package', '$appointment_date','$message','$date','indore')";
        if ($conn->query($sql) === TRUE) {
            $template = getTemplate();
            sendEmail("New Query", $template);
            //echo "New record created successfully";
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
}

function getTemplate()
{
    $template = "<b>Hi</b> <br/>Got a new appointment. Whose details are given below:<br/><br/>";
    foreach ($_POST as $key => $value) {
        if(in_array($key,["doctor_id","department_id",'otp']))
            continue;
		
		if($key=="appointment_date")
			$value=date("l, jS F Y",strtotime($value));
		
        $template .= ucwords($key) . ": <b>{$value}</b><br/>";
    }
    return $template;
}

function getTemplateForUser($type)
{
    $template ="";
    if($type!="doctor")
    {
        $with="";
        if(!empty($_POST["doctor_name"]))
        {
            $with="Dr. ".$_POST["doctor_name"];
        }else if(!empty($_POST["department_name"]))
        {
            if(!empty($with))  $with.=", ";
            $with .=$_POST["department_name"];
        }
        if(!empty($with))  $with=" with {$with}";
        
        $template = "<b>Dear {$_POST["name"]}</b>, <br/> <br/>Thank you for making an appointment{$with} on ".date("l, jS F Y",strtotime($_POST["appointment_date"])).".<br/><br/>"; 
        $template .="We will get back to you soon. Please do not come unless you receive a call and your appointment is confirmed.";
    }
    else
    {
        $template = "<b>Hello {$_POST["doctor_name"]}</b>, <br/><br/>You have a new appointment with {$_POST["name"]} ({$_POST["mobile"]}) on ".date("l, jS F Y",strtotime($_POST["appointment_date"])); 
    }
	$template .="<br/><br/><br/>Regards,<br/>Bombay Hospital Indore<br/><a href='https://www.bombayhospitalindore.com/' target='_blank'>https://www.bombayhospitalindore.com</a><br/>Phone-  0731-4771111";
    return $template;
}

function sendEmail($subject, $template)
{

    $payload = [
        "personalizations" => [(object)[
            "to" => [
				(object)["email" => "manishved@yahoo.com", "name" =>"Manish Ved"],
               /* (object)["email" => "allinone@cyberrafting.com", "name" =>"all in one"],*/
					 (object)["email" => "all@cyberrafting.com", "name" =>"all"],
                /*(object)["email" => "developer.deepakbansal@gmail.com", "name" =>"Deepak Bansal"]*/
			],
        ]],
        "subject" => $subject,
        "from" => (object)["email" => "appointments@bombayhospitalindore.com", "name" =>"Bombay Hospital Indore"],
        "content" => [(object)[
            "type" => "text/html",
            "value" => $template
        ]],
    ];

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode((object)$payload),
        CURLOPT_HTTPHEADER => [
            "authorization: Bearer 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",
            "content-type: application/json"
        ],
    ]);
    $response = curl_exec($curl);
    $err = ($response === false) ? curl_error($curl) : false;
    curl_close($curl);
    return !$err;
}


function sendEmailToUser($to,$subject, $body)
{
    if(empty($to["email"]))
        return false;
        
    $payload = [
        "personalizations" => [(object)[
            "to" => [(object)$to],
        ]],
        "subject" => $subject,
        "from" => (object)["email" => "appointments@bombayhospitalindore.com", "name" =>"Bombay Hospital Indore"],
        "content" => [(object)[
            "type" => "text/html",
            "value" => $body
        ]],
    ];

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode((object)$payload),
        CURLOPT_HTTPHEADER => [
            "authorization: Bearer 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",
            "content-type: application/json"
        ],
    ]);
    $response = curl_exec($curl);
    $err = ($response === false) ? curl_error($curl) : false;
    curl_close($curl);
    return !$err;
}
function pushToTxtlocal($mobile,$message){
    $apiKey = 'NzJjNjBhODZiNTM3MzY2ZWY2NjE3ZDljMjdhYmFlYjU=';
	$sender = 'BHTEDP';
	$message = rawurlencode($message);
    // Prepare data for POST request
	$data = 'apikey=' . $apiKey . '&numbers=' . $mobile . "&sender=" . $sender . "&message=" . $message;
 
	$curl = curl_init();
   //echo 'https://api.textlocal.in/send?'.$data;
	curl_setopt_array($curl, array(
	  CURLOPT_URL => 'https://api.textlocal.in/send?'.$data,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => '',
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => 'GET'
	));

	$response = curl_exec($curl);

	curl_close($curl);
	// Process your response here
	//echo $response;
}
function sendText($type,$mobile,$vars=[])
{
        $templates=[
            "doctor"=>148239,
            "user"=>148238,
        ];
    if(isset($templates[$type]) && !empty($mobile))
        pushToFast2sms($templates[$type],$mobile,urlencode(implode("|",$vars)));
}

function pushToFast2sms($messageId,$mobile,$vars){
         //echo "https://www.fast2sms.com/dev/bulkV2?authorization=ZF6j3VKWEHxpQz5BMiRnOlDdq78r0Nc2tueP1yAI4gswCL9XSavhFG7U9q3HjpXYco50dzibClNmOWuM&route=dlt&sender_id=CRRAFT&message={$messageId}&variables_values={$vars}&flash=0&numbers={$mobile}";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=ZF6j3VKWEHxpQz5BMiRnOlDdq78r0Nc2tueP1yAI4gswCL9XSavhFG7U9q3HjpXYco50dzibClNmOWuM&route=dlt&sender_id=CRRAFT&message={$messageId}&variables_values={$vars}&flash=0&numbers={$mobile}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            //echo "cURL Error #:" . $err;
        } else {
            //echo $response;
        }
    }

function getDBConnection()
{
    if ($_SERVER['SERVER_NAME'] !== "localhost"):
        /* old 
	$servername = "localhost";
        $username = "UserBombayHospital";
        $password = "Jqgq61%95";
        $dbname = "DbBombayHospital";*/
	/* new*/
		$servername = "134.209.152.98";
        $username = "bombayhospital_db";
        $password = "XZHmTJk5SImZ";
        $dbname = "bombayhospital_indore";
    else:
         $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bombayhospital_indore";
    endif;
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        return null;
    }
    return $conn;

}
