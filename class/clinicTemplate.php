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
		    	$code .= '<script src="js/clinic.js" defer></script>';
		    	$code .= '<link rel="stylesheet" href="css/clinicCss.css" type="text/css"/>';
			$code .= '</head>';
			$code .= '<body>';
				$code .= '<div id="headerFlowerDiv" class="headerFlowerClass"></div>';
				$code .= '<div id="headerDiv" class="headerClass">';
					$code .= '<ul class="menuClass">';
						$code .= '<li id="aboutUsBtn">ABOUT</li>';
						$code .= '<li id="servicesBtn">SERVICES</li>';
						$code .= '<li id="skinCareBtn">SKIN CARE</li>';
						$code .= '<li id="contactBtn">CONTACT</li>';
					$code .= '</ul>';
				$code .= '</div>';
					$code .= '<div id="loadingDiv"></div>';
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
		
		$code  = '<script src="js/lean-slider.js"></script>';
		$code .= '<link rel="stylesheet" href="css/lean-slider.css" type="text/css"/>';
		$code .= '<div style="height:80%;width:100%; position:relative;">';
			$code .= '<div id="slider-wrapper" class="slider-wrapper">';
				$code .= '<div id="slider">';
			   		$code .= ' <div class="slide1">';
					        $code .= '<img src="image/1.jpg"/>';
			   		$code .= ' </div>';
			   		$code .= ' <div class="slide2">';
					       	$code .= '<img src="image/2.jpg"/>';
			    	$code .= '</div>';
			    	/*$code .= ' <div class="slide3">';
					       	$code .= ' <img src="image/3.jpg"/>';
			    	$code .= '</div>';
			    	$code .= ' <div class="slide4">';
					       	$code .= ' <img src="image/4.jpg"/>';
			    	$code .= '</div>';*/
			    $code .= '</div>';
			    $code .= '<div id="slider-direction-nav"></div>';
			    $code .= '<div id="slider-control-nav"></div>';
			$code .= '</div>';
		$code .= '</div>';
			

		echo $code;
	}

	function aboutUs(){
		$code = '<div style="display:inline-block;"><img src="http://www.pilgrimshospices.org/wp-content/uploads/artworks-000050032335-le33za-original.jpg" style="height:500px;width:1000px; display:inline-block;"/><p style="font-size:30px; display:inline-block;">Fuck Jason o0o0o0o!</p> </div>';
		echo $code;
	}

}
?>