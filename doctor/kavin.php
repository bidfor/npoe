<?
	//$_SERVER["DOCUMENT_ROOT"]="/Users/karchun/Sites/npoe";
	include_once($_SERVER["DOCUMENT_ROOT"]."/class/clinicTemplate.php");
	$clinicTemplate = new clinicTemplate();
?>

<? 	
	$clinicTemplate->header("aboutUs");
	$clinicTemplate->doctors('kavin');
 	$clinicTemplate->footer();

?>