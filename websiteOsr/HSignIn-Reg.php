<?php
include_once 'signupController.php';
echo "
<!DOCTYPE html>
<html>
    <head>
        <title>Roductive Families</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='css/w3.css'/>
        <link rel='stylesheet' href='css/WebCSs.css'/>
        <link rel='stylesheet' href='css/Heng-Home.css'/>
        
         <link rel='stylesheet' href='css/bootstrap.min.css'>
        <link rel='stylesheet' href='css/font-awesome.css'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='css/fonts.css'>
        <link rel='stylesheet' href='css/owl.carousel.css'>
        <link rel='stylesheet' href='css/style.css'>
        
        
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='icon' href='images/soft.png'>
        <style>
            html,body,h1,h2,h3,h4,h5,h6 {/*font-family: 'Berkshire Swash', cursive;*/font-family: 'Timmana', sans-serif;}
            body{
				
            }
            
            #span1{
                color:#2196F3;
                font-family: Timmana, sans-serif;}
        </style>
        
         <!--[if lt IE 9]>
		<script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
		<script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
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
        <div class='w3-margin-top'>
            <!------Page Card------>
            <div class='w3-white w3-text-grey w3-card-2 w3-round-large'>
 			               
                <!------Card Container------>
              <div class='w3-container w3-padding-16'>
                    <!-------Page Logo------->
                    <div class='w3-third' >
                        <div class='w3-container' >
                            <img class ='w3-padding-16' src='images/OsrLogo.jpg' width='40%' alt='logo' >
                        </div>
                    </div>
                    
                    <!--------------Start Ads---------------->
                 <div class='w3-padding w3-twothird'>
						 <!-------- Ads Banner ---------->
						<div class='' style='height:120px; '>
							<div class='w3-container w3-panel w3-blue w3-card-2 w3-round-large'>
								<h2 class='w3-center w3-text-white w3-padding-32'>Ads By Google Here...</h2>
							</div>
						</div>
                  </div>
                            
            		  <!---------------Ads Banner--------------->

                </div>
                <br>
                <br>
                <!--------End Header Card Container--------->
                
                
                
                <div class='w3-row w3-row-padding w3-padding-16'>
                   
                   <!---------------------Left Ads----------------------------->
                   <div class='w3-quarter w3-padding-16' >
                        <div class=' w3-text-blue w3-card-2 w3-round-large'>
                            <div class='w3-container' >
                                <div class='w3-row w3-panel w3-center w3-leftbar w3-rightbar w3-serif'>
                                   
                                         <h1 class='w3-col s12 m0 l12' style='font-size: 24px;'><b><i class='fa fa-buysellads w3-margin-right w3-xxlarge w3-text-blue'></i></b></h1>
                                    
                                </div> 

                              
                                 <img src='images/Sprites.jpg'style='width:100%; height:100%; '>
                            </div>
							<br/>
                        </div>
                    </div>
                          <!--------------------End Left Side--------------------------->

                        <!----------Start Page Forms---------->
<div class='w3-threequarter w3-padding-16'>
	

	<section class='section' id='login-register-page'>
		<div class='w3-container'>
			<div class='row'>
				

				<form class='register-form' method='post'     action=".signupController::add_new_user().">
					<div class='col-sm-12'>
						<div class='title-line'>
							<h3>Make new account</h3>
							<p>Make your account in seconds</p>
						</div>

						<div class='form-group'>
							<label>First Name *</label>
					    	<input type='text' class='form-control' placeholder='First name *' name='first_name' required>
					  	</div>
					  	
					  	<div class='form-group'>
							<label>Last Name *</label>
					    	<input type='text' class='form-control' placeholder='Last name *' name='last_name' required>
					  	</div>

					  	<div class='form-group'>
							<label>Email *</label>
					    	<input type='email' class='form-control' placeholder='Email *' name='email' required>
					  	</div>

                        <div class='form-group'>
							<label>Address *</label>
					    	<input type='text' class='form-control' placeholder='Address *' name='address' required>
					  	</div>
                     
                     
                        <div class='form-group'>
							<label>Phone Number *</label>
					    	<input type='text' class='form-control' placeholder='Phone number *' name='phone_number' required>
					  	</div>
                                           
                      
					  	<div class='form-group'>
							<label>Password *</label>
					    	<input type='password' class='form-control' placeholder='Password *' name='password' required>
					  	</div>
					  	
					  	<div class='form-group'>
							<label>Confirm Password *</label>
					    	<input type='password' class='form-control' placeholder='Confirm Password *' name='' required>
					  	</div>

					  	<div class='form-group'>
							<label>Birthdate *</label>
					    	<input name='birth_date' type='date' class='form-control' required>
					  	</div>
                                <!--	Select Countries -->
                        <div class='form-group'>
							<label>Select your Contry *</label>        					
				           <select class='form-control' name='country_name' >
<option value=''>Country...</option>
<option value='Afganistan'>Afghanistan</option>
<option value='Albania'>Albania</option>
<option value='Algeria'>Algeria</option>
<option value='American Samoa'>American Samoa</option>
<option value='Andorra'>Andorra</option>
<option value='Angola'>Angola</option>
<option value='Anguilla'>Anguilla</option>
<option value='Antigua &amp; Barbuda'>Antigua &amp; Barbuda</option>
<option value='Argentina'>Argentina</option>
<option value='Armenia'>Armenia</option>
<option value='Aruba'>Aruba</option>
<option value='Australia'>Australia</option>
<option value='Austria'>Austria</option>
<option value='Azerbaijan'>Azerbaijan</option>
<option value='Bahamas'>Bahamas</option>
<option value='Bahrain'>Bahrain</option>
<option value='Bangladesh'>Bangladesh</option>
<option value='Barbados'>Barbados</option>
<option value='Belarus'>Belarus</option>
<option value='Belgium'>Belgium</option>
<option value='Belize'>Belize</option>
<option value='Benin'>Benin</option>
<option value='Bermuda'>Bermuda</option>
<option value='Bhutan'>Bhutan</option>
<option value='Bolivia'>Bolivia</option>
<option value='Bonaire'>Bonaire</option>
<option value='Bosnia &amp; Herzegovina'>Bosnia &amp; Herzegovina</option>
<option value='Botswana'>Botswana</option>
<option value='Brazil'>Brazil</option>
<option value='British Indian Ocean Ter'>British Indian Ocean Ter</option>
<option value='Brunei'>Brunei</option>
<option value='Bulgaria'>Bulgaria</option>
<option value='Burkina Faso'>Burkina Faso</option>
<option value='Burundi'>Burundi</option>
<option value='Cambodia'>Cambodia</option>
<option value='Cameroon'>Cameroon</option>
<option value='Canada'>Canada</option>
<option value='Canary Islands'>Canary Islands</option>
<option value='Cape Verde'>Cape Verde</option>
<option value='Cayman Islands'>Cayman Islands</option>
<option value='Central African Republic'>Central African Republic</option>
<option value='Chad'>Chad</option>
<option value='Channel Islands'>Channel Islands</option>
<option value='Chile'>Chile</option>
<option value='China'>China</option>
<option value='Christmas Island'>Christmas Island</option>
<option value='Cocos Island'>Cocos Island</option>
<option value='Colombia'>Colombia</option>
<option value='Comoros'>Comoros</option>
<option value='Congo'>Congo</option>
<option value='Cook Islands'>Cook Islands</option>
<option value='Costa Rica'>Costa Rica</option>
<option value='Cote DIvoire'>Cote D'Ivoire</option>
<option value='Croatia'>Croatia</option>
<option value='Cuba'>Cuba</option>
<option value='Curaco'>Curacao</option>
<option value='Cyprus'>Cyprus</option>
<option value='Czech Republic'>Czech Republic</option>
<option value='Denmark'>Denmark</option>
<option value='Djibouti'>Djibouti</option>
<option value='Dominica'>Dominica</option>
<option value='Dominican Republic'>Dominican Republic</option>
<option value='East Timor'>East Timor</option>
<option value='Ecuador'>Ecuador</option>
<option value='Egypt'>Egypt</option>
<option value='El Salvador'>El Salvador</option>
<option value='Equatorial Guinea'>Equatorial Guinea</option>
<option value='Eritrea'>Eritrea</option>
<option value='Estonia'>Estonia</option>
<option value='Ethiopia'>Ethiopia</option>
<option value='Falkland Islands'>Falkland Islands</option>
<option value='Faroe Islands'>Faroe Islands</option>
<option value='Fiji'>Fiji</option>
<option value='Finland'>Finland</option>
<option value='France'>France</option>
<option value='French Guiana'>French Guiana</option>
<option value='French Polynesia'>French Polynesia</option>
<option value='French Southern Ter'>French Southern Ter</option>
<option value='Gabon'>Gabon</option>
<option value='Gambia'>Gambia</option>
<option value='Georgia'>Georgia</option>
<option value='Germany'>Germany</option>
<option value='Ghana'>Ghana</option>
<option value='Gibraltar'>Gibraltar</option>
<option value='Great Britain'>Great Britain</option>
<option value='Greece'>Greece</option>
<option value='Greenland'>Greenland</option>
<option value='Grenada'>Grenada</option>
<option value='Guadeloupe'>Guadeloupe</option>
<option value='Guam'>Guam</option>
<option value='Guatemala'>Guatemala</option>
<option value='Guinea'>Guinea</option>
<option value='Guyana'>Guyana</option>
<option value='Haiti'>Haiti</option>
<option value='Hawaii'>Hawaii</option>
<option value='Honduras'>Honduras</option>
<option value='Hong Kong'>Hong Kong</option>
<option value='Hungary'>Hungary</option>
<option value='Iceland'>Iceland</option>
<option value='India'>India</option>
<option value='Indonesia'>Indonesia</option>
<option value='Iran'>Iran</option>
<option value='Iraq'>Iraq</option>
<option value='Ireland'>Ireland</option>
<option value='Isle of Man'>Isle of Man</option>
<option value='Israel'>Israel</option>
<option value='Italy'>Italy</option>
<option value='Jamaica'>Jamaica</option>
<option value='Japan'>Japan</option>
<option value='Jordan'>Jordan</option>
<option value='Kazakhstan'>Kazakhstan</option>
<option value='Kenya'>Kenya</option>
<option value='Kiribati'>Kiribati</option>
<option value='Korea North'>Korea North</option>
<option value='Korea Sout'>Korea South</option>
<option value='Kuwait'>Kuwait</option>
<option value='Kyrgyzstan'>Kyrgyzstan</option>
<option value='Laos'>Laos</option>
<option value='Latvia'>Latvia</option>
<option value='Lebanon'>Lebanon</option>
<option value='Lesotho'>Lesotho</option>
<option value='Liberia'>Liberia</option>
<option value='Libya'>Libya</option>
<option value='Liechtenstein'>Liechtenstein</option>
<option value='Lithuania'>Lithuania</option>
<option value='Luxembourg'>Luxembourg</option>
<option value='Macau'>Macau</option>
<option value='Macedonia'>Macedonia</option>
<option value='Madagascar'>Madagascar</option>
<option value='Malaysia'>Malaysia</option>
<option value='Malawi'>Malawi</option>
<option value='Maldives'>Maldives</option>
<option value='Mali'>Mali</option>
<option value='Malta'>Malta</option>
<option value='Marshall Islands'>Marshall Islands</option>
<option value='Martinique'>Martinique</option>
<option value='Mauritania'>Mauritania</option>
<option value='Mauritius'>Mauritius</option>
<option value='Mayotte'>Mayotte</option>
<option value='Mexico'>Mexico</option>
<option value='Midway Islands'>Midway Islands</option>
<option value='Moldova'>Moldova</option>
<option value='Monaco'>Monaco</option>
<option value='Mongolia'>Mongolia</option>
<option value='Montserrat'>Montserrat</option>
<option value='Morocco'>Morocco</option>
<option value='Mozambique'>Mozambique</option>
<option value='Myanmar'>Myanmar</option>
<option value='Nambia'>Nambia</option>
<option value='Nauru'>Nauru</option>
<option value='Nepal'>Nepal</option>
<option value='Netherland Antilles'>Netherland Antilles</option>
<option value='Netherlands'>Netherlands (Holland, Europe)</option>
<option value='Nevis'>Nevis</option>
<option value='New Caledonia'>New Caledonia</option>
<option value='New Zealand'>New Zealand</option>
<option value='Nicaragua'>Nicaragua</option>
<option value='Niger'>Niger</option>
<option value='Nigeria'>Nigeria</option>
<option value='Niue'>Niue</option>
<option value='Norfolk Island'>Norfolk Island</option>
<option value='Norway'>Norway</option>
<option value='Oman'>Oman</option>
<option value='Pakistan'>Pakistan</option>
<option value='Palau Island'>Palau Island</option>
<option value='Palestine'>Palestine</option>
<option value='Panama'>Panama</option>
<option value='Papua New Guinea'>Papua New Guinea</option>
<option value='Paraguay'>Paraguay</option>
<option value='Peru'>Peru</option>
<option value='Phillipines'>Philippines</option>
<option value='Pitcairn Island'>Pitcairn Island</option>
<option value='Poland'>Poland</option>
<option value='Portugal'>Portugal</option>
<option value='Puerto Rico'>Puerto Rico</option>
<option value='Qatar'>Qatar</option>
<option value='Republic of Montenegro'>Republic of Montenegro</option>
<option value='Republic of Serbia'>Republic of Serbia</option>
<option value='Reunion'>Reunion</option>
<option value='Romania'>Romania</option>
<option value='Russia'>Russia</option>
<option value='Rwanda'>Rwanda</option>
<option value='St Barthelemy'>St Barthelemy</option>
<option value='St Eustatius'>St Eustatius</option>
<option value='St Helena'>St Helena</option>
<option value='St Kitts-Nevis'>St Kitts-Nevis</option>
<option value='St Lucia'>St Lucia</option>
<option value='St Maarten'>St Maarten</option>
<option value='St Pierre &amp; Miquelon'>St Pierre &amp; Miquelon</option>
<option value='St Vincent &amp; Grenadines'>St Vincent &amp; Grenadines</option>
<option value='Saipan'>Saipan</option>
<option value='Samoa'>Samoa</option>
<option value='Samoa American'>Samoa American</option>
<option value='San Marino'>San Marino</option>
<option value='Sao Tome &amp; Principe'>Sao Tome &amp; Principe</option>
<option value='Saudi Arabia'>Saudi Arabia</option>
<option value='Senegal'>Senegal</option>
<option value='Serbia'>Serbia</option>
<option value='Seychelles'>Seychelles</option>
<option value='Sierra Leone'>Sierra Leone</option>
<option value='Singapore'>Singapore</option>
<option value='Slovakia'>Slovakia</option>
<option value='Slovenia'>Slovenia</option>
<option value='Solomon Islands'>Solomon Islands</option>
<option value='Somalia'>Somalia</option>
<option value='South Africa'>South Africa</option>
<option value='Spain'>Spain</option>
<option value='Sri Lanka'>Sri Lanka</option>
<option value='Sudan'>Sudan</option>
<option value='Suriname'>Suriname</option>
<option value='Swaziland'>Swaziland</option>
<option value='Sweden'>Sweden</option>
<option value='Switzerland'>Switzerland</option>
<option value='Syria'>Syria</option>
<option value='Tahiti'>Tahiti</option>
<option value='Taiwan'>Taiwan</option>
<option value='Tajikistan'>Tajikistan</option>
<option value='Tanzania'>Tanzania</option>
<option value='Thailand'>Thailand</option>
<option value='Togo'>Togo</option>
<option value='Tokelau'>Tokelau</option>
<option value='Tonga'>Tonga</option>
<option value='Trinidad &amp; Tobago'>Trinidad &amp; Tobago</option>
<option value='Tunisia'>Tunisia</option>
<option value='Turkey'>Turkey</option>
<option value='Turkmenistan'>Turkmenistan</option>
<option value='Turks &amp; Caicos Is'>Turks &amp; Caicos Is</option>
<option value='Tuvalu'>Tuvalu</option>
<option value='Uganda'>Uganda</option>
<option value='Ukraine'>Ukraine</option>
<option value='United Arab Erimates'>United Arab Emirates</option>
<option value='United Kingdom'>United Kingdom</option>
<option value='United States of America'>United States of America</option>
<option value='Uraguay'>Uruguay</option>
<option value='Uzbekistan'>Uzbekistan</option>
<option value='Vanuatu'>Vanuatu</option>
<option value='Vatican City State'>Vatican City State</option>
<option value='Venezuela'>Venezuela</option>
<option value='Vietnam'>Vietnam</option>
<option value='Virgin Islands (Brit)'>Virgin Islands (Brit)</option>
<option value='Virgin Islands (USA)'>Virgin Islands (USA)</option>
<option value='Wake Island'>Wake Island</option>
<option value='Wallis &amp; Futana Is'>Wallis &amp; Futana Is</option>
<option value='Yemen'>Yemen</option>
<option value='Zaire'>Zaire</option>
<option value='Zambia'>Zambia</option>
<option value='Zimbabwe'>Zimbabwe</option>
                                </select>
                        </div>        
                            <!---------------------- End Select --------------------->
		
					  	<div class='form-group'>
						    <button name='add-user-submit' class='btn btn-primary'>Sign up</button>
					  	</div>
					</div>
				</form>	
					
			</div><!-- /.row -->
		</div>
	</section>
</div>                              
                            <!----------Page Forms---------->
                    
                </div>

            </div>
            <!----------Page Container End---------->
        </div>
        <!---------------------End the first Card-------------------->
        
        
        <!---------------------Start bottom Advertisement------------>
        <div class='w3-container w3-padding-16'>
                    <!-------- Ads Banner ---------->
                    <div class='' style='height:120px; '>
                        <div class='w3-container w3-panel  w3-card-2 w3-round-large' style='background-color: #FFF;'>
                            <h2 class='w3-center w3-text-black w3-padding-32'>Ads By Google Here...</h2>
                        </div>
                    </div>
         </div>
         <!---------------------End bottom Advertisement------------>
         
         
        <footer class='w3-container w3-Grey w3-center w3-large w3-margin-top' style='letter-spacing: 2px;'>
           &nbsp;&nbsp;
        </footer>
 ";
         if (isset($_SESSION['id'])) {
          $type =$_SESSION['type'];
                 if($type == 3){
                    echo'
                <script>
                    document.getElementById("default").remove();
                    document.getElementById("admin").remove();
                    document.getElementById("user").remove();
                </script>
                        ';
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
echo"
        <script type='text/javascript' src='js/myscripts.js'></script>
        <script>
            function myFunction() {
                var x = document.getElementById('myTopnav');
                if (x.className === 'topnav') {
                    x.className += ' responsive';
                } else {
                    x.className = 'topnav';
                }
            }
        </script>
        <script src='https://code.jquery.com/jquery-1.10.2.js'></script>
        <script src='https://code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/jquery.countdown.min.js'></script>
        <script src='js/owl.carousel.min.js'></script>
        <script src='js/isotope.min.js'></script>
        <script src='js/scripts.js'></script>
    </body>
</html>
";