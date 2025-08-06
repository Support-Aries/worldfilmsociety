     <?php
   include("PHPMailer/class.phpmailer.php");
   include("PHPMailer/class.smtp.php");
   include 'dbcon.php';
//  if(isset($_POST['sub']))
//{
   $error = "";
                    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
                        $secret = '6Ldxe20UAAAAAFMORF6WO4ehTYDklXgm9mqZulDW';
                    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
                    $responseData = json_decode($verifyResponse);
                    if ($responseData->success) {
                        exit;

      if(isset($_POST['submit'])&& $_POST['submit']!="")
          {
            exit;
                $name = ucwords(trim($_POST['name']));
		$enq= trim($_POST['message']);
                $num= trim($_POST['number']);
		$email= trim($_POST['email']);
                $regdate=date("d-m-Y");  
	  $sql = "INSERT INTO contact (name,message,number,email,date) VALUES ('$name','$enq','$num','$email','$regdate')";    

$succ=mysqli_query($conn, $sql);

     
     if($succ)
         {
		 $sendmail = sendmail($name,$enq,$email,$num);  
                 echo"<script>window.location='contact.php?status=1'</script>";
         }
     
     }
    
}
 else {
   $error .= "Robot verification failed, please try again. <br />";
            echo"<script>window.location='contact.php'</script>"; 
   
        }
                    
                    }
                    else{
                       
                        $error .= "Please click on the reCAPTCHA box. <br />"; 
                           echo"<script>window.location='contact.php?status=0'</script>";
                    }
// }

function sendmail($name,$enq,$email,$num) {

     $subject = "Enquiry from WFS Website";

    
    $body='<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Enquiry from IMC Website</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    

    <body style="background-color: #F2F3F5;">

        <div style="background-color: #F2F3F5;">
            <div style="font-family: Arial, Helvetica, sans-serif;max-width: 650px;display: block;margin: 0 auto;margin-bottom: 50px;border-top: 2px dashed #ccc;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                <div style="background: #fff;">
                    <img src="https://worldfilmsociety.org/new/assets/icons/logo.png"  alt="" style="height: 85px;margin: 0 auto;display: block;padding: 6px 0px;">
                </div>
                <div style="background-color: white;padding: 5px 30px 30px 30px;">
                    
                    <p style="margin-bottom: 20px;">
                        Hi Admin,
                    </p>
                    <p style="line-height: 25px;text-align: justify;">
              An Enquiry has been submitted via website under WFS. Please find the details:
                    </p>

                                                                                                                                                            
                    <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Name : '.$name.'</h3>
                    <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Email : <a href="mailto:'.$email.'">'.$email.'</a></h3>
                    <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Phone Number : '.$num.'</h3>
                     <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 24px;">Message : '.$enq.'</h3>

                    </p>

                    
                </div>
                <div style="background-color: #ED1A3D;padding: 15px;">
                    <p style="margin: 0px;font-size: 14px;color: white;opacity: 1;text-align: center;">Thank you...!</p>
                </div>
            </div>
        </div>
    </body>

</html>';
    //**mail starts
   $mail = new PHPMailer(true);
    
    
  //Tell PHPMailer to use SMTP
    $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
//Set the hostname of the mail server
    $mail->Host = "mail.worldfilmsociety.org";
//Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 25;
//Whether to use SMTP authentication
    //$mail->SMTPSecure = 'ssl';

    $mail->SMTPAuth = true;
//Username to use for SMTP authentication
    $mail->Username = "esol@worldfilmsociety.org";
//Password to use for SMTP authentication
    $mail->Password = "_LQu4D=ubaAu";
//Set who the message is to be sent from
    $from = "esol@worldfilmsociety.org";


//  $mail->addBCC("support@ariesesolutions.com", "Enquiry from IMC Website");
//  $mail->addAddress("rajeena.biztv@gmail.com");
   $mail->addAddress("info@worldfilmsociety.org");

      
      $mail->setFrom($from, 'Enquiry from WFS Website');

    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->IsHTML(true);
    $mail->send();
    
}
                   