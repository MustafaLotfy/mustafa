<?php
session_start();
//include_once './Database.php';

include_once 'PersonController.php';
include_once 'FamilyController.php';
include_once 'UserController.php';
//include_once './FamilyController.php';
//include_once './UserController.php';


include_once './Database.php';
$families =Database::selectFavouriteFamilies($_SESSION['id']);
//echo count($families);

 
 if (isset($_SESSION['id'])) {
   
     
   $Joinus = "none";
   $PF = "inline"; 
   $logout = "inline";     
   $type = $_SESSION['type'];
     if($type == 3){
        $Add_Product="inline";
         $Dash ="none";
         $MyFav="none";  
     }
     elseif($type == 2){
         $Add_Product="none";
         $Dash ="none";
         $MyFav="inline";       
     }
     elseif($type == 1){
         $Add_Product="none";
         $MyFav="none";  
         $Dash ="inline";
     }
 }
else{
    
     $logout = "none";
     $Joinus ="inline";
     $Add_Product="none";
     $PF = "none";
     $MyFav="none";
    $Dash ="none";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Roductive Families</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="css/w3.css"/>
        <link rel='stylesheet' href="css/WebCSs.css"/>
        <link rel='stylesheet' href="css/Heng-Home.css"/>
        
         <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/style.css">
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="images/soft.png">
        <style>
            html,body,h1,h2,h3,h4,h5,h6 {/*font-family: 'Berkshire Swash', cursive;*/font-family: 'Timmana', sans-serif;}
            body{
				
            }
        </style>
      
         <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body >
      <header class="header">
       <nav  class="navbar navbar-default navbar-fixed-top">
	      	<div class="container">
		        <div class="navbar-header">
		          <a class="navbar-brand" href="index.html" style="color:chocolate;"><h4>Osra<span style="color:#2196F3;font-family: 'Timmana', sans-serif;">Monteja</span></h4></a>
		        	<ul class="navbar-icons">
		        		<li>
			        		<a href="#!" data-ic-class="button-trigger"><i class="fa fa-search"></i></a>
		        		</li>
		        		<!-------- NEEEEEEEEEEEEEEEEEEEEw------>
		        		<li class="dropdown">
					            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i><span class="caret"></span></a>
					            <ul class="dropdown-menu">
                                     <li class="select-language">
                                        <p>choose language</p>
                                        <a href="#!" class="active">
                                            <i class="fa fa-language">  En</i>
                                        </a>
                                        <a href="#!">
                                            <i class="fa fa-language">  Ar</i>
                                        </a>

                                    </li>
					            </ul>
				        </li>
		        		
		        		<li>
			        		<a href="#!" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				        		<span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
			        		</a>
		        		</li>
			        </ul>
		          	
		        </div>

		        <div id="navbar" class="navbar-collapse collapse">
		        	<div class=""> <!-- Add class "center" to center nav -->
			          	<ul class="nav navbar-nav">
				            <li class="active"><a href="HFirstPage.php">Home</a></li>
				            
				            <li id ="pfamily" class="dropdown" style="display:<?php echo $Joinus ?>;">
					            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Join us<span class="caret"></span></a>
					            <ul class="dropdown-menu">
                                    <li><a href="HSignin.php">Signin</a></li>
					                <li><a href="HSignIn-Reg.php">Customer signup</a></li>
					                <li><a href="HSignIn-Reg-family.php">Family signup</a></li>
					                
					            </ul>
				            </li>
				            <li id ="PF" style="display:<?php echo $PF ?>;"><a href="HProfileNew.php">profile</a></li>
				            
				            
				            <li id ="Add_Product" style="display:<?php echo $Add_Product ?>;"><a href="HAddProduct.php">Add product</a></li>
				            
				            
				            <li  id ="MyFav" style="display:<?php echo $MyFav ?>;"><a href="HAddProduct.php">My Favourite</a></li>
				            
				            
				            <li id ="Dash" style="display:<?php echo $Dash ?>;"><a href="HAddProduct.php">Dashboard</a></li>
				            
				            
				            <li id="my_works" style="display:<?php echo $Add_Product ?>;"><a href="HFamily-product.php">My works</a></li>
				            
				            
				            <li><a href="ContactUs.html">Contact usا</a></li>
				            
				            
				            <li><a href="AboutUs.html">About us</a></li>
				            
				            
				            <li id ="logout" style="display: <?php echo $logout ?>;"><a href="logout.php">Logout</a></li>
				            
			          	</ul>
		          	</div>

	          		<ul class="nav navbar-nav navbar-left navbar-icons">
		        		<li>
			        		<a href="#!" data-ic-class="button-trigger"><i class="fa fa-search"></i></a>
		        		</li>
		        		<!-------- NEEEEEEEEEEEEEEEEEEEEw------>
		        		<li class="dropdown">
					            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i><span class="caret"></span></a>
					            <ul class="dropdown-menu">
                                     <li class="select-language">
                                        <p>choose language</p>
                                        <a href="#!" class="active">
                                            <i class="fa fa-language">  En</i>
                                        </a>
                                        <a href="#!">
                                            <i class="fa fa-language">  Ar</i>
                                        </a>

                                    </li>
					            </ul>
				        </li>
		        		
		        	</ul>
		        </div><!--/.nav-collapse -->
	      	</div>
	    </nav>
       </header>
       <br/>
       <br/>
       
        <!----------------------Page Container--------------------------->
        <div class="w3-container w3-margin-top">
            <!------Page Card------>
            <div class="w3-white w3-text-grey w3-card-2 w3-round-large">
 			               
                <!------Card Container------>
              <div class="w3-container w3-padding-16">
                    <!-------Page Logo------->
                    <div class="w3-third" >
                        <div class="w3-container">
                            <img class ="w3-padding-16" src='images/OsrLogo.jpg' width="40%" alt="logo" >
                        </div>
                    </div>
                    
                    <!--------------Start Ads---------------->
                 <div class="w3-padding w3-twothird">
						 <!-------- Ads Banner ---------->
						<div class="" style="height:120px; ">
							<div class="w3-container w3-panel w3-blue w3-card-2 w3-round-large">
								<h2 class="w3-center w3-text-white w3-padding-32">Ads By Google Here...</h2>
							</div>
						</div>
                  </div>
                            
            		  <!---------------Ads Banner--------------->

                </div>
                <br>
                <br>
                <!--------End Header Card Container--------->
                <!--
                <div class="navbar">
                    <div class="container">
                        <h2>Osr<span>Montega</span></h2>
                        <ul>
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Skills</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">portofolio</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div> -->
                 <!--------start Header NavBar--------->
               
                
              <!--  <div>    
                     
                   <div class=" topnav" id="myTopnav">
                     
                          
                          <a href="#">Home</a>
                          <a href="#">News</a>
                          <a href="HAdd-Product.php">Add Product</a>
                          <a >Logout</a>
                          
                          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                   </div>
                  
                  
                   <div  style="display:none;">    
                     
                   <div class=" topnav" id="myTopnav">
                     
                          <h2 class="a7a">Osr<span>Montega</span></h2>
                           <!--------Start Login form--------
                          <form method='post' action='login.php'>
                            <input type='text' name='email' placeholder='E-mail'>
                            <input type='password' name='password' placeholder='password'>
                            <input class="button"  type="submit" value="login"/>
                          </form>
                       <!--------End Login form--------
                          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                  </div>
                  
                </div>
                </div>-->
                <!--------End Header NavBar--------->
                
                
                <div class="w3-row-padding w3-padding-16">
                   
                   <!---------------------Left Ads----------------------------->
                   <div class="w3-quarter w3-padding-16" >
                        <div class=" w3-text-blue w3-card-2 w3-round-large">
                            <div class="w3-container" >
                                <div class="w3-row w3-panel w3-center w3-leftbar w3-rightbar w3-serif">
                                   
                                         <h1 class="w3-col s12 m0 l12" style="font-size: 24px;"><b><i class="fa fa-buysellads w3-margin-right w3-xxlarge w3-text-blue"></i></b></h1>
                                    
                                </div> 

                              
                                 <img src="images/Sprites.jpg"style="width:100%; height:100%; ">
                            </div>
							<br/>
                        </div>
                    </div>
                          <!--------------------End Left Side--------------------------->
                       	<!--------------- Start testimonials  ----------------->
<div class="w3-threequarter">
	
		<section class="section" id="home-products">
		<div class="w3-container">
			<div class="row w3-container">
				<div class="section-title">
					<h3 class="title">favorites menu</h3>
					<hr>
					
				</div>
				<ul class="products row">
				<?php
				$family = new Familiy();
                for ($i = 0; $i < count($families); $i++) {

                    $family = $families[$i];
                    $id=$family->getId() ;
                    $products = FamilyController::selectProducts($id);
                    $product = new Product();
                    $product = $products[0];
                    
                     if($product==null){
                        $photo='gg.jpg';
                    }
                    else{
                        $photo=$product->getPhoto();
                    }

                ?>

               
				
					<li class="product text-center col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<div class="product-thumbnail">
							<a href="#!" style="background-image: url(products/images/<?php echo $photo?>);"></a>
							<div class="overlay"></div>
						</div>
						<a href="HFamily-product.php?id=<?php echo $family->getId(); ?>">
							<h2 class="product-title"><?php echo $family->getName();?></h2>
						</a>
						
						<div class="price">
							<a href="HFamily-product.php?id=<?php echo $family->getId(); ?>" class="btn btn-cart active"><i class="fa fa-user"></i> Show Products</a>
							<br/><br/>
							<?php 
                               if(isset($_SESSION['type']) && $_SESSION['type']==2){
                            ?>
							    <?php
                            if (UserController::checkFollow($_SESSION['id'], $id)) {
                                ?><a  href="unfollow.php?id=<?php echo $family->getId(); ?>" class="btn btn-cart"><i class="fa fa-heart"></i>unfollow</a>
                                <?php
                            } else {
                                ?><a  href="follow.php?id=<?php echo $family->getId(); ?>" class="btn btn-cart"><i class="fa fa-heart"></i>follow</a>

                                <?php
                            }
                               }?>
							
							
						</div>
					</li>
					<!-- /.product -->

                 <?php

                }?>

				</ul>
				<!-- /.products -->

				
			</div>
		</div>
	</section>
</div>                   
                    
                    
                   
                    
                    <!--------------------End testimonials--------------------------->
                    


                    
                    
                </div>
                

                    
            </div>
            <!----------Page Container End---------->
        </div>
        <!---------------------End the first Card-------------------->
        
        
        <!---------------------Start bottom Advertisement------------>
        <div class="w3-container w3-padding-16">
                    <!-------- Ads Banner ---------->
                    <div class="" style="height:120px; ">
                        <div class="w3-container w3-panel  w3-card-2 w3-round-large" style="background-color: #FFF;">
                            <h2 class="w3-center w3-text-black w3-padding-32">Ads By Google Here...</h2>
                        </div>
                    </div>
         </div>
         <!---------------------End bottom Advertisement------------>
         
         
        <footer class="w3-container w3-Grey w3-center w3-large w3-margin-top" style="letter-spacing: 2px;">
           &nbsp;&nbsp;
        </footer>

        <script type='text/javascript' src='js/myscripts.js'></script>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/scripts.js"></script>
         
    </body>
</html>