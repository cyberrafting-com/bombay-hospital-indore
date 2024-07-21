<?php
session_start();
function pushToTxtlocal($mobile,$otp){
    $apiKey = 'NzJjNjBhODZiNTM3MzY2ZWY2NjE3ZDljMjdhYmFlYjU=';
	$sender = 'BHTEDP';
	$message = rawurlencode("OTP is {$otp} for Bombay Hospital Online Appointment-BH");
    // Prepare data for POST request
	$data = 'apikey=' . $apiKey . '&numbers=' . $mobile . "&sender=" . $sender . "&message=" . $message;
 
	$curl = curl_init();

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
    function share($mobile,$otp){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=ZF6j3VKWEHxpQz5BMiRnOlDdq78r0Nc2tueP1yAI4gswCL9XSavhFG7U9q3HjpXYco50dzibClNmOWuM&route=dlt&sender_id=CRRAFT&message=144466&variables_values={$otp}&flash=0&numbers={$mobile}",
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
    function getTemplate($name,$otp)
{
    return "Dear $name,<br/><br/>$otp is your OTP to verify your email.<br/><br/>Have a Great Day!<br/><br/>Regards<br/>";
    
}
    function sendEmail($email,$name,$otp)
{

    $payload = [
        "personalizations" => [(object)[
            "to" => [(object)["email" => "$email", "name" =>"$name"]],
        ]],
        "subject" => "OTP to verify Email for your appointment",
         "from" => (object)["email" => "appointments@bombayhospitalindore.com", "name" =>"Bombay Hospital Indore"],
        "content" => [(object)[
            "type" => "text/html",
            "value" => getTemplate($name,$otp)
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

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST["mobile"]) && strlen($_POST["mobile"])==10){
            $otp=mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9);
            //share($_POST["mobile"],$otp);
			pushToTxtlocal($_POST["mobile"],$otp);
            sendEmail($_POST["email"],ucwords(strtolower($_POST["name"])),$otp);
            $_SESSION["OTP_".$_POST["mobile"]]=$otp;
            echo json_encode(["status"=>true,"message"=>"We have shared the OTP on your mobile number ({$_POST["mobile"]})."]);
            exit();
        }
        echo json_encode(["status"=>false,"message"=>"Invalid mobile number."]);
        exit();
    }
    echo json_encode(["status"=>false,"message"=>"Method not allowed."]);
    exit();
