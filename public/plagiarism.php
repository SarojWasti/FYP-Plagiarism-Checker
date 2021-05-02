<?php

if(isset($_POST['plagText']))
{
    $data=$_POST['plagText'];
    $fp = fopen('plagiarism.txt', 'a');
    fwrite($fp, $data);
    fclose($fp);
}

?>