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
    <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	 
	  ga('create', 'UA-63736351-1', 'auto');
	  ga('send', 'pageview');
	 
	</script>
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
              <h3><a style="width:260px" href="#link7">Osta tai vuokraa nyt!</a></h3>
              <h3><a style="width:260px" href="#welcome">Lisätietoa tästä:</a></h3>
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
        	<strong>Soita!</strong> +35 850 460 3578
		</span>
		<ul class="nav navbar-nav navbar-right">
        <li><a href="#link2">Mitä? <span class="sr-only">(current)</span></a></li>
        <li><a href="#link3">Mistä on kysymys?</a></li>
        <li><a href="#link4">Tuote</a></li>
        <li><a href="#link6">Asiakas</a></li>
        <li><a href="#link7">Yhteystiedot</a></li>
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
			<h1>Tiedätkö sen tunteen</h1>
			<h2>kun laitteestasi loppuu akku kesken kiireisen päivän?</h2>
		</div>
		<div class="col-sm-4 col-md-4">
			<h1>Me tiedämme. </h1>
			<h2>Sen vuoksi tarjoamme sinulle Mobile+latausratkaisua.</h2>
            <img src="images/mobilPlus-tabletMobilIcon.svg" class="img-responsive center-block iconPadding" alt="Responsive image">
			<p>Yrityksemme on kehittänyt, tuottanut, myynyt ja vuokrannut kännyköiden latausasemia vuodesta 2006 mitä erilaisimpiin paikkoihin ja tapahtumiin, joissa on tarvetta kännyköiden, tablettien tai muiden sähkölaitteiden lataamiselle.</p>
		</div>
		<div class="col-sm-4 col-md-4">
			<img src="images/mobilPlus-classic-sideAll-eng.png" alt="Responsive image" width="295" height="590" class="img-responsive center-block lastItem">
		</div>
		<div class="col-sm-4 col-md-4">
<!--			<h1>We do.</h1>
			<h2>That is why we are here to offer our Mobile+ Charger.</h2>
-->            <img src="images/mobilPlus-chargingIcon.svg" class="img-responsive center-block iconPadding iconPaddingBigger" alt="Responsive image">
			<p>Erilaisten mobiililaitteiden lataustarve on kasvanut jatkuvasti. Me vastasimme tähän haasteeseen kehittämällä Mobile+  latausasemakonseptin kännyköille, tableteille, iPadeille ja mediasoittimille.</p>
        </div>
	</article><!--Do you know the feeling-->
</div><!--container main-->
</div><!--container fluid-->
<div class="container-fluid bg-lightGray">
	<div class="container paddingZero">           
	<article class="row paddingArticleBottomSmaller" id="link2">
	    <div class="col-md-12">
			<h1 class="paddingTop">Mikä Mobile+ latausasema on?</h1>
        </div>
		<div class="col-md-4 col-md-offset-2">
			<p class="paddingTop">Mobile+ latausasema toimii itsepalveluna kaiken tyyppisille älypuhelimille, tableteille ja muille laitteille, ja lukollinen kaappi takaa turvallisuuden. Lisäarvona laitteessa on valaistu mainospinta. </p>
		</div>
		<div class="col-md-4">
			<p class="paddingTop"> Se toimii myös tulonlähteenä, jos sen vuokraa kolmannelle osapuolelle.

Mobile+ latausasema voidaan myös merkitä logolla, brändin tunnusmerkillä, otsikolla, jolloin se vaikuttaa tehokkaammin asiakkaisiin.
</p>		
        </div>
        <div class="col-xs-12 col-md-12 paddingTop tagsWord">
        <ul class="center-block">
        	<li>Se on innovatiivinen ja suojattu luotettavalla turvalukkosysteemillä.</li>
        	<li>Kaikkien älypuhelinten lataaminen on mahdollista (iPhone, USB)</li>
        	<li>Itsepalvelu</li>
        	<li>Mahdollisuus ladata tabletteja ja muita laitteita</li>
        	<li>Mahdollisuus brändäykseen.</li>
        	<li>Näkyvä, valaistu mainospinta.</li>
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
			<h1>Kuinka Mobile+ latausasema edistää liiketoimintaasi?</h1>
            <h3 style="width:260px">PAIKAT</h3>
			<p>Kauppakeskukset, ravintolat, pubit, kuntosalit, urheilupaikat, toimistot, hotellit, pankit, lentokenttä jne. pitkäaikaista sijoittamista varten.</p>
            <h3 class="shift" style="width:260px">TAPAHTUMAT</h3>            
            <p class="lastItem">Konferenssit, festivaalit ja yritysten tapahtumat, joissa erilaisten laitteiden lataamismahdollisuus on olennaista.</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<h1>Miksi kännykän latausasema on hyödyllinen yrityksellesi?</h1>
            <h3 style="width:260px">PAIKKOJA VARTEN</h3>
            	<div class="col-xs-12 col-sm-12 col-md-6">
                  <ul>
                      <li>Parantaa  asiakaspalvelua</li>
                      <li>Nostaa asiakastyytyväisyyttä</li>
                      <li>Antaa modernin kosketuksen</li>
                      <li>Kasvattaa kävijämäärää</li>
                  </ul>
                </div>  
            	<div class="col-xs-12 col-sm-12 col-md-6">
                  <ul>
                      <li>Asiakkaat viipyvät paikassa kauemmin</li>
                      <li>Parantaa kilpailukykyä</li>
                      <li>Houkuttelee sponsoreita ja mainostajia</li>
                  </ul>
                </div>  
            	<div class="col-xs-12 col-sm-6 col-md-12">
            		<h3 style="width:260px">TAPAHTUMIA VARTEN</h3>
            	</div>
            	<div class="col-xs-12 col-sm-12 col-md-6">
                  <ul>
                      <li>Vetää väkeä tilaisuuteen</li>
                      <li>Lisää vuorovaikutusta</li>
                      <li>Viestittää brändiä vahvasti</li>
                  </ul>
                </div>  
            	<div class="col-xs-12 col-sm-12 col-md-6">
                  <ul>
                      <li>Antaa paikalle ja brändille modernin ilmeen</li>
                      <li>Mainostaa tuotetta yleisölle</li>
                  </ul>
                </div>  
		</div>
	</article> <!--Why MobileCharger-->   
  </div><!--container-->  
</div><!--container fluid-->  
<div class="container">       
	<article class="row mainheight productLine paddingArticle" id="link4">
	    <div class="col-md-12">
             <h1>Kännykkä+ latausasemamallit</h1>
            <h2>Ostettavissa tai vuokrattavissa</h2>
        </div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img class="center-block img-responsive" src="images/mobilPlus-classicProduct2@-1.jpg" width="246" height="623" alt=""/>
              <h4>"Klassinen 6"</h4> 
			<p>Normaalit liikepaikat (ravintolat, pubit, toimistot jne.)</p>
            <section class="simple">
              <div class="boxIcon phone">
                  <h5>6</h5>
              </div>
            </section> 
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img class="center-block img-responsive clear" src="images/mobilPlus-classicProduct2@-2.jpg" width="246" height="623" alt=""/>
              <h4>"Klassinen 6+tabletti"</h4> 
			<p>Muut laitteet (kauppakeskukset, konferenssit jne.)</p>
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
              <h4>"Klassinen 12" </h4> 
			<p>Kaksinkertainen latauskapasiteetti suuriin tapahtumiin (konferenssit, näyttelyt, festivaalit)</p>
            <section class="simple">
              <div class="boxIcon phone lastItem">
                  <h5>12</h5>
              </div>
            </section> 
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="images/mobilPlus-productLineClassicWireframe.png" alt="Responsive image" width="246" height="623" class="img-responsive center-block clear">
            <h4 class="sizes">Koot </h4> 
            <p>”Klassinen”<br>
            65 x 190 x 17 cm <br>
           Valaistulla mainospinnalla<br>
            54 x 71 cm</p>
		</div>  
      <div class="row paddingTop">  
		<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-3">
        	<img class="center-block img-responsive" src="images/mobilPlus-metalProduct.jpg" width="263" height="608" alt=""/>
			<h4>"Metalli+ tabletti" </h4> 
            <p>“Isoveli”, suurempi latauskapasiteetti, enemmän tehoa ja mainospintamahdollisuuksia (hyvinvointikeskukset, urheiluhallit, kuntosalit)</p>
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
            <h4 class="sizes">koot </h4> 
			<p>Malli: “metalli”
			  <br>
			  75 x 185 x 30 cm
				<br>
			  Valaistulla mainospinnalla<br>
			  42 x 152 cm etupaneeli
			  <br>
		  23 x 150 cm 2pcs sivupaneeli</p>
		</div>
      </div>  
  </article> <!--mobil+ charging station models--> 
  <hr>
  <article class="row paddingArticle" id="link5">
	    <div class="col-md-12">
			<h1>Miten laite toimii?</h1>
            <h2>Kuusi helppoa askelta</h2>
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
			<h1>Asiakkaamme,</h1>
            <h2>jotka lataavat kanssamme</h2>
        </span>
	    <span class="12">
			<h4 class="sizes">PAIKAT</h4>
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
			<h4 class="sizes">TAPAHTUMAT</h4>
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
			<h4 class="sizes">MAINOSTAJAT</h4>
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
			<h1>Ota yhteyttä!</h1>
            <h2>Pidetään yhteyttä</h2>
          </div>
		<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-2">
			<address>
  				<strong>Mobil Plus Media Helsinki</strong><br>
 				Tel:  +35 850 460 3578
            </address>    
			<address>
            E-mail:
			  <a href="nordic@mobilepluscharger.com">nordic(at)mobilepluscharger.com</a>
			</address>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-2">
			<form action="http://www.varadi.tv/works/mobilplus/web/form.php#contact" method="post" role="form">
           	 <div class="form-group">
              <label for="exampleInputEmail1">Etunimi<span class="required">vaaditaan</span></label>
              <input name="firstname" type="text" class="form-control" id="exampleInputEmail1" >
           	 </div>
           	 <div class="form-group">
              <label for="exampleInputPassword1">Sukunimi <span class="required">vaaditaan</span></label>
              <input name="lastname" type="text" class="form-control" id="exampleInputEmail1" >
           	 </div>
           	 <div class="form-group">
              <label for="exampleInputPassword1">Sähköpostiosoite <span class="required">vaaditaan</span></label>
              <input name="email" type="email" class="form-control" id="exampleInputPassword1" >
           	 </div>		             		
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3">
              <label for="exampleInputPassword1">Viestisi</label>
              <textarea name="textarea" class="form-control" rows="9"></textarea>
              <input class="btn btn-primary btn-block" type="submit" value="Lähetä"></input>
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

$to="Mobil+ Charger<nordic@mobilepluscharger.com>";
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
          <p>Copyright © 2015 Mobile+ Charger | webdesign: <a href="http://www.varadi.tv" target="_blank">www.varadi.tv</a></p>      	
       </div>
      <div class="col-xs-12 col-md-6 pull-right footerRight">
      	<span class="socialCenterPhone">
            <span class="language">     
                <a href="http://mobilepluscharger.com" >ENG</a>
            </span>
        </span>
        <span class="socialCenterPhone">
            <span class="social">
            	<a href="https://www.facebook.com/mobilplusmedia" target="_blank" class="iconSocial iconFacebook"></a>
                <a href="#" class="iconSocial iconPhone"></a></span>
            </span>
        </span>     
            <span class="phoneNumber">
            	<strong>Soita!</strong> +35 850 460 3578
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
