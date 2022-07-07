<?php include("../db.php"); ?>

<style>
	h1{
    font-weight: bold;
    letter-spacing: 0.8px;
    margin: 0;
}
p{
    font-size: 18px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
}
span{
    font-size: 16px;
    letter-spacing: 0.8px;
}
a{
    color: #333;
    font-size: 16px;
    letter-spacing: 0.5px;
    text-decoration: none;
    margin: 15px 0;
}
.container{
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
	margin-top: 12%;
    margin-bottom: 10%;
}
.form-container form{
    background: #fff;
    display: flex;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    justify-content: center;
    text-align: center;
    align-items: center;
}
.social-container{
    margin: 20px 0;
}
.social-container a{
    border: 1px solid #ddd;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
}
.form-container input{
    background: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
}
button{
    border-radius: 20px;
    border: 1px solid #f3f3f3;
    background: #23bebe;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}
button:active{
    transform: scale(0.95);
}
button:focus{
    outline: none;
}
button.ghost{
    background: transparent;
    border-color: #fff;
}
.si{
    background-color: rgb(235, 4, 216);
}
.su{
    background-color: rgb(235, 201, 13);
}
.form-container{
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}

.sign-in-container{
    left: 0;
    width: 50%;
    z-index: 2;
}
.sign-up-container{
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;  
}
.overlay-container{
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 100;
}
.overlay{
    background: #fff241;
    background: linear-gradient(to right, #ebd511, #d20afa) no-repeat 0 0 / cover;
    color: #fff;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0) ;
    transition: transform 0.6s ease-in-out;
}
.overlay-panel{
    position: absolute;
    top: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
     align-items: center; 
    padding: 0 40px;
    height: 100%;
    width: 50%;
    text-align: center;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.overlay-right{
    right: 0;
    transform: translateX(0);
}
 .overlay-left{ 
    transform: translateX(-20%);
}

/* Animation */

/* Move signin to the right */
.container.right-panel-active .sign-in-container{
    transform: translateX(100%);
}
/* Move overlay */
.container.right-panel-active .overlay-container{
    transform: translateX(-100%);
}
/* Sign up over Sign In */
.container.right-panel-active .sign-up-container{
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
}
/* Overlay Back to right */
.container.right-panel-active .overlay{
    transform: translateX(50%);
}
.container.right-panel-active .overlay-left{
    transform: translateX(0);
}
.container.right-panel-active .overlay-right{
    transform: translateX(20%);
}
	
	
	
.header-upper {
	background: #4c4c4c;
    margin-top: -25px;
	}
</style>


<style>

    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
       .mobileoverlay {
            display:none !important;
       }
	 	.container {
			max-width:360px !important;
			min-height: 700px !important;
			margin-top: 0% !important;
		}
		.signin {
			width:100% !important;
		}
		.signup {
			width:100% !important;
			margin-top: 20%;
		}
		.formobile {
			display:block;
		}
		.topbarmobileresponsive {
			margin-top: 3%;
		}
		
		
/* common */
	  .logo-box {
		  padding-top: 30px !important;
		}
	  .nav-outer {
		  margin-top: 4% !important;
		  width: 50% !important;
		  margin-left: 10% !important;
		}
	  .outer-box {
		  margin-top: -90px !important;
		}
    }
    
    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
        .mobileoverlay {
            display:none;
       }
		.container {
			max-width:360px !important;
			min-height: 700px !important;
			margin-top: 0% !important;
		}
		.signin {
			width:100% !important;
		}
		.signup {
			width:100% !important;
			margin-top: 20%;
		}
		.formobile {
			display:block;
		}
		.topbarmobileresponsive {
			margin-top: 3%;
		}
		
/* common */
	  .logo-box {
		  padding-top: 30px !important;
		}
	  .nav-outer {
		  margin-top: 4% !important;
		  width: 50% !important;
		  margin-left: 10% !important;
		}
	  .outer-box {
		  margin-top: -90px !important;
		}
    }
    
    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
        .mobileoverlay {
            display:block;
       }
		.container {
			max-width:800px !important;
			min-height: 700px !important;
			margin-top: 12% !important;
		}
		.signin {
			width:50% !important;
		}
		.signup {
			width:50% !important;
			margin-top: 0%;
		}
		.formobile {
			display:none;
		}
		.topbarmobileresponsive {
			margin-top: 0%;
		}
		
/* common */
	  .logo-box {
		  padding-top: 60px !important;
		}
	  .nav-outer {
		  margin-top: 4% !important;
		  width: 50% !important;
		  margin-left: 10% !important;
		}
	  .outer-box {
		  margin-top: -90px !important;
		}
    }
    
    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        .mobileoverlay {
            display:block;
       }
		.container {
			max-width:800px !important;
			min-height: 700px !important;
			margin-top: 12% !important;
		}
		.signin {
			width:50% !important;
		}
		.signup {
			width:50% !important;
			margin-top: 0%;
		}
		.formobile {
			display:none;
		}
		.topbarmobileresponsive {
			margin-top: 0%;
		}
		
/* common */
	  .logo-box {
		  padding-top: 60px !important;
		}
	  .nav-outer {
		  margin-top: 4% !important;
		  width: 50% !important;
		  margin-left: 10% !important;
		}
	  .outer-box {
		  margin-top: -90px !important;
		}
    }
    
    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
        .mobileoverlay {
            display:block;
       }
		.container {
			max-width:800px !important;
			min-height: 700px !important;
			margin-top: 12% !important;
		}
		.signin {
			width:50% !important;
		}
		.signup {
			width:50% !important;
			margin-top: 0%;
		}
		.formobile {
			display:none;
		}
		.topbarmobileresponsive {
			margin-top: 0%;
		}
		
/* common */
	  .logo-box {
		  padding-top: 60px !important;
		}
	  .nav-outer {
		  margin-top: 4% !important;
		  width: 50% !important;
		  margin-left: 10% !important;
		}
	  .outer-box {
		  margin-top: -90px !important;
		}
    }
</style>

<?php if(isset($_GET["signin"])) { ?>

<?php } elseif (isset($_GET["signin"])) { ?>

<?php } else { } ?>
	


<body class="home page-template page-template-tpl-king_composer page-template-tpl-king_composer-php page page-id-20 kingcomposer kc-css-system" >
	   <div class="page-wrapper">
	   <!-- Preloader -->
	   <div class="preloader"></div>

<?php include("../header.php"); ?>

		 
		   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">

		
      <?php if(isset($_GET["alert"])) {  $alert = $_GET["alert"];  ?>  
		   <p style="color: white;margin-top: 10%;position: absolute;margin-left: 30%;font-weight: 600;background: orange;padding: 2px 5px 2px 5px;border-radius: 5px;text-align: center;width: 500px;">
		   
		<?php if($alert == 'created') { 
				echo 'Account Created Successfully'; 
			  } elseif($alert == 'exists') {
				echo 'Account Already Exists';
			  } elseif($alert == 'empty') {
				echo 'One or More filds left Empty';
			  } elseif($alert == 'error') {
				echo 'Password Or Email Seems to be Incorrect';
			  } elseif($alert == 'requestsentsignin') {
				echo 'Request Submitted. Please sign with the Email & Password sent to your mail to see the Request status';
			  } elseif($alert == 'resetlink') {
				echo 'Password reset link has been sent to your registered email ID';
			  } elseif($alert == 'accontdoesnotexists') {
				echo 'Account doesnot exists';
	 		  } elseif($alert == 'passupdated') {
				echo 'Password Updated Successfully';
			  } else { } 
		?>
			   
		   </p>
		   <br>
     <?php } else { } ?>
		   
<div class="container" id="container" style="">
        <div class="form-container sign-up-container signup" id="signup">
            <form action="../signupinsert.php" method="post">
                <h1 style="font-size: 25px;font-size: 21px;margin-top: 12px;">Create Account</h1>
              <!--
				<div class="social-container">
                    <a href="https://www.instagram.com/zaidirfankhan/?hl=en" target="_blank" class="social"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/ZaidIrfanKhan" target="_blank" class="social"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/zaid-irfan-khan-9a4b964b/" target="_blank" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
              -->
                <input type="text" name="fname" placeholder="First Name" required/>
				<input type="text" name="lname" placeholder="Last Name" required/>
				
				<select name="country" id="country" onchange="countryselect()" style="background: #eee;border: none;padding: 12px 15px;margin: 8px 0;width: 100%;">
					<option value="Afganistan">Afghanistan</option>
				   <option value="Albania">Albania</option>
				   <option value="Algeria">Algeria</option>
				   <option value="American Samoa">American Samoa</option>
				   <option value="Andorra">Andorra</option>
				   <option value="Angola">Angola</option>
				   <option value="Anguilla">Anguilla</option>
				   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
				   <option value="Argentina">Argentina</option>
				   <option value="Armenia">Armenia</option>
				   <option value="Aruba">Aruba</option>
				   <option value="Australia">Australia</option>
				   <option value="Austria">Austria</option>
				   <option value="Azerbaijan">Azerbaijan</option>
				   <option value="Bahamas">Bahamas</option>
				   <option value="Bahrain">Bahrain</option>
				   <option value="Bangladesh">Bangladesh</option>
				   <option value="Barbados">Barbados</option>
				   <option value="Belarus">Belarus</option>
				   <option value="Belgium">Belgium</option>
				   <option value="Belize">Belize</option>
				   <option value="Benin">Benin</option>
				   <option value="Bermuda">Bermuda</option>
				   <option value="Bhutan">Bhutan</option>
				   <option value="Bolivia">Bolivia</option>
				   <option value="Bonaire">Bonaire</option>
				   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
				   <option value="Botswana">Botswana</option>
				   <option value="Brazil">Brazil</option>
				   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
				   <option value="Brunei">Brunei</option>
				   <option value="Bulgaria">Bulgaria</option>
				   <option value="Burkina Faso">Burkina Faso</option>
				   <option value="Burundi">Burundi</option>
				   <option value="Cambodia">Cambodia</option>
				   <option value="Cameroon">Cameroon</option>
				   <option value="Canada">Canada</option>
				   <option value="Canary Islands">Canary Islands</option>
				   <option value="Cape Verde">Cape Verde</option>
				   <option value="Cayman Islands">Cayman Islands</option>
				   <option value="Central African Republic">Central African Republic</option>
				   <option value="Chad">Chad</option>
				   <option value="Channel Islands">Channel Islands</option>
				   <option value="Chile">Chile</option>
				   <option value="China">China</option>
				   <option value="Christmas Island">Christmas Island</option>
				   <option value="Cocos Island">Cocos Island</option>
				   <option value="Colombia">Colombia</option>
				   <option value="Comoros">Comoros</option>
				   <option value="Congo">Congo</option>
				   <option value="Cook Islands">Cook Islands</option>
				   <option value="Costa Rica">Costa Rica</option>
				   <option value="Cote DIvoire">Cote DIvoire</option>
				   <option value="Croatia">Croatia</option>
				   <option value="Cuba">Cuba</option>
				   <option value="Curaco">Curacao</option>
				   <option value="Cyprus">Cyprus</option>
				   <option value="Czech Republic">Czech Republic</option>
				   <option value="Denmark">Denmark</option>
				   <option value="Djibouti">Djibouti</option>
				   <option value="Dominica">Dominica</option>
				   <option value="Dominican Republic">Dominican Republic</option>
				   <option value="East Timor">East Timor</option>
				   <option value="Ecuador">Ecuador</option>
				   <option value="Egypt">Egypt</option>
				   <option value="El Salvador">El Salvador</option>
				   <option value="Equatorial Guinea">Equatorial Guinea</option>
				   <option value="Eritrea">Eritrea</option>
				   <option value="Estonia">Estonia</option>
				   <option value="Ethiopia">Ethiopia</option>
				   <option value="Falkland Islands">Falkland Islands</option>
				   <option value="Faroe Islands">Faroe Islands</option>
				   <option value="Fiji">Fiji</option>
				   <option value="Finland">Finland</option>
				   <option value="France">France</option>
				   <option value="French Guiana">French Guiana</option>
				   <option value="French Polynesia">French Polynesia</option>
				   <option value="French Southern Ter">French Southern Ter</option>
				   <option value="Gabon">Gabon</option>
				   <option value="Gambia">Gambia</option>
				   <option value="Georgia">Georgia</option>
				   <option value="Germany">Germany</option>
				   <option value="Ghana">Ghana</option>
				   <option value="Gibraltar">Gibraltar</option>
				   <option value="Great Britain">Great Britain</option>
				   <option value="Greece">Greece</option>
				   <option value="Greenland">Greenland</option>
				   <option value="Grenada">Grenada</option>
				   <option value="Guadeloupe">Guadeloupe</option>
				   <option value="Guam">Guam</option>
				   <option value="Guatemala">Guatemala</option>
				   <option value="Guinea">Guinea</option>
				   <option value="Guyana">Guyana</option>
				   <option value="Haiti">Haiti</option>
				   <option value="Hawaii">Hawaii</option>
				   <option value="Honduras">Honduras</option>
				   <option value="Hong Kong">Hong Kong</option>
				   <option value="Hungary">Hungary</option>
				   <option value="Iceland">Iceland</option>
				   <option value="Indonesia">Indonesia</option>
				   <option value="India">India</option>
				   <option value="Iran">Iran</option>
				   <option value="Iraq">Iraq</option>
				   <option value="Ireland">Ireland</option>
				   <option value="Isle of Man">Isle of Man</option>
				   <option value="Israel">Israel</option>
				   <option value="Italy">Italy</option>
				   <option value="Jamaica">Jamaica</option>
				   <option value="Japan">Japan</option>
				   <option value="Jordan">Jordan</option>
				   <option value="Kazakhstan">Kazakhstan</option>
				   <option value="Kenya">Kenya</option>
				   <option value="Kiribati">Kiribati</option>
				   <option value="Korea North">Korea North</option>
				   <option value="Korea Sout">Korea South</option>
				   <option value="Kuwait">Kuwait</option>
				   <option value="Kyrgyzstan">Kyrgyzstan</option>
				   <option value="Laos">Laos</option>
				   <option value="Latvia">Latvia</option>
				   <option value="Lebanon">Lebanon</option>
				   <option value="Lesotho">Lesotho</option>
				   <option value="Liberia">Liberia</option>
				   <option value="Libya">Libya</option>
				   <option value="Liechtenstein">Liechtenstein</option>
				   <option value="Lithuania">Lithuania</option>
				   <option value="Luxembourg">Luxembourg</option>
				   <option value="Macau">Macau</option>
				   <option value="Macedonia">Macedonia</option>
				   <option value="Madagascar">Madagascar</option>
				   <option value="Malaysia">Malaysia</option>
				   <option value="Malawi">Malawi</option>
				   <option value="Maldives">Maldives</option>
				   <option value="Mali">Mali</option>
				   <option value="Malta">Malta</option>
				   <option value="Marshall Islands">Marshall Islands</option>
				   <option value="Martinique">Martinique</option>
				   <option value="Mauritania">Mauritania</option>
				   <option value="Mauritius">Mauritius</option>
				   <option value="Mayotte">Mayotte</option>
				   <option value="Mexico">Mexico</option>
				   <option value="Midway Islands">Midway Islands</option>
				   <option value="Moldova">Moldova</option>
				   <option value="Monaco">Monaco</option>
				   <option value="Mongolia">Mongolia</option>
				   <option value="Montserrat">Montserrat</option>
				   <option value="Morocco">Morocco</option>
				   <option value="Mozambique">Mozambique</option>
				   <option value="Myanmar">Myanmar</option>
				   <option value="Nambia">Nambia</option>
				   <option value="Nauru">Nauru</option>
				   <option value="Nepal">Nepal</option>
				   <option value="Netherland Antilles">Netherland Antilles</option>
				   <option value="Netherlands">Netherlands (Holland, Europe)</option>
				   <option value="Nevis">Nevis</option>
				   <option value="New Caledonia">New Caledonia</option>
				   <option value="New Zealand">New Zealand</option>
				   <option value="Nicaragua">Nicaragua</option>
				   <option value="Niger">Niger</option>
				   <option value="Nigeria">Nigeria</option>
				   <option value="Niue">Niue</option>
				   <option value="Norfolk Island">Norfolk Island</option>
				   <option value="Norway">Norway</option>
				   <option value="Oman">Oman</option>
				   <option value="Pakistan">Pakistan</option>
				   <option value="Palau Island">Palau Island</option>
				   <option value="Palestine">Palestine</option>
				   <option value="Panama">Panama</option>
				   <option value="Papua New Guinea">Papua New Guinea</option>
				   <option value="Paraguay">Paraguay</option>
				   <option value="Peru">Peru</option>
				   <option value="Phillipines">Philippines</option>
				   <option value="Pitcairn Island">Pitcairn Island</option>
				   <option value="Poland">Poland</option>
				   <option value="Portugal">Portugal</option>
				   <option value="Puerto Rico">Puerto Rico</option>
				   <option value="Qatar">Qatar</option>
				   <option value="Republic of Montenegro">Republic of Montenegro</option>
				   <option value="Republic of Serbia">Republic of Serbia</option>
				   <option value="Reunion">Reunion</option>
				   <option value="Romania">Romania</option>
				   <option value="Russia">Russia</option>
				   <option value="Rwanda">Rwanda</option>
				   <option value="St Barthelemy">St Barthelemy</option>
				   <option value="St Eustatius">St Eustatius</option>
				   <option value="St Helena">St Helena</option>
				   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
				   <option value="St Lucia">St Lucia</option>
				   <option value="St Maarten">St Maarten</option>
				   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
				   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
				   <option value="Saipan">Saipan</option>
				   <option value="Samoa">Samoa</option>
				   <option value="Samoa American">Samoa American</option>
				   <option value="San Marino">San Marino</option>
				   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
				   <option value="Saudi Arabia">Saudi Arabia</option>
				   <option value="Senegal">Senegal</option>
				   <option value="Seychelles">Seychelles</option>
				   <option value="Sierra Leone">Sierra Leone</option>
				   <option value="Singapore">Singapore</option>
				   <option value="Slovakia">Slovakia</option>
				   <option value="Slovenia">Slovenia</option>
				   <option value="Solomon Islands">Solomon Islands</option>
				   <option value="Somalia">Somalia</option>
				   <option value="South Africa">South Africa</option>
				   <option value="Spain">Spain</option>
				   <option value="Sri Lanka">Sri Lanka</option>
				   <option value="Sudan">Sudan</option>
				   <option value="Suriname">Suriname</option>
				   <option value="Swaziland">Swaziland</option>
				   <option value="Sweden">Sweden</option>
				   <option value="Switzerland">Switzerland</option>
				   <option value="Syria">Syria</option>
				   <option value="Tahiti">Tahiti</option>
				   <option value="Taiwan">Taiwan</option>
				   <option value="Tajikistan">Tajikistan</option>
				   <option value="Tanzania">Tanzania</option>
				   <option value="Thailand">Thailand</option>
				   <option value="Togo">Togo</option>
				   <option value="Tokelau">Tokelau</option>
				   <option value="Tonga">Tonga</option>
				   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
				   <option value="Tunisia">Tunisia</option>
				   <option value="Turkey">Turkey</option>
				   <option value="Turkmenistan">Turkmenistan</option>
				   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
				   <option value="Tuvalu">Tuvalu</option>
				   <option value="Uganda">Uganda</option>
				   <option value="United Kingdom">United Kingdom</option>
				   <option value="Ukraine">Ukraine</option>
				   <option value="United Arab Erimates">United Arab Emirates</option>
				   <option value="United States of America">United States of America</option>
				   <option value="Uraguay">Uruguay</option>
				   <option value="Uzbekistan">Uzbekistan</option>
				   <option value="Vanuatu">Vanuatu</option>
				   <option value="Vatican City State">Vatican City State</option>
				   <option value="Venezuela">Venezuela</option>
				   <option value="Vietnam">Vietnam</option>
				   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
				   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
				   <option value="Wake Island">Wake Island</option>
				   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
				   <option value="Yemen">Yemen</option>
				   <option value="Zaire">Zaire</option>
				   <option value="Zambia">Zambia</option>
				   <option value="Zimbabwe">Zimbabwe</option>
				</select>
				
				<select name="state" id="state" style="background: #eee;border: none;padding: 12px 15px;margin: 8px 0;width: 100%;display:none;">
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chandigarh">Chandigarh</option>
					<option value="Chhattisgarh">Chhattisgarh</option>
					<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
					<option value="Daman and Diu">Daman and Diu</option>
					<option value="Delhi">Delhi</option>
					<option value="Lakshadweep">Lakshadweep</option>
					<option value="Puducherry">Puducherry</option>
					<option value="Goa">Goa</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jammu and Kashmir">Jammu and Kashmir</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Madhya Pradesh">Madhya Pradesh</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalaya">Meghalaya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Odisha">Odisha</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Telangana">Telangana</option>
					<option value="Tripura">Tripura</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="Uttarakhand">Uttarakhand</option>
					<option value="West Bengal">West Bengal</option>
				</select>
                <input type="email" name="email" placeholder="Email" required/>
				<input type="number" name="mobile" id="mobileinput" placeholder="Mobile Number" required/>
				<input type="checkbox" class="checkbox" id="whatsappcheckbox" style="margin-right: 91%;width: 20px;">
				<span style="margin-top: -10%;">Same as mobile number</span>
				<input type="number" name="whatsapp" id="whatsappinput" placeholder="WhatsApp Number" required/>
                <input type="password" name="password" placeholder="Password" required/>
				<input type="hidden" name="submit" value="" />
                <button class="su" name="submit" type="submit" style="margin-bottom: 20px;" >Sign Up</button>
				<br/>
				<p class="formobile">Already hold an account..? <a onClick="switcher('signin')">Sign In </a> Here..</p>
            </form>
        </div>
        <div class="form-container sign-in-container signin" id="signin">
			
			<?php if(isset($_GET["id"])) { $getter = $_GET["id"]; 
					if($getter == 'forgot') { 
			?>
			
            <form action="../passreset.php" method="post">
                <h1>Reset Password</h1>
                <span></span>
                <input type="email" name="email" placeholder="Email" required/>
				<input type="hidden" name="submit" value="" />
                <button type="submit" class="si">Send Reset Link</button>
            </form>
			
			<?php } else { $getter = $_GET["id"];  ?>
			
			<form action="../passupdate.php" method="post">
                <h1>Update Password</h1>
                <span></span>
                <input type="email" name="email" readonly value="<?= $getter; ?>" placeholder="Email" required/>
				<input type="password" name="newpassword" placeholder="Password" required/>
				<input type="password" name="newpasswordagain" placeholder="Password" required/>
				<input type="hidden" name="submit" value="" />
                <button type="submit" class="si">Update Password</button>
            </form>
			
			<?php } ?>
			
			<?php } else { ?>
			
			<form action="../dev-logincheck.php" method="post">
                <h1>Sign In</h1>
			<!--
                <div class="social-container">
                    <a href="https://www.instagram.com/zaidirfankhan/?hl=en" target="_blank" class="social"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/ZaidIrfanKhan" target="_blank" class="social"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/zaid-irfan-khan-9a4b964b/" target="_blank" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
            -->
                <span></span>
                <input type="email" name="email" placeholder="Email"/>
				<input type="text" name="u_id" placeholder="User ID"/>
				<input type="text" name="o_id" placeholder="Order ID"/>
                <a href="index?id=forgot">I Forgot my Password</a>
				<input type="hidden" name="submit" value="" />
                <button type="submit" class="si">Sign In</button>
				<br/>
				<p class="formobile">Don't have an account..? <a onclick="switcher('signup')">Sign Up </a> Here..</p>
            </form>
			
			<?php } ?>
			
        </div>
        <div class="overlay-container mobileoverlay">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To Keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Wanderer!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
		   

		   
<?php	if(isset($_GET["alert"])) {
		
		$alert = $_GET["alert"];
		$mobile = $_GET["mobile"];
		if($alert == 'requestsentsignin') { 
?>
	<div id="reachusbox" style="box-shadow: 2px 2px 2px 1px rgb(0 0 0 / 20%);
    width: 500px;
    position: fixed;
    margin-top: -112%;
    z-index: 99;
    margin-left: 30%;
    background: white;
    padding: 5px 15px;
    border-radius: 5px;">

		<div style="text-align:center;">
			<h3 style="display:inline-block;">Quote Sent Successfully</h3>
			<span id="reachusbox-close" style="display:inline-block;float: right;
						border: 1px solid gray;
						padding: 0px 9px;
						border-radius: 5px;
						background: #c1c1c1;
						cursor: pointer;
						 color: black;"><strong>X</strong></span>
		</div>
		<br/>
		<div style="text-align:center;">
			<p> Your Quote has been submitted successfully. Our team will reach you out shortly. <br/><br/> If you want to get in touch with one of our customer care executive, you can click on the below button to connect you directly.
		</div>
		<a target="_blank" style="margin-left: 43%;" href="https://voiceapi.office24by7.com/clickToConnect?apiKey=[xxxxxx]&cust_number=[xxxxxxxx]&listname=[xxxxxxxxxx]&source_type=[xxxx]&format=[xxxx]" class="btn button btn-success" >Reach Us</a>
	</div>
		
<?php } else { } ?>
		
<?php } else { } ?>

<?php include("../footer.php"); ?>

		</div>
	
	
<script>
	const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', ()=> container.classList.add('right-panel-active')
);
signInButton.addEventListener('click', ()=> container.classList.remove('right-panel-active')
);
</script>
		   
	
<script>
	function switcher(erm) {
		var now = erm;
		if(now == 'signup') {
			document.getElementById('signup').style.display = "block";
			document.getElementById('signup').style.opacity = "1";
			document.getElementById('signin').style.opacity = "0";
			document.getElementById('signin').style.display = "none";
		} else if(now == 'signin') {
			document.getElementById('signin').style.display = "block";
			document.getElementById('signin').style.opacity = "1";
			document.getElementById('signup').style.opacity = "0";
			document.getElementById('signup').style.display = "none";
		} else { }
	}
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(".checkbox").change(function() {
    if(this.checked) {
		var same = $("#mobileinput").val();
		$('#whatsappinput').val(same);
	} else {
		$('#whatsappinput').val('');
	} 
});
	
$("#reachusbox-close").click(function(){
  $("#reachusbox").css("display", "none");
});
</script>
	
<script>
function countryselect() {
   var country = document.getElementById("country").value;
	if(country == 'India') {
		document.getElementById("state").style.display = "block";
	} else {
		document.getElementById("state").style.display = "none";
	}
}
</script>
	
	<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script type='text/javascript' id='contact-form-7-js-extra'>
   /* <![CDATA[ */
   var wpcf7 = {"apiSettings":{"root":"https:\/\/vdofy.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
   /* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scriptsbb49.js?ver=5.2.2' id='contact-form-7-js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='../wp-content/themes/alva/js/popper.min431f.js?ver=2.1.2' id='jquery-popper-js'></script>
<script type='text/javascript' src='../wp-content/themes/alva/js/pagenav431f.js?ver=2.1.2' id='pagenav-js'></script>
<script type='text/javascript' src='../wp-content/themes/alva/js/bootstrap.min431f.js?ver=2.1.2' id='bootstrap-js'></script>
<script type='text/javascript' src='../wp-content/themes/alva/js/jquery.paroller.min431f.js?ver=2.1.2' id='jquery-paroller-js'></script>
<script type='text/javascript' src='../wp-content/themes/alva/js/jquery.fancybox431f.js?ver=2.1.2' id='jquery-fancybox-js'></script>
<script type='text/javascript' src='../wp-content/themes/alva/js/appear431f.js?ver=2.1.2' id='appear-js'></script>
<script type='text/javascript' src='../wp-content/themes/alva/js/slick.min431f.js?ver=2.1.2' id='slick-js'></script>
<script type='text/javascript' src='../wp-content/themes/alva/js/owl431f.js?ver=2.1.2' id='owl-js'></script>
<script type='text/javascript' src='../wp-content/themes/alva/js/wow431f.js?ver=2.1.2' id='wow-js'></script>
<script type='text/javascript' src='../wp-content/themes/alva/js/element-in-view431f.js?ver=2.1.2' id='element-in-view-js'></script>
<script type='text/javascript' src='../wp-content/themes/alva/js/scriptd03b.js?ver=5.5.1' id='alva-main-script-js'></script>
<script type='text/javascript' src='../wp-includes/js/comment-reply.mind03b.js?ver=5.5.1' id='comment-reply-js'></script>
<script type='text/javascript' src='../wp-content/plugins/kingcomposer/assets/frontend/js/kingcomposer.min76ed.js?ver=2.9.5' id='kc-front-scripts-js'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.mind03b.js?ver=5.5.1' id='wp-embed-js'></script>
</body>
</html>
