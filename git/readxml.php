
<?php
$xml=simplexml_load_file('book.xml');
foreach($xml->book as $book)
//echo $book->author." wrote ".$book->title."<br>";
?>
<table border=2 cellpadding=30 cellspacing=4 align=center>
            <?php foreach($xml->book as $book)
                echo "<tr><td align='center'>".$book->author."</td><td align='center'>".$book->title."</td></tr>";
            ?>
</table>