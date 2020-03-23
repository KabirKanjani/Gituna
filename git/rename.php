<?php
$filename='names.txt';
$rand=rand(10000,99999);

if(rename($filename,$rand.'.txt'))
{
    echo $filename.' has been renamed to '.$rand.'.txt';
}
else
{
    echo "Error Renaming";
}
?>