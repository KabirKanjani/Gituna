<?php
if(isset($_GET['in'])&&!empty($_GET['in']))
{
    $handle=fopen("names.txt",'a');
    fwrite($handle,"\n".$_GET['in']);    
    $readin=file('names.txt');
    $readinCount=count($readin);
    echo $readinCount."<br>";
    foreach($readin as $name)
    {
        echo $name." , ";
    }
    fclose($handle);
}
?>
<form action='readfile.php'  method=GET>
<input type=text name=in>
    <input type=submit value="Submit">
</form>
