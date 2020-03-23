<?php
if(isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year']))
{
    $day=htmlentities($_GET['day']);
    $date=htmlentities($_GET['date']);
    $year=htmlentities($_GET['year']);
    if(!empty($day)&&!empty($date)&&!empty($year))
    {
        echo $day." ".$date." ".$year." ";
    }
    else
    {
        echo "Fill out the entire form.";
    }
}
?>
<form action=getvariables.php method=GET>
Day:<br><input typ='text' name='day'><br>
Date:<br><input typ='text' name='date'><br>
Year:<br><input typ='text' name='year'><br><br>
    <input type="submit" value="Submit">
</form>
<!-- html entities so user cant change code with html code.-->
