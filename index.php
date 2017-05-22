<?php 
// light 300
// light 300 Italic
// regular 400
// regular 400 Italic
// semi-bold 600
// semi-bold 600 Italic
// bold 700
// bold 700 Italic
// extra-bold 800
// extra-bold 800 Italic


 ?>
<html>
<head>
	<title>Конференция</title>
<meta content="width=1180" name="viewport" id="viewport">
 

<style>
	
@font-face {
    font-family: "OpenSans-Bold";
    src: url(/fonts/OpenSans-Bold.ttf) format("truetype");
} 

@font-face {
    font-family: "OpenSans-ExtraBold";
    src: url(/fonts/OpenSans-ExtraBold.ttf) format("truetype");
} 

@font-face {
    font-family: "OpenSans-Light";
    src: url(/fonts/OpenSans-Light.ttf) format("truetype");
} 

	@font-face {
			font-family: "OpenSansRegular";
			src: url("/fonts/OpenSansRegular.eot");
			src: url("/fonts/OpenSansRegular.eot?#iefix")format("embedded-opentype"),
			url("/fonts/OpenSansRegular.woff") format("woff"),
			url("/fonts/OpenSansRegular.ttf") format("truetype");
			font-style: normal;
			font-weight: normal;
	}


</style>


	
	<!--fonts-->



<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic-ext" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />

	<!--//fonts-->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Dreativity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />



		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

	<script src="/js/modernizr.custom.js"></script>

</head>
<body>
<!-- navigation -->
<div class="navigation fixed">
	<div class="container">
		<div class="fixed-header">
			<div class="nav-left">
		
				<a href="#"><img src="images/f.png" alt="" /></a>
				<a href="#"><img src="images/v.png" alt="" /></a>
				<a href="#"><img src="images/i.png" alt="" /></a>
			</div>
			<div class="nav-right">
				<span class="menu"><img src="images/menu.png" alt="" /></span>
				
					<nav class="cl-effect-1">
					
						<ul class="nav1">
							<li><a class="scroll" href="#about-the-conference">О конференции</a></li>
							<li><a class="scroll" href="#speakers">Спикеры</a></li>
							<li><a class="scroll" href="#home"><img src="/images/logo_top.png" alt=""></a></li>
							<li><a class="scroll" href="#schedule">Программа</a></li>
							<li><a class="scroll" href="#issues">Вопросы</a></li>

							<li>
							     <div  class="tel_span">

							       <span>048 700-66-44</span> <br>
							     	<span>048 700-66-44</span><br>
							     	<span>048 700-66-44</span> 		
				                    
				                     
							     </div>

							</li>
						</ul>
					</nav>
					
					<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
					<!-- //script for menu -->
					<!-- script-for sticky-nav -->
						<script>
						$(document).ready(function() {
							 // var navoffeset=$(".navigation").offset().top;
							 // $(window).scroll(function(){
								// var scrollpos=$(window).scrollTop(); 
								// if(scrollpos >=navoffeset){
								// 	$(".navigation").addClass("fixed");
								// }else{
								// 	$(".navigation").removeClass("fixed");
								// }
							 // });
							 
						});
						</script>
					<!-- /script-for sticky-nav -->

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //navigation -->




<!-- banner -->
<div id="home" class="banner">
	<div class="container">
		<div class="banner-info">
			<h1>Строительный рынок Одессы</h1>
			<p>сегодня и завтра</p>
			<p>Ведущие застройщики города <br>
                       Лучшие бизнес тренеры в сфере недвижимости
			</p>
			<div class="view register" onmouseover="reg_hover2();" onmouseleave="reg_leave2();"  ><a id="regviev" href="#">Регистрация</a></div>
			<div class="view more" onmouseover="reg_hover();" onmouseleave="reg_leave();" ><a href="#">подробнее</a></div>




		</div>
<meta content="width=1180" name="viewport" id="viewport">
	</div>
</div>
<!-- //banner -->




<!-- timer -->
<div class="timerup">
	<div class="container">
		<div class="bottom-grids">
			<div class="cut_left col-md-5 bottom-grid text-right">
		           <span>5 июля</span><br> <span>2017</span> 
			</div>
			<div class="col-md-2 bottom-grid text-center time9">
			      <img src="/images/time.png" alt="">    
			</div>
			<div class=" cut_rigth col-md-5 bottom-grid text-left ">
		            <span>начало</span><br> <span>9:00</span> 
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //timer -->

<style>

</style>
<!-- about-spicers -->
<div id="about-the-conference"></div>
<div class="about-spikers">
	<div class="container">
		<div class="bottom-grids">
			<div class="col-md-4 bottom-grid text-center">

			<div class="col-md-3"><img src="/images/la.png" alt="Одесса"></div>
			<div class="col-md-9">
						<span>Одесса</span><br>
					<span>Лучшый отель города</span>

			</div>	
	
					
				</div>
			
			</div>
			<div class="col-md-4 bottom-grid text-center">
			<div class="col-md-3"><img src="/images/l2.png" alt="Одесса"></div>
			<div class="col-md-9">
						<span>10 спикеров</span> <br>
					<span>Ведущие специалисты</span>

			</div>	
			</div>
			<div class="col-md-4 bottom-grid text-center">
				<div class="col-md-3"><img src="/images/l3.png" alt="Одесса"></div>
			<div class="col-md-9">
						<span  class="big5"  >5</span>
					<span class="minima_len" >Крупнейших <br> застройщиков</span>

			</div>	
		
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about-spicers -->


<!-- about-spicers2 -->
<div class="about-spikers2">
	<div class="container">
		<div class="bottom-grids">
			<div class="col-md-12 bottom-grid text-center"></div>
			           <h2>о конференции</h2>  
			          <p> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam earum, quibusdam quaerat vel doloribus, repellat fugit eveniet veritatis eligendi, esse delectus corrupti culpa saepe incidunt excepturi autem. Voluptatibus, est, praesentium.</span>
			          <span>Facere sapiente excepturi earum libero, ullam autem itaque quaerat placeat, numquam, eum explicabo recusandae praesentium tempora, voluptatum veritatis nulla aperiam sunt. Aspernatur ex beatae, aliquid necessitatibus quisquam nobis blanditiis laudantium.</span>
			          <span>Illo explicabo harum aperiam autem nihil culpa, possimus voluptas nemo facilis quae asperiores voluptatibus maiores ratione repellendus nam beatae corporis esse eaque expedita suscipit. Libero doloremque eius architecto voluptas, cupiditate.</span>

<div id="speakers"></div>

			          <span>Neque sapiente eos dolorem debitis magni ipsam earum, odit perferendis quis quia quas at ullam aliquid eius facilis voluptas molestias minima alias esse molestiae voluptatibus. Culpa, dolorum! Nostrum, eaque sequi?</span>
			          <span>Eius accusamus non vel voluptatem voluptates neque ut aliquam rem quasi minus facere placeat assumenda quas, natus harum hic eum expedita, porro odit optio aliquid a dolorum! Commodi, fuga. Voluptatem?</span> </p>  
			</div>
		
	</div>
</div>
<!-- //about-spicers -->


<div class="container">
	
</div>





<!-- our-team -->
<div id="our-team" class="our-team">
	<div class="container">
		<div class="team-info text-center">
			<h2>НАШИ СПИКЕРЫ</h2>
		</div>
<ul class="grid cs-style-3">
				<li>
					<figure>
						<img width="255" src="images/8.jpg" alt="img04">
						<figcaption>
							<h3>Settings</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img width="255" src="images/8.jpg" alt="img01">
						<figcaption>
							<h3>Camera</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1115632-Camera">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img width="255" src="images/8.jpg" alt="img02">
						<figcaption>
							<h3>Music</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1115960-Music">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img width="255" src="images/8.jpg" alt="img05">
						<figcaption>
							<h3>Safari</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1116775-Safari">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img width="255" src="images/8.jpg" alt="img03">
						<figcaption>
							<h3>Phone</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1117308-Phone">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img width="255" src="images/8.jpg" alt="img06">
						<figcaption>
							<h3>Game Center</h3>
							<span>Jacob Cummings</span>
							
						</figcaption>
					</figure>
				</li>
			</ul>


	</div>
</div>
<!-- //our-team -->


<!-- about-spicers2 -->
<div class="about-consultation">
	<div class="container">
		<div class="bottom-grids">
			<div class="col-md-12  text-center">
			           <h2>Консультация</h2>  
			          <p> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat veniam qui culpa. Molestiae ab eligendi qui obcaecati cum architecto minima assumenda officia rem perferendis culpa quibusdam, ad enim libero earum!</span><span>Praesentium pariatur velit quos mollitia repellendus magnam nemo perspiciatis culpa nesciunt obcaecati ipsa quo consectetur voluptate, saepe quam eaque possimus cumque ullam, officia rem ab, impedit quia! Sint, explicabo, in?</span> </p>  
			</div>

				<div class="col-md-12 form1">
				<div id="schedule"></div>
			<form class="form-inline">
			  <div class="form-group">
    <label for="name">Имя:</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="Ваше имя">
  </div>
  <div class="form-group">
    <label for="email">Почта:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Электронная почта">
  </div>
  <div class="form-group">
    <label for="tel">Телефон:</label>
    <input type="text" class="form-control" id="tel" name="tel" placeholder="Ваш телефон">
  </div>

  <button type="submit" class="btn btn-default">ОТПРАВИТЬ</button>
</form>

			           <h2>ПРОГРАММА МЕРОПРИЯТИЯ</h2>  

			</div>
		</div>
	
</div></div>
<!-- //about-spicers -->







<!-- about-spicers2 -->
<div class="about-timer">
	<div class="container">
	
			<div class="col-md-6 text-center">
			           <h2>Зал первый</h2>  

                       <div class="col-sm-2">  <button class="btn btn-default">9:01</button></div>
                       <div class="col-sm-10">  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus enim, fugiat consectetur consequuntur repellendus libero modi hic aliquid doloribus nulla illo quod, autem voluptates omnis eaque totam beatae cupiditate dolorem. </div>

<br>


                            <div class="col-sm-2">  <button class="btn btn-default">9:01</button></div>
                       <div class="col-sm-10">  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus enim, fugiat consectetur consequuntur repellendus libero modi hic aliquid doloribus nulla illo quod, autem voluptates omnis eaque totam beatae cupiditate dolorem. </div>


<br>



                            <div class="col-sm-2">  <button class="btn btn-default">9:01</button></div>
                       <div class="col-sm-10">  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus enim, fugiat consectetur consequuntur repellendus libero modi hic aliquid doloribus nulla illo quod, autem voluptates omnis eaque totam beatae cupiditate dolorem. </div>
<br>
			  
			</div>
			<div class="col-md-6 text-center">
			           <h2>Зал второй</h2>  
			        
			             <div class="col-sm-2">  <button class="btn btn-default">9:01</button></div>
                       <div class="col-sm-10">  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus enim, fugiat consectetur consequuntur repellendus libero modi hic aliquid doloribus nulla illo quod, autem voluptates omnis eaque totam beatae cupiditate dolorem. </div>


<br>


                            <div class="col-sm-2">  <button class="btn btn-default">9:01</button></div>
                       <div class="col-sm-10">  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus enim, fugiat consectetur consequuntur repellendus libero modi hic aliquid doloribus nulla illo quod, autem voluptates omnis eaque totam beatae cupiditate dolorem. </div>
<br>


                            <div class="col-sm-2">  <button class="btn btn-default">9:01</button></div>
                       <div class="col-sm-10">  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus enim, fugiat consectetur consequuntur repellendus libero modi hic aliquid doloribus nulla illo quod, autem voluptates omnis eaque totam beatae cupiditate dolorem. </div><br>
			</div>
		
	</div>
</div>
<!-- //about-spicers -->


<!-- about-spicers2 -->
<div class="about-two_image">
	<div class="container">
		<div class="bottom-grids">
			<div class="col-md-12 bottom-grid text-center">
			<div class="empty">&nbsp;</div>
			     
			</div>
		
	</div>
		</div>
</div>
<!-- //about-spicers -->



<!-- about-spicers2 -->
<div class="about-timerq">
	<div class="container">

			<div class="col-md-2 ">
 &nbsp;
			
			</div>
				<div class="col-md-8 text-center">
				<table>
					
					
							<div id="getting-started"></div>
					

				</table>
		
			</div>
				<div class="col-md-2 ">
 &nbsp;<div class="" id="issues"></div>
							</div>
			     
		
		
	</div>
		
</div>
<!-- //about-spicers -->


  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true,
       active:false,
    });

     $( "#accordion2" ).accordion({
      collapsible: true,
       active:false,
    });
  } );



  </script>

  <style>
  	#accordion{
  		color: gray!important;
  	}
  </style>



<!-- about-spicers2 -->
<div class="about-spikers2">
	<div class="container">
		<div class="bottom-grids">



		
			           <h2>ОСНОВНЫЕ ВОПРОСЫ КОНФЕРЕНЦИИ </h2>  
			<div class="col-md-6 bottom-grid text-center">	  
<div id="accordion">
  <h3> 

  <span>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ullam, itaque. Laboriosam ipsa beatae voluptate </span>

<img  src="/images/plus.png" alt="">
 
       </h3>
  <div>
    <p>qqqMauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
  </div>



    <h3> 

  <span>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ullam, itaque. Laboriosam ipsa beatae voluptate </span>

<img  src="/images/plus.png" alt="">
 
       </h3>
  <div>
    <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna. </p>
  </div>
   <h3> 

  <span>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ullam, itaque. Laboriosam ipsa beatae voluptate </span>

<img  src="/images/plus.png" alt="">
 
       </h3>
  <div>
    <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui. </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3> 

  <span>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ullam, itaque. Laboriosam ipsa beatae voluptate </span>

<img  src="/images/plus.png" alt="">
 
       </h3>
  <div>
    <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est. </p><p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
  </div>
</div>

</div>

			<div class="col-md-6 bottom-grid text-center">	  
<div id="accordion2">
  <h3> 

  <span>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ullam, itaque. Laboriosam ipsa beatae voluptate </span>

<img width="20" height="20" src="/images/plus.png" alt="">
 
       </h3>
  <div>
    <p>qqqMauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
  </div>
   <h3> 

  <span>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ullam, itaque. Laboriosam ipsa beatae voluptate </span>

<img  src="/images/plus.png" alt="">
 
       </h3>
  <div>
    <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna. </p>
  </div>
  <h3> 

  <span>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ullam, itaque. Laboriosam ipsa beatae voluptate </span>

<img  src="/images/plus.png" alt="">
 
       </h3>
  <div>
    <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui. </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
    <h3> 

  <span>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ullam, itaque. Laboriosam ipsa beatae voluptate </span>

<img  src="/images/plus.png" alt="">
 
       </h3>
  <div>
    <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est. </p><p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
  </div>
</div>

</div>






			</div>
		
	</div>
</div>
<!-- //about-spicers -->




<!-- about-spicers2 -->
<div class="about-buy">
	<div class="container">
		<div class="bottom-grids">
			<div class="col-md-6 bottom-grid text-center">&nbsp;
                   
      <div class="col-md-4">
      	<img src="/images/user-one.png" alt="">
      </div>
       <div class="col-md-8">
      	<h3>НА ОДНОГО ЧЕЛОВЕКА</h3>
         <span>100</span> 	<span>грн.</span>
      </div>
      <div class="col-sm-12">
      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure dolores veritatis tenetur dicta iusto iste, hic veniam. Unde reprehenderit animi, pariatur! Dicta at, deleniti alias ipsum placeat commodi quod dolorem <br>
      <a href="" class="pull-right" ><button type="button" class="btn btn-default ">регистрация</button>  </a>
      </div>

			</div>


					<div class="col-md-6 bottom-grid text-center">
					
&nbsp;
                   
      <div class="col-md-4">
      	<img src="/images/user-one.png" alt="">
      </div>
       <div class="col-md-8">
      	<h3>С ВЫШЕ ОДНОГО ЧЕЛОВЕКА</h3>
         <span>100</span> 	<span>грн.</span>
      </div>
      <div class="col-sm-12">
      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure dolores veritatis tenetur dicta iusto iste, hic veniam. Unde reprehenderit animi, pariatur! Dicta at, deleniti alias ipsum placeat commodi quod dolorem <br>
      <a href="" class="pull-right" ><button type="button" class="btn btn-default ">регистрация</button>  </a>
      </div>

			
					</div>
			       
			         
			</div>
		
	</div>
</div>
<!-- //about-spicers -->




<!-- about-spicers2 -->

<!-- //about-spicers -->



<!-- about-spicers2 -->
<div class="about-partner">
	<div class="container">
		<div class="bottom-grids">
		  <div class="col-md-12">
		  	<h2>партнеры</h2>
		  </div>
			<div class="col-md-4 bottom-grid text-center">
		          <img src="/images/p1.png" alt="">

			

			</div>
				<div class="col-md-4 bottom-grid text-center">
		            <img src="/images/p2.png" alt="">

			

			</div>
				<div class="col-md-4 bottom-grid text-center">
		          <img src="/images/p3.png" alt="">

			

			</div>

			<div class="col-md-4 bottom-grid text-center">
		          <img src="/images/p1.png" alt="">

			

			</div>
				<div class="col-md-4 bottom-grid text-center">
		            <img src="/images/p2.png" alt="">

			

			</div>
				<div class="col-md-4 bottom-grid text-center">
		          <img src="/images/p3.png" alt="">

			

			</div>


			
			       
			         
			</div>
		
	</div>
</div>





<!-- get-in -->
<div id="get-in-touch" class="get-in-touch">
	<div class="container">
		<div class="get-info text-center">
			<h3>НА КАРТЕ</h3>

		</div>
	</div>
	<div id="map"></div>
		
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD07Z4GaSHgApgpnyQTnbFugeW9IwKd1GI&callback=initMap">
    </script>





<div><small></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
  <style>
       #map {
        height: 440px;
        width: 100%;
       }
    </style>

<script >
   function initMap() {
        var uluru = {lat: 46.482526, lng: 30.723309500000028};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: uluru
        });
        // var marker = new google.maps.Marker({
        //   position: uluru,
        //   map: map
        // });

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Одесса</h1>'+
      '<h1 class="firstHeading">REALTY <br/> SUMMIT</h1>' +
      '<div id="bodyContent">'+
      '<p>улица:  lorem lorem lorem, </p><p>телефон:  048 700-66-44' +
      '</p> <p>дата: 5 июля 2017г. 9:00</p>'+
    
   
      '</div>'+
      '</div>';

 var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  var marker = new google.maps.Marker({
    position: uluru,
    map: map,
    title: 'Uluru (Ayers Rock)'
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });







      }



</script>

	

</div>
<!-- //get-in -->






<!-- //about-spicers -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-left">
	
		</div>
		<div class="footer-right">
			<ul>
				<li><a class="facebook" href="#"></a></li>
				<li><a class="twitter" href="#"></a></li>
				<li><a class="linkedin" href="#"></a></li>
				<li><a class="pininterest" href="#"></a></li>
				<li><a class="google" href="#"></a></li>
				<li><a class="dribble" href="#"></a></li>
				<li><a class="linkedin" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //footer -->



<!-- *********************************** -->


<!-- //contact-us -->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {


   
$('#getting-started').countdown('2017/07/05 09:00:00', function(event) {
  var $this = $(this).html(event.strftime('<tr><td>%D<span>:</span> </td> <td>%H <span>:</span></td> <td>%M</td></tr><tr> <td class="txt">ДНЕЙ</td> <td class="txt">ЧАСОВ</td> <td class="txt">МИНУТ</td> </tr>')); });

		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/toucheffects.js"></script>
<script src="/js/jquery.countdown.js"></script>
<script>document.write('<script src="http://' + (location.host || 'localhost6').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


<!-- //smooth scrolling -->
</body>








