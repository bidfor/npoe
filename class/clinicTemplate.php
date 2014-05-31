<?php

if(isset($_POST['langBtn']))
{
	$expire=time()+ 10 * 365 * 24 * 60 * 60;
	if($_COOKIE["revivalClinicLanguage"] == "english")
		setcookie("revivalClinicLanguage", "chinese", $expire);
	else if($_COOKIE["revivalClinicLanguage"] == "chinese")
		setcookie("revivalClinicLanguage", "english", $expire);
	$_POST['langBtn'] = '';
	header('location:'.$_SERVER['REQUEST_URI']);
}

include_once($_SERVER["DOCUMENT_ROOT"]."/class/config.php");
class clinicTemplate{

	function clinicTemplate(){
		if($_COOKIE["revivalClinicLanguage"] == "english") $language = "en";
		else if($_COOKIE["revivalClinicLanguage"] == "chinese") $language = "cn";
		else{
			$expire=time()+ 10 * 365 * 24 * 60 * 60; //10 years 365 days 24 hours 60 minutes 60 seconds
			setcookie("revivalClinicLanguage", "english", $expire);
			$language = "en";
		}
		include_once("lang_".$language.".php");
		$this->lang = $lang;
	}

	function header($data)
	{
		$lang = $this->lang;
 		$code = '<!DOCTYPE html>';
		$code .= '<html>';
			$code .= '<head>';
				$code .= '<title>Clinic</title>';
    			$code .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
		    	$code .= '<script src="'.$sys["host"].'/js/jquery-1.11.1.min.js"></script>';
		    	$code .= '<script src="'.$sys["host"].'/js/clinic.js" defer></script>';
		    	$code .= "<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>";
		    	$code .= "<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>";
		    	$code .= '<link rel="stylesheet" href="'.$sys["host"].'/css/clinicCss.css" type="text/css"/>';
			$code .= '</head>';
			$code .= '<body>';
				$code .= '<div id="backGroundDiv" class="backGroundClass"></div>';
				$code .= '<div id="logoDiv" class="logoClass"></div>';
				$code .= '<div id="headerFlowerDiv" class="headerFlowerClass"></div>';
				$code .= '<form method="POST">';
					$code .= '<button id="langBtn" type="submit" name="langBtn" value="switchLang" class="languageClass">'.$lang["10000"].'</button>';
				$code .= '</form>';
				$code .= '<div id="facebookDiv" class="facebookClass"></div>';
				$code .= '<div id="twitterDiv" class="twitterClass"></div>';
				$code .= '<div id="instagramDiv" class="instagramClass"></div>';
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
				$code .= '<div id="backTopDiv"></div>';
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
					        $code .= '<img src="'.$sys["host"].'/image/1.jpg"/>';
			   		$code .= ' </div>';
			   		$code .= ' <div class="slide2">';
					       	$code .= '<img src="'.$sys["host"].'/image/2.jpg"/>';
			    	$code .= '</div>';
			    	$code .= ' <div class="slide3">';
					       	$code .= ' <img src="'.$sys["host"].'/image/3.jpg"/>';
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

	function aboutUs($from){
		switch($from){
			case "doctor":
				$tableContent = $this->aboutUsDoctor();
			break;
			case "team":
				$tableContent = $this->aboutUsTeam();
			break;
			case "clinic":
				$tableContent = $this->aboutUsClinic();
			break;
		}
		$code = '<div id="aboutUsDiv" class="aboutUsClass">';
			$code .= '<div style="border-top:45px solid white;"></div>';
			$code .= '<table border="0" style="width:95%;text-align:left;margin:auto;">';
				$code .= '<tr>';
					$code .='<td class="fontRalewayClass" width="25%" valign="top">';
							$code .= '<ul style="position:fixed;" class="aboutUsListClass">';
								$code .= '<div style="font-size:40px;margin-top:-42px;margin-bottom:10px;">About Us</div>';
								$code .= '<li id="aboutDoctorDiv" class="aboutUsMainLiClass" style="border-top:1px solid #d6cdbd;">';
									if($from == "doctor") $code .= '<div class="tempoClickClass">a</div>';
									else $code .= '<div class="tempoHoverClass">a</div>';
									$code .= '<a href="#"><span style="visibility:hidden;">ha</span> The Doctors <span class="plusSignClass">+</span></a>';
								$code .= '</li>';

								$code .= '<li id="aboutTeamDiv" class="aboutUsMainLiClass">';
									if($from == "team") $code .= '<div class="tempoClickClass">a</div>';
									else $code .= '<div class="tempoHoverClass">a</div>';
									$code .= '<a href="#"><span style="visibility:hidden;">ha</span> The Team <span class="plusSignClass">+</span></a>';
								$code .= '</li>';

								$code .= '<li id="aboutClinicDiv" class="aboutUsMainLiClass">';
									if($from == "clinic") $code .= '<div class="tempoClickClass">a</div>';
									else $code .= '<div class="tempoHoverClass">a</div>';
									$code .= '<a href="#"><span style="visibility:hidden;">ha</span> The Clinic <span class="plusSignClass">+</span></a>';
								$code .= '</li>';
							$code .= '</ul>';
						$code .= '</td>';
						$code .= $tableContent;
					$code .= '</tr>';
				$code .= '</table>';
		$code .= '</div>';
		echo $code;
	}

	function aboutUsTeam(){
		$lang = $this->lang;
		$code = '<td id="aboutUsContentDiv" align="center" style="width:75%;padding-top:30px;padding-left:25px;color:#404040;" class="fontHelveticaClass">';
			$code .= '<div style="width:862px;text-align:left;">';
				$code .= '<img class="lightShadowClass" id="revivalTeamDiv" style="max-width:1232px; max-height:560px" height="500px" width="862px" src="../image/revivalTeam.jpg"/>';
				$code .= '<img class="lightShadowClass" id="revivalShareholderDiv" style="max-width:1232px; max-height:560px; margin-top:-100px;margin-left:580px;" height="400px" width="300px" src="../image/revivalShareholder.jpg"/>';
				$code .= '<div style="margin-left:-3px;margin-top:-300px;font-size:50px; font-weight:bold;">OUR TEAM</div>';
				$code .= '<div style="color:#9d8758;font-size:20px;margin-bottom:25px;">Welcome To Revival <br>Medical Clinic</div>';
				$code .= '<table border="0" cellspacing="0" cellpadding="0">';
					$code .= '<tr>';
						$code .= '<td>';
							$code .= '<div style="width:500px;font-size:18px;" align="justify">'.$lang[10011].'</div>';
						$code .= '</td>';
					$code .= '</tr>';
					$code .= '<tr>';
						$code .= '<td style="height:200px;">'.$this->shareBtn().'</td>';
					$code .= '</tr>';
				$code .= '</table>';
			$code .= '</div>';
		$code .= '</td>';

		return $code;
	}

	function aboutUsDoctor(){
		$lang = $this->lang;
		$code = '<td id="aboutUsContentDiv" align="center" style="width:75%;padding-top:30px;padding-left:25px;color:#404040" class="fontHelveticaClass">';
			$code .= '<img id="doctorImg" style="max-width:1232px; max-height:560px" height="392px" width="862px" src="../image/doctors.jpg"/>';
			$code .= '<div style="width:862px;text-align:left;">';
				$code .= '<div style="margin-left:-3px; margin-bottom:25px; font-size:40px; font-weight:bold;">THE DOCTORS</div>';
				$code .= '<table cellpadding="0" cellspacing="0">';
					$code .= '<tr>';
						$code .= '<td width="290px;" align="justify" valign="top">';
							$code .= '<div>'.$lang[10012].'</div>';
						$code .= '</td>';
						$code .= '<td align="right">';
							$code .= '<img id="drKavinDiv" class="doctorClass" src="../image/clickKavin.jpg"></img>';
							$code .= '<img id="drLyndaDiv" class="doctorClass" src="../image/clickLynda.jpg"></img>';
						$code .= '</td>';
					$code .= '</tr>';
					$code .= '<tr>';
						$code .= '<td style="padding-bottom:50px;">';
							$code .= $this->shareBtn();
						$code .= '</td>';
					$code .= '</tr>';
				$code .= '</table>';
			$code .= '</div>';
		$code .= '</td>';

		return $code;
	}

	function aboutUsClinic(){
		$lang = $this->lang;
		$code .= '<td id="aboutUsContentDiv" align="center" style="width:75%;padding-top:30px;padding-left:25px;color:#404040;" class="fontHelveticaClass">';
			$code .= '<div style="width:862px;text-align:left;">';
				$code .= '<img class="lightShadowClass" id="clinicLivingRoomImg" style="max-width:1232px; max-height:560px" height="470px" width="862px" src="../image/clinicLivingRoom.jpg"/>';
				$code .= '<div style="margin-left:-3px;font-size:50px; font-weight:bold;">RELAX YOUR SENSES</div>';
				$code .= '<div style="color:#404040;font-size:20px;margin-bottom:25px;">At Revival Clinic Sutera Utama</div>';
				$code .= '<table border="0" cellspacing="0" cellpadding="0">';
					$code .= '<tr>';
						$code .= '<td>';
							$code .= '<img id="clinicRestroomImg" height="300px" width="450px" src="../image/clinicRestroom.jpg"/>';
						$code .= '</td>';
						$code .= '<td valign="top">';
							$code .= '<div style="margin-left:25px;width:385px;" align="justify">'.$lang[10009].'</div>';
						$code .= '</td>';
					$code .= '</tr>';
					$code .= '<tr>';
						$code .= '<td colspan="2">';
							$code .= '<table cellspacing="0" cellpadding="0" width="100%">';
								$code .= '<tr>';
									$code .= '<td>';
										$code .= '<div style="width:190px;text-align:justify;font-size:30px;">'.$lang[10010].'</div>';
										$code .= '<div align="right">- Dr. Kavin -</div>';
									$code .= '</td>';
									$code .= '<td>';
										$code .= '<img style="margin-top:20px;border-bottom:20px solid white;" align="right" id="clinicEntranceImg" height="400px" width="600px" src="../image/clinicEntrance.jpg"/>';
									$code .= '</td>';
								$code .= '</tr>';
								$code .= '</table>';
						$code .= '</td>';
					$code .= '</tr>';
				$code .= '</table>';
			$code .= '</div>';
		$code .= '</td>';
		
		return $code;
	}

	function subFooter(){
		$lang = $this->lang;
		$code  = '<div id="subFooterDiv" class="subFooterClass">';
			$code .= '<div id="bannerDiv" class="bannerClass">';
				$code .= '<p class="bannerContentClass" class="fontRalewayClass">'.$lang["10008"].'</p>';
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
		$code = '<div id="serviceDiv" class="serviceClass">';
			$code .= '<div style="border-top:45px solid white;"></div>'; 
		$code .= '<table border="0" style="width:95%;text-align:left;margin:auto;" cellpadding="0" cellspacing="0">';
			$code .= '<tr>';
				$code .= '<td class="fontTrebuchetClass" width="25%" valign="top">';
					$code .= '<ul id="nav" style="position:relative;">'; ## FIRST LEVEL DROP DOWN
						$code .= '<div style="font-size:40px;">Services</div>'; ## header
						$code .= '<li class="mainLiClass" style="border-top:1px solid #d6cdbd;">'; ## First level option
							$code .= '<div id="faceDiv" style="width:220px;"><span style="visibility:hidden;">ha</span> Face <span class="plusSignServiceClass">+</span></div>';
							$code .= '<ul class="subUlClass">'; ## SECOND LEVEL DROP DOWN
								$code .= '<li>';
									$code .= '<div id="acneDiv">Acne & Scarrings</div>'; ## second level option
									$code .= '<ul class="sub2UlClass">'; ## THIRD LEVEL DROP DOWN
										$code .= '<li>';
											$code .= '<div>Medical Treatment</div>'; ## third level option
										$code .= '</li>';
										$code .= '<li>';
											$code .= '<div>Medical Facial Treatment</div>'; ## third level option
										$code .= '</li>';
										$code .= '<li>';
											$code .= '<div>Mesobotuinium Toxin</div>'; ## third level option
										$code .= '</li>';
										$code .= '<li>';
											$code .= '<div>Laser</div>'; ## third level option
												$code .= '<ul class="sub3UlClass">';
													$code .= '<li>';
														$code .= '<div>Eco2</div>'; ## forth level option
													$code .= '</li>';
													$code .= '<li>';
														$code .= '<div>Spectra</div>'; ## forth level option
													$code .= '</li>';
												$code .= '</ul>';
										$code .= '</li>';
									$code .= '</ul>';
								$code .= '</li>';
								$code .= '<li>';
									$code .= '<div id="moleDiv">Birthmarks & Moles</div>';
									$code .= '<ul class="sub2UlClass">';
										$code .= '<li>';
											$code .= '<div>Laser</div>'; ## third level option
												$code .= '<ul class="sub3UlClass">';
													$code .= '<li>';
														$code .= '<div>Eco2</div>'; ## forth level option
													$code .= '</li>';
													$code .= '<li>';
														$code .= '<div>Spectra</div>'; ## forth level option
													$code .= '</li>';
												$code .= '</ul>';
										$code .= '</li>';
									$code .= '</ul>';
								$code .= '</li>';
								$code .= '<li>';
									$code .= '<div id="poreDiv" style="font-size:14px;">Dull Dehydrated & Enlarge Pores</div>';
									$code .= '<ul class="sub2UlClass">';
										$code .= '<li>';
											$code .= '<div>Medical Facial trt</div>'; ## third level option
												$code .= '<ul class="sub3UlClass">';
													$code .= '<li>';
														$code .= '<div>Silkpeel</div>'; ## forth level option
													$code .= '</li>';
													$code .= '<li>';
														$code .= '<div>Checmical Peel</div>'; ## forth level option
													$code .= '</li>';
												$code .= '</ul>';
										$code .= '</li>';
										$code .= '<li>';
											$code .= '<div>Laser Peel</div>';
										$code .= '</li>';
										$code .= '<li>';
											$code .= '<div>Mesobotox</div>';
										$code .= '</li>';
										$code .= '<li>';
											$code .= '<div>Hydrating Boosters Filler</div>';
										$code .= '</li>';
									$code .= '</ul>';
								$code .= '</li>';
							$code .= '</ul>';
						$code .= '</li>';

						$code .= '<li class="mainLiClass" style="border-top:1px solid #d6cdbd; border-bottom:1px solid #d6cdbd;">';
						$code .= '<div id="neckDiv" style="width:220px;"><span style="visibility:hidden;">ha</span> Neck <span class="plusSignServiceClass">+</span></div>';
							$code .= '<ul class="subUlClass">';
								$code .= '<li>';
									$code .= '<div id="saggingSkinDiv">Sagging Wrinkles Skin</div>';
									$code .= '<ul class="sub2UlClass">';
										$code .= '<li>';
											$code .= '<div>Filler</div>';
										$code .= '</li>';
										$code .= '<li>';
											$code .= '<div>Botox</div>';
										$code .= '</li>';
										$code .= '<li>';
											$code .= '<div>Thread</div>';
										$code .= '</li>';
										$code .= '<li>';
											$code .= '<div>PRP</div>';
										$code .= '</li>';
										$code .= '<li>';
											$code .= '<div>Laser</div>';
											$code .= '<ul class="sub3UlClass">';
												$code .= '<li>';
													$code .= '<div>Spectra</div>';
												$code .= '</li>';
												$code .= '<li>';
													$code .= '<div>Eco2</div>';
												$code .= '</li>';
											$code .= '</ul>';
										$code .= '</li>';
									$code .= '</ul>';
								$code .= '</li>';
							$code .= '</ul>';
						$code .= '</li>';

					$code .= '</ul>';
				$code .= '</td>';
				$code .= '<td style="padding-top:65px;padding-bottom:50px;position:relative;">';
					$code .= '<img src="../image/revivalAsianModel.jpg" style="height:667px;width:819px;"></img>';
					$code .= '<div id="molePlusDiv" class="plusSignDivClass" style="position:absolute;top:280px; left:500px;"></div>';
					$code .= '<div id="porePlusDiv" class="plusSignDivClass" style="position:absolute;top:300px; left:397px;"></div>';
					$code .= '<div id="acnePlusDiv" class="plusSignDivClass" style="position:absolute;top:400px; left:480px;"></div>';
					$code .= '<div id="saggingSkinPlusDiv" class="plusSignDivClass" style="position:absolute;top:550px; left:400px;"></div>';
					$code .= '<div class="moleClass"></div>';
					$code .= '<div class="poreClass"></div>';
					$code .= '<div class="acneClass"></div>';
					$code .= '<div class="saggingSkinClass"></div>';
				$code .= '</td>';
			$code .= '</tr>'; 
		$code .= '</table>';
		$code .= '</div>';
		echo $code;
	}

	function contact(){
		global $sys;
		$lang =$this->lang;
		$code  = $this->googleMaps();
		$code .= '<div class="borderTopBotClass">';
			$code .= '<div id="contactDiv" class="boxShadowClass contactClass">';
				$code .= '<div id="map-canvas" style="display:inline-block;" class=""></div>'; //google Map
				$code .= '<div class="contactDivClass" >';
					$code .= "<div style='color:#a08d55; font-size:50px;line-height:90px; font-family: Raleway, sans-serif; '>Contact</div>";
					$code .= '<div style="margin-bottom:30px; color:#a08d55;">__</div>';
					$code .= '<div class="contactSubHeaderClass">The address</div>';
					$code .= '<div class="contactMarginBottomClass">__</div>';
					$code .= '<div class="contactLowestClass">';
						$code .= '8, Jalan Sutera Tanjung 8/3,<br>';
						$code .= 'Taman Sutera Utama';
					$code .= '</div>';
					$code .= '<div class="contactSubHeaderClass">Call Us</div>';
					$code .= '<div class="contactMarginBottomClass">__</div>';
					$code .= '<div class="contactLowestClass">(Tel)07-5578833</div>';
					$code .= '<div class="contactLowestClass">(Fax)07-5576533</div>';
					$code .= '<div class="contactSubHeaderClass">Email us</div>';
					$code .= '<div class="contactMarginBottomClass">__</div>';
					$code .= '<div class="contactLowestClass">revivalmedicalclinic@gmail.com</div>';
					$code .= '<div class="contactSubHeaderClass">Business Hours</div>';
					$code .= '<div class="contactMarginBottomClass">__</div>';
					$code .= '<div class="contactLowestClass">';
						$code .= 'Monday to Saturday<br>';
						$code .= '10.00am - 6.00pm';
					$code .= '</div>';
				$code .= '</div>';
			$code .='</div>';
		$code .= '</div>';
		echo $code;
	}

	function googleMaps(){
		$code .='<style type="text/css">';
		    $code .='html { height: 100% }';
			$code .='body { height: 100%; margin: 0; padding: 0 }';
		    $code .='#map-canvas { height: 650px; width: 600px }';
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

	    return $code;
	}

	function doctors($doctor=0){
		switch($doctor)
		{
			case 'lynda':
				$profileName = 'Dr.Lynda Quah';
				$profile = 'Dr. Lynda Quah obtained her medical dermatology training in hospital Sultanah <br>Aminah Johor Bahru, Malaysia and post graduate diploma in primary care <br>clinical dermatology qualification at the institute of dermatology, Bangkok. <br>She specializes in non-surgical medical cosmetics and has a keen interest <br>in rejuvenation aesthetic treatment and dermatology. With the passion in aesthetic <br>procedure and strives to inspire people to improve and maintain their physical <br>and mental wellness; she strongly believes that <br>everyone is beautiful.';
				$imgSrc = '<img style="margin-top:5px;" src="'.$sys['host'].'/image/drLynda.jpg"/>';
				$aHrefLink = '<a href="'.$sys['host'].'/doctor/kavin.php" class="aHrefNoneClass fontRalewayClass">Dr.Kavin &#62;</a>';
			break;
			case 'kavin':
				$profileName = 'Dr.Kavin Tan';
				$profile = 'Revival medical aesthetic practicing doctor <br>Bachelor of medicine and bachelor of surgery (IMU) <br>Diploma in American academy of aesthetic medicine <br>Diploma in primary care clinical dermatology,IOD (institute of dermatology Bangkok) <br>Hyaluronic acid workshop certificate <br>Botanium toxin A workshop certificate <br>Lutronic laser workshop certificate <br>Certificate in vulvo and vaginal laser reshaping Master course in ultrasound assisted <br>body contouring and breast fat grafting, Italy';
				$profile .= '<div style="color:#a08d55;"> <br>Member of :<br> -American academy of aesthetic medicine <br>-Malaysia society of aesthetic medicine <br>-Asian college of aesthetic and regenerative medicine, Singapore </div>';
				$imgSrc = '<img style="margin-top:5px" src="'.$sys['host'].'/image/drKavin.jpg"/>';
				$aHrefLink = '<a href="'.$sys['host'].'/doctor/lynda.php" class="aHrefNoneClass fontRalewayClass">Dr.Lynda &#62;</a>';
			break;
		}
		$code = '<div class="doctorsClass">';
			$code .= '<div id="aboutUsBackGroundDiv" style="background-color:#353638;width:100%;">';
				$code .= '<table border="0" cellspacing="0" cellpadding="0" style="width:1200px;margin:auto;text-align:left;" class="fontCondensedClass">';
					$code .= '<tr>';
						$code .= '<td style="min-width:700px;padding-left:50px;padding-right:50px; padding-top:25px; background-color:#353638; vertical-align:top;">';
							$code .= '<div style="width:250px;color:white;border-bottom:1px solid white;font-size:35px; line-height:50px;" class="fontRalewayClass">';
								$code .= $profileName;
							$code .= '</div>';
							$code .= '<div style="font-size:18px;color:#807f7f; margin-top:35px;">';
								$code .= $profile;
							$code .= '</div>';
							$code .= '<div style="margin-top:50px;margin-bottom:50px;">';
								//$code .= $this->shareBtn();
							$code .= '</div>';
							$code .= '<div style="font-size:18px;text-align:left; margin:auto;">';
								$code .= '<a href="'.$sys['host'].'/aboutUs" style="margin-right:25px;" class="aHrefNoneClass fontRalewayClass">&#60; Back</a>';
								$code .= $aHrefLink;
							$code .= '</div>';
						$code .='</td>';
						$code .= '<td>';
							$code .= $imgSrc;
						$code .= '</td>';
					$code .= '</tr>';
				$code .= '</table>';
			$code .= '</div>';
		$code .= '</div>';
		$code .= '<script>';
			$code .= 'var width = $(window).width();';
			$code .= '$("#aboutUsBackGroundDiv").css("width",width);';
		$code .= '</script>';
		echo $code;
	}

	function shareBtn(){

		$code .= '<div class="addthis_toolbox addthis_default_style addthis_32x32_style">';
			$code .= '<a class="addthis_button_preferred_1"></a>';
			$code .= '<a class="addthis_button_preferred_2"></a>';
			$code .= '<a class="addthis_button_preferred_3"></a>';
			$code .= '<a class="addthis_button_preferred_4"></a>';
			$code .= '<a class="addthis_button_compact"></a>';
			$code .= '<a class="addthis_counter addthis_bubble_style"></a>';
		$code .= '</div>';
		$code .= '<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>';
		$code .= '<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53889932600d0b57"></script>';

		return $code;
	}
}
?>