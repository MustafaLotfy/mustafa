<?php
session_start();
include_once  './Database.php';

include_once './FamilyController.php';

$familyId=$_SESSION['id'];
if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
        $video = $_FILES['video']['name'];

    $target = "products/images/" . basename($_FILES['image']['name']);
    $target2= "products/videos/" . basename($_FILES['video']['name']);
    $check1= move_uploaded_file($_FILES['video']['tmp_name'], $target2);
    $check2=move_uploaded_file($_FILES['image']['tmp_name'], $target);
    if ( $check1||$check2) {
        echo 'succes';
        $name=$_POST['name'];
        $description= $_POST['description'];
        $price =$_POST['price'];
       
        FamilyController::addProduct($name, $description, $price, $image, $video, $familyId);
        header ("Location:HFamily-product.php");
    } else {
        echo 'fail you must enter video or image ';
    }
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
        
        <link rel='stylesheet' href="css/Add-product.css"/>
        
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
    <body>
     
                 <!----------------- Start NavBar------------------->
       <header class='header'>
      <nav id='default' class='navbar navbar-default navbar-fixed-top'>
	      	<div class='container'>
		        <div class='navbar-header'>
		          <a class='navbar-brand' href='index.html' style='color:chocolate;'><h4>Osra<span style='color:#2196F3;font-family: 'Timmana', sans-serif;'>Monteja</span></h4></a>
		        	<ul class='navbar-icons'>
		        		<li>
			        		<a href='#!' data-ic-class='button-trigger'><i class='fa fa-search'></i></a>
		        		</li>
		        		<li class='dropdown'>
					            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><i class='fa fa-cog'></i><span class='caret'></span></a>
					            <ul class='dropdown-menu'>
                                     <li class='select-language'>
                                        <p>choose language</p>
                                        <a href='#!' class='active'>
                                            <i class='fa fa-language'>  En</i>
                                        </a>
                                        <a href='#!'>
                                            <i class='fa fa-language'>  Ar</i>
                                        </a>

                                    </li>
					            </ul>
				        </li>
		        		
		        		<li>
			        		<a href='#!' class='navbar-toggle' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
				        		<span class='icon-bar'></span>
					            <span class='icon-bar'></span>
					            <span class='icon-bar'></span>
			        		</a>
		        		</li>
			        </ul>
		          	
		        </div>

		        <div id='navbar' class='navbar-collapse collapse'>
		        	<div class=''>
			          	<ul class='nav navbar-nav'>
				            <li class='active'><a href='HFirstPage.php'>Home</a></li>
				            
				            <li id ='pfamily' class='dropdown'>
					            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Join us<span class='caret'></span></a>
					            <ul class='dropdown-menu'>
                                    <li><a href='HSignin.php'>Signin</a></li>
					                <li><a href='HSignIn-Reg.php'>Customer signup</a></li>
					                <li><a href='HSignIn-Reg-family.php'>Family signup</a></li>
					                
					            </ul>
				            </li>
				            
				            <li><a href='ContactUs.html'>Contact usا</a></li>
				            
				            
				            <li><a href='AboutUs.html'>About us</a></li>
				            
				            
				            
			          	</ul>
		          	</div>

	          		<ul class='nav navbar-nav navbar-left navbar-icons'>
		        		<li>
			        		<a href='#!' data-ic-class='button-trigger'><i class='fa fa-search'></i></a>
		        		</li>
		        		<li class='dropdown'>
					            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><i class='fa fa-cog'></i><span class='caret'></span></a>
					            <ul class='dropdown-menu'>
                                     <li class='select-language'>
                                        <p>choose language</p>
                                        <a href='#!' class='active'>
                                            <i class='fa fa-language'>  En</i>
                                        </a>
                                        <a href='#!'>
                                            <i class='fa fa-language'>  Ar</i>
                                        </a>

                                    </li>
					            </ul>
				        </li>
		        		
		        	</ul>
		        </div>
	      	</div>
	    </nav>
      
       <nav id='user'  class='navbar navbar-default navbar-fixed-top'>
	      	<div class='container'>
		        <div class='navbar-header'>
		          <a class='navbar-brand' href='index.html' style='color:chocolate;'><h4>Osra<span style='color:#2196F3;font-family: 'Timmana', sans-serif;'>Monteja</span></h4></a>
		        	<ul class='navbar-icons'>
		        		<li>
			        		<a href='#!' data-ic-class='button-trigger'><i class='fa fa-search'></i></a>
		        		</li>
		        		
		        		<li class='dropdown'>
					            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><i class='fa fa-cog'></i><span class='caret'></span></a>
					            <ul class='dropdown-menu'>
                                     <li class='select-language'>
                                        <p>choose language</p>
                                        <a href='#!' class='active'>
                                            <i class='fa fa-language'>  En</i>
                                        </a>
                                        <a href='#!'>
                                            <i class='fa fa-language'>  Ar</i>
                                        </a>

                                    </li>
					            </ul>
				        </li>
		        		
		        		<li>
			        		<a href='#!' class='navbar-toggle' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
				        		<span class='icon-bar'></span>
					            <span class='icon-bar'></span>
					            <span class='icon-bar'></span>
			        		</a>
		        		</li>
			        </ul>
		          	
		        </div>

		        <div id='navbar' class='navbar-collapse collapse'>
		        	<div class=''>
			          	<ul class='nav navbar-nav'>
				            <li class='active'><a href='HFirstPage.php'>Home</a></li>
				            
				            
				            <li id ='PF'><a href='HProfileNew.php'>profile</a></li>
				            
				            
				            
				            
				            <li  id ='MyFav'><a href='Hfavourite.php'>My Favourite</a></li>
				            
				            
				            
				            <li><a href='ContactUs.html'>Contact usا</a></li>
				            
				            
				            <li><a href='AboutUs.html'>About us</a></li>
				            
				            
				            <li id ='logout'><a href='logout.php'>Logout</a></li>
				            
			          	</ul>
		          	</div>

	          		<ul class='nav navbar-nav navbar-left navbar-icons'>
		        		<li>
			        		<a href='#!' data-ic-class='button-trigger'><i class='fa fa-search'></i></a>
		        		</li>
		        		
		        		<li class='dropdown'>
					            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><i class='fa fa-cog'></i><span class='caret'></span></a>
					            <ul class='dropdown-menu'>
                                     <li class='select-language'>
                                        <p>choose language</p>
                                        <a href='#!' class='active'>
                                            <i class='fa fa-language'>  En</i>
                                        </a>
                                        <a href='#!'>
                                            <i class='fa fa-language'>  Ar</i>
                                        </a>

                                    </li>
					            </ul>
				        </li>
		        		
		        	</ul>
		        </div>
	      	</div>
	    </nav>
       <nav id='family' class='navbar navbar-default navbar-fixed-top'>
	      	<div class='container'>
		        <div class='navbar-header'>
		          <a class='navbar-brand' href='index.html' style='color:chocolate;'><h4>Osra<span style='color:#2196F3;font-family: 'Timmana', sans-serif;'>Monteja</span></h4></a>
		        	<ul class='navbar-icons'>
		        		<li>
			        		<a href='#!' data-ic-class='button-trigger'><i class='fa fa-search'></i></a>
		        		</li>
		        		<li class='dropdown'>
					            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><i class='fa fa-cog'></i><span class='caret'></span></a>
					            <ul class='dropdown-menu'>
                                     <li class='select-language'>
                                        <p>choose language</p>
                                        <a href='#!' class='active'>
                                            <i class='fa fa-language'>  En</i>
                                        </a>
                                        <a href='#!'>
                                            <i class='fa fa-language'>  Ar</i>
                                        </a>

                                    </li>
					            </ul>
				        </li>
		        		
		        		<li>
			        		<a href='#!' class='navbar-toggle' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
				        		<span class='icon-bar'></span>
					            <span class='icon-bar'></span>
					            <span class='icon-bar'></span>
			        		</a>
		        		</li>
			        </ul>
		          	
		        </div>

		        <div id='navbar' class='navbar-collapse collapse'>
		        	<div class=''> 
			          	<ul class='nav navbar-nav'>
				            <li class='active'><a href='HFirstPage.php'>Home</a></li>
				            
				            
				            <li id ='PF'><a href='HProfileNew.php'>profile</a></li>
				            
				            
				            <li id ='Add_Product' ><a href='HAddProduct.php'>Add product</a></li>
				            
				            
				            
				            <li id='my_works'><a href='HFamily-product.php'>My works</a></li>
				            
				            
				            <li><a href='ContactUs.html'>Contact usا</a></li>
				            
				            
				            <li><a href='AboutUs.html'>About us</a></li>
				            
				            
				            <li id ='logout' ><a href='logout.php'>Logout</a></li>
				            
			          	</ul>
		          	</div>

	          		<ul class='nav navbar-nav navbar-left navbar-icons'>
		        		<li>
			        		<a href='#!' data-ic-class='button-trigger'><i class='fa fa-search'></i></a>
		        		</li>
		        		
		        		<li class='dropdown'>
					            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><i class='fa fa-cog'></i><span class='caret'></span></a>
					            <ul class='dropdown-menu'>
                                     <li class='select-language'>
                                        <p>choose language</p>
                                        <a href='#!' class='active'>
                                            <i class='fa fa-language'>  En</i>
                                        </a>
                                        <a href='#!'>
                                            <i class='fa fa-language'>  Ar</i>
                                        </a>

                                    </li>
					            </ul>
				        </li>
		        		
		        	</ul>
		        </div>
	      	</div>
	    </nav>
       <nav id='admin' class='navbar navbar-default navbar-fixed-top'>
	      	<div class='container'>
		        <div class='navbar-header'>
		          <a class='navbar-brand' href='index.html' style='color:chocolate;'><h4>Osra<span style='color:#2196F3;font-family: 'Timmana', sans-serif;'>Monteja</span></h4></a>
		        	<ul class='navbar-icons'>
		        		<li>
			        		<a href='#!' data-ic-class='button-trigger'><i class='fa fa-search'></i></a>
		        		</li>
		        		<li class='dropdown'>
					            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><i class='fa fa-cog'></i><span class='caret'></span></a>
					            <ul class='dropdown-menu'>
                                     <li class='select-language'>
                                        <p>choose language</p>
                                        <a href='#!' class='active'>
                                            <i class='fa fa-language'>  En</i>
                                        </a>
                                        <a href='#!'>
                                            <i class='fa fa-language'>  Ar</i>
                                        </a>

                                    </li>
					            </ul>
				        </li>
		        		
		        		<li>
			        		<a href='#!' class='navbar-toggle' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
				        		<span class='icon-bar'></span>
					            <span class='icon-bar'></span>
					            <span class='icon-bar'></span>
			        		</a>
		        		</li>
			        </ul>
		          	
		        </div>

		        <div id='navbar' class='navbar-collapse collapse'>
		        	<div class=''>
			          	<ul class='nav navbar-nav'>
				            <li class='active'><a href='HFirstPage.php'>Home</a></li>
				            
				            <li id ='PF'><a href='HProfileNew.php'>profile</a></li>
				            
				            
				            
				            
				            <li id ='Dash'><a href='HAdmin-Dashboard.php'>Dashboard</a></li>
				            
				            
				            
				            
				            <li><a href='ContactUs.html'>Contact usا</a></li>
				            
				            
				            <li><a href='AboutUs.html'>About us</a></li>
				            
				            
				            <li id ='logout' ><a href='logout.php'>Logout</a></li>
				            
			          	</ul>
		          	</div>

	          		<ul class='nav navbar-nav navbar-left navbar-icons'>
		        		<li>
			        		<a href='#!' data-ic-class='button-trigger'><i class='fa fa-search'></i></a>
		        		</li>
		        		<li class='dropdown'>
					            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><i class='fa fa-cog'></i><span class='caret'></span></a>
					            <ul class='dropdown-menu'>
                                     <li class='select-language'>
                                        <p>choose language</p>
                                        <a href='#!' class='active'>
                                            <i class='fa fa-language'>  En</i>
                                        </a>
                                        <a href='#!'>
                                            <i class='fa fa-language'>  Ar</i>
                                        </a>

                                    </li>
					            </ul>
				        </li>
		        		
		        	</ul>
		        </div>
	      	</div>
	    </nav>
       </header>
       
                   <!----------------- End NavBar------------------->
       <br/>
       <br/>
       
        <!----------------------Page Container--------------------------->
        <div class="w3-margin-top">
            <!------Page Card------>
            <div class="w3-white w3-text-grey w3-card-2 w3-round-large">
 			               
                <!------Card Container------>
              <div class="w3-container w3-padding-16">
                    <!-------Page Logo------->
                    <div class="w3-third" >
                        <div class="w3-container">
                            <img class ="w3-padding-16"  src='images/OsrLogo.jpg' width="40%" alt="logo" >
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
                
                
                
                <div class="w3-row w3-row-padding w3-padding-16">
                   
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

                        <!----------Start Page Forms---------->
<div class="w3-threequarter w3-padding-16">
	

		<div class="w3-container">
			<div>

                <form method="post" action="HaddProduct.php" enctype="multipart/form-data">
                    <fieldset class="GeneralInformation">
                      <center>    
                             <legend style="margin-right: auto; margin-left: auto; display: block;">General Information</legend>
                            <label>
                                <img src="images/writing.jpeg" alt="your image" style="width:150px; height:150px;border-radius :50%;margin-right: auto; margin-left: auto;display: block;" />
                            </label>
                        </center>
                        <br/>

                        <p style="margin-top:35px; color:black;">Project Name</p>
                        <input class="w3-text-red w3-input" type="text" name="name" placeholder="Project Name">


                        <p style="margin-top:35px; color:black;">Project Price</p>
                        <input class="w3-text-red w3-input" type="text" name="price" placeholder="$ price">

                        


                        <br>
                    </fieldset>

                    <br/>
                    <br/>
                    <fieldset class="description">
                       <center> 
                        <label>
                           
                        <legend style="margin-right: auto; margin-left: auto; display: block;">description</legend>
                            <img src="images/desc.jpeg" alt="your image" style="width:150px; height:150px;border-radius :50%;margin-right: auto; margin-left: auto;display: block;" />
                        </label>
                        
                        </center>    
                        <br/>


                        <label style="color:#2196F3;">
                            <center>Write project description below</center>
                        </label>
                        <br/>



                        <textarea id="descript" cols="40" rows="8" name="description"></textarea>

                        <br>
                    </fieldset>


                    <br/>
                    <br/>
                    <fieldset class="image-upload">
                       <center>
                            <legend style="margin-right: auto; margin-left: auto; display: block;">Product image</legend>
                            <label for="file-input">
                                <img id="preview" src="images/image-upload.png" alt="your image" style="width:150px; height:150px;border-radius :50%;margin-right: auto; margin-left: auto;display: block;" />
                            </label>
                            <br/>
                            <label style="color:#2196F3;">
                            <center>click on image up to upload project image</center>
                        </label>
                        </center>
                        <br/>
                        
                        

                        <input id="file-input" type="file" name="image" accept="image/*">
                        <br>
                    </fieldset>


                    <br/>
                    <br/>
                    <fieldset class="video-upload" >
                      <center>
                       <legend style="margin-right: auto; margin-left: auto; display: block;">Product video</legend>
                        <label for="video-input">
                            <img src="images/upload-video.png" alt="your image" style="width:150px; height:150px;border-radius :50%;margin-right: auto; margin-left: auto;display: block;" />
                        </label>
                    </center>
                        
                        <center>
                            <input id="video-input" type="file" name="video" accept="video/*">
                        </center>
                        <br>
                    </fieldset>

                    <br/>
                    <br/>
                    <input class="w3-btn w3-blue" type="submit" name="upload" value="Upload">
                    <br/>
                    <br/>
                </form>		
			</div><!-- /.row -->
		</div>

</div>                              
                            <!----------Page Forms---------->
                    
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
        <?php
        if (isset($_SESSION['id'])) {
            $type = $_SESSION['type'];
                 if($type == 3){
                    echo"
                <script>
                    document.getElementById('default').remove();
                    document.getElementById('admin').remove();
                    document.getElementById('user').remove();
                </script>
                        ";
                 }
                 elseif($type == 2){
                      echo"
                <script>
                    document.getElementById('default').remove();
                    document.getElementById('admin').remove();
                    document.getElementById('family').remove();
                </script>
                        ";     
                 }
                 elseif($type == 1){
                   echo"
                <script>
                    document.getElementById('default').remove();
                    document.getElementById('user').remove();
                    document.getElementById('family').remove();
                </script>
                        ";  
                 }
             }
            else{
                echo"
                <script>
                    document.getElementById('user').remove();
                    document.getElementById('admin').remove();
                    document.getElementById('family').remove();
                </script>
            ";
            }
    ?>
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
        <script src="https://www.cse.ust.hk/~rossiter/dating_web_site.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>