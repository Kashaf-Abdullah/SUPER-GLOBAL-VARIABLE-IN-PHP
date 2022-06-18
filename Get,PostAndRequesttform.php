<?php

//whatever data will send in  file will become an array so how now we are going to get this array
echo "<pre>";
print_r($_GET);//will display array  

echo "</pre>";




echo $_GET['fname'];//will display only fname
//$_REQUEST use with GET and POST
echo $_REQUEST['fname'];

?>