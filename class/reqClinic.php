<?php
include_once("clinicTemplate.php");
$clinicTemplate = new clinicTemplate();

$action = $_POST["action"];

switch($action)
{
	case "aboutUs":
		$code = $clinicTemplate->aboutUs();
		echo "aboutUs # " . $code;
	break;

	case "services":
	break;

	case "skinCare":	
	break;

	case "contact":
	break;


}

?>