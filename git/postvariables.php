<?php
if(isset($_POST['un'])&&isset($_POST['pwd']))
{
    $un=$_POST['un'];
    $pwd=$_POST['pwd'];    
    if(!empty($un)&&!empty($pwd))
    {
        echo $un."<br>".$pwd." ";
    }
    else
    {
        echo "Fill out the entire form.";
    }
}
?>
<form action=postvariables.php method=POST>
Username:<br><input typ='text' name='un'><br>
Password:<br><input typ='password' name='pwd'><br><br>
    <input type="submit" value="Submit">
</form>