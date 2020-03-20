<?php

//Arrays
 $food=array("Pasta","Pizza","Salad");
echo $food[2];
print_r($food);

//Associative Array
$food=array("Pasta"=>300,"Pizza"=>350,"Salad"=>390);
echo "<br>".$food["Pasta"]."<br>";
print_r($food);

//MultiDimensional Array!
$food=array('Healthy'=>array('Salad','Vegetables',"Pasta"),
            'UnHealthy'=>array('Pizza','IceCream'));

echo "<br>".$food['UnHealthy'][0]."<br>";
print_r($food);


?>