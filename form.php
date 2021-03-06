<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta content="© mobil plus media" name="copyright"></meta>
<meta content="chargerstation, mobile phone charger, mobile charger, charger for event, chargerstation for event, mobile charger for event, töltőállomás, mobiltelefon töltőállomás" name="keywords"></meta>
<meta content="Buy or rent a mobile phone charging stations from us for events, venues in Europe! Perfect tool to solve the charging problems of all guests and have a great media surface!" name="description"></meta>
<title>Mobil+ Charger</title>
<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
<!-- Default Theme -->
<link rel="stylesheet" href="owl-carousel/owl.theme.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<style type="text/css">
#welcome, #link2, #link3, #link4, #link5, #link6, #link7, #link8, .whyBgImage, .bg-lightGray {
	opacity: 1; 
}
</style>

    <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>
    	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
</head>
<body>
  <div id="loader">
    <article class="fullheight">
      <div class="hgroup">
       	 <img alt="Brand" src="images/mobilPlus-brandBigAnim-eng.gif" width="223" height="138">
      </div>
    </article>
    </div>
<!-- loader -->
  <header id="intro">
    <article class="fullheight">
      <div class="hgroup">
        <img class="paddingArticleBottom shBox" alt="Brand" src="images/mobilPlus-brandBig-eng.svg">
        	<div class="linkWrap">
              <h3><a href="#link7">Buy or rent Now</a></h3>
              <h3><a href="#welcome">Find out more</a></h3>
            </div> 
      </div>
      <div class="openingTitles">
       </div> 
    </article>
<nav class="navbar navbar-default" id="nav">
  <div class="container-fluid">
    <div class="container paddingZero">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#welcome">
      	<img alt="Brand" src="images/mobilPlus-brand-eng.svg">
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<span class="phoneNumber pull-right hidden-xs ">
            <span class="social">
            <a href="https://www.facebook.com/mobilplusmedia" target="_blank" class="iconSocial iconFacebook"></a>
            <a href="#" class="iconSocial iconPhone"></a>
            </span>
        	<strong>Call Now</strong> +36 1 290 9654
		</span>
		<ul class="nav navbar-nav navbar-right">
        <li><a href="#link2">What? <span class="sr-only">(current)</span></a></li>
        <li><a href="#link3">Why?</a></li>
        <li><a href="#link4">Product</a></li>
        <li><a href="#link6">Clients</a></li>
        <li><a href="#link7">Contact</a></li>
		</ul>
    </div><!-- /.navbar-collapse -->
   </div> <!-- /.container -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<div class="container-fluid bottomGradient">  
<div class="container paddingZero">
	<article class="row paddingArticleTop" id="welcome">
	    <div class="col-md-6 col-md-offset-3">
			<h1>Do you know the feeling</h1>
			<h2>when your mobile phone is running out of battery in the middle of a busy day or a stressy situation?</h2>
		</div>
		<div class="col-sm-4 col-md-4">
			<h1>We do.</h1>
			<h2>That is why we are here to offer our Mobile+ Charger.</h2>
            <img src="images/mobilPlus-tabletMobilIcon.svg" class="img-responsive center-block iconPadding" alt="Responsive image">
			<p>Mobil+ media has been developing, producing, selling and renting mobile phone charging stations since 2006 to all type of venues/events with customers, who could be in a need of electricity with their mobile phones, tablets, or any other electrical devices.</p>
		</div>
		<div class="col-sm-4 col-md-4">
			<img src="images/mobilPlus-classic-sideAll-eng.png" alt="Responsive image" width="295" height="590" class="img-responsive center-block mainProduct">
		</div>
		<div class="col-sm-4 col-md-4">
			<h1>We do.</h1>
			<h2>That is why we are here to offer our Mobile+ Charger.</h2>
            <img src="images/mobilPlus-chargingIcon.svg" class="img-responsive center-block iconPadding" alt="Responsive image">
			<p>The need for electricity, recharging of mobile equipments has been growing ever since then, specially with the introduction of smart phones and the development of other mobile devices (tablets, iPads, media players, etc.).</p>
        </div>
	</article><!--Do you know the feeling-->
</div><!--container main-->
</div><!--container fluid-->
<div class="container-fluid bg-lightGray">
	<div class="container paddingZero">           
	<article class="row paddingArticleBottomSmaller " id="link2">
	    <div class="col-md-12">
			<h1 class="paddingTop">What is the Mobil+ Charger?</h1>
        </div>
		<div class="col-md-4 col-md-offset-2">
			<p class="paddingTop">The mobil+ charging station works as a self service charger for all types of smart phones, tablets, and other devices, with a locker function for safety. It also has an extra value with the illuminated advertising surface for the facility </p>
		</div>
		<div class="col-md-4">
			<p class="paddingTop"> Even a possible money generater by renting it for a 3rd party. The mobil+ charging station can be also branded with a logo, brand identity, special headline, etc. for an even stronger impact on customers.</p>		
        </div>
        <div class="col-xs-12 col-md-12 paddingTop tagsWord">
        <ul class="center-block">
        	<li>Innovative, very much needed and appreciated service to customers</li>
        	<li>Works with a safe locker system</li>
        	<li>All smart phones can be charged (iPhone, USB)</li>
        	<li>Self service</li>
        	<li>Tablet and other device charging option</li>
        	<li>Branding possibility</li>
        	<li>Very visible, illuminated advertising surface</li>
        </ul>
<!--		Innovative, very much needed and appreciated service to customers
            <span class="label label-default label-small">Works with a safe locker system</span>
            <span class="label label-default label-small">All smart phones can be charged (iPhone, USB)</span>
            <span class="label label-default label-small">Self service</span>
            <span class="label label-default label-small">Tablet and other device charging option</span>
            <span class="label label-default label-small">Branding possibility</span>
            <span class="label label-default label-small">Very visible, illuminated advertising surface</span>
-->        </div>  
	</article><!--What is the mobil+charger?-->
  </div><!--container-->  
</div><!--container fluid-->   
<div class="container-fluid bg-orange whyBgImage">
	<div class="container paddingZero">              
	<article class="row mainheight paddingArticle" id="link3">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<h1>Mobile Charger to all facilities with customers</h1>
            <h3>VENUES</h3>
			<p>shopping centers, restaurants, pubs, clubs, gyms, sport facilities, offices, hotels, banks, airport, etc. for long term placement.</p>
            <h3 class="shift">Events</h3>            
            <p class="lastItem">conferences, festivals, company days, etc., where the need of rechargebility of the mobile phone is essential to anyone.</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<h1>Why Mobile Charger helps your business?</h1>
            <h3>FOR VENUES</h3>
            	<div class="col-xs-12 col-sm-12 col-md-6">
                  <ul>
                      <li><strong>Improve</strong> your customer service</li>
                      <li><strong>Improve</strong> customer satisfaction level</li>
                      <li><strong>Gives</strong> a modern touch to your venue</li>
                      <li><strong>Drive</strong> foot traffic</li>
                  </ul>
                </div>  
            	<div class="col-xs-12 col-sm-12 col-md-6">
                  <ul>
                      <li><strong>Improve</strong> retention</li>
                      <li><strong>Helps</strong> in the competition race</li>
                      <li><strong>Welcome</strong> sponzors, advertisers</li>
                  </ul>
                </div>  
            	<div class="col-xs-12 col-sm-6 col-md-12">
            		<h3>FOR EVENTS</h3>
            	</div>
            	<div class="col-xs-12 col-sm-12 col-md-6">
                  <ul>
                      <li><strong>Drive</strong> crowd to your spot</li>
                      <li><strong>Increase</strong> interactions</li>
                      <li><strong>Communicate</strong> your brand strongly</li>
                  </ul>
                </div>  
            	<div class="col-xs-12 col-sm-12 col-md-6">
                  <ul>
                      <li><strong>Gives</strong> a modern touch to your brand/venue</li>
                      <li><strong>Advertise</strong> to your audience</li>
                  </ul>
                </div>  
		</div>
	</article> <!--Why MobileCharger-->   
  </div><!--container-->  
</div><!--container fluid-->  
<div class="container">       
	<article class="row mainheight productLine paddingArticle" id="link4">
	    <div class="col-md-12">
             <h1>Mobile+ Charger models</h1>
            <h2>available to buy or rent</h2>
        </div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img class="center-block img-responsive" src="images/mobilPlus-classicProduct2@-1.jpg" width="246" height="623" alt=""/>
              <h4>"Classic 6"</h4> 
			<p>for normal traffic places <br>
		    (restaurants, pubs, <br>
		    offices, etc.)</p>
            <section class="simple">
              <div class="boxIcon phone lastItem">
                  <h5>6</h5>
              </div>
            </section> 
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img class="center-block img-responsive clear" src="images/mobilPlus-classicProduct2@-2.jpg" width="246" height="623" alt=""/>
              <h4>"Classic 6+tablet"</h4> 
			<p>with the innovation for tablets and<br>
other devices (shopping centers, conferences, etc.)</p>
            <section class="double">
              <div class="boxIcon phone">
                  <h5>6</h5>
              </div>
              <div class="boxIcon tablet">
                  <h5>1</h5>
              </div>
            </section> 
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img class="center-block img-responsive clear" src="images/mobilPlus-classicProduct2@-3.jpg" width="246" height="623" alt=""/>
              <h4>"Classic 12" </h4> 
			<p>with doubled charging capacity for
heavy traffic places (conferences centers,exhibitions, festivals)</p>
            <section class="simple">
              <div class="boxIcon phone">
                  <h5>12</h5>
              </div>
            </section> 
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="images/mobilPlus-productLineClassicWireframe.png" alt="Responsive image" width="246" height="623" class="img-responsive center-block clear">
            <h4 class="sizes">Sizes </h4> 
            <p>„classic” modell<br>
            65 x 190 x 17 cm <br>
            illuminated media surface<br>
            54 x 71 cm</p>
		</div>  
      <div class="row paddingTop">  
		<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-3">
        	<img class="center-block img-responsive" src="images/mobilPlus-metalProduct.jpg" width="263" height="608" alt=""/>
			<h4>"Metal+tablet" </h4> 
            <p>the big brother, with more charger, more device and advertising surface options,  (wellness centers, sport halls, gyms)</p>
            <section class="double">
              <div class="boxIcon phone">
                  <h5>6</h5>
              </div>
              <div class="boxIcon tablet lastItem">
                  <h5>1</h5>
              </div>
            </section>             
	  </div>
		<div class="col-xs-12 col-sm-6 col-md-3">
            <img class="center-block img-responsive clear" src="images/mobilPlus-productLineMetalWireframe.png" width="263" height="608" alt=""/>
            <h4 class="sizes">Sizes </h4> 
			<p>„metal” modell
				<br>
			  75 x 185 x 30 cm
				<br>
			  illuminated media surface<br>
			  42 x 152 cm front panel
				<br>
			  23 x 150 cm 2pcs side panel</p>
		</div>
      </div>  
  </article> <!--mobil+ charging station models--> 
  <hr>
  <article class="row paddingArticle" id="link5">
	    <div class="col-md-12">
			<h1>How does it work?</h1>
            <h2>six easy step to follow</h2>
        </div>
       <ul class="gallery">
        	<li class="col-xs-12 col-sm-6 col-md-4">
            	<a href="">
                <div>
                  <span class="zoom zoom-1"></span>
                  <div class="cell">
					<img src="images/mobilPlus-howDoesGfx.svg"  alt="" class="img-responsive" >  
                  </div>
        			<img src="images/mobilPlus-howDoes-4.jpg" width="362" height="284" alt="" class="img-responsive">
                </div>   
            	</a>
            </li>
        	<li class="col-xs-12 col-sm-6 col-md-4">
            	<a href="">
                <div>
                  <span class="zoom zoom-2"></span>
                  <div class="cell">
					<img src="images/mobilPlus-howDoesGfx-2.svg"  alt="" class="img-responsive">  
                  </div>
        			<img src="images/mobilPlus-howDoes-2.jpg" width="362" height="284" alt="" class="img-responsive">
                </div>   
            	</a>
            </li>
        	<li class="col-xs-12 col-sm-6 col-md-4">
            	<a href="">
                <div>
                  <span class="zoom zoom-3"></span>
                  <div class="cell">
					<img src="images/mobilPlus-howDoesGfx-3.svg"  alt="" class="img-responsive">  
                  </div>
        			<img src="images/mobilPlus-howDoes-3.jpg" width="362" height="284" alt="" class="img-responsive">
                </div>   
            	</a>
            </li>
        	<li class="col-xs-12 col-sm-6 col-md-4 marginLiBottom">
            	<a href="">
                <div>
                  <span class="zoom zoom-4"></span>
                  <div class="cell">
					<img src="images/mobilPlus-howDoesGfx-4.svg"  alt="" class="img-responsive">  
                  </div>
        			<img src="images/mobilPlus-howDoes-5.jpg" width="362" height="284" alt="" class="img-responsive">
                </div>   
            	</a>
            </li>
        	<li class="col-xs-12 col-sm-6 col-md-4 marginLiBottom">
            	<a href="">
                <div>
                  <span class="zoom zoom-3"></span>
                  <div class="cell">
					<img src="images/mobilPlus-howDoesGfx-5.svg"  alt="" class="img-responsive">  
                  </div>
        			<img src="images/mobilPlus-howDoes-3.jpg" width="362" height="284" alt="" class="img-responsive">
                </div>   
            	</a>
            </li>
        	<li class="col-xs-12 col-sm-6 col-md-4 marginLiBottom">
            	<a href="">
                <div>
                  <span class="zoom zoom-6"></span>
                  <div class="cell">
					<img src="images/mobilPlus-howDoesGfx-6.svg"  alt="" class="img-responsive">  
                  </div>
        			<img src="images/mobilPlus-howDoes-1.jpg" width="362" height="284" alt="" class="img-responsive">
                </div>   
            	</a>
            </li>
        </ul>
	</article> <!--how does it work-->
  <hr>
	<article class="row paddingArticle clients" id="link6">
		<span class="12">
			<h1>Our Clients</h1>
            <h2>who charge with us</h2>
        </span>
	    <span class="12">
			<h4 class="sizes">VENUES</h4>
        </span>
		<div id="owl-demo" class="owl-carousel owl-theme">
			<div class="item">
				<a class="fancybox" data-fancybox-group="venues" href="images/clients/mobilPlus-clients-venues-airport.jpg" title="VIP Lounge">
					<img class="img-responsive img-circle center-block lazyOwl"  data-src="images/clients/mobilPlus-clients-venues-airportTn.jpg" width="130" height="130" alt="">
					<h5>Liszt Ferenc Airport</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="venues" href="images/clients/mobilPlus-clients-venues-mom.jpg" title="VIP Lounge">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-venues-momTn.jpg" width="130" height="130" alt="">
					<h5>MOM Park Shopping Center</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="venues" href="images/clients/mobilPlus-clients-venues-alle.jpg" title="VIP Lounge">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-venues-alleTn.jpg" width="130" height="130" alt="">
					<h5>Allee Shopping Center</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="venues" href="images/clients/mobilPlus-clients-venues-korzo.jpg" title="VIP Lounge">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-venues-korzoTn.jpg" width="130" height="130" alt="" class="img-responsive img-circle center-block">
					<h5>KORZÓ Shopping Center</h5>
				</a>              
			</div>   
			<div class="item">
				<a class="fancybox" data-fancybox-group="venues" href="images/clients/mobilPlus-clients-venues-fitnesFactory.jpg" title="VIP Lounge">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-venues-fitnesFactoryTn.jpg" width="130" height="130" alt="">
					<h5>Fitness Factory</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="venues" href="images/clients/mobilPlus-clients-venues-prima.jpg" title="VIP Lounge">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-venues-primaTn.jpg" width="130" height="130" alt="">
					<h5>Príma Wellness</h5>
				</a>              
			</div>                                                                              
    </div><!--owl vanues -->
	    <span class="12">
			<h4 class="sizes">EVENTS</h4>
        </span>
		<div id="owl-demo-2" class="owl-carousel owl-theme">
			<div class="item">
				<a class="fancybox" data-fancybox-group="events" href="images/clients/mobilPlus-clients-events-eu.jpg" title="Palace of Arts">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-events-euTn.jpg" width="130" height="130" alt="">
					<h5>EU conference</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="events" href="images/clients/mobilPlus-clients-events-sound.jpg" title="Palace of Arts">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-events-soundTn.jpg" width="130" height="130" alt="">
					<h5>Balaton Sound Festival</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="events" href="images/clients/mobilPlus-clients-events-volt.jpg" title="Palace of Arts">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-events-voltTn.jpg" width="130" height="130" alt="">
					<h5>Volt Festival</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="events" href="images/clients/mobilPlus-clients-events-olx.jpg" title="Palace of Arts">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-events-olxTn.jpg" width="130" height="130" alt="">
					<h5>OLX relax</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="events" href="images/clients/mobilPlus-clients-events-arena.jpg" title="Palace of Arts">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-events-arenaTn.jpg" width="130" height="130" alt="">
					<h5>Arena Festival</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="events" href="images/clients/mobilPlus-clients-events-motorola.jpg" title="Palace of Arts">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-events-motorolaTn.jpg" width="130" height="130" alt="">
					<h5>Motorola Conference</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="events" href="images/clients/mobilPlus-clients-events-smartMobil.jpg" title="Palace of Arts">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-events-smartMobilTn.jpg" width="130" height="130" alt="">
					<h5>Smart Mobile Conference</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="events" href="images/clients/mobilPlus-clients-events-mol.jpg" title="Palace of Arts">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-events-molTn.jpg" width="130" height="130" alt="">
					<h5>MOL Festival</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="events" href="images/clients/mobilPlus-clients-events-funzine.jpg" title="Palace of Arts">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-events-funzineTn.jpg" width="130" height="130" alt="">
					<h5>Funzine Magazin</h5>
				</a>              
			</div>      
			<div class="item">
				<a class="fancybox" data-fancybox-group="events" href="images/clients/mobilPlus-clients-events-reklamFest.jpg" title="Palace of Arts">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-events-reklamFestTn.jpg" width="130" height="130" alt="">
					<h5>Reklam Fest</h5>
				</a>              
			</div>   
			<div class="item">
				<a class="fancybox" data-fancybox-group="events" href="images/clients/mobilPlus-clients-events-reklamWeek.jpg" title="Palace of Arts">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-events-reklamWeekTn.jpg" width="130" height="130" alt="">
					<h5>Reklam Week</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="events" href="images/clients/mobilPlus-clients-events-szinFest.jpg" title="Palace of Arts">
					<img class="img-responsive img-circle center-block lazyOwl" data-src="images/clients/mobilPlus-clients-events-szinFestTn.jpg" width="130" height="130" alt="">
					<h5>Szin Fest</h5>
				</a>              
			</div>
    </div><!--owl events -->
	    <span class="12">
			<h4 class="sizes">ADVERTISERS</h4>
        </span>
		<div id="owl-demo-3" class="owl-carousel owl-theme">
			<div class="item">
				<a class="fancybox" data-fancybox-group="ad" href="images/clients/mobilPlus-clients-ad-vodafone.jpg" title="Palace of Arts">
					<img data-src="images/mobilPlus-clients-advetisers-1.svg" width="130" height="130" alt="" class="img-responsive img-circle center-block lazyOwl">
					<h5>Vodafone</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="ad" href="images/clients/mobilPlus-clients-ad-telekom.jpg" title="Palace of Arts">
					<img data-src="images/mobilPlus-clients-advetisers-2.svg" width="130" height="130" alt="" class="img-responsive img-circle center-block lazyOwl">
					<h5>Deutsche Telekom</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="ad" href="images/clients/mobilPlus-clients-ad-telenor.jpg" title="Palace of Arts">
					<img data-src="images/mobilPlus-clients-advetisers-3.svg" width="130" height="130" alt="" class="img-responsive img-circle center-block lazyOwl">
					<h5>Telenor</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="ad" href="images/clients/mobilPlus-clients-ad-volkswagen.jpg" title="Palace of Arts">
					<img data-src="images/mobilPlus-clients-advetisers-4.svg" width="130" height="130" alt="" class="img-responsive img-circle center-block lazyOwl">
					<h5>Volkswagen</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="ad" href="images/clients/mobilPlus-clients-ad-peugeot.jpg" title="Palace of Arts">
					<img data-src="images/mobilPlus-clients-advetisers-5.svg" width="130" height="130" alt="" class="img-responsive img-circle center-block lazyOwl">
					<h5>Peugeot</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="ad" href="images/clients/mobilPlus-clients-ad-landRover.jpg" title="Palace of Arts">
					<img data-src="images/mobilPlus-clients-advetisers-6.svg" width="130" height="130" alt="" class="img-responsive img-circle center-block lazyOwl">
					<h5>Land Rover</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="ad" href="images/clients/mobilPlus-clients-ad-playboy.jpg" title="Palace of Arts">
					<img data-src="images/mobilPlus-clients-advetisers-7.svg" width="130" height="130" alt="" class="img-responsive img-circle center-block lazyOwl">
					<h5>Playboy</h5>
				</a>              
			</div>
			<div class="item">
				<a class="fancybox" data-fancybox-group="ad" href="images/clients/mobilPlus-clients-ad-avon.jpg" title="Palace of Arts">
					<img data-src="images/mobilPlus-clients-advetisers-8.svg" width="130" height="130" alt="" class="img-responsive img-circle center-block lazyOwl">
					<h5>AVON</h5>
				</a>              
			</div>
    </div><!--owl advetisers -->
	</article> <!--Our Clients-->
</div><!--container-->
<div class="container-fluid bg-lightGrayOK">
	<div class="container paddingZero">
    	<section class="row paddingArticle" id="link7">
          <div class="col-xs-12 col-md-12">
			<h1>Contact Us</h1>
           		<a name="contact">
 					<h2>keep in touch</h2>
 				</a>
          </div>
		<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-2">
			<address>
  				<strong>Mobil Plus Media Ltd.</strong><br>
 				H-1184 Budapest, Gyöngyvirág u. 24c <br>
                Hungary<br>
				tel./fax: +36 1 290 9654
            </address>    
			<address>
				<strong>Kisteleki Zsuzsanna</strong><br>
				mobil: +36 30 507 1608<br>
			  <a href="mailto:zsuzsa.kisteleki@mobilepluscharger.com">zsuzsa.kisteleki(at)mobilepluscharger.com</a>
			</address>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-2">
			<form action="http://www.varadi.tv/works/mobilplus/web/form.php#contact" method="post" role="form">
           	 <div class="form-group">
              <label for="exampleInputEmail1">First name<span class="required">required</span></label>
              <input name="firstname" type="text" class="form-control" id="exampleInputEmail1" >
           	 </div>
           	 <div class="form-group">
              <label for="exampleInputPassword1">Last name<span class="required">required</span></label>
              <input name="lastname" type="text" class="form-control" id="exampleInputEmail1" >
           	 </div>
           	 <div class="form-group">
              <label for="exampleInputPassword1">Email address<span class="required">required</span></label>
              <input name="email" type="email" class="form-control" id="exampleInputPassword1" >
           	 </div>		             		
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3">
              <label for="exampleInputPassword1">Your message</label>
              <textarea name="textarea" class="form-control" rows="9"></textarea>
              <input class="btn btn-primary btn-block" type="submit" value="Submit"></input>
              <br>
  <!--php starts-->
  <?
		function show_form()
{
 echo"<div align='center' class='kenyer'>please fill out the email section</div>";
}
$name=$_POST['firstname'];
$name=$_POST['lastname'];
$email=$_POST['email'];
$textarea=$_POST['textarea'];

$to="Mobil+ Charger<zsuzsa.kisteleki@mobilepluscharger.com>";
//$to="Laszlo Pop <training@argintinternational.com>";
//$message="$firstName $lastName has just sent you a Training Registration\n\nTraining type $select\n\nTitle: $title\n\nFirstname: $firstName\n\nLastname: $lastName\n\nPhone: $phoneContact\n\nEmail: $email\n\nProfession: $selectKetto\n\nCompany name: $companyName\n\nCompany address: $companyAddress\n\nAccomodation: $selectHarom\n\nAccompany name: $accompanyName\n\nPayment options: $selectNegy\n\nComments: $textarea\n\nPrivacy statement: $checkboxEgy";


$subject = "Enquiry to Mobil+ Charger";
/**/
require("class.phpmailer.php");
$mail = new PHPMailer();

$mail->From = $to;
$mail->FromName = " Mobil+ Charger";
$mail->SingleTo = true;
$mail->AddAddress($to, "");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $subject;
$message= '
<html>
<head>
  <title>'.$subject.'</title>
<style type="text/css">
.style14 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; color: #000000; }
</style>
</head>
<body leftmargin="0" rightmargin="0" topmargin="0">
<table style="font-family:Arial, Helvetica, sans-serif; font-size: 13px; line-height: 120%;" width="650" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><br>
      <br>
      <br>
      <table style=" font-family: Arial, Helvetica, sans-serif;" width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><span class="style14"><img src="http://www.varadi.tv/argint/images/topBox2.jpg" width="100%" height="12" /></span></td>
        </tr>
        <tr>
          <td bgcolor="#C9C9C9"><table width="633" border="0" cellpadding="0" cellspacing="3" style="margin-left: 10px; font-size:13px;">
            <tbody>
              <tr>
                <td height="30" colspan="2" align="center" valign="middle" class="td1"><strong>Enquiry to Mobil+ Charger</strong></td>
              </tr>
              <tr>
                <td valign="top" class="td1"><span class="kenyer">Firstname</span></td>
                <td valign="top" class="td2"><span class="p5">'.$firstname.'</span></td>
              </tr>
              <tr>
                <td width="170" valign="top" class="td1"><p class="p6"><span class="kenyer">Lastname</span><br>
                </p></td>
                <td valign="top" class="td2"><p class="p5">'.$lastname.'</p></td>
              </tr>
              <tr>
                <td width="170" valign="top" class="td1"><p class="p6"><span class="kenyer">E-mail </span><br>
                </p></td>
                <td valign="top" class="td2"><p class="p5">'.$email.'</p></td>
              </tr>
              <tr>
                <td width="170" valign="top" class="td3"><p class="p5"><span class="kenyer">Message</span></p></td>
                <td valign="top" class="td4"><p class="p5">'.$textarea.'</p></td>
              </tr>
            </tbody>
          </table></td>
        </tr>
        <tr>
          <td><span class="style14"><img src="http://www.varadi.tv/argint/images/bottomBox2.jpg" width="100%" height="10" /></span></td>
        </tr>
      </table>
      <br>
      <br></td>
  </tr>
</table>
</body>
</html>';
$mail->Body = $message;
/**/


 if (!isset($email) or !isset($name)) {
     show_form();
}
else {
  if (empty($email)) {
      echo "<div align='center' class='style15'>Please fill out the first name form</div>";}
if (empty($lastname)) {
      echo "<div align='center' class='style15'>Please fill out the last name form</div>";
  }
  if (empty($firstname)) {
      echo "<div align='center' class='style15'>Please fill out the email form</div>";
  }
else {
//     if (empty($subject)) { 
//             $subject="Online Training Registration";  }
//
//     $sent = mail( "Laszlo Pop <andris@varadi.tv>", 
//                $subject,$message, "From: $email" );

     if($mail->Send()) {
		echo "<div align='center' class='style15'>Thank you for your enquiry, we will get back to you soon</div>";  
     }
     else {
        echo "<div align='left' class='linkbig'>There is a Problem:</div>
              <br><div align='left' class='style2'>The server was unable to send your
                   mail.</div>";
        }

$u_to_address = $email;
$u_from_address = $to;
$u_txt = implode('', file('automail.txt'));
$u_subject = 'Thank you';
print " ";
//mail($u_to_address, $u_subject, $u_txt, "From: $u_from_address");
  }
}
?>
  <!--php ends-->
              
        </div>  
        </form>
	</section> <!--Our Clients-->  
  </div><!--container-->  
</div><!--container fluid-->      
<div class="container-fluid bg-darkGray">
  <footer class="container paddingZero">
    <div class="row">
 	   <div class="col-xs-12 col-md-6 pull-left">
       	<span class="brandCenterPhone">
           <a href="#">
              <img class="brandSmall"alt="Brand" src="images/mobilPlus-brandFooterSmall.svg">
           </a>
         </span>
          <p>Copyright © 2015 Mobile+ Charger | webdesign: <a href="http://www.varadi.tv" target="_blank">www.varadi.tv</a></p>      	</div>
      <div class="col-xs-12 col-md-6 pull-right footerRight">
      	<span class="socialCenterPhone">
     		<span class="language"> 
            	<a href="#">HUN</a>
            </span>
        </span>
        <span class="socialCenterPhone">
            <span class="social">
            	<a href="https://www.facebook.com/mobilplusmedia" target="_blank" class="iconSocial iconFacebook"></a>
                <a href="#" class="iconSocial iconPhone"></a></span>
            </span>
        </span>     
            <span class="phoneNumber">
            	<strong>Call Now</strong> +36 1 290 9654
            </span>
      	</div>        
    </div>  <!--row-->
  </footer><!--container-->
</div><!--container fluid-->
<script type="text/javascript" src="js/jquery.scrollmagic.min.js"></script>
<script type="text/javascript" src="js/TweenMax.min.js"></script>
<script src="js/respond.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="owl-carousel/owl.carousel.js"></script>
     <script>
    $(document).ready(function() {

      var owl = $("#owl-demo");
	 

      owl.owlCarousel({

      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1199,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [979,3], // 3 items betweem 900px and 601px
      itemsTablet: [768,2], //2 items between 600 and 0;
      itemsMobile :  	[479,1], // itemsMobile disabled - inherit from itemsTablet option
	   lazyLoad : true,
      });
	  
      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })
      $(".play").click(function(){
        owl.trigger('owl.play',1000);
      })
      $(".stop").click(function(){
        owl.trigger('owl.stop');
      })
	
	var owldos = $("#owl-demo-2");

   owldos.owlCarousel({

      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1199,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [979,3], // 3 items betweem 900px and 601px
      itemsTablet: [768,2], //2 items between 600 and 0;
      itemsMobile :  	[479,1], // itemsMobile disabled - inherit from itemsTablet option
	   lazyLoad : true,
      });
	  
      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })
      $(".play").click(function(){
        owl.trigger('owl.play',1000);
      })
      $(".stop").click(function(){
        owl.trigger('owl.stop');
      })
	  
		var owltres = $("#owl-demo-3");

   owltres.owlCarousel({

      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1199,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [979,3], // 3 items betweem 900px and 601px
      itemsTablet: [768,2], //2 items between 600 and 0;
      itemsMobile :  	[479,1], // itemsMobile disabled - inherit from itemsTablet option
	   lazyLoad : true,
      });
	  
      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })
      $(".play").click(function(){
        owl.trigger('owl.play',1000);
      })
      $(".stop").click(function(){
        owl.trigger('owl.stop');
      })

    });
	
    </script>
<script src="js/script.js"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
  <a class="fancybox" data-fancybox-group="vanues" href="images/gallery/babolygo/babolygo-epulet-02.jpg"></a>
</html>
