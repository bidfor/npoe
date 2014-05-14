<?php

class clinicTemplate{

	function clinicTemplate($language){
		if($language == "english"){
			include_once("lang_en.php");
			$this->lang = $lang;
		}
	}

	function header($data)
	{
		$code = '<!DOCTYPE html>';
		$code .= '<html>';
			$code .= '<head>';
				$code .= '<title>Clinic</title>';
    			$code .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
		    	$code .= '<script src="js/jquery-1.11.1.min.js"></script>';
		    	$code .= '<script src="js/clinic.js" defer></script>';
		    	$code .= '<script src="js/jquery.fs.shifter.js"></script>';
				$code .= '<link href="css/jquery.fs.shifter.css" rel="stylesheet">';
		    	$code .= '<link rel="stylesheet" href="css/clinicCss.css" type="text/css"/>';
			$code .= '</head>';
			$code .= '<body>';
				$code .= '<div id="headerFlowerDiv" class="headerFlowerClass"></div>';
				$code .= '<div id="headerDiv" class="headerClass">';
					$code .= '<ul class="menuClass">';
					$code .= $this->menuItem($data);
					$code .= '</ul>';
				$code .= '</div>';
					$code .= '<div id="loadingDiv"></div>';
					$code .= '<div id="contentDiv" class="contentClass">';
		echo $code;
	}

	function menuItem($data){
		$lang = $this->lang;
		switch($data)
		{
			case "index":
				$code  = '<li id="contactBtn" class="">'.$lang["10005"].'</li>';
				$code .= '<li id="aboutUsBtn" class="">'.$lang["10004"].'</li>';
				$code .= '<li id="skinCareBtn" class="">'.$lang["10003"].'</li>';
				$code .= '<li id="servicesBtn" class="">'.$lang["10002"].'</li>';
				$code .= '<li id="homeBtn" class="menuClassClicked">'.$lang["10001"].'</li>';
			break;
			case "aboutUs":
				$code  = '<li id="contactBtn" class="">'.$lang["10005"].'</li>';
				$code .= '<li id="aboutUsBtn" class="menuClassClicked">'.$lang["10004"].'</li>';
				$code .= '<li id="skinCareBtn" class="">'.$lang["10003"].'</li>';
				$code .= '<li id="servicesBtn" class="">'.$lang["10002"].'</li>';
				$code .= '<li id="homeBtn" class="">'.$lang["10001"].'</li>';
			break;
			case "skinCare":
				$code  = '<li id="contactBtn" class="">'.$lang["10005"].'</li>';
				$code .= '<li id="aboutUsBtn" class="">'.$lang["10004"].'</li>';
				$code .= '<li id="skinCareBtn" class="menuClassClicked">'.$lang["10003"].'</li>';
				$code .= '<li id="servicesBtn" class="">S'.$lang["10002"].'/li>';
				$code .= '<li id="homeBtn" class="">'.$lang["10001"].'</li>';
			break;
			case "services":
				$code  = '<li id="contactBtn" class="">'.$lang["10005"].'</li>';
				$code .= '<li id="aboutUsBtn" class="">'.$lang["10004"].'</li>';
				$code .= '<li id="skinCareBtn" class="">'.$lang["10003"].'</li>';
				$code .= '<li id="servicesBtn" class="menuClassClicked">'.$lang["10002"].'</li>';
				$code .= '<li id="homeBtn" class="">'.$lang["10001"].'</li>';
			break;
			case "contact":
				$code  = '<li id="contactBtn" class="menuClassClicked">'.$lang["10005"].'</li>';
				$code .= '<li id="aboutUsBtn" class="">'.$lang["10004"].'</li>';
				$code .= '<li id="skinCareBtn" class="">'.$lang["10003"].'</li>';
				$code .= '<li id="servicesBtn" class="">'.$lang["10002"].'</li>';
				$code .= '<li id="homeBtn" class="">'.$lang["10001"].'</li>';
			break;
		}
		return $code;
	}

	function footer()
	{
		$lang = $this->lang;				
					$code = '</div>'; // content Div close
				$code .= '<div id="footerDiv" class="footerClass">';
					$code .= '<ul>';
						$code .= '<li style="margin-left:5%">'.$lang["10006"].'</li>';
						$code .= '<li>|</li>';
						$code .= '<li>Privacy policy</li>';
						$code .= '<li style="margin-left:45%">'.$lang["10007"].'</li>';
					$code .= '</ul>';
				$code .= '</div>';
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
			    	$code .= ' <div class="slide3">';
					       	$code .= ' <img src="image/3.jpg"/>';
			    	$code .= '</div>';/*
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

	function subFooter(){
		$lang = $this->lang;
		$code  = '<div id="subFooterDiv" class="subFooterClass">';
			$code .= '<div id="bannerDiv" class="bannerClass">';
				$code .= '<p>'.$lang["10008"].'</p>';
			$code .= '</div>';
			$code .= '<table height="400px" width="100%"><tr>';
				$code .= '<td style="width:30%;"><div id="subFooterContentDiv1" class="subFooterContentClass">Map</div></td>';
				$code .= '<td style="width:30%;"><div id="subFooterContentDiv2" class="subFooterContentClass">Subscribe</div></td>';
				$code .= '<td style="width:30%;"><div id="subFooterContentDiv3" class="subFooterContentClass">Contact Number 123 123 1123</div></td>';
			$code .= '</tr></table>';
		$code .= '</div>';
		echo $code;
	}

	function services(){
		$lang = $this->lang;
		$code  = '<div style="display:table-cell;vertical-alignment:middle;">';
			$code .= '<p class="servicesPClass">Menu</p>';
			$code .= '<ul id="nav">';

				$code .= '<li class="mainLiClass" style="border-top:2px solid #d6cdbd;">';
				$code .= '<a href="#"><span style="visibility:hidden;">ha</span> Face <span style="margin-left:134px;">+</span></a>';
					$code .= '<ul class="subUlClass">';
						$code .= '<li><a href="#">-Filler</a></li>';
						$code .= '<li><a href="#">-Botox</a></li>';
					$code .= '</ul>';
				$code .= '</li>';

				$code .= '<li class="mainLiClass">';
				$code .= '<a href="#"><span style="visibility:hidden;">ha</span> Arms <span style="margin-left:130px;">+</span></a>';
					$code .= '<ul class="subUlClass">';
						$code .= '<li><a href="#">-haha</a></li>';
						$code .= '<li><a href="#">-haha</a></li>';
					$code .= '</ul>';
				$code .= '</li>';

				$code .= '<li class="mainLiClass">';
				$code .= '<a href="#"><span style="visibility:hidden;">ha</span> Tight <span style="margin-left:132px;">+</span></a>';
					$code .= '<ul class="subUlClass">';
						$code .= '<li><a href="#">-1</a></li>';
						$code .= '<li><a href="#">-2</a></li>';
						$code .= '<li><a href="#">-3</a></li>';
						$code .= '<li><a href="#">-4</a></li>';
					$code .= '</ul>';
				$code .= '</li>';

				$code .= '<li class="mainLiClass">';
				$code .= '<a href="#"><span style="visibility:hidden;">ha</span> Gugu <span style="margin-left:131px;">+</span></a>';
					$code .= '<ul class="subUlClass">';
						$code .= '<li><a href="#">-Expand gugu</a></li>';
						$code .= '<li><a href="#">-Steel gugu</a></li>';
						$code .= '<li><a href="#">-Wooden gugu</a></li>';
					$code .= '</ul>';
				$code .= '</li>';

			$code .= '</ul>';
		$code .= '</div>';
		echo $code;
	}
}
?>