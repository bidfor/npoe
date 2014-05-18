<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/class/config.php");
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
		    	$code .= '<link rel="stylesheet" href="css/clinicCss.css" type="text/css"/>';
			$code .= '</head>';
			$code .= '<body>';
				$code .= '<div id="backGroundDiv" class="backGroundClass"></div>';
				$code .= '<div id="logoDiv" class="logoClass"></div>';
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
						$code .= '<li style="margin-left:35%">'.$lang["10007"].'</li>';
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
		
		$code .= '<div id="aboutUsDiv" class="aboutUsClass">';
					$code .= '<div style="font-size:28px; width:90%; text-align:left; margin:auto; border-bottom:2px dotted #d6cdbd;">About Us</div>';
					$code .= '<table border="0" style="width:90%;text-align:left;margin:auto;">';
						$code .= '<tr>';
							$code .= '<td>';
								$code .= '<ul class="aboutUsListClass">';

									$code .= '<li class="aboutUsMainLiClass" style="border-top:2px solid #d6cdbd;">';
									$code .= '<div id="tempoHoverDiv" class="tempoHoverClass">a</div>';
									$code .= '<a href="#"><span style="visibility:hidden;">ha</span> The Doctors <span>+</span></a>';
									$code .= '</li>';

									$code .= '<li class="aboutUsMainLiClass">';
									$code .= '<div class="tempoHoverClass">a</div>';
									$code .= '<a href="#"><span style="visibility:hidden;">ha</span> The Team <span>+</span></a>';
									$code .= '</li>';

									$code .= '<li class="aboutUsMainLiClass">';
									$code .= '<div class="tempoHoverClass">a</div>';
									$code .= '<a href="#"><span style="visibility:hidden;">ha</span> The Clinic <span>+</span></a>';
									$code .= '</li>';

								$code .= '</ul>';
								$code .='</td>';
							$code .= '</tr>';
					$code .= '</table>';
						//$code .= '<img id="doctorImg" style="max-width:1232px; max-height:560px" height="392px" width="862px" src="../image/doctors.jpg"/>';
						//$code .= '<div>';
							//$code .= 'Dr. Kavin(essss)<br>';
							//$code .= 'Dr. Lynda(dero)';
						//$code .= '</div>';
					$code .= '<form method="post" action="">';
						$code .= '<fieldset>';
				      	$code .= '<input type="text" name="q" />';
				      	$code .= '<input type="submit" value="Search" />';
					   	$code .= '</fieldset>';
					$code .= '</form>';
		$code .= '</div>';
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

				$code .= '<li class="mainLiClass" style="border-top:2px solid #d6cdbd;">';
				$code .= '<a href="#"><span style="visibility:hidden;">ha</span> Arms <span style="margin-left:130px;">+</span></a>';
					$code .= '<ul class="subUlClass">';
						$code .= '<li><a href="#">-1</a></li>';
						$code .= '<li><a href="#">-2</a></li>';
					$code .= '</ul>';
				$code .= '</li>';

				$code .= '<li class="mainLiClass" style="border-top:2px solid #d6cdbd; border-bottom:2px solid #d6cdbd;">';
				$code .= '<a href="#"><span style="visibility:hidden;">ha</span> Tight <span style="margin-left:132px;">+</span></a>';
					$code .= '<ul class="subUlClass">';
						$code .= '<li><a href="#">-1</a></li>';
						$code .= '<li><a href="#">-2</a></li>';
						$code .= '<li><a href="#">-3</a></li>';
						$code .= '<li><a href="#">-4</a></li>';
					$code .= '</ul>';
				$code .= '</li>';

			$code .= '</ul>';
		$code .= '</div>';
		echo $code;
	}

	function contact(){
		global $sys;
		$lang =$this->lang;
		$code  = '<div style="background-color:white;height:500px;">';
					$code .='<style type="text/css">';
			      $code .='html { height: 100% }';
			      $code .='body { height: 100%; margin: 0; padding: 0 }';
			      $code .='#map-canvas { height: 50%; width: 50% }';
			    $code .='</style>';
			    $code .='<script type="text/javascript"';
			      $code .='src="https://maps.googleapis.com/maps/api/js?key='.$sys["googleAPI"].'&sensor=TRUE">';
			    $code .='</script>';
			    $code .='<script type="text/javascript">';
			    	$code .= 'var map;';
			    	$code .= "var MY_MAPTYPE_ID = 'custom_style';";
			      $code .='function initialize() {';

			      	$code .= 'var featureOpts = [{"stylers": [{ "saturation": -100 } ] } ];';

			      	$code .= 'var myLatlng = new google.maps.LatLng(1.515936,103.668016);';
			        $code .='var mapOptions = {';
			          $code .='center: myLatlng,';
			          $code .='zoom: 16,';
			          $code .= "mapTypeControlOptions: {mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID] }, mapTypeId: MY_MAPTYPE_ID";
			        $code .='};';
			        $code .='var map = new google.maps.Map(document.getElementById("map-canvas"),';
			            $code .='mapOptions);';
					$code .= "var styledMapOptions = {name: 'Custom Style'};";
						$code .= 'var marker = new google.maps.Marker({';
						   $code .= ' position: myLatlng,';
						   $code .= ' map: map,';
						   $code .= ' title:"Hello World!"';
						$code .= '});';
						$code .= "var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions); map.mapTypes.set(MY_MAPTYPE_ID, customMapType);";
			      $code .= '}';
			      $code .='google.maps.event.addDomListener(window, "load", initialize);';
			    $code .='</script>';

			    $code .= '<div id="map-canvas"></div>';

		$code .='</div>';
		echo $code;
	}
}
?>