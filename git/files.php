<?php
$handle=fopen('names.txt','w');//w-writing r-reading a-append
fwrite($handle,'Kabir'."\n");
fwrite($handle,'Kanjani');
fclose($handle);
echo "Written";
?>