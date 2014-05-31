<?php
	

	switch($_POST["action"]){

		case "switchLang":
			$expire=time()+ 10 * 365 * 24 * 60 * 60;
			//if($_COOKIE["revivalClinicLanguage"] == "english")
				setcookie("revivalClinicLanguage", "chinese", $expire);
			//else if($_COOKIE["revivalClinicLanguage"] == "chinese")
			//	setcookie("revivalClinicLanguage", "english", $expire);
			echo $_COOKIE["revivalClinicLanguage"];
		break;

	}

?>