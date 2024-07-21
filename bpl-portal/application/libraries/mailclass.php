<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Mailclass {

    public function sendmail($to='',$subject='',$message='')
    {

    	 	$url = 'http://www.traxpense.com/sendmail.ashx';
    		
            $data = array(
                			'key' => 'sendmail', 
                			'fmail' => 'noreply@bombayhospital.com', 
                			'tmail' => $to , 
                			'sub' => $subject , 
                			'body' => $message, 
                			'atc' => ''
        			    );

            $options = array(
             					'http' => array(
						            			'header' => "Content-type: application/x-www-form-urlencoded\r\n",
						            			'method' => 'POST',
						            			'content'=> http_build_query($data)
				            				)	
            				);
	    
            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
              
    }

    public function replymail($to='',$subject='',$message='')
    {
    	    $url = 'http://www.traxpense.com/sendmail.ashx';
            $data = array(
					         	'key'  => 'sendmail', 
					         	'fmail'=> 'noreply@bombayhospital.com' , 
					         	'tmail'=> $to, 
					         	'sub'  => $subject,
					         	'body' => $message, 
					         	'atc' => ''
         			    ) ;
             $options = array(
                            'http' => array(
				                            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				                            'method' => 'POST',
				                            'content' => http_build_query($data),
				                        ),
            			);
	    
            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
    }

    public function attachedmail($to='',$subject='',$message='',$attachment='')
    {
    		$url  = 'http://www.traxpense.com/sendmail.ashx';
        	$data = array(
			        	     'key' => 'sendmail', 
			        	     'fmail' => 'noreply@bombayhospital.com', 
			        	     'tmail' => $to, 
			        	     'sub' => $subject, 
			        	     'body' => $message, 
			        	     'atc' => $attachment
	        	     	) ;
            $options = array(
					            'http' => array(
                					            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                					            'method' => 'POST',
                					            'content' => http_build_query($data),
                					            ),
            			);
        
            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
    }

    public function sendMailWithBcc($to='',$subject='',$message='')
    {

        $url        = 'http://www.traxpense.com/sendmail.ashx';
        $data_mail  = array(
                            'key'   => 'sendmailbcc', 
                            'fmail' => 'noreply@bombayhospital.com', 
                            'tmail' => $to, 
                            'sub'   => $subject , 
                            'body'  => $message , 
                            'cc'    => 'ritesh@infocratsweb.com',
                            'atc'   => '', 
                        );

        $options    = array(
                            'http' => array(
                                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                                    'method' => 'POST',
                                    'content' => http_build_query($data_mail),
                                ),
                        );
        $context= stream_context_create($options);
        $result = file_get_contents($url, false, $context);
       

    }



}

/* End of file Someclass.php */