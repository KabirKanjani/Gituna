<?php
$filename='file.txt';
if(unlink($filename))
{
    echo 'File <Strong>'.$filename.'</strong> has been deleted';
}
else
{
    echo "file doesn't exists";
}
?>