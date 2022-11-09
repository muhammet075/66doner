<?php


//varible setting
 $name = $_POST['name'];
 $email = $_POST['email'];
 $textarea = $_POST['textarea'];
 $subject = "66Doner.nl Contactformulier";
 $mailheader = "From:".$name."<".$email.">\r\n";
    
 $to ="muhammet075@icloud.com";  // change receiving email id

 $content = "Name : ". $name. "\r\nContact email : ". $email. "\r\n \r\nMessage : \r\n \r\n".$textarea ; // name [break] email [break] message



// check input fields
if ( empty($name)|| empty($email)|| empty($textarea))
{
echo"<script type='text/javascript'>alert('Vul alle velden correct in.');
    window.history.go(-1);
    </script>";
}
else
{ mail($to,$subject,$content,$mailheader);

    echo"<script type='text/javascript'>
    
    alert('Uw bericht is met succes verstuurd. ');
    location.href = '/succes';

    </script>";
}

?>
