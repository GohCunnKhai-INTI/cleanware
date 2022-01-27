
<?php
require_once "dbConnection.php";

$month = date('m');
$year = date('Y');
$ct=0;
$j=0;

$fc="SELECT * FROM web where month='$month' AND year='$year'";
$test=	 mysqli_query($conn, $fc);
while($row=mysqli_fetch_assoc($test))
{
$ct++;
$j=$row['count'];
}

if($ct==0)
{
$nc= $j+1;
 $uc=mysqli_query($conn,"insert into web (count,month,year) VALUES ($nc,'$month','$year')");
}
else
{
 $nc= $j+1;
 $uc=mysqli_query($conn,"update web set count=$nc where month='$month' AND year='$year'");
}


$fc2="SELECT * FROM product ORDER BY pos ASC";
$test2=	 mysqli_query($conn, $fc2);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <link rel="icon" type="image/x-icon" href="images/clean-logo.png">
    <title>Cleanware</title>
	
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
    <link href='font-awesome/css/font-awesome.css' rel='stylesheet' type='text/css'>
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
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
  .prd{
	  background-color:#DCDCDC;
  }
  .prd2{
	  padding:12px;

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
  
  .e #t{
 position: absolute;
  top: 12px;
  margin-left:75px;
 background-color: transparent;
  
  border:none;
  color:#C0C0C0;
  }
  
  .e #t:hover{
    color: black;

  }
  
  /* The Modal (background) */
	.modal {
	display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 99; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
	}
	
	/* Modal Content (image) */
	.modal-content {
    margin: auto;
    display: block;
    width: 75%;
    //max-width: 75%;
	}
	/* Caption of Modal Image */
	#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
	}
	@-webkit-keyframes zoom {
    from {-webkit-transform:scale(1)}
    to {-webkit-transform:scale(2)}
	}
	
	@keyframes zoom {
    from {transform:scale(0.4)}
    to {transform:scale(1)}
	}
	
	@-webkit-keyframes zoom-out {
    from {transform:scale(1)}
    to {transform:scale(0)}
	}
	
	@keyframes zoom-out {
    from {transform:scale(1)}
    to {transform:scale(0)}
	
	}
	
	/* Add Animation */
	.modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
	}
	
	.out {
	animation-name: zoom-out;
	animation-duration: 0.6s;
	}
	
	/* 100% Image Width on Smaller Screens */
	@media only screen and (max-width: 700px){
	.modal-content {
        width: 100%;
    }
	}
	
	.root{
	 width:50%;
	 height:18px;
	 margin-top:-20px;
	 margin-left:80px;
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
                              <li><a href="index.html">Home</a></li>
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
          

          
          <div id="content"> <!-- Content -->
              <div class="prd">
                  <div class="container">
                      <div class="prd2">
                          <h3>Products</h3>
                          <div class="breadcumb"> <a href="index.html">Home</a><span> / </span><span>Product</span></div>
                          <div class="clearfix"></div>
                      </div>
                  </div>
              </div>
              
              <div class="newest">
                  <div class="container">
                      <div class="newest-content">
                          <div class="newest-tab">
                           <div class="brand-title">
                              <span>Our Products</span>
                          </div>
                              
                              
                              <div id="myTabContent" class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade in active" id="1" aria-labelledby="cat-1">
                                      <div class="row clearfix">
                                         
										<?php
										while($row2=mysqli_fetch_assoc($test2))
										{
										?>
										 <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">	

											            <div class="e">
                                                        <a href="prd.php?id=<?php echo $row2['p_id']; ?>">
                                                          <center><img src="<?php echo 'images/'.$row2['p_img']; ?>" alt="" 
														  class="img-responsive" id="img" style="height:250px;width:220px"></center>
														</a>
														<button style="font-size:24px" onclick=p1("<?php echo 'images/'.$row2['p_img']; ?>") id="t"> <i class="fa fa-search-plus"></i></button>
														</div>
														<div id="myModal" class="modal">
														   <img class="modal-content" id="img01">
														   <div id="caption"></div>
														</div>														
                                              </div>
                                               
                                                  <h4><?php echo $row2['p_name'];?></h4>
                                              
                                          </div>
										  
										  <?php
										}
										  ?>
                         
                                                     

                                      </div>
                                  </div>
                                  
                                  <div role="tabpanel" class="tab-pane fade" id="2" aria-labelledby="cat-2">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <p>....</p>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div role="tabpanel" class="tab-pane fade" id="3" aria-labelledby="cat-3">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <p>....</p>
                                          </div>
                                      </div>
                                  </div>
                                  
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
	
	<script>
	
	function p1(img){
	// Get the modal
	var modal = document.getElementById('myModal');
	
	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var bt = document.getElementById('t');
	//var img = document.getElementById('img');
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");


    modal.style.display = "block";
    modalImg.src = img;
    //modalImg.alt = altt;
	
	modalImg.style.height='1000px';
    modalImg.style.width='1000px';
   // captionText.innerHTML = altt;
	
	
	// When the user clicks on <span> (x), close the modal
	modal.onclick = function() {
    img01.className += " out";
    setTimeout(function() {
       modal.style.display = "none";
       img01.className = "modal-content";
     }, 400);
	}
	}
	
	</script>
	
  </body>
</html>