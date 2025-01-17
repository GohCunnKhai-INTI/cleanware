<?php
require_once "dbConnection.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="icon" type="image/x-icon" href="images/clean-logo.png">
    <title>Cleanware</title>

    <!-- fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
    <link href='font-awesome/css/font-awesome.css' rel='stylesheet' type='text/css'>
      
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- main css -->
    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    
    <!-- Slider -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet"> 
      
    <!-- lightbox -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
	

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  

  </head>
  <style>
  .ln2{
    height:25px;
  }
  .m{
  margin-left:-15px;
  margin-top:20px;
  width:2000px;
  float:left;
  }
  .ml{
  margin-left:385px;
  margin-top:70px;
  width:1550px;
  }
  .m2{
  margin-left:800px;
  margin-top:70px;
  width:1550px;
  }
  
  .megamenu{
  width:220px;
  height:220px;
  }
  
  .bb:hover{
text-decoration: underline blue 1px;

  }
  
  
  .blink_me {
  animation: blinker 1s linear infinite;
  }
  
  @keyframes blinker {  
  50% { opacity: 0.65; }
  }
	.bxslider {
	  width: 100%;  
	}
	.bx-wrapper {
	  -moz-box-shadow: none;
	  -webkit-box-shadow: none;
	  box-shadow: none;
	  border: 0;
	}
	
	/* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
	
	#b{
		background-color:#FFFFFF;
		position: fixed;
		bottom: 0;
		left:0;
		height:290px;
		width:100%;
		border: 1px solid black;
		overflow:hidden;
		visibility:hidden;
		z-index: 18;
	
	}
	#k{
		visibility:hidden;
		width:350px;
		float:left;
		left:20px;
		position:relative;
	}
	#kk{
		font-size:22px;
		
		
	}
	#k2{
        width:20px;
		text-align:right;
		cursor: pointer;
		position:relative;
		right:350px;
		top:-43px;
		
	}

	#b1 {
		width: 30%;
		margin-left:5%;
		float:left;
		margin-top:-50px;



	}
	#b2{
		width: 30%;
		margin-top:-50px;
		float:left
		
	}
	#b3{
		margin-top:-50px;
		width:30%;
		margin-right:5%;
		overflow: hidden; /* if you don't want #second to wrap below #first */
		
	}
	
	.search-box {
			display: -ms-flexbox; 
			display: flex;
			width: 26%;			
			margin-left:73%;
		
			}
	.icon {
			padding: 8px;
			background: dodgerblue;
			color: white;
			min-width: 36px;
			text-align: center;
			}
		
		.carousel-indicators li {
			display: inline-block;
			width: 15px;
			height: 15px;
			margin: 5px;
			text-indent: 0;
			cursor: pointer;
			border: none;
			border-radius: 50%;
			background-color: white;
			margin-bottom:-25px;
			box-shadow: inset 1px 1px 1px 1px rgba(0,0,0,0.5);    
		}

		.carousel-indicators .active {
			width: 15px;
			height: 15px;
			margin: 5px;
			margin-bottom:-25px;
			background-color: black;
		}
		
	#log{
		background-color:dodgerblue;
		position: center;
		text-align:center;
		overflow:hidden;
		z-index: 2;
	}
	
	#logk{
		cursor:pointer;
	}
	
	#vm{
		position: fixed;
		bottom:0;
		right:15px;
		visibility:hidden;
	}
	
	#vm2{
		color:blue;
		cursor:pointer;
		
	}
	
	#vm2:hover{
		text-decoration: underline black 1px;
	}

	#ab{
		cursor:pointer;
	}
	#ab2{
		cursor:pointer;
	}
	#ab3{
		cursor:pointer;
	}
	
	
.navbar-fixed {
    top: 0;
    z-index: 100;
  position: fixed;
    width: 100%;
}


  </style>

  <body>

		  <div id="wrapper" class="homepage-1"> <!-- wrapper -->
			  <div id="header"> <!-- header -->
				  <div class="top"> <!-- top -->
					  <div class="container">
						  <ul class="top-support"> 
							  <li><span>HYGIENE & SANITISATION</span></li>                    
						  </ul>
						  <div class="top-control">
							  <a href="faq.php">FAQs</a>
						  </div>					

					  </div>
					</div> <!-- top -->
              
              <div id="believe-nav"> <!-- Nav -->
                  <div class="container">
                      <div class="min-marg">
                          <nav class="navbar navbar-default">
                              <!-- <div class="container-fluid"> -->
                                  <!-- Brand and toggle get grouped for better mobile display -->
                                  <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                          <span class="sr-only">Toggle navigation</span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                      </button>
                                      <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" height="40px" width="190px"></a>
                                  </div>
								  	
									<div class="search-box">
									<a onclick="srch()" style="cursor:pointer" id="btt"><i class="fa fa-search icon"></i></a>
									<input type="text" id="abc" autocomplete="off" style="height:30px" placeholder="Search Product" />
									</div>	
									
									
									<div id="b"> 
									<div id="log"><i class="fa fa-close" id="logk" style="font-size:22px;color:black;"></i></div>
										<div id="k">
										<h3 id="kk">Searching</h3>
										</div>
										
										<div id="k2">
										<h3>X</h3>
										</div>
										 
										<div id="b1">
										<center>
										<img id="ab" style="height:160px;width:160px;">
										<h4 id="bb"></h4>
										</center>
										</div>
										
										<div id="b2">
										<center>
										<img id="ab2" style="height:160px;width:160px;">
										<h4 id="bb2"></h4>
										</center>	
										</div>
										
										<div id="b3">
										<center>
										<img id="ab3" style="height:160px;width:160px;">
										<h4 id="bb3"></h4>
										</center>
										</div>
								
										<div id="vm"><h4 id="vm2">View More</h4></div>
										
									</div>								
						<!--</div>-->                          
                          </nav>
                      </div>
                  </div>
              </div> <!-- Nav -->
		
              
              <div id="cat-nav">
              <div class="container">
                  <nav class="navbar navbar-default">
                      <!-- <div class="container-fluid"> -->
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#cat-nav-mega">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="cat-nav-mega">
                          <ul class="nav navbar-nav">
                              <li class="active"><a href="index.php">Home</a></li>
							  <li><a href="product.php">Product</a></li>
							  <li><a href="about.php">About Us</a></li>
                              <li><a href="contact.php">Contact Us</a></li>
							  <li class="blink_me"><span><a href="https://shop.safetyware.com.my/?_ga=2.149303670.1736396890.1641192003-1137409983.1641192003" target="_blank"><span style="color:red">SAFETYWARE Online Store</span></a></span></li>            
                          </ul>
                           
                      </div><!-- /.navbar-collapse -->
                      <!--</div> -->
                  </nav>
              </div>
              </div>      
          </div> <!-- header -->
		  
		  <?php		  
		  $ban="SELECT * FROM banner ORDER BY pos ASC";
		  $tet=mysqli_query($conn, $ban);

		  ?>
		  
		  
	  <div class="containera" style="width:100%">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			  <?php	  
			  if(mysqli_num_rows($tet)!=0) 
			  {
				  $cot=1;
			  while($row=mysqli_fetch_assoc($tet))
			  {
				  
				  if($cot==1)
				  {
			   ?>	   
						<div class="item active">
						<a href="product.php"><img src="<?php echo 'images/'.$row['banner_img']; ?>" style="height:500px;width:100%;"></a>
						</div>
					<?php
				  }
				  else
				  {
					 ?>
						<div class="item">
						<a href="product.php"><img src="<?php echo 'images/'.$row['banner_img']; ?>" style="height:500px;width:100%;"></a>
						</div>
					<?php
				  }
				  $cot++;
			  }
			  }
			  else
			  {
			  ?>
				
				  
			<?php
			  }
			  
			  ?>
			</div>

			<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
				  <span class="sr-only">Next</span>
				</a>
				</div>
			</div>
		  
		  
		
	
          <div id="content"> <!-- Content -->
              <div class="container">
                  <div class="home-content">
                      <div class="cat-offers">
                          <div class="row">
                              <div class="brand-title">
                              <h3><u>STW Own Manufactured Hand Sanitiser (Gel)</u></h3>
                          </div>
						  <iframe width="1150" height="405" src="https://www.youtube.com/embed/wX1qVLg__yc"></iframe>
						  <div class="ln2"></div>
						  <p>SAFETYWARE Group is the leading safety products manufacturer and exporter based in Malaysia. 
						  As a manufacturer of hygiene and sanitisation products, Safetyware factory is cosmetic GMP certified and approved by NPRA.
						  We manufacture hand sanitisers and disinfectants using superior quality raw materials and unique formulas that developed by our research & 
						  development team under the help of consultants & chemists with more than 30 years of experience.
						  </p>
                           <div class="ln2"></div>
						   <center>
						   <img src="images/npra.png" alt="" width="300px" height="150px">
						   <img src="images/gmp.png" alt="" width="200px" height="150px">
						   </center>	   
                          </div>
                      </div>
                  </div>
              </div>
              
        
                  <div class="container">
                              <ul id="myTab" class="nav nav-tabs newest" role="tablist">
                                  <li role="presentation" class="active">
                                       <div class="brand-title">
                              <h3><u>What is Hygiene? What is Sanitisation?</u></h3>
                              </div>
							  <p>Hygiene is a series of practice conducted to maintain health and prevent spread of diseases, especially through cleanliness. 
							  Sanitisation then means an act or process in cleaning something to make it free from infectious microbes like germs and bacteria. 
							  </p>
							   <div class="ln2"></div>
							    <img src="images/hyg.jpg" alt="" width="1024x" height="287px">
                                  </li>
                              </ul>
                  </div>

				 
              <div class="brands">
                  <div class="container">
                      <div class="brands-inner">
                          <div class="brand-title">
                            <h3><u> How to Choose a Sanitising Product?</u></h3>
                          </div>
						  <p>
						  <h4>1. Check out their alcohol content</h4>
						  
						  <ol type="a">
						  <li>Sanitising products should always be alcohol-based with  alcohol concentration of at least 60 to 75% alcohol, 
						  for them to perform their strongest disinfecting effect.</li>
						  <li>The active ingredient – Alcohol that commonly found in the market are either ethanol or isopropyl alcohol (IPA) where both act the similar 
						  effect in killing the microbes rapidly.</li>
						  <li>
                          According to World Health Organisation (WHO) and Food and Drug Administration (FDA) recommendation standards, the alcohol content of
						  sanitising products should be having at least 75% volume per volume to make sure the effectiveness on antimicrobial activity.
						  </li>
						  </ol>
						  <div class="ln2"></div>
						  <h4>2. Understand their ingredients</h4>						  
						  <ol type="a">
						  <li>Alcohol (>60%) kills and destroys infectious microbes by breaking up their outer coatings.</li>
						  <li>Water (>40%) acts as a barrier for the ingredients and part of the hydrogel.</li>
						  <li>
                          Additional of emollients leaves your hands feeling soft and refreshed to prevent it from dryness after application on the long-term usage.
						  </li>
						  <li>
                          Carbomers are added into the hand sanitiser as gelling agent to enhance its viscosity to become more gel-like. 
						  It usually comes in paired with a base to neutralise the acidic effects of the carbomer.
						  </li>
						  <li>
                           Right amount of fragrance gives the sanitiser a pleasant smell to get rid of choking and pungent alcoholic odour and leave the great smelling 
						   and gentle on hands.
						  </li>
						  <li>Some sanitisers might contain Vitamin E as additional advantage of boosting skin health and prevent skin from being 
						  too dry because of alcohol’s drying effects.</li>
						  
						  </ol>
						  <div class="ln2"></div>
						  
						  <h4>3. Read their properties</h4>
						  
						  <ol type="a">
						  <li>A good sanitising products would have the properties of anti-bacterial, which indicates their ability to effectively kill 
						  the infectious microbes like germs and bacteria that may cause illness.</li>
						  <li>Rinse-free sanitising products benefits user of its convenient application to be used anytime, 
						  anywhere at areas where water and soap is not available.</li>
						  <li>
                          Non-sticky and quick drying features offer fast-acting disinfecting effect and leave no residue or stickiness on skin 
						  while keeping hands nourish and smooth.
						  </li>
				
						  </ol>
						  <div class="ln2"></div>
						  
						  <h4>4. Look at the expiration dates</h4>
						  
						  <ol type="a">
						  <li>
                          Alcohol is volatile and tends to evaporate over time, which will cause the sanitising products to lose its ability to ward off 
						  infections and fight the microbes. You have to both store and use the product properly to maintain the alcohol concentration at the desired level.
						  </li>
				
						  </ol>
						  <div class="ln2"></div>
						  
						  <h4>5. Identify the type that most suitable for you</h4>
						  
						  <ol type="1">
						  <li>
                          The hand sanitisers can be classified into two types according to their viscosity, which are the gel type and liquid type.
						  </li>
						  <ol type="a">
						  <li>Gel type hand sanitiser is ideal to keep your hands clean throughout your day as an excellent option for easy application.</li>
						  <li>Liquid type hand sanitiser can be used for easy spreading of disinfectant solution and great to disinfect not only
						  your hands but surfaces as well.</li>
						  </ol>
						  <li>
						  Surface sanitisers are made in liquid form for easy cleaning and disinfectant purposes on various surfaces through sprays.
						  </li>
				
						  </ol>


							  </p>
							<div class="ln2"></div>
						  
                          
                      </div>
                  </div>
              </div>
              
              
              <div class="rec-blog">
                  <div class="container">
                      <div class="rec-blog-inner">
                          <div class="blog-title">
                              <h3><u> Features</u></h3>
                          </div>
                          <div class="row">
                              <div class="col-md-4 blog-ct">
                                  <center><img src="images/hs1.png" alt="" class="img-responsive" width="200px" height="200px"></center>
                                  <div class="blog-ct-title">
                                      <h4><b>Anti-bacteria</b></h4>
                                    
                                  </div>
								    <p>Instant hand sanitiser kills 99.9% of germs that may cause illness to keep your safe from a broad spectrum of microorganisms. 
									Rapid antimicrobial kills with 75% of alcohol content that works at the strongest disinfection effect.
									  </p>
                              </div>
                              <div class="col-md-4 blog-ct">
                                  <center><img src="images/hs2.png" alt="" class="img-responsive" width="200px" height="200px"></center>
                                  <div class="blog-ct-title">
                                      <h4><b>Rinse Free</b></h4>
                                   
                                  </div>
								   <p>It needs no soap, water, rinsing or tower and easy to use without any constraints.
								   It promotes convenient disinfecting option for infection prevention, which it can be used anytime, anywhere: while in care, office, 
								   handbag, picnics, nappy change, travel, sports etc.
									  </p>
                              </div>
							  
							  <div class="col-md-4 blog-ct">
                                  <center><img src="images/hs3.png" alt="" class="img-responsive" width="200px" height="200px"></center>
                                  <div class="blog-ct-title">
                                      <h4><b>Vitamin E</b></h4>
                                   
                                  </div>
								   <p>It promotes skin health and retains smooth skin with additional of Vitamin E.
								   Skin friendly effect provides layers of protection on your hands from harmful micro-organisms.
									  </p>
                              </div>
		
							  
							  
                          </div>
						  
						  <div class="row">
							  <div class="col-md-4 blog-ct">
                                  <center><img src="images/hs4.png" alt="" class="img-responsive" width="200px" height="200px"></center>
                                  <div class="blog-ct-title">
                                      <h4><b>Moisturizing Effect</b></h4>
                                   
                                  </div>
								   <p>With the unique formulation of our hand sanitiser, it can prevent your skin from dryness after application on the long-term usage. 
								   Instead, it leaves hands feeling soft and refreshed with emollients featured.
									  </p>
                              </div>
							  
							  <div class="col-md-4 blog-ct">
                                  <center><img src="images/hs5.png" alt="" class="img-responsive" width="200px" height="200px"></center>
                                  <div class="blog-ct-title">
                                      <h4><b>Quality Guaranteed</b></h4>
                                   
                                  </div>
								   <p>To give our best in manufacturing the highest quality of hand sanitiser, 
								   we perform In-process quality check from time to time to make sure every production meets the requirement and 
								   safety level according to ISO standards. Quality control by conducting pH test and alcohol content test for each batch manufactured.
									  </p>
                              </div>
							  
							  
                          </div>
                      </div>
                  </div>
              </div>
              
          </div> <!-- Content -->
          
          <div id="footer"><!-- Footer -->
              <div class="footer-widget">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-3">
                              <div class="text-widget">                               
                                  <a href="index.php"> <img src="images/clean-logo.png" alt="ft-logo" height="50px" width="220px"></a>
								  <br/>	
								 
						  <div class="m">
                          <div class="col-md-2">
                              <div class="quick-links">
                                 <div class="wid-title">Contact Sales</div>
                             
								  Penang : 
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  +6 04-502 3882 (8 lines)<br/>
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  +6 04-508 1882 (Fax)
								  <br/>
								  <br/>Perak :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  +6 017-345 4882
								
								  <br/><br/>Johor :
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  +6 07-511 4882
								  <br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  +6 07-562 8880 (Fax) 
								  <br/><br/>
								  Kuala Lumpur : 
								  &nbsp
								  +6 03-6262 0882 (4 Lines)<br/>
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  +6 03-6270 0393 (Fax)
								  <br/><br/>
								  Melaka :
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  +6 06-336 3882 (2 Lines)<br/>
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  +6 06-337 5881 (Fax)
								  <br/><br/>
								  Sarawak :
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  +608-226 6182<br/>
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  &nbsp&nbsp&nbsp&nbsp
								  +608-226 6182 (Fax)<br/>
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  &nbsp&nbsp&nbsp&nbsp
								  +6012-568 7882 (HP)
								  <br/><br/>
								  Sabah :
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  +608-841 2982
								  <br/>
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  &nbsp&nbsp&nbsp&nbsp
								  +608-848 9282 (Fax)
								  <br/>
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  &nbsp&nbsp&nbsp&nbsp
								  +6017-645 4882 (HP)
								  <br/><br/>
								  Singapore : 
								  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								  +65 6744 0882
                              </div>
                          </div>
						  </div>
							
                                  <div class="clearfix"></div>
                              </div>
                          </div>

                          <div class="ml">
                          <div class="col-md-2">
                              <div class="quick-links">
                                  <div class="wid-title">Retail Shop</div>
                                  
                                  <ul>
                                      <li><b>Kedah (Sungai Petani)</b><br/><p>94A-B, Jalan Pengkalan,Taman Pekan Baru,08000 Sungai Petani, Kedah</p></br>
									  <p>Tel: +6 04-421 4885 (8 lines)</p></li>
                                      <li><br/><b>Pahang (East Coast)</b><br/><p>A21, Lorong Balok Perdana 3/1,Taman Balok Perdana,26080 Kuantan, Pahang</p></br>
									  <p>Tel: +6 09-509 3882/1 (2 lines)</p><p>Fax: +6 09-509 3880</p></li>								 
                                      <li><br/><b>Melaka</b><br/><p>No 6A & 6A-1, Jalan IKS M5,Taman IKS Merdeka,75350 Batu Berendam, Melaka</p></br>
									  <p>Tel: +6 06-336 3882</p><p>Fax: +6 06-337 5881</p></li>

                                  </ul>
                              </div>
                          </div>
						  </div>
						  
						  <div class="m2">
                          <div class="col-md-3">
                              <div class="subscribe">
                              <div class="wid-title">Social Media</div>
							  <a href="https://www.facebook.com/SafetywareGroup" target="_blank"><img class="alignnone size-medium wp-image-2835" src="https://safetyware.com/wp-content/uploads/2020/07/facebook.png" alt="Facebook" width="50" height="50" /></a>
							  <a href="https://twitter.com/SafetywareSB" target="_blank"><img class="alignnone size-medium wp-image-2836" src="https://safetyware.com/wp-content/uploads/2020/07/twitter.png" alt="Twitter" width="50" height="50" /></a>
							  <a href="https://www.linkedin.com/company/safetyware-group" target="_blank"><img class="alignnone size-medium wp-image-2836" src="https://safetyware.com/wp-content/uploads/2020/07/linkedin.png" alt="LinkedIn" width="50" height="50" /></a>
							  <a href="https://www.instagram.com/safetyware_group/" target="_blank"><img class="alignnone size-medium wp-image-2836" src="https://safetyware.com/wp-content/uploads/2020/07/instagram.png" alt="Instagram" width="50" height="50" /></a>
							  <a href="https://www.youtube.com/c/SafetywareGroup" target="_blank"><img class="alignnone size-medium wp-image-2836" src="https://safetyware.com/wp-content/uploads/2020/07/youtube.png" alt="YouTube" width="50" height="50" /></a>
                              </div>
							  <br/><br/><br/>
							  
							  <div class="subscribe">
                              <div class="wid-title">Certification</div>
							  <img class="alignnone size-medium wp-image-2835" src="https://safetyware.com/wp-content/uploads/2016/10/Malaysia-Brand.png" alt="Malaysia Brand" width="80" height="80" />
                              </div>
							  <br/><br/><br/>
							  <div class="subscribe">
                              <div class="wid-title">OSHA Information Partner:</div>
							  <a href="https://proatoz.com/" target="_blank" rel="noopener"><img class="alignnone size-medium wp-image-2835" src="https://safetyware.com/wp-content/uploads/2020/02/proatoz.png" alt="OSHA Information Partner - proatoz" width="162" height="33" /></a>
                              </div>
                          </div>
						  </div>
                      </div>
                  </div>
              </div>
              <div class="footer-text">
                  <div class="container">
                     <a href="https://safetyware.com/privacy-policy/" style="color: #ffffff !important" target="_blank">Privacy Policy</a><b style="float: right;color: #E8E8E8;">Copyright © 2022 Safetyware Sdn Bhd. All Rights Reserved.  | Powered by <a href="https://keyway.com.my/" target="_blank" style="color: #777777!important">Keyway Technologies</a></b>
                  </div>
              </div>
          </div><!-- Footer -->
      </div> <!-- wrapper -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/library.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.raty.js"></script>
    <script src="js/ui.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.selectbox-0.2.js"></script>
    <script src="js/theme-script.js"></script>
	

	
	  </body>
	</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>

$(document).ready(function() {
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 280) {
      $('#cat-nav').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 281) {
      $('#cat-nav').removeClass('navbar-fixed');
    }
  });
});


	$(document).keydown(function(e) {
			// ESCAPE key pressed
			if (e.keyCode == 27) {
			   document.getElementById("b").style.visibility = "hidden";
				document.getElementById("b1").style.visibility = "hidden";
				document.getElementById("b2").style.visibility = "hidden";
				document.getElementById("b3").style.visibility = "hidden";	
				document.getElementById("k").style.visibility = "hidden";	
				document.getElementById("abc").value='';
					document.getElementById("vm").style.visibility = "hidden";
				
				inputVal='';
				q=''; 
			}
	});
	
	
	


	var q='';
	$(document).ready(function(){
		$('.search-box input[type="text"]').on("keyup input", function(){
			/* Get input value on change */
			
		
			var inputVal = $(this).val();
			var resultDropdown = $(this).siblings(".result");
	

			
			
			$('#logk').click(function () {
		document.getElementById("b").style.visibility = "hidden";
		document.getElementById("b1").style.visibility = "hidden";
		document.getElementById("b2").style.visibility = "hidden";
		document.getElementById("b3").style.visibility = "hidden";	
		document.getElementById("k").style.visibility = "hidden";	
		document.getElementById("vm").style.visibility = "hidden";
		document.getElementById("abc").value='';
		
		inputVal='';
		q='';

	});

			

			if(inputVal.length){
				
				// Get the input field
				var input = document.getElementById("abc");

				// Execute a function when the user releases a key on the keyboard
				input.addEventListener("keyup", function(event) {
				  // Number 13 is the "Enter" key on the keyboard
				  if (event.keyCode === 13) {
					// Cancel the default action, if needed
					event.preventDefault();
					
					var aq=encodeURIComponent(inputVal);
					window.location.href="search.php?id="+aq;
				  }
				});
			
			document.getElementById("b").style.visibility = "visible";	

			q=inputVal;
						
			
            $.get("backend.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                //resultDropdown.html(data);
				
				var input = data;
				var fields = input.split('<br/>');
				var it1 = fields[0];
				var it2 = fields[1];
				var it3 = fields[2];
				var it4 = fields[3];
				var it5 = fields[4];
				var it6 = fields[5];
				var it7 = fields[6];
				var it8 = fields[7];
				var it9 = fields[8];
				var it10 = fields[9];
				var it11 = fields[10];
				var it12 = fields[11];
				var it13 = fields[12];
				
			if(it5>3)
			{
			 document.getElementById("vm").style.visibility = "visible";
			 document.getElementById("vm2").innerHTML = "View More("+it5+")";				 
				$('#vm2').click(function () {
					
					var aq2=encodeURIComponent(inputVal);
					window.location = "search.php?id="+aq2;
				});
			}
			else
			{
			document.getElementById("vm").style.visibility = "hidden";				
			}
			
			
			if(it1!="No results...")
			{
			document.getElementById("b1").style.visibility = "visible";
			document.getElementById("b2").style.visibility = "visible";
			
			document.getElementById("b3").style.visibility = "visible";	
			document.getElementById("k").style.visibility = "visible";	
			document.getElementById("kk").innerHTML = "Results ("+it5+")";			
			
				
			
			if(it2!=null && it6!=null && it10!=null)
			{
			

			bb.innerText = it2;
			bb2.innerText = it6;
			bb3.innerText = it10;
			document.getElementById("ab").src = "images/"+it3;
			document.getElementById("ab2").src = "images/"+it7;
			document.getElementById("ab3").src = "images/"+it11;	
			

				$('#ab').click(function () {
					window.location = "prd.php?id="+it4;
				});
				$('#ab2').click(function () {
					window.location = "prd.php?id="+it8;
				});
				$('#ab3').click(function () {
					window.location = "prd.php?id="+it12;
				});
				

			}
			else if(it2!=null && it6!=null && it10==null)
			{
		
			bb.innerText = it2;
			bb2.innerText = it6;
			
			document.getElementById("ab").src = "images/"+it3;
			document.getElementById("ab2").src = "images/"+it7;
			document.getElementById("b3").style.visibility = "hidden";	
			
			$('#ab').click(function () {
					window.location = "prd.php?id="+it4;
				});
			$('#ab2').click(function () {
					window.location = "prd.php?id="+it8;
				});
				
			}
			else if (it2!=null && it6==null && it10==null)
			{
				bb.innerText = it2;
				document.getElementById("ab").src = "images/"+it3;
				
				document.getElementById("b2").style.visibility = "hidden";
				document.getElementById("b3").style.visibility = "hidden";	
				
				$('#ab').click(function () {
					window.location = "prd.php?id="+it4;
				});
			}
						
			
			}
			else
			{
			document.getElementById("k").style.visibility = "visible";	
			document.getElementById("kk").innerHTML = "No Results Found...";
			document.getElementById("b1").style.visibility = "hidden";
			document.getElementById("b2").style.visibility = "hidden";
			document.getElementById("b3").style.visibility = "hidden";			
			}
			
			
			document.getElementById("ab").src = "images/"+img;
			//document.getElementById('ab').style.display="inline-block";	
			document.getElementById("ab2").src = "images/"+img2;
			//document.getElementById('ab2').style.display="inline-block";		
			document.getElementById("ab3").src = "images/"+img3;
			//document.getElementById('ab3').style.display="inline-block";	

			
            });
        }else{
						// Get the input field
		var input = document.getElementById("abc");
		q='';
		// Execute a function when the user releases a key on the keyboard
		input.addEventListener("keyup", function(event) {
		  // Number 13 is the "Enter" key on the keyboard
		  if (event.keyCode === 13) {
			// Cancel the default action, if needed
			event.preventDefault();
			window.location.href="product.php";
		  }
		});

			document.getElementById("k").style.visibility = "hidden";
            resultDropdown.empty();
			document.getElementById("b1").style.visibility = "hidden";
			document.getElementById("b2").style.visibility = "hidden";
			document.getElementById("b3").style.visibility = "hidden";
			document.getElementById("b").style.visibility = "hidden";
				document.getElementById("vm").style.visibility = "hidden";
			}
		});
	
			// Set search input value on click of result item
		$(document).on("click", ".result p", function(){
				$(this).parents(".search-box").find('input[type="text"]').val($(this).text());
				$(this).parent(".result").empty();
			});
		});


		function srch(){
			if (q=='')
			{
				window.location.href="product.php";	 
			}
			else
			{
				var a=encodeURIComponent(q);
				window.location.href="search.php?id="+a;	
			}
		}


	

	// Get the input field
	var input3 = document.getElementById("abc");

	// Execute a function when the user releases a key on the keyboard
	input3.addEventListener("keyup", function(event) {
	  // Number 13 is the "Enter" key on the keyboard
	  if (event.keyCode === 13) {
		// Cancel the default action, if needed
		event.preventDefault();
		window.location.href="product.php";
	  }
	});



</script>