<?php
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");
$to="andrewkabir@gmail.com";
$subject="This is Php ";
$body="Again";
$headers="From:illusionbreaker9@gmail.com";
if(mail($to,$subject,$body,$headers))
{
    echo "Done";
}
?>