<?php

$food=array('Healthy'=>array('Salad','Vegetables',"Pasta"),
            'UnHealthy'=>array('Pizza','IceCream',"PopCorn"));
    foreach($food as $element=>$item)
    {
        echo "<strong>".$element."</strong><br>";
        foreach($item as $it)
        {
        echo $it."<br>";
        }
    }
?>