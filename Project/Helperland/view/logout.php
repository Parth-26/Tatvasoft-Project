<?php
include('controller/config.php');
$_SESSION['loggedin']=0;
header('Location: http://localhost/Tatvasoft-Project/Project/Helperland/?controller=User&function=home');
//echo $_SESSION['loggedin'];
?>