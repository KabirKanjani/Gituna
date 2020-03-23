<?php
$filename="names.txt";
$handle=fopen($filename,'r');
//echo fread($handle,21)."<br>";//specific characters
$readin= fread($handle,filesize($filename));//ALL characters
$names_array=explode("\n",$readin);
echo implode(":",$names_array)."<BR>";
foreach($names_array as $name)
{
    echo $name.'<br>';
}
?>