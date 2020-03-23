<?php

$name=$_FILES['file']['name'];

$size=$_FILES['file']['size'];
$max=2097152;

$type=$_FILES['file']['type'];

$tmpname=$_FILES['file']['tmp_name'];

$error=$_FILES['file']['error'];

echo $extension=strtolower(substr($name,strpos($name,'.')+1));

            if(isset($name)&&!empty($name))
       /*     {
            echo $name."<br>";                
            echo $size."<br>";
            echo $type."<br>";
            echo $tmpname."<br>";                            
            $loc="files/";
            }*/
   if(($extension=='jpg'||$extension=='jpeg')&&$type="image/jpeg"&&$type="image/jpeg"&&$size<=$max)
        /*         {
                    echo "Done";
                }*/
   
/*                    if(move_uploaded_file($tmpname,$loc.$name))
                {
                    echo "Files Moved";
                }
                else
                {
                    echo "Sorry Mate";
                }*/            

?>
<form action="fileupload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <input type="submit" value="submit">
</form>