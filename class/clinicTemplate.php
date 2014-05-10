<?php

class clinicTemplate{

	function header()
	{
		$code = '<!DOCTYPE html>';
		$code .= '<html>';
			$code .= '<head>';
				$code .= '<title>Clinic</title>';
    			$code .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
		    	$code .= '<script src="../js/jquery-1.11.1.min.js"></script>';
		    	$code .= '<link rel="stylesheet" href="../css/clinicCss.css" type="text/css" />';
			$code .= '</head>';
			$code .= '<body>';
				$code .= '<header><div id="headerDiv" class="headerClass"></div></header>';
		echo $code;
	}

	function footer()
	{
				$code = '<div id="footerDiv" class="footerClass"></div>';
			$code  .= '</body>';
		$code .= '</html>';

		echo $code;
	}

}
?>