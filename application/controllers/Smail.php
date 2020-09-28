<?php
class smail extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
      
	  	include("phpmailer/class.phpmailer.php");
        $this->load->library('email');
		
        
    }
	public function contact_us()
      		{
      
 
        	//get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject =  'Contact Us - theresearchprocess.com';
            $message = $this->input->post('message');
            $ip = $this->input->post('ip');
			
			
     
            $phone = $this->input->post('phone');
	    $subject2 = 'Thank you for contacting us';
            
           $to_email = 'info@theresearchprocess.com';	 
           
           $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
            $userIp=$this->input->ip_address();
             $secret='6LeNOPMUAAAAAEkdwX_beaaxm6LKqn-xSHxEypVG';
             $ip = $_SERVER['REMOTE_ADDR'];
             $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$ip);

            $responseKeys = json_decode($response,true);
            
            if(intval($responseKeys["success"]) == 1){
           
           $timezone  = +05.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`date`,`time`,`cat`,`rid`) VALUES ('$from_email', '$phone', '', 'n/a', '$message', 'n/a', 'contact us', '$name', '$ip', '$dates', '$time','','')";

$this->db->query($sql); 
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one contact request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Source: &nbsp;</strong>Contact Us -theresearchprocess.com&nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>
<p style="font-size:12px;"><b>
Note: This email came from theresearchprocess.com</b><p/>
</body>
</html>';

 $body2 =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

				<p><br />Thank you for contacting us!<br /><br /><br />If the nature of your inquiry is urgent, please feel free to email us on the email mentioned below.</p>
				
<p><br />Best Regards,&nbsp;</p>
<p>Theresearchprocess.com,<br /> 
Mail: <a href="mailto:info@theresearchprocess.com">info@theresearchprocess.com</a><br /> 
<p style="font-size: 12px;"><strong> Note: This email came from theresearchprocess.com</strong></p>
<p>&nbsp;</p>
</body>
</html>';		  

   $return_val= $this->smtp_gmail_service($from_email, $to_email, $subject, $body, $subject2, $body2, $name);
   
   
        if($return_val){
			
			 redirect('thanks/contact-us');
		}else{
			
			 redirect('thanks/contact-us');
		}
   
   /*
   
   
            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    
                ->to($to_email)
                ->subject($subject)
                ->message($body);
              
                 if ($this->email->send())
            {
                $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
            redirect('thanks/contact-us');
          }
              
            

            exit;
            }
            else
            { 
 
              var_dump("Error");

             //redirect('thanks/contact-us');


          

            exit;
            } 
               */ 

            }else{
                
                 $this->session->set_flashdata('flashSuccess', 'Please verify that you are not a robot.');
  
                $this->session->set_flashdata('name', $name);
                $this->session->set_flashdata('email',  $from_email);
                 
                $this->session->set_flashdata('phone', $phone);
                $this->session->set_flashdata('message', $message);
                
                redirect('contact-us');
                    
            }

          
		}
		
		
		public function requestcustomization(){
			
			//get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject =  'Request Customization - Express-Journal.com';
            $message = $this->input->post('message');
            $ip = $this->input->post('ip');
			$newsid = $this->input->post('newsid');
			$phone = $this->input->post('phone');
			$product_id = $this->input->post('product_id');
			$Source_id = $this->input->post('Source_id');
            $product_url = $this->input->post('product_url');
			
			
			$pressurl = $this->input->post('pressurl');
			$pressurl=base_url($pressurl);
			
			$gmipr = $this->input->post('gmipr');
			$catname = $this->input->post('catname');
			
			if($gmipr=="YES"){
			
				
				$product_id =$product_id.'/GMI';
			} 
     
            $company = $this->input->post('company');
	    $subject2 = 'Thank you for contacting us';
            
           $to_email = 'sales@marketstudyreport.com';	 
		   
           $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
            $userIp=$this->input->ip_address();
             $secret='6LfIY5MUAAAAAGPzHesflL3MhNTZCoFODBiI5uIw';
             $ip = $_SERVER['REMOTE_ADDR'];
           /*  $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$ip);

            $responseKeys = json_decode($response,true);
            
            if(intval($responseKeys["success"]) == 1){*/
				
				if(empty(trim($name)) || empty(trim($from_email)) || empty(trim($phone))){
					 
					echo "Required field(Name, Email, Phone) cannot be blank.";
					exit;
				}
				$honpotfield=$this->input->post('yxdbxdfhgbdfdserta');
				if(!empty($honpotfield)){
					
					echo "Thank you for contacting us";
					exit;
				}
				
				$country='';
				
				$ip = $this->getVisIPAddr(); 
				
				$ip=explode(',',$ip);
				$ip=$ip[0];
				 
				if(!empty($ip)){
               
						//COUNTRY API START HERE    
					  $ip_data = $this->get_country_by_ip($ip);
					  
								$country = $ip_data;
						 
				}
				
				
				$message = $this->db->escape_str($message);
$name = $this->db->escape_str($name);
$from_email = $this->db->escape_str($from_email);
$company = $this->db->escape_str($company);
$phone = $this->db->escape_str($phone);
$country= $this->db->escape_str($country);
$product_url= $this->db->escape_str($product_url);
$product_id= $this->db->escape_str($product_id);
$catname= $this->db->escape_str($catname);
          
           $timezone  = +05.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`date`,`time`,`cat`,`rid`,`product_id`,`country`,`sub_cat_name`) VALUES ('$from_email', '$phone', '$company', 'n/a', '$message', '$product_url', 'Request customization', '$name', '$ip', '$dates', '$time','','$newsid','$product_id','$country','$catname')";

 
  
 
$this->db->query($sql); 
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

		<p><strong>Request For Customization:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one contact request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Company Name: &nbsp;</strong>'.$company.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Report URL: &nbsp;</strong>'.$product_url.'</p>
				<p><strong>Category Name: &nbsp;</strong>'.$catname.'</p>
				<p><strong>Source: &nbsp;</strong>Request For Customization</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>
				<p><strong>Country by IP: </strong>'.$country.'</p>
<p style="font-size:12px;"><b>
Note: This email came from Express-Journal.com, Powered by <a href="https://www.marketstudyreport.com/">Market Study Report, LLC</a></b><p/>
</body>
</html>';

 $body2 =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

				<p><br />Thank you for contacting us! If the nature of your inquiry is urgent, please feel free to email us on <a href="mailto:sales@marketstudyreport.com">sales@marketstudyreport.com</a><br /><br /><br />Please note that Express-Journal.com is powered by <a href="https://www.marketstudyreport.com/">Market Study Report, LLC</a> and one of our team members will get in touch with you soon to share the requested document and/or to answer your questions.</p>
				
<p><br />Best Regards,&nbsp;</p>
<p>Express-Journal.com, Powered by Market Study Report, LLC.<br /> <br /> <br /> 

For inquiries on a report: <a href="mailto:sales@marketstudyreport.com">sales@marketstudyreport.com</a><br /> 
For inquiries about content on Express-Journal.com:<a href="mailto:info@theresearchprocess.com ">info@theresearchprocess.com</a>
<p style="font-size: 12px;"><strong> Note: This email came from Express-Journal.com, Powered by <a href="https://www.marketstudyreport.com/">Market Study Report, LLC</a></strong></p>
<p>&nbsp;</p>
</body>
</html>';		  

   $return_val= $this->smtp_gmail_service_msr($from_email, $to_email, $subject, $body, $subject2, $body2, $name);
   
   
        
   
			if($return_val){
			
				 redirect('thanks/request-for-customization/'.$newsid);
			}else{
				
				 redirect('thanks/request-for-customization/'.$newsid);
			}
	   
   
           /* }else{
                
                 $this->session->set_flashdata('flashSuccess', 'Please verify that you are not a robot.');
  
                $this->session->set_flashdata('name', $name);
                $this->session->set_flashdata('email',  $from_email);
                 
                $this->session->set_flashdata('phone', $phone);
                $this->session->set_flashdata('message', $message);
                
                redirect('request-for-customization/'.$Source_id);
                    
            }*/

			
			
		}
		
		
		public function requestsample(){
			
			//get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject =  'Request Sample - Express-Journal.com';
            $message = $this->input->post('message');
            $ip = $this->input->post('ip');
			$newsid = $this->input->post('newsid');
            $product_id = $this->input->post('product_id');
			$Source_id = $this->input->post('Source_id');
            $product_url = $this->input->post('product_url');
			 
			$pressurl = $this->input->post('pressurl');
			$pressurl=base_url($pressurl);
			
			$gmipr = $this->input->post('gmipr');
			$catname = $this->input->post('catname');
			
			if($gmipr=="YES"){
				
				
				$product_id =$product_id.'/GMI';
			} 
			
            $company = $this->input->post('company');
	    $subject2 = 'Thank you for contacting us';
            
           $to_email = 'sales@marketstudyreport.com';	 
		   
		   $phone = $this->input->post('phone');
           
           $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
            $userIp=$this->input->ip_address();
             $secret='6LfIY5MUAAAAAGPzHesflL3MhNTZCoFODBiI5uIw';
             $ip = $_SERVER['REMOTE_ADDR'];
             /*$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$ip);

            $responseKeys = json_decode($response,true);
            
            if(intval($responseKeys["success"]) == 1){*/
			
			
				
				if(empty(trim($name)) || empty(trim($from_email)) || empty(trim($phone))){
					 
					echo "Required field(Name, Email, Phone) cannot be blank.";
					exit;
				}
				
				$honpotfield=$this->input->post('yxdbxdfhgbdfdserta');
				if(!empty($honpotfield)){
					
					echo "Thank you for contacting us";
					exit;
				}
				
				$country='';
				
				$ip = $this->getVisIPAddr(); 
				
				$ip=explode(',',$ip);
				$ip=$ip[0];
				 
				if(!empty($ip)){
               
						//COUNTRY API START HERE    
					  $ip_data = $this->get_country_by_ip($ip);
					  
								$country = $ip_data;
						 
				}
           
		   $message = $this->db->escape_str($message);
$name = $this->db->escape_str($name);
$from_email = $this->db->escape_str($from_email);
$company = $this->db->escape_str($company);
$phone = $this->db->escape_str($phone);
$country= $this->db->escape_str($country);
$product_url= $this->db->escape_str($product_url);
$product_id= $this->db->escape_str($product_id);
$catname= $this->db->escape_str($catname);
		   
		   
           $timezone  = +05.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`date`,`time`,`cat`,`rid`,`product_id`,`country`,`sub_cat_name`) VALUES ('$from_email', '$phone', '$company', 'n/a', '$message', '$product_url', 'Request Sample', '$name', '$ip', '$dates', '$time','','$newsid','$product_id','$country','$catname')";

$this->db->query($sql); 
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
<p><strong>Request for Sample:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one contact request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Company Name: &nbsp;</strong>'.$company.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Report URL: &nbsp;</strong>'.$product_url.'</p>
				<p><strong>Category Name: &nbsp;</strong>'.$catname.'</p>
				<p><strong>Source: &nbsp;</strong>Request Sample</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>
				<p><strong>Country by IP: </strong>'.$country.'</p>
<p style="font-size:12px;"><b>
Note: This email came from Express-Journal.com, Powered by <a href="https://www.marketstudyreport.com/">Market Study Report, LLC</a></b><p/>
</body>
</html>';

 $body2 =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

				<p><br />Thank you for contacting us! If the nature of your inquiry is urgent, please feel free to email us on <a href="mailto:sales@marketstudyreport.com">sales@marketstudyreport.com</a><br /><br /><br />Please note that Express-Journal.com is powered by <a href="https://www.marketstudyreport.com/">Market Study Report, LLC</a> and one of our team members will get in touch with you soon to share the requested document and/or to answer your questions.</p>
				
<p><br />Best Regards,&nbsp;</p>
<p>Express-Journal.com, Powered by Market Study Report, LLC.<br /> <br /> <br /> 

For inquiries on a report: <a href="mailto:sales@marketstudyreport.com">sales@marketstudyreport.com</a><br /> 
For inquiries about content on Express-Journal.com:<a href="mailto:info@theresearchprocess.com">info@theresearchprocess.com</a>
<p style="font-size: 12px;"><strong> Note: This email came from Express-Journal.com, Powered by <a href="https://www.marketstudyreport.com/">Market Study Report, LLC</a></strong></p>
<p>&nbsp;</p>
</body>
</html>';		  

   $return_val= $this->smtp_gmail_service_msr($from_email, $to_email, $subject, $body, $subject2, $body2, $name);
   
			   if($return_val){
						
						 redirect('thanks/request-sample/'.$newsid);
					}else{
						
						 redirect('thanks/request-sample/'.$newsid);
					}
			   
   
           /* }else{
                
                 $this->session->set_flashdata('flashSuccess', 'Please verify that you are not a robot.');
  
                $this->session->set_flashdata('name', $name);
                $this->session->set_flashdata('email',  $from_email);
                 
                $this->session->set_flashdata('phone', $phone);
                $this->session->set_flashdata('message', $message);
                
                redirect('request-sample/'.$Source_id);
                    
            }*/

			
		}
				
		
		public function destroy()
		{
			$this->session->sess_destroy();
		}





	//smtp email start here
		
		public function smtp_gmail_service($from_email, $to_email, $subject, $body, $subject2, $body2, $name){
        
          
        
$account="info@theresearchprocess.com";
$password="inf$%#2020zhdBH";
$to=$to_email;
$from=$from_email;
$from_name="theresearchprocess.com";
$msg=$body; // HTML message
$subject=$subject;

/*End Config*/

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.yandex.com";
$mail->SMTPAuth= true;
$mail->Port = 587; // Or 587
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'tls';
$mail->SetFrom($from_email, $name);
//$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->AddReplyTo($from_email);
$mail->Body = $msg;
$mail->addAddress($to);
if(!$mail->send()){
	
 echo "Mailer Error: " . $mail->ErrorInfo;
 
 //return  false;
}else{
$mail->ClearAllRecipients( );
$mail->ClearAddresses();
$mail->ClearReplyTos();
$mail->AddReplyTo($to_email);
$mail->SetFrom($to_email,'MSR Sales Team Via Express-Journal.com');
//$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject2;
$mail->Body = $body2;
$mail->addAddress($from_email);
$mail->send();
 return  true;
}

 //IP BY COUNTRY NEW API START HERE
	 
    



      
            }
			public function smtp_gmail_service_msr($from_email, $to_email, $subject, $body, $subject2, $body2, $name){
        
$account="sales@marketstudyreport.com";
$password="Marketstudyreport#456";
$to=$to_email;
$from=$from_email;
$from_name="theresearchprocess.com";
$msg=$body; // HTML message
$subject=$subject;

/*End Config*/

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 465; // Or 587
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->SetFrom($from_email, $name);
//$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->AddReplyTo($from_email);
$mail->Body = $msg;
$mail->addAddress($to);
if(!$mail->send()){
	
 echo "Mailer Error: " . $mail->ErrorInfo;
 
 //return  false;
}else{
$mail->ClearAllRecipients( );
$mail->ClearAddresses();
$mail->ClearReplyTos();
$mail->AddReplyTo($to_email);
$mail->SetFrom($to_email,'MSR Sales Team Via Express-Journal.com');
//$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject2;
$mail->Body = $body2;
$mail->addAddress($from_email);
$mail->send();
 return  true;
}

 //IP BY COUNTRY NEW API START HERE
	 
    



      
            }
			
			 public function get_country_by_ip($ip){
		    
		    
				$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip)); 
				 $cntryname = $ipdat->geoplugin_countryName;
				 return $cntryname;
		}  
		
		function getVisIpAddr() { 
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
        return $_SERVER['HTTP_CLIENT_IP']; 
    } 
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
        return $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } 
    else { 
        return $_SERVER['REMOTE_ADDR']; 
    } 
} 
}
     