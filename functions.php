<?php

    function myfunc()
    {
        echo "Kabir Kanjani <br>";
    }
    function add($num1,$num2)
    {
        echo $num1+$num2;
        echo "<br>";
    }
    function radd($num1,$num2)
    {
        return $num1+$num2;
    }
myfunc();
add(19,29);
echo radd(20,30);
?>