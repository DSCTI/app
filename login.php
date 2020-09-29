<?php

/*** PREVENT THE PAGE FROM BEING CACHED BY THE WEB BROWSER ***/
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

require_once("wp-authenticate.php");

/*** IF THE FORM HAS BEEN SUBMITTED, ATTEMPT AUTHENTICATION ***/
if(count($_POST) > 0)
   authenticate();

