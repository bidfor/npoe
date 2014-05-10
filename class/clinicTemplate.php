<?php

class clinicTemplate{

	function header()
	{
		$code = '<!DOCTYPE html>';
		$code .= '<html>';
			$code .= '<head>';
				$code .= '<title>Clinic</title>';
    			$code .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
		    	$code .= '<script src="js/jquery-1.11.1.min.js"></script>';
		    	$code .= '<link rel="stylesheet" href="css/clinicCss.css" type="text/css"/>';
			$code .= '</head>';
			$code .= '<body>';
				$code .= '<div id="headerFlowerDiv" class="headerFlowerClass"></div>';
				$code .= '<div id="headerDiv" class="headerClass"></div>';
					$code .= '<div id="contentDiv" class="contentClass">';
		echo $code;
	}

	function footer()
	{				
					$code = '</div>'; // content Div close
				$code .= '<div id="footerDiv" class="footerClass"></div>';
			$code  .= '</body>';
		$code .= '</html>';

		echo $code;
	}

	function slideShow(){

		$code = '<script src="js/lean-slider.js"></script>';
		$code .= '<link rel="stylesheet" href="css/lean-slider.css" type="text/css"/>';
			$code .= '<div id="slider-wrapper" class="slider-wrapper">';
				$code .= '<div id="slider">';
			   		$code .= ' <div class="slide1">';
					        $code.= '<img src="image/1.jpg" alt="" />';
			   		$code .= ' </div>';
			   		$code .= ' <div class="slide2">';
					       	$code .= ' <img src="image/2.jpg" alt="" />';
			    	$code .= '</div>';
			    	$code .= ' <div class="slide3">';
					       	$code .= ' <img src="image/3.jpg" alt="" />';
			    	$code .= '</div>';
			    	$code .= ' <div class="slide4">';
					       	$code .= ' <img src="image/4.jpg" alt="" />';
			    	$code .= '</div>';
			    $code .= '</div>';
			    $code .= '<div id="slider-direction-nav"></div>';
			    $code .= '<div id="slider-control-nav"></div>';
			$code .= '</div>';
			

		echo $code;
	}

}
?>