<?php
require_once "dbConnection.php";

$id=$_REQUEST['id'];

$fc="SELECT * FROM prlist where p_id=$id ORDER by pos ";
$test=	 mysqli_query($conn, $fc);
$count=  mysqli_num_rows($test);

$fcc="SELECT * FROM product where p_id=$id ";
$testc=	 mysqli_query($conn, $fcc);


$fcc2="SELECT * FROM product where p_id=$id ";
$testc2=	 mysqli_query($conn, $fcc2);

$ml="SELECT * FROM product ORDER by pos DESC";
$mlt=	 mysqli_query($conn, $ml);

$sdesc="";
$link="";
$nam="";


$des="SELECT * FROM prdesc where p_id=$id ";
$dess=	 mysqli_query($conn, $des);
$cdess=  mysqli_num_rows($dess);
$pp=0;


$des2="SELECT * FROM prdesc where p_id=$id ";
$dess2=	 mysqli_query($conn, $des2);

$des3="SELECT * FROM prdesc where p_id=$id ";
$dess3=	 mysqli_query($conn, $des3);
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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="src/Nzoom.min.js"></script>
	
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"></script>

      
    <!-- Bootstrap    
	.bg:hover img{
  	transform: scale(1.08);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	cursor: crosshair;
	
	
	
<script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script><style> html .fb_share_link { padding:2px 0 0 20px; height:16px; background:url(http://static.ak.facebook.com/images/share/facebook_share_icon.gif?6:26981) no-repeat top left; }</style><a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank" class="fb_share_link"><img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80"></a>


    }-->
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
  .wrap{
     width: 1050px;
	 height: 410px;
	 
    overflow: hidden;
  }
  .ibg{
    margin-left:50px;
	margin-top:6px;
	float:left;

  }
  .ibg2{ 
      margin-left:-120px;
	  margin-top:6px;
	   overflow: hidden;
	   font-size:28px;
  }
  

  .dsh{
   border: 0.5px solid #DCDCDC;
   width:55px;
   margin-left:32px;
   margin-top:-20px;

  }
  #name{
  margin-left:30px;
  margin-top:0px;
  text-align: justify;
  color:black;
  font-weight:bold;
  }
  #name2{
  margin-left:35px;
  margin-top:-20px;
  text-align: justify;
  font-size:15px;
  }
  #name22{
  margin-left:35px;
  margin-top:15px;
  text-align: justify;
  }
  .dsh2{
   margin-left:32px;
   margin-top:-25px;
   margin-bottom:12px;
   border: 0.5px solid #DCDCDC;
   width:540px;
  }
  #name3{
   margin-top:20px;
   margin-left:35px;
   text-align: justify;
  }
  #name4{
   margin-top:20px;
   margin-left:35px;
   text-align: justify;
  }
  #name5{
   margin-top:20px;
   margin-left:35px;
   text-align: justify;
  }
  #web{
	margin-top:35px;
   margin-left:-385px;
   text-align: justify;
  }
  .dsh3{
   margin-left:32px;
   margin-top:20px;
   border: 0.5px solid #DCDCDC;
   width:540px;
  }
  .desc{
   float:left;
   margin-top:-25px;
  }
  table{
    border-collapse: collapse;
    border-spacing: 0;
	width:1100px;
  }
  th, td{
    padding: 10px 20px;
    border: 1px solid #000;
	text-align: left;
  }
  .megamenu{
  width:220px;
  height:220px;
  }
    .bb:hover{
text-decoration: underline blue 1px;
  }
  
    #NZoomImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    display: block;
    margin-left: auto;
    margin-right: auto
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
	
  .blink_me {
  animation: blinker 1s linear infinite;
  }
  
  @keyframes blinker {  
  50% { opacity: 0.65; }
  }
  
  #gall{
  height:375px;
  overflow: auto;
  float:left;
  margin-left:35px;

  
  }
  ::-webkit-scrollbar {
    width: 0.1px;

}
  
  /* Shrink wrap strategy 1 */

.easyzoom {
    float: left;
}
.easyzoom img {
    display: block;
}

.easyzoom {
float: left;
}
.easyzoomimg {
display: block;
}
.easyzoom {
display: inline-block;
}
.easyzoomimg {
vertical-align: bottom;
}

.zoomArea {

  overflow:hidden;

  border:1px solid
  text-align: center;
  color: #000000;

}

#topl {
  position: absolute;
  top: 8px;
  margin-left:20px;
text-align: justify;
}

#topr{
  position: absolute;
  top: 6px;
  margin-left:145px;
 background-color: transparent;
  
  border:none;
  color:#C0C0C0;
}

#topr:hover{
 color:black;
}
 

.zoomArea > image {

  width:100%;

  height:100%;

}

.page{
border: 0.5px solid #DCDCDC;
cursor: pointer;
}
.solid {border-bottom: 1px solid gray;
width:1150px;
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
                               <li><a href="index.php">Home</a></li>
							  <li class="active"><a href="product.php">Product</a></li>
                              <li><a href="contact.php">Contact Us</a></li>
							  <span class="blink_me"><li><a href="https://shop.safetyware.com.my/?_ga=2.149303670.1736396890.1641192003-1137409983.1641192003" target="_blank"><span style="color:red">SAFETYWARE Online Store</span></a></li></span>            
                          </ul>
                           
                      </div><!-- /.navbar-collapse -->
                      <!--</div> -->
                  </nav>
              </div>
              </div>   
          </div> <!-- header -->
          

          
          <div id="content"> <!-- Content -->
       
              <div class="newest">
                  <div class="container">
                      <div class="newest-content">
                          <div class="newest-tab">                            
                              
                              <div id="myTabContent" class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade in active" id="1" aria-labelledby="cat-1">
                                      <div class="row clearfix">
                                          <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">	

											  
                                                        <div class="wrap">
														
														<div id="gall">													
														<?php
														if($count<1)
														{
														while($row2=mysqli_fetch_assoc($testc))
														{
														?>
														<div class="page"><img src="<?php echo 'images/'.$row2['p_img'];?>" id="pop" name="<?php echo $row2['p_id'];?>"
														alt="<?php echo $row2['p_name'];?>" onclick="abc(this.src,this.alt)" style="width:60px;height:60px;"></div> 
														<?php
														}															
														}
														else
														{ 
														while($row=mysqli_fetch_assoc($test))
														{											
														?>
														<div class="page"><img src="<?php echo 'images/'.$row['pr_img'];?>" id="pop" name="<?php echo $row['prlist_id'];?>"
														alt="<?php echo $row['pr_sdesc'];?>" onclick="abc(this.src,this.alt)" style="width:60px;height:60px;"></div> 
														<?php
											
														}
														}
														?>
													
														</div>
														
												
		
														<div class="ibg">
														<div class="zoomArea">																			
                                                          <div class="bg">
														  <img id="NZoomImg" alt="" data-NZoomscale="3" height="350px" width="350px">
														  </div>
														    <b><div id="topl"></div></b>
														
															<button style="font-size:24px" id="topr"> <i class="fas fa-compress"></i></button>
														  
														</div>
														  
														<div id="myModal" class="modal">
														   <img class="modal-content" id="img01">
														   <div id="caption"></div>
														</div>													
														</div>	
														
														
														
														<script>
														
														$(".page").click(function() {
															$('#gall').append($(this));
														});
																												
															function abc(imgg,altt){
															document.getElementById('NZoomImg').src = imgg;																												
															document.getElementById("topl").innerHTML = altt;
															
															// Get the modal
															var modal = document.getElementById('myModal');
															
															// Get the image and insert it inside the modal - use its "alt" text as a caption
															var img = document.getElementById('topr');
															var modalImg = document.getElementById("img01");
															var captionText = document.getElementById("caption");
															
															img.onclick = function(){
															modal.style.display = "block";
															modalImg.src = imgg;
															modalImg.alt = altt;
															captionText.innerHTML = altt;
															}
															
															// When the user clicks on <span> (x), close the modal
															modal.onclick = function() {
															img01.className += " out";
															setTimeout(function() {
															   modal.style.display = "none";
															   img01.className = "modal-content";
															 }, 400);
															}    															
															}
															
															
															//document.getElementById("page").style.borderColor = "#DCDCDC";		
																
																// Get the modal
																var modal = document.getElementById('myModal');
																var imgg=document.getElementById("pop").src;
																var altt=document.getElementById("pop").alt;
																// Get the image and insert it inside the modal - use its "alt" text as a caption
																var img = document.getElementById('topr');
																var modalImg = document.getElementById("img01");
																var captionText = document.getElementById("caption");
																
																document.getElementById("topl").innerHTML = altt;
																document.getElementById('NZoomImg').src = imgg;
															
																img.onclick = function(){
																modal.style.display = "block";
																modalImg.src = imgg;
																modalImg.alt = altt;															

																captionText.innerHTML = altt;
																}
																
																// When the user clicks on <span> (x), close the modal
																modal.onclick = function() {
																img01.className += " out";
																setTimeout(function() {
																   modal.style.display = "none";
																   img01.className = "modal-content";
																 }, 400);
																}    

														</script>
														
														<div class="ibg2">
														
														<?php
														while($row3=mysqli_fetch_assoc($testc2))
														{
															$sdesc=$row3['p_sdesc'];
															$link=$row3['p_link'];
															$nam=$row3['p_name'];
														?>
														
														<b><h3 id="name"><?php echo $row3['p_name'];?></h3></b>
														<br>
														<?php
														}	
														?>
														<div class="dsh"></div>
														<br>
														<p id="name2"><?php echo nl2br($sdesc);?></p>	
														<br>
														<div class="dsh2"></div>													
													   
														<a id="web" type="button" href=<?php echo $link;?> value="facebook" 
														target="_blank" style="border: 1.5px solid #DCDCDC;width:200px;background-color:black;padding:5px;font-size:18px;"><span 
														style="text-align:center">Buy It Now</span></a>
													
													    <div class="dsh3"></div>
														
														<h5 id="name5">Share on: 
														&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														
														<div class="root">
														<script async defer crossorigin="anonymous"  src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="z5U9zpQr"></script>
														
														<div class="fb-share-button"  data-href="" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore" 
													    >Share</a></div>
										
														</div>
														</h5>
                                                        </div>	

																								
												
														
                                                     </div>	
													 
													 <script src="script.js"></script>  
													 
                           
                   </div>  
				<br>
						<div class="solid"></div>				
                <br><br>
		
				<div class="brands">
                  <div class="container">
         
                          <div class="brand-title">
                            <h4 class="desc"><u> Product Description</u></h4>
                          </div>
						  
						  <?php
						  while($row5=mysqli_fetch_assoc($dess))
						  {
							  $pp=$row5['pr_format'];
						  }
							  
							if($pp==1)
							{
							while($row7=mysqli_fetch_assoc($dess2))
							{	
						  ?>
						  	
							<p style="text-align: justify;"><?php echo nl2br($row7['pr_ldesc']);?> </p>
						 
						  <?php
							}
							}
							else if($pp==2)
							{
							?>
							 <table id="body">
					           <tr>
								<th>Item Code</th>
								<th>Description</th>
								<th>Type</th>
								<th>Packing</th>
								<th>Unit</th>							
							  </tr>
							  
							  
							  
								<?php
								while($row8=mysqli_fetch_assoc($dess3))
								{
								?>
								<tr>								
								<td><?php echo $row8['pr_code'];?></td>
								<td><?php echo $row8['pr_cdesc'];?></td>
								<td><?php echo $row8['pr_type'];?></td>
								<td><?php echo $row8['pr_pack'];?></td>
								<td><?php echo $row8['pr_unit'];?></td>							
								</tr>
								<?php
								}
								?>
							 </table>
							<?php
							}
						   
						  ?>
				
            
		
                  </div>
              </div>
	<br><br>
	<div class="solid"></div>
	
	<div class="ln2"></div>
	<br>
	
            <div class="newest">
                  <div class="container">
              
                          <div class="newest-tab">
                             <div class="brand-title">
                            <h4 class="desc"><u>You may also like</u></h4>
                          </div>
                              <br>
                              
                              <div id="myTabContent" class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade in active" id="1" aria-labelledby="cat-1">
                                      <div class="row clearfix">
                                         
										<?php
										$count=1;
										while($row5=mysqli_fetch_assoc($mlt))
										{
										
										if($row5['p_name']!=$nam)
										{
										if($count<5)
										{
										?>
										
										 <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">	
															<a href="prd.php?id=<?php echo $row5['p_id']; ?>">
                                                          <center><img src="<?php echo 'images/'.$row5['p_img']; ?>" alt="" 
														  class="img-responsive" id="img" style="height:250px;width:220px"></center>									
															</a>
																										
                                              </div>       
                                                  <h4><?php echo $row5['p_name'];?></h4>
                                              
                                          </div>
										  
										  <?php
										}
											$count++;
										}
									
										}
										  ?>
                         
                                                     

                                      </div>
                                  </div>
                                  
                              </div>
                              
                          </div>
                      
                  </div>
              </div>
                                              
									  
                                              
                                          </div>                                        

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
            </body>

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

	


	
	<script>
    //var queryString = location.search.substring(1);



    </script>
	

</html>
