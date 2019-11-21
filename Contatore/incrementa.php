<?php
//mockup
 session_start();
 $_SESSION["idUtente"]=$_SESSION["idUtente"]+1;
 echo $_SESSION["idUtente"];

?>