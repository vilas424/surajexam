<!DOCTYPE HTML>
<!--
	Dopetrope 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>CODE | HUNT</title>
		<link rel="shortcut icon" href="images/favicon.ico" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/3.js"></script>
		<script type="text/javascript" src="js/modernizr.custom.69142.js"></script>
		<style>
		* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
      -ms-box-sizing: border-box;
          box-sizing: border-box;
}
 
 
.pic {
  border: 5px solid #fff;  
  float: left;
  height: 300px;
  width: 300px;
  margin: 5px;
  overflow: hidden;
   
  -webkit-box-shadow: 10px 10px 10px #f778a1;
          box-shadow: 10px 10px 10px #f778a1;  
}
.pic1 {
  border: 5px solid #fff;  
  float: left;
  height: 300px;
  width: 300px;
  margin: 5px;
  overflow: hidden;  
}

.morph {
  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
}
 
.morph:hover{
	border:70px solid #f778a1;
	border-radius:50%;
	}
        
        p{
            font-family: cursive;
            font-size: 20px;
            color: brown;
            font-style: bold;
        }
	.headr
        {
            font-size: 90px;
            color:blue;
            font-family: serif;
        }

</style>

<link rel="stylesheet" href="css/style5.css" />
<link rel="stylesheet" href="css/style2.css" />
       
        
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
        
	<body  bgcolor='gray' class="homepage">
            
            
            <?php session_start();
            $_SESSION['logmethod']=0;
            ?>
           
		<!-- Header Wrapper -->
                
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<section id="header">
                                                                  
                                                                    
                                                                    <?php 
                                        if(isset($_SESSION['username']))
                                            echo "<p align='right'>Welcome ".$_SESSION['username']."!!</p>"
                                    
                                    ?>
                                                                   
									
									<!-- Logo -->
									
									
									<!-- Nav -->
										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="#header" class="button scrolly">Home</a></li>
												<li>
													<a href="#events"class="button scrolly">categories</a>
													<ul>
														<li><a href="#events" class="button scrolly">C PROGRAMMING</a></li>
														<li><a href="#events" class="button scrolly">C++ PROGRAMMING</a></li>
														<li><a href="#events" class="button scrolly">JAVA PROGRAMMING</a></li>
													
													</ul>
												</li>
												
												<li><a href="#intro" class="button scrolly">About us</a></li>
												
											
												<li><a href="#contactus" class="button scrolly">Contact us</a></li>
                                                                                                <?php
                                                                                                    if(isset($_SESSION['username']))
                                                                                                        echo "<li><a href='logout.php' class='button scrolly'>Logout</a></li>";
                                                                                                    else
                                                                                                        echo "<li><a href='login.html' class='button scrolly'>Login</a></li>";
                                                                                                ?>
 
											</ul>
										</nav>

								</section>

						</div>
					</div>
                                    
                                            <div class="row">
						<div class="12u">

							<!-- Banner -->
								<section id="banner">
									
									<div id="grid" class="main">
				<div class="view">
					<div class="view-back">
						<span><br><br><br><br>
						<h8>
							  &nbsp; HUNT FOR THE CODE
						</h8>
					
						</span>
						
						<img src="images/89.jpg" />
					</div>
					
					<img src="images/26.jpg" />
				</div>
			</div>
                                                                    
			<script type="text/javascript">	
			
			Modernizr.load({
				test: Modernizr.csstransforms3d && Modernizr.csstransitions,
				yep : ['http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js','js/jquery.hoverfold.js'],
				nope: 'css/fallback.css',
				callback : function( url, result, key ) {
						
					if( url === 'js/jquery.hoverfold.js' ) {
						$( '#grid' ).hoverfold();
					}

				}
			});
				
		</script>
										
									
								</section>

						</div>
					</div>
                                    
					<div class="row">
						<div class="12u">
								
							<!-- Intro -->
								<section id="intro">
								
									<div>
										<div class="row">
											<div class="4u">
												<section class="first">
												
													<img src="images/1.jpeg" width="150" height="150"></img>													<header>
														<h2>BVBCET</h2>
													</header>
													<p>The versatile manifestations of engineering have had a profound and lasting impact on our civilization. From the grandeur of the pyramids and mans journey into the space, to the recent information revolution, engineering continues to fascinate and enthrall.

The B. V. Bhoomaraddi College of Engineering and Technology (BVBCET), believes in kindling the spirit of this unique and creative discipline in every student who enters its portals.</P>
												</section>
											</div>
											<div class="4u">
												<section class="middle">
													<img src="images/2.jpg" width="150" height="150"><img>
													<header>
														<h2>ISE</h2>
													</header>
													<p>The demand for information technology (IT) professionals has grown rapidly in the last decade. Parallel to this increasing need for IT personnel is the continuous change in the type of skills that are brought about by innovations in cutting edge technologies. </p>
												</section>
											</div>
                                                                                    
											<div class="4u">
												<section class="last">
													<img src="images/89.jpg" width="150" height="150"><img>
													<header>
														<h2>CODE HUNT </h2>
													</header>
													<p>Code Hunt is a website where in u wil get to know and hunt forr codes which u dont know</p>
												</section>
											</div>
										</div>
									</div>

							
								
								</section>

						</div>
					</div>
				</div>
			</div>
		
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
							<!-- Portfolio -->
								<section id="events">
									<header class="major">
										<h2>Categories</h2>
									</header>
									
									<div>
										
										
										<div class="row">
											<div class="4u">
										
												<section class="box">
                                                                                                    <a href="c.php"><div class="morph pic"><img src="images/g.png" alt="" /></div></a>																									<header>
													
                                                                                                            <a href="c.php"><h3>C programming</h3></a>
												
													
													   <h3>Topic</h3>
													   </header>
													   
												</section>
											</div>
											<div class="4u">
												<section class="box">
													<a href="cpp.php"><div class="morph pic"><img src="images/pen.jpg" alt="" /></div></a>
													<header>
                                                                                                            <a href="cpp.php"><h3>C++ programming </h3></a>
													
													   <h3>Topic</h3>
													 
														
													</footer>
												</section>
											</div>
											<div class="4u">
												<section class="box">
												 <a href="java.php">	<div class="morph pic"><img src="images/45.jpeg" alt="" /></div></a>
													<header>
                                                                                                            <a href="java.php"><h3>Java</h3></a>
													</header>
													
													<br/>
													
													
												</section>
											</div>
                                                                                    <div class="4u">
												<section class="box">
                                                                                                    <a href="post.php"><div class="morph pic"><img src="images/46.png" alt="" /></div></a>
													<header>
                                                                                                            <br>
                                                                                                            <a href="post.php"><h3>POST QUERY</h3></a>
													</header>
													
													<br/>
													
													
												</section>
											</div>
                                                                                       <div class="4u">
												<section class="box">
													 <a href="ans.php"><div class="morph pic"><img src="images/47.JPG" alt="" /></div></a>
													<header>
                                                                                                            <br>
														 <a href="ans.php"><h3>POST AN ANSWER</h3></a>
													</header>
													
													<br/>
													
													
												</section>
											</div>
										</div>
									
													

                                                    

                                                    <div class="clear">&nbsp;&nbsp;</div>
													
											
												</div>
												</div>
												</section>
												</div>
								</section>

						</div>
					</div>
							
						</div>
					</div>
				</div>
			</div>
			<div id="footer-wrapper">
			<section id="footer" class="container">
					
						</div>
					</section>
					</div>

		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				
				<!-- Footer -->
					<section id="footer" class="container">
						<div class="row">
							
						
							<div class="4u">
							
								<section id="contactus">
									<header>
										<h2>Reach us</h2>
									</header>
									<ul class="social">
										<li><a class="fa fa-facebook solo" href="https://www.facebook.com/codehunt"><span>Facebook</span></a></li>
										<li><a class="fa fa-twitter solo" href="https://twitter.com/codehunt"><span>Twitter</span></a></li>
										<li><a class="fa fa-dribbble solo" href="http://www.bvb.edu/"><span>College</span></a></li>
										<li><a class="fa fa-google-plus solo" href="https://plus.google.com/codehunt"><span>Google+</span></a></li>
									</ul>
									
									<ul class="contact">
										<li>
											
										</li>
										<li>
											<h3>Mail</h3>
											<p><a href="#">codehunt@gmail.com</a></p>
										</li>
										
									</ul>
								</section>
							
							</div>
						</div>
						</div>
						<div class="row">
							<div class="12u">
							
								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; CODE HUNT </li>
											
											
										</ul>
									</div>

							</div>
						</div>
					</section>
				
			</div>

	</body>
</html>                                                                                                                                                        