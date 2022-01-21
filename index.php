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

    <!-- fonts -->
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
  
  .main-slider{
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
  
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
                          <a href="faq.html">FAQs</a>
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
                                      <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" height="40px" width="190px"></a>
                                  </div>

                              <!--</div> -->                          
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
                              <li class="active"><a href="index.html">Home</a></li>
                              <li class="dropdown menu-large">
                                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Product <i class="fa fa-angle-down"></i></a>
                                  <ul class="dropdown-menu megamenu" role="menu">
                                      <li width="20px">
                                          
                                              <div class="mega-sub" style="margin-top:8px;">
											
                                                  <ul>
                                                      <li><a href="prd.html?SAFETYWARE Instant Gel Hand Sanitiser"><span class="bb"style="color:gray">SAFETYWARE Instant Gel Hand Sanitiser</span></a></li>
													 
                                                      <li><a href="prd.html?SAFETYWARE Instant Liquid Hand Sanitiser"><span class="bb" style="color:gray">SAFETYWARE Instant Liquid Hand Sanitiser</span></a></li>					 
													
                                                      <li><a href="prd.html?SAFETYWARE Liquid Surface Sanitiser"><span class="bb" style="color:gray">SAFETYWARE Liquid Surface Sanitiser</span></a></li>
												
													  <li><a href="prd.html?SAFETYWARE Surface Sanitising Wipes"><span class="bb" style="color:gray;">SAFETYWARE Surface Sanitising Wipes</span></a></li>
													  
													  <li><a href="product.html">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
													  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
													  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="bb"> View All ></span></a></li>
                                                  </ul>
                                            </div>                                
                                      </li>
                                  </ul>
                              </li>
                              <li><a href="contact.html">Contact Us</a></li>
							  <span class="blink_me"><li><a href="https://shop.safetyware.com.my/?_ga=2.149303670.1736396890.1641192003-1137409983.1641192003" target="_blank"><span style="color:red">SAFETYWARE Online Store</span></a></li></span>            
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
		  
		  
          
          <div id="main-slider"> <!-- Slider -->
              <div id="home-slider" class="owl-carousel owl-theme">
			  <?php	  
			  if(mysqli_num_rows($tet)!=0) 
			  {
			  while($row=mysqli_fetch_assoc($tet))
			  {
			   ?>
			     <div class="item">
                      <a href="product.php"><img src="<?php echo 'images/'.$row['banner_img']; ?>" alt="slide-1" class="img-responsive"></a>                   
                  </div>
			   <?php
			  }
			  }
			  else
			  {
			  ?>
			  <div class="item">
                      <a href="product.php"><img src=<?php $row['banner_img'];?> alt="slide-1" class="img-responsive"></a>                   
                  </div>
				  
			<?php
			  }
			  
			  ?>
                

              </div>
          </div> <!-- Slider -->
          
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
                                  <a href="index.html"> <img src="images/clean-logo.png" alt="ft-logo" height="50px" width="220px"></a>
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
                     <a href="https://safetyware.com/privacy-policy/" style="color: #ffffff !important" target="_blank">Privacy Policy</a><b style="float: right;color: #E8E8E8;">Copyright © 2021 Safetyware Sdn Bhd. All Rights Reserved.  | Powered by <a href="https://keyway.com.my/" target="_blank" style="color: #777777!important">Keyway Technologies</a></b>
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