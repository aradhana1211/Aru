<?php include"database.php";?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Penabiotech International</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	
	
    <!-- favicon -->
    <link rel="icon" type="image/png" href="images/logo.png" />
	
	<link rel="stylesheet" href="med/css/bootstrap.min.css">
	<link rel="stylesheet" href="med/css/animations.css">
	<link rel="stylesheet" href="med/css/fonts.css">
	<link rel="stylesheet" href="med/css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="med/css/shop.css">
	<script src="med/js/vendor/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<style>


.ds {
     background-color: none!important;
}


.owl-carousel.partners-carousel a img {
    opacity: 1!important;
}

</style>
</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="fa fa-search"></i>
		</span>
	</button>
		<div class="widget widget_search">
			<form method="POST" class="searchform search-form form-inline" action="search.php">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> 
				<button type="submit" class="theme_button">Search</button> </form>
		</div>
	</div>
	
	
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->
		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			
			<section class="page_toplogo table_section table_section_md ls section_padding_top_5 section_padding_bottom_5">
				<div class="container">
					<div class="row">
						<div class="col-md-3 text-center text-md-left"> <a href="./" class="logo top_logo">
                    <img src="images/logo.png" alt="">
                </a> </div>
						<div class="col-md-6 text-center text-md-right">
							<div class="inline-teasers-wrap">
								<div class="teaser small-teaser media">
									<div class="media-left media-middle">
										<div class="teaser_icon size_small"> <img src="images/whatsapp.png" width="40px" height="40px"> </div>
									</div>
									<div class="media-body media-middle">
										<h4>+91 7990206696</h4>
										<p class="greylinks fontsize_12"> <a href="#!"><span>info@penabiotech.com</span></a> </p>
									</div>
								</div>
							</div>
						</div>
							<div class="col-md-3 text-center text-md-right">
						<!-- GTranslate: https://gtranslate.io/ -->
<a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="English" /></a><a href="#" onclick="doGTranslate('en|tl');return false;" title="Filipino" class="gflag nturl" style="background-position:-100px -300px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Filipino" /></a><a href="#" onclick="doGTranslate('en|hi');return false;" title="Hindi" class="gflag nturl" style="background-position:-500px -100px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Hindi" /></a><a href="#" onclick="doGTranslate('en|ru');return false;" title="Russian" class="gflag nturl" style="background-position:-500px -200px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Russian" /></a><a href="#" onclick="doGTranslate('en|es');return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Spanish" /></a><a href="#" onclick="doGTranslate('en|gu');return false;" title="Gujarati" class="gflag nturl" style="background-position:-600px -700px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Gujarati" /></a>

<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<br /><select onchange="doGTranslate(this);">
  <option value="">Select Language</option>
<option value="en|af">Afrikaans</option>
<option value="en|sq">Albanian</option>
<option value="en|ar">Arabic</option>
<option value="en|hy">Armenian</option>
<option value="en|az">Azerbaijani</option>
<option value="en|eu">Basque</option>
<option value="en|be">Belarusian</option>
<option value="en|bn">Bengali</option>
<option value="en|bs">Bosnian</option>
<option value="en|bg">Bulgarian</option>
<option value="en|ca">Catalan</option>
<option value="en|ceb">Cebuano</option>
<option value="en|zh-CN">Chinese (Simplified)</option>
<option value="en|zh-TW">Chinese (Traditional)</option>
<option value="en|hr">Croatian</option>
<option value="en|cs">Czech</option>
<option value="en|da">Danish</option>
<option value="en|nl">Dutch</option>
<option value="en|en">English</option>
<option value="en|eo">Esperanto</option>
<option value="en|et">Estonian</option>
<option value="en|tl">Filipino</option>
<option value="en|fi">Finnish</option>
<option value="en|fr">French</option
<option value="en|gl">Galician</option>
<option value="en|ka">Georgian</option>
<option value="en|de">German</option>
<option value="en|el">Greek</option>
<option value="en|gu">Gujarati</option>
<option value="en|ha">Hausa</option>
<option value="en|ht">Haitian Creole</option>
<option value="en|iw">Hebrew</option>
<option value="en|hi">Hindi</option>
<option value="en|hmn">Hmong</option>
<option value="en|hu">Hungarian</option>
<option value="en|is">Icelandic</option>
<option value="en|ig">Igbo</option>
<option value="en|id">Indonesian</option>
<option value="en|ga">Irish</option>
<option value="en|it">Italian</option>
<option value="en|ja">Japanese</option>
<option value="en|jw">Javanese</option>
<option value="en|kn">Kannada</option>
<option value="en|km">Khmer</option>
<option value="en|ko">Korean</option>
<option value="en|lv">Latvian</option>
<option value="en|lo">Lao</option>
<option value="en|la">Latin</option>
<option value="en|lt">Lithuanian</option>
<option value="en|mk">Macedonian</option>
<option value="en|ms">Malay</option>
<option value="en|mt">Maltese</option>
<option value="en|mi">Maori</option>
<option value="en|mr">Marathi</option>
<option value="en|mn">Mongolian</option>
<option value="en|ne">Nepali</option>
<option value="en|no">Norwegian</option>
<option value="en|fa">Persian</option>
<option value="en|pl">Polish</option>
<option value="en|pt">Portuguese</option>
<option value="en|pa">Punjabi</option>
<option value="en|ro">Romanian</option>
<option value="en|ru">Russian</option>
<option value="en|sr">Serbian</option>
<option value="en|sk">Slovak</option>
<option value="en|sl">Slovenian</option>
<option value="en|so">Somali</option>
<option value="en|es">Spanish</option>
<option value="en|sw">Swahili</option>
<option value="en|sv">Swedish</option>
<option value="en|ta">Tamil</option>
<option value="en|te">Telugu</option>
<option value="en|th">Thai</option>
<option value="en|tr">Turkish</option>
<option value="en|uk">Ukrainian</option>
<option value="en|ur">Urdu</option>
<option value="en|vi">Vietnamese</option>
<option value="en|cy">Welsh</option>
<option value="en|yo">Yoruba</option>
<option value="en|yi">Yiddish</option>
<option value="en|zu">Zulu</option>
    
    </select><div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>
	</div>
					</div>
				</div>
			</section>
			
			
			<header class="page_header header_color toggler_left">
				<div class="container" style="margin-right: 0px!important;margin-left:0px!important">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_mainmenu display_table_cell">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li > <a href="index.php">HOME</a></li>
										<li > <a href="categories.php">PRODUCTS</a></li>
										<li > <a href="third_party.php">THIRD PARTY MANUFACTURER</a></li>
										<li> <a href="services.php">SERVICES</a></li>
										<li> <a href="quality_mgmt.php">QUALITY MANAGEMENT</a></li>
										<li> <a href="contact_us.php">CONTACT US</a></li>
										
									</ul>
								</nav>
								<!-- eof main nav -->
								<!-- header toggler --><span class="toggle_menu"><span></span></span>
							</div>
							<div class="header_right_buttons cs display_table_cell text-right">
								<ul class="inline-list menu greylinks ">
								<li> <a href="index.php" class="header-button">
								<i class="fa fa-home" aria-hidden="true"></i>
							</a> </li>
							<li> <a href="#" class="search_modal_button header-button">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a> </li>
								
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>