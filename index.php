<!DOCTYPE html>
<?php
require_once "recaptchalib.php";
$secret = "6Lc1vSEUAAAAAJ22JvPxNayUH3_XKOyv1miwnbK6"; 
$response = null; 
$reCaptcha = new ReCaptcha($secret);
/* if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
} */

  if ($response != null && $response->success) 
  {
	null;
  } 

if ( $_POST ) 
{
	$userName = $_POST['userName'];
	$mobileNo = $_POST['mobileNo'];
	$emailId = $_POST['emailId'];
	$userMessage = $_POST['userMessage'];
	
	//echo $userName;
	//echo $mobileNo;
	//echo $emailId;
	//echo $userMessage;
	
	function ContainsNumbers($String){
		return preg_match('/\\d/', $String) > 0;
	}
	function ContainsCharacters($String){
		//return preg_match('^[0-9]+$', $String) > 0;
		return ctype_digit($String);
	}
	function validateEmail($email) {
	    return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

	if ( $userName == '' || ContainsNumbers($userName))
	{	
		echo "<script type='text/javascript'>alert('Name can not be null and only letters and white spaces are allowed!')</script>";	
	}	
	
	if ( $mobileNo == '' || !ContainsCharacters($mobileNo))
	{
		echo "<script type='text/javascript'>alert('Phone Number can not be null and only digits are allowed!')</script>";	
	}
	
	if ( $emailId == '' || !validateEmail($emailId))
	{		
		echo "<script type='text/javascript'>alert('Email id can not be null and should be a valid email id!')</script>";	
	}	
	
	if(!isset($_POST['botChk']) || trim($_POST['botChk']) != '') 
	{
		echo 'kkkkk'.$_POST['botChk'].'kkkkk';
		echo "<script type='text/javascript'>alert('There is some error in submitting the request. Please try later.')</script>";
	}
}
?>
<html lang="en-gb" dir="ltr">

    <!--head -->
	<?php include 'head.php';?>
	<!--end-head-->
    <body>
		<!-- Header Section -->
		<?php include 'header.php';?>
		<!-- Header Section End -->
		
		<!-- Slideshow -->
		<section id="idz-slideshow">
			<div class="uk-slidenav-position" data-uk-slideshow="{autplay: true,animation:'scroll',height: 480}">
				
			    <ul class="uk-slideshow">
			    	<!-- Slideshow Item 1 -->
			        <li class="slide-bg-1">
			        	
			        </li>
			        <!-- Slideshow Item 1 End -->

			        <!-- Slideshow Item 2 -->
			        <li class="slide-bg-2">
					
			        </li>
			        <!-- Slideshow Item 2 End -->

			        <!-- Slideshow Item 3 -->
			        <li class="slide-bg-3">
			        	
			        </li>
			        <!-- Slideshow Item 3 End -->
			    </ul>
				
			    <!-- Slideshow Nav -->
			    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
			    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
			    <!-- Slideshow Nav End -->

			    <!-- Slideshow Paging -->
			    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
			        <li data-uk-slideshow-item="0"><a href=""></a></li>
			        <li data-uk-slideshow-item="1"><a href=""></a></li>
			        <li data-uk-slideshow-item="2"><a href=""></a></li>
			    </ul>
			    <!-- Slideshow End -->
			</div>
			
		</section>
		<div class="on-slider-forn on-slider-forn-mob">
			
			<h3>Contact Us</h3>
			<form>					 
				<input type="text" placeholder="Full Name(Required)"><br>
				<input type="text" placeholder="Phone(Required)"><br>
				<input type="text" placeholder="Email(Required)"><br>
				<textarea type="text"  placeholder="Message..."></textarea><br>
				<input type="submit" value="Submit">
			</form> 
		</div>
		<!-- Slideshow End -->
		<!-- website-&-mob-app-development -->
		
		
		<!-- web-&-mob-app-development-end -->
		<!-- Extras Section -->
		<!-- <section id="idz-extras" class="idz-bgcolor-gray idz-padding-small">
			<div class="uk-container uk-container-center">
				
				<div class="uk-grid">
					<div class="uk-width-large-1-6 uk-width-medium-1-1">
						<h3 class="idz-text-22px uk-hidden-small uk-hidden-medium uk-hidden-large">Intro Text</h3>
						<p class="idz-extras-intro">All our plans include over <span class="bold idz-text-28px uppercase">$500 in extras</span></p>
					</div>

					<div class="uk-width-large-5-6 uk-width-medium-1-1">
						<ul class="uk-grid uk-grid-width-large-1-5 uk-grid-width-medium-1-3 uk-grid-width-small-1-2 idz-extras-list">
							<li><img src="images/sample/logo/wordpress.png" alt="dot-com"><strong>FREE</strong> building tools</li>
							<li><img src="images/sample/logo/google.png" alt="dot-net"><strong>$100</strong> AdWords offer</li>
							<li><img src="images/sample/logo/bing.png" alt="dot-org"><strong>$100</strong> ad credits</li>
							<li><img src="images/sample/logo/sitelock.png" alt="dot-online"><strong>FREE</strong> security tools</li>
							<li><img src="images/sample/logo/justcloud.png" alt="dot-online"><strong>FREE</strong> 1GB storage</li>
						</ul>
					</div>
				</div>

			</div>
		</section> -->
		<!-- Extras Section End -->
		<section class="web-and-mob-dev">
			<div class="uk-container uk-container-center">
				<h1> 
					<svg width="100%" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
					<rect height="100%" width="100%" fill="none" y="0" x="0"/>
					<text font-size="50vh" font-family="sonos-logoregular" fill="url(#pattern)" dy="0.4em" y="50%" text-anchor="middle" x="50%">
					<tspan>Website &amp; Mobile</tspan>
					<tspan>App Development</tspan>
					<tspan>Company India</tspan>
					</text>
					<defs>
					<!-- <linearGradient y2="0" x2="100%" y1="0%" x1="0%" id="gradient">
					<stop style="stop-color:#33235b;" offset="0%"/>
					<stop style="stop-color:#D62229;" offset="25%"/>
					<stop style="stop-color:#E97639;" offset="50%"/>
					<stop style="stop-color:#792042;" offset="75%"/>
					<stop style="stop-color:#33235b;" offset="100%"/>
					</linearGradient> -->
					<linearGradient y2="0" x2="100%" y1="0%" x1="0%" id="gradient">
					<stop style="stop-color:#144f76;" offset="0%"/>
					<stop style="stop-color:#ffa036;" offset="25%"/>
					<stop style="stop-color:#DF698c;" offset="50%"/>
					<stop style="stop-color:#144f76;" offset="75%"/>
					<stop style="stop-color:#777777;" offset="100%"/>
					</linearGradient>
					<pattern patternUnits="userSpaceOnUse" height="100%" width="300%" y="0" x="0" id="pattern">
					<rect fill="url(#gradient)" height="100%" width="150%" y="0" x="0">
					<animate repeatCount="indefinite" dur="7s" to="150%" from="0" attributeName="x" attributeType="XML"/>
					</rect>
					<rect fill="url(#gradient)" height="100%" width="150%" y="0" x="-150%">
					<animate repeatCount="indefinite" dur="7s" to="0" from="-150%" attributeName="x" attributeType="XML"/>
					</rect>
					</pattern>
					<!-- <font horiz-adv-x="1024">
					<font-face descent="-128" ascent="1920" units-per-em="2048" font-family="sonos-logoregular"/>
					<missing-glyph horiz-adv-x="500"/>
					<glyph horiz-adv-x="682" unicode="
					"/>
					<glyph unicode=" "/>
					<glyph d="M0 412h150v636l662 -664v1000h-148v-640l-664 664v-996z" horiz-adv-x="812" unicode="N"/>
					<glyph d="M470 896q0 210 150 364q148 148 362 148t362 -148q150 -154 150 -364q0 -212 -150 -362t-362 -150t-362 150t-150 362zM620 896q0 -152 106 -258q104 -108 256 -108q154 0 256 108q108 108 108 258q0 148 -108 260q-104 108 -256 108q-148 0 -256 -108 q-106 -110 -106 -260z" horiz-adv-x="1946" unicode="O"/>
					<glyph d="M0 1124q0 -58 26 -110q28 -52 80 -90q32 -26 86 -52q68 -30 124 -46q124 -40 174 -84q34 -30 34 -74q0 -52 -48 -92q-56 -42 -138 -42q-62 0 -122 26q-38 16 -72 40l-118 -80q0 -4 24 -24q24 -24 60 -46q108 -66 228 -66q70 0 132 22q66 24 108 62q44 38 72 92 q24 54 24 110q0 54 -26 110q-28 52 -78 90q-34 28 -88 52q-38 18 -122 46q-122 36 -174 82q-36 32 -36 74q0 54 50 92q54 44 138 44q60 0 120 -26q32 -12 72 -40l120 80q-2 0 -24 24q-18 18 -62 46q-104 64 -226 64q-74 0 -132 -20t-110 -62q-48 -44 -70 -92 q-26 -56 -26 -110z" horiz-adv-x="674" unicode="S"/>
					<glyph unicode="&nbsp;"/>
					<glyph horiz-adv-x="704" unicode="&ensp;"/>
					<glyph horiz-adv-x="1408" unicode="&emsp;"/>
					<glyph horiz-adv-x="704" unicode="&ensp;"/>
					<glyph horiz-adv-x="1408" unicode="&emsp;"/>
					<glyph horiz-adv-x="469" unicode="&emsp13;"/>
					<glyph horiz-adv-x="352" unicode="&emsp14;"/>
					<glyph horiz-adv-x="234" unicode=" "/>
					<glyph horiz-adv-x="234" unicode="&numsp;"/>
					<glyph horiz-adv-x="176" unicode="&puncsp;"/>
					<glyph horiz-adv-x="281" unicode="&thinsp;"/>
					<glyph horiz-adv-x="78" unicode="&hairsp;"/>
					<glyph horiz-adv-x="281" unicode="&#8239;"/>
					<glyph horiz-adv-x="352" unicode="&#8287;"/>
					<glyph d="M0 0z" horiz-adv-x="1000" unicode="◼"/>
					</font> </defs> -->
					</svg> 
				</h1>
				<p>
					Techno Vihar is a web and mobile application development company in india. Currently It has physical presence in Bihar and Rajasthan. We have a dedicated team who have laudable skills and are esteemed to work with all the IT technologies.
				</p>
				<p>
					Techno Vihar provides cost-effective IT solutions along with website design & development services. Established in Feb, 2015, with over 2+ years of rich experience, it is apex rated IT serving company around the globe. It deals with all the IT related solutions including web design and development, software development, mobile application.
				</p>
				<p>
					Our innovative and dedicated team are able to fullfill the clients desire and goal effectively .We craft a creative web designing and acclaimed towards developing user-friendly. We also have mobile application developer's team for android and IOS. Cost-effective deals with our clients is our forte. The skilled team of zugadds.com fulfills all IT needs of clients to help their business reach new heights.
				</p>
				<p>
					We are providing a cost-effiective solution to any problem in an intelligent way and our team is able to think in a new way to constructively and differently about innovation and strategy.
				</p>
			</div>
		</section>
		<!-- circle-section -->
		<div class="services" id="service_blog">
		<h1 class="service-detail-heading">Our Services</h1>
		<a href="#" class="consult-btn">Consult Now</a>
			<div class="uk-container uk-container-center">
				<ul class="service-logo">
					<li>
						<a href="javascript:void(0)" id="one">
						<!--<i class="fa fa-apple" aria-hidden="true"></i>-->
						<img src="images/web-application.png">
						</a>
						<p>Web Application</p>
					</li>
					<li>
						<a href="javascript:void(0)" id="two">
						<img src="images/web-design.png">
						</a>
						<p>Web<br> Design</p>
					</li>
					<li>
						<a href="javascript:void(0)" id="three">
						<img src="images/software-icon.png">
						</a>
						<p>Software Development</p>
					</li>
					<li>
						<a href="javascript:void(0)" id="four">
						<img src="images/mobile-app.png">
						</a>
						<p>Mobile Application</p>
					</li>
					<li>
						<a href="javascript:void(0)" id="five">
						<img src="images/Database.png">
						</a>
						<p>Database Management</p>
					</li>
					<li>
						<a href="javascript:void(0)" id="six">
						<img src="images/API-icon.png">
						</a>
						<p>API Development</p>
					</li>
					<li>
						<a href="javascript:void(0)" id="seven">
						<img src="images/online-promotion.png">
						</a>
						<p>Online Promotion</p>
					</li>
				</ul>
				
			</div>
			<div class="service-details-one service-details">
				
				<div class="service-height"></div>
				<div class="uk-container uk-container-center">
					<div class="service-details-left">
						<img src="images/web-development-large.png">
					</div>
					<div class="service-details-right">
					
						<h1><span>Web</span>Applications </h1>
						<p>Hire our dedicated resources hourly/ weekly/ monthly or full-time basis, which help in your short-term and long-term projects. Our seasoned professionals, highly qualified designers and developers can transform your ideas into an effective, scalable, easy to use software.</p>
						<ul class="technology-icons">
							<li>
								<a href="javascript:void(0)">
								<img src="images/customized-web.png">
								</a>
								<p>Customized Web Applications</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/ecommerce.png">
								</a>
								<p>Ecommerce Websites</p>
							</li>
							<li>
								<a href="javascript:void(0)">
									<img src="images/wordpress.png">
								</a>
								<p>wordpress Development</p>
							</li>
							<li>
								<a href="javascript:void(0)">
									<img src="images/magento.png">
								</a>
								<p>Magento Development</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/prestashop.png">
								</a>
								<p>Prestashop Development</p>
							</li>
							<li>
								<a href="javascript:void(0)">
									<img src="images/mvc.png">
								</a>
								<p>MVC Framework Development</p>
							</li>
							<li>
								<a href="javascript:void(0)">
									<img src="images/spring.png">
								</a>
								<p>Spring Development</p>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
			<div class="service-details-two service-details">
			<div class="service-height"></div>
				<div class="uk-container uk-container-center">
					<div class="service-details-left">
						<img src="images/web_designing.png">
					</div>
					<div class="service-details-right">
						<h1><span>Website</span>Design </h1>
						<p>Hire our dedicated resources hourly/ weekly/ monthly or full-time basis, which help in your short-term and long-term projects. Our seasoned professionals, highly qualified designers and developers can transform your ideas into an effective, scalable, easy to use software.</p>
						<ul class="technology-icons">
							<li>
								<a href="javascript:void(0)">
								<img src="images/web-responsive-design.png">
								</a>
								<p>Responsive Design</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/webdesign-customize.png">
								</a>
								<p>Customized Design</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/backup-mngt.png">
								</a>
								<p>Backup Management</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/logo-des.png">
								</a>
								<p>Logo Design</p>
							</li>
							<!--<li>
								<a href="javascript:void(0)">
								<i class="fa fa-android" aria-hidden="true"></i>
								</a>
								<p>Android</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<i class="fa fa-android" aria-hidden="true"></i>
								</a>
								<p>Android</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<i class="fa fa-android" aria-hidden="true"></i>
								</a>
								<p>Android</p>
							</li>-->
							
						</ul>
					</div>
				</div>
			</div>
			<div class="service-details-three service-details">
			<div class="service-height"></div>
				<div class="uk-container uk-container-center">
					<div class="service-details-left">
						<img src="images/software-development-img.png">
					</div>
					<div class="service-details-right">
						<h1><span>Software</span>Development</h1>
						<p>Hire our dedicated resources hourly/ weekly/ monthly or full-time basis, which help in your short-term and long-term projects. Our seasoned professionals, highly qualified designers and developers can transform your ideas into an effective, scalable, easy to use software.</p>
						<ul class="technology-icons">
							<li>
								<a href="javascript:void(0)">
								<img src="images/java-oracle.png">
								</a>
								<p>Oracel Applications</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/erp-sol.png">
								</a>
								<p>ERP Solutions</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/customswdev.png">
								</a>
								<p>Customized Softwares</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/school-mngt.png">
								</a>
								<p>School Management</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/website-id-card.png">
								</a>
								<p>ID Card Software</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/bulk-listing.png">
								</a>
								<p>Bulk <br>Listing</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/inventry_Management.png">
								</a>
								<p>Inventory Management</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="service-details-four service-details">
			<div class="service-height"></div>
				<div class="uk-container uk-container-center">
					<div class="service-details-left">
						<img src="images/apps.png">
					</div>
					<div class="service-details-right">
						<h1><span>Mobile</span>Applications</h1>
						<p>Hire our dedicated resources hourly/ weekly/ monthly or full-time basis, which help in your short-term and long-term projects. Our seasoned professionals, highly qualified designers and developers can transform your ideas into an effective, scalable, easy to use software.</p>
						<ul class="technology-icons">
							<li>
								<a href="javascript:void(0)">
								<img src="images/Android-logo.png">
								</a>
								<p>Android Applications</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/Apple-Icon-1.png">
								</a>
								<p>IOS Applications</p>
							</li>
						<!--<li>
								<a href="javascript:void(0)">
								<i class="fa fa-android" aria-hidden="true"></i>
								</a>
								<p>Android</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<i class="fa fa-android" aria-hidden="true"></i>
								</a>
								<p>Android</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<i class="fa fa-android" aria-hidden="true"></i>
								</a>
								<p>Android</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<i class="fa fa-android" aria-hidden="true"></i>
								</a>
								<p>Android</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<i class="fa fa-android" aria-hidden="true"></i>
								</a>
								<p>Android</p>
							</li>-->
							
						</ul>
					</div>
				</div>
			</div>
			<div class="service-details-five service-details">
			<div class="service-height"></div>
				<div class="uk-container uk-container-center">
					<div class="service-details-left">
						<img src="images/database-mngt.png">
					</div>
					<div class="service-details-right">
						<h1><span>Database</span>Management</h1>
						<p>Hire our dedicated resources hourly/ weekly/ monthly or full-time basis, which help in your short-term and long-term projects. Our seasoned professionals, highly qualified designers and developers can transform your ideas into an effective, scalable, easy to use software.</p>
						<ul class="technology-icons">
							<li>
								<a href="javascript:void(0)">
								<img src="images/database-develop.png">
								</a>
								<p>Database Development</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/database-maintainence.png">
								</a>
								<p>Database Mantinance</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/database-tuning.png">
								</a>
								<p>Database Tuning</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="service-details-six service-details">
			<div class="service-height"></div>
				<div class="uk-container uk-container-center">
					<div class="service-details-left">
						<img src="images/api.png">
					</div>
					<div class="service-details-right">
						<h1><span>API</span>Development</h1>
						<p>Hire our dedicated resources hourly/ weekly/ monthly or full-time basis, which help in your short-term and long-term projects. Our seasoned professionals, highly qualified designers and developers can transform your ideas into an effective, scalable, easy to use software.</p>
						<ul class="technology-icons">
							<li>
								<a href="javascript:void(0)">
								<img src="images/api-creation.png">
								</a>
								<p>API Creation</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/api-inti.png">
								</a>
								<p>API Integration</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="service-details-seven service-details">
			<div class="service-height"></div>
				<div class="uk-container uk-container-center">
					<div class="service-details-left">
						<img src="images/online-promotion.png">
					</div>
					<div class="service-details-right">
						<h1><span>Online</span>Promotions</h1>
						<p>Hire our dedicated resources hourly/ weekly/ monthly or full-time basis, which help in your short-term and long-term projects. Our seasoned professionals, highly qualified designers and developers can transform your ideas into an effective, scalable, easy to use software.</p>
						<ul class="technology-icons">
							<li>
								<a href="javascript:void(0)">
								<img src="images/seo.png">
								</a>
								<p>Search Engine Optimization</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/social-media2.png">
								</a>
								<p>Social Media Optimization</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/facebook-ads-system.png">
								</a>
								<p>Facebook PPC</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/google-ppc.png">
								</a>
								<p>Google PPC</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/email-marketing.png">
								</a>
								<p>Email Marketing</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/Sms-marketing-1.png">
								</a>
								<p>SMS Marketing</p>
							</li>
							<li>
								<a href="javascript:void(0)">
								<img src="images/whatsapp-marketing.png">
								</a>
								<p>Whatsapp Marketing</p>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>	
		<!--end-circle-section -->
		<!-- Pricing Section -->
		<section id="idz-pricing" class="idz-padding our-service-tools">

			<div class="uk-container uk-container-center">

			<!-- 	<div class="uk-grid">
					
					<div class="uk-width-medium-2-3 uk-container-center">
						<div class="idz-intro-text uk-text-center">
							<p class="idz-text-blue idz-text-18px">A blazing fast hosting solution</p>
							<h1>Meet our web hosting plan</h1>
						</div>
					</div>
				</div>

				<ul class="uk-grid uk-grid-width-medium-1-3 uk-grid-width-small-1-1  idz-pricing-list">
					<li>
						<div class="idz-pricing-item default">
							<div class="idz-pricing-badge-icon"><i class="uk-icon-cubes"></i></div>
							<div class="idz-pricing-content">
								<h3 class="idz-">Shared <span>hosting</span></h3>
								<p>Better architecture. Better support. Altis Shared Grid is better shared hosting.</p>
								<div class="idz-divider"></div>
								<ul class="uk-list idz-features-list">
									<li><i class="uk-icon-flag"></i>free domain</li>
									<li><i class="uk-icon-database"></i>50 database</li>
									<li><i class="uk-icon-dashboard "></i>500GB bandwith</li>
								</ul>
								<a href="#" class="uk-button uk-button-large idz-button blue uppercase">learn more <i class="uk-icon-angle-double-right"></i></a>
								<div class="idz-pricing-bg-icon"><i class="uk-icon-cubes"></i></div>
							</div>
						</div>
					</li>
					<li>
						<div class="idz-pricing-item default">
							<div class="idz-pricing-badge-icon featured"><i class="uk-icon-cube"></i></div>
							<div class="idz-pricing-content featured">
								<h3>VPS <span>hosting</span></h3>
								<p>Professional-grade virtual private servers, with your choice of control panel.</p>
								<div class="idz-divider red"></div>
								<ul class="uk-list idz-features-list">
									<li><i class="uk-icon-flag"></i>free domain</li>
									<li><i class="uk-icon-database"></i>250 database</li>
									<li><i class="uk-icon-dashboard "></i>1TB bandwith</li>
								</ul>
								<a href="#" class="uk-button uk-button-large idz-button red uppercase">learn more <i class="uk-icon-angle-double-right"></i></a>
								<div class="idz-pricing-bg-icon"><i class="uk-icon-cube"></i></div>
							</div>
						</div>
					</li>
					<li>
						<div class="idz-pricing-item default">
							<div class="idz-pricing-badge-icon"><i class="uk-icon-tasks"></i></div>
							<div class="idz-pricing-content">
								<h3>Dedicated <span>hosting</span></h3>
								<p>Get the most out of your Cloud, fully managed by certified SysAdmins Architect.</p>
								<div class="idz-divider"></div>
								<ul class="uk-list idz-features-list">
									<li><i class="uk-icon-flag"></i>free domain</li>
									<li><i class="uk-icon-database"></i>unlimited database</li>
									<li><i class="uk-icon-dashboard "></i>unlimited bandwith</li>
								</ul>
								<a href="#" class="uk-button uk-button-large idz-button blue uppercase">learn more <i class="uk-icon-angle-double-right"></i></a>
								<div class="idz-pricing-bg-icon"><i class="uk-icon-tasks"></i></div>
							</div>
						</div>
					</li>
				</ul> -->

				<!-- <div class="idz-spacer large"></div>

				 <div class="uk-grid">
					<div class="uk-width-medium-1-2">
						<div class="idz-section-intro uk-margin-top">
							<h1>Powerfull Server Specs</h1>
							<p class="idz-text-18px idz-lineheight-1-8 idz-text-blue idz-margin-bottom-medium">Quidem rerum facilis est et expedita distinctio nam libero cum soluta nobis eligendi cumque impedit minus.</p>
							
							<div class="uk-grid uk-grid-small">
								<div class="uk-width-large-3-10 uk-width-medium-3-10 uk-width-small-4-10">
									<img src="images/sample/logo/processor.png" class="uk-img-preserve uk-align-left idz-fit-img" alt="processor">
								</div>
								<div class="uk-width-large-7-10 uk-width-medium-7-10 uk-width-small-6-10">
									<ul class="uk-list idz-list-check">
										<li>Processor Xeon E7-8891 v4</li>
										<li>Clock speed 6 x 2.8GHz</li>
										<li>RAM size 64GB DDR4 ECC</li>
										<li>Storage size 12 TB SSD</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>

					<div class="uk-width-medium-1-2 idz-tablet-pt-padding">
						<img src="images/sample/slideshow/cloud-server.png" class="uk-img-preserve idz-fit-img" alt="cloud server">
					</div>
				</div>  -->
				<!--portfolio-->
				<!--<div class="portfolio">
					<div class="idz-intro-text uk-text-center">
						<p class="idz-text-blue idz-text-18px">A blazing fast hosting solution</p>
						<h1>Meet our web hosting plan</h1>
					</div>
					<ul>
						<li>
							<p>Portfolio</p>
							<a href="javascript:void(0)"><span><i class="fa fa-search" aria-hidden="true"></i></span></a>
						</li>
						<li>
							<p>Portfolio</p>
							<a href="javascript:void(0)"><span><i class="fa fa-search" aria-hidden="true"></i></span></a>
						</li>
						<li>
							<p>Portfolio</p>
							<a href="javascript:void(0)"><span><i class="fa fa-search" aria-hidden="true"></i></span></a>
						</li>
						<li>
							<p>Portfolio</p>
							<a href="javascript:void(0)"><span><i class="fa fa-search" aria-hidden="true"></i></span></a>
						</li>
					</ul>
					<div class="portfolio-btn">
						<a href="#">All View</a>
					</div>
				</div>		 -->
				<!--end-portfolio-->
			</div>
			
		</section>
		<!-- Pricing Section End -->
		<!-- compaany-logo-->
		<!-- <div class="company-logo">
			<div class="uk-width-large-8-10 uk-width-medium-1-1 uk-width-small-8-10 uk-container-center">
				<div class="uk-slidenav-position idz-testimonial-slider" data-uk-slideshow="{autoplay: true, animation: 'scroll'}">
					<ul class="uk-slideshow">
						<li>
							<img src="images/images.png">

						</li>
						<li>
							<img src="images/images.png">

						</li>
						
					</ul>
					<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
					<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideshow-item="next"></a>
				</div>
			</div>
		</div> -->
		<!-- end-company-logo-->
		<!-- Features Section -->
		<section id="idz-features" class="uk-position-relative idz-padding bg-parallax1" data-uk-parallax="{bg: -100}">
			
			<div class="uk-container uk-container-center">
				<div class="uk-grid">
						
					<div class="uk-width-medium-2-3 uk-container-center">
						<div class="idz-intro-text uk-text-center">
							<p class="idz-text-white">Comprehensive tools and training help</p>
							<h1 class="idz-text-white">All the tools you need to succees</h1>
						</div>
					</div>
				
				</div>

				<ul class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-width-small-1-2 idz-list-divider">
					<li>
						<div class="idz-list-item">
							<div class="icon-wrap large circle center white">
								<i class="uk-icon-paint-brush"></i>
							</div>
							<h3 class="idz-text-22px idz-text-white uk-text-center">Design it your way</h3>
							<ul class="uk-list idz-list-check white">
								<li>Excellent Design &amp; Development </li>
								<li>Custom &amp; Responsive Design</li>
								<li>Blogs, including WordPress</li>
							</ul>
						</div>
					</li>
					<li>
						<div class="idz-list-item">
							<div class="icon-wrap large circle center white">
								<i class="uk-icon-lock"></i>
							</div>
							<h3 class="idz-text-22px idz-text-white uk-text-center">Security Suited </h3>
							<ul class="uk-list idz-list-check white">
								<li>Malware scanning</li>
								<li>Highly secure data center</li>
								<li>Network scanning</li>
							</ul>
						</div>
					</li>
					<li>
						<div class="idz-list-item">
							<div class="icon-wrap large circle center white">
								<i class="uk-icon-bar-chart"></i>
							</div>
							<h3 class="idz-text-22px idz-text-white uk-text-center">Marketing Tools</h3>
							<ul class="uk-list idz-list-check white">
								<li>$100 Google Adwords offer</li>
								<li>Free YP.com listing</li>
								<li>Site Analytics Suite</li>
							</ul>
						</div>
					</li>
					<li>
						<div class="idz-list-item">
							<div class="icon-wrap large circle center white">
								<i class="uk-icon-life-bouy"></i>
							</div>
							<h3 class="idz-text-22px idz-text-white uk-text-center">Dedicated Support</h3>
							<ul class="uk-list idz-list-check white">
								<li>24/7 phone, email, &amp; chat</li>
								<li>Online Knowledgebase</li>
								<li>Video tutorials and forum</li>
							</ul>
						</div>
					</li>
				</ul>
			
				<!--<div class="uk-grid">
					<div class="uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1 uk-container-center uk-text-center">
						<a href="#" class="uk-button uk-button-large idz-button large outline white uppercase">See All Features <i class="uk-icon-angle-double-right"></i></a>
						<a href="#" class="uk-button idz-button large red uppercase uk-margin-left">Signup now! <i class="uk-icon-angle-double-right"></i></a> 
					</div>
				</div> -->

			</div>

			<div class="idz-color-overlay"></div>
		</section>
		<!-- Features Section End -->
		<section class="idz-padding" id="idz-pricing">

			

		
				<!--portfolio-->
				<div class="our-team">
					<div class="idz-intro-text uk-text-center">
						<p class="idz-text-blue idz-text-18px">Our Team</p>
						<h1>Meet the amazing team</h1>
					</div>
					<ul>
						<li>
							<div class="team-member">
								<img src="images/abhi.png">
								<p>
									Abhishek<br>
									<span>Founder & Promoter</span>
								</p>
							</div>
						</li>
						<li>
							<div class="team-member">
								<img src="images/kamalkishore.png">
								<p>
									kamal<br>
									<span>Founder and CEO</span>
								</p>
							</div>
						</li>
						<li>
							<div class="team-member">
								<img src="images/brajeshSir.png">
								<p>
									Brajesh Kumar<br>
									<span>Founder ,Director and Business Analyst</span>
								</p>
							</div>
						</li>
					</ul>
				</div>		
				<!--end-portfolio-->
					
		</section>
		<!-- Testimonials Section -->
		<section class="idz-padding home-testimonial">
			<div class="uk-container uk-container-center">
				<div class="uk-grid">

					<div class="uk-width-large-2-3 uk-width-medium-2-3 uk-container-center">
						<div class="idz-intro-text uk-text-center uk-margin-bottom">
							<h1>See why our customers love us</h1>
						</div>
					</div>

					<div class="uk-width-large-8-10 uk-width-medium-1-1 uk-width-small-8-10 uk-container-center testimonial-details">

						<div class="uk-slidenav-position idz-testimonial-slider" data-uk-slideshow="{autoplay: true, animation: 'scroll'}">
						    <ul class="uk-slideshow">
						        <li>
						        	<div class="uk-width-large-3-4 uk-width-medium-3-4  uk-width-small-8-10 uk-container-center">
							        	<div class="idz-testimonial-wrapper">
											<h3 class="idz-text-28 uk-margin-bottom-remove">Mr. Vikesh</h3>
											<p class="idz-text-18px idz-testi-subtitle uk-margin-remove idz-text-blue">Chemistry Classes</p>
											<blockquote><p>Techno Vihar is the best company I have used to handle my Web site and software development needs. They are responsive, professional and attentive.</p></blockquote>
											<!--<img src="images/sample/people1.jpg" alt="people1" class="idz-testi-img"> -->
										</div>
									</div>
						        </li>
						        <li>
						        	<div class="uk-width-large-3-4 uk-width-medium-3-4  uk-width-small-8-10 uk-container-center">
							        	<div class="idz-testimonial-wrapper">
											<h3 class="idz-text-28 uk-margin-bottom-remove">Mr. Brajesh</h3>
											<p class="idz-text-18px idz-testi-subtitle uk-margin-remove idz-text-blue">Physics Classes</p>
											<blockquote><p>Techno Vihar is the best company I have used to handle my Web site and software development needs. They are responsive, professional and attentive.</p></blockquote>
											<!--<img src="images/sample/people2.jpg" alt="people2" class="idz-testi-img">-->
										</div>
									</div>
						        </li>
						        <!-- <li>
						        	<div class="uk-width-large-3-4 uk-width-medium-3-4  uk-width-small-8-10 uk-container-center">
							        	<div class="idz-testimonial-wrapper">
											<h3 class="idz-text-28 uk-margin-bottom-remove">Lisa Lawrence</h3>
											<p class="idz-text-18px idz-testi-subtitle uk-margin-remove idz-text-blue">springfield, mo</p>
											<blockquote><p>Altis Hosting by far the best company I have used to handle my Web site and software development needs. They are responsive, professional and attentive.</p></blockquote>
											<img src="images/sample/people4.jpg" alt="people2" class="idz-testi-img">
										</div>
									</div>
						        </li> -->
					        </ul>
					        <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
					    	<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideshow-item="next"></a>
				        </div>

			        </div>

				</div>
			</div>
		</section>
		<!-- Testimonials Section End -->
		<!--footer-->
		<?php include 'footer.php';?>
		<!-- Footer End -->

		<!-- client area modal begin -->
        <?php include 'pop-up-form.php';?>
        <!-- client area modal end -->

		
       
    </body>
</html>
