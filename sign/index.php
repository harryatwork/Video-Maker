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
		   
<div class="container" id="container" style="margin:auto;margin-top: 0% !important;">
        
        <div class="form-container sign-in-container signin" id="signin" style="margin: 0 25%;">
			
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
			
			<form action="../logincheck.php" method="post">
                <h1>Sign In</h1>
			<!--
                <div class="social-container">
                    <a href="https://www.instagram.com/zaidirfankhan/?hl=en" target="_blank" class="social"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/ZaidIrfanKhan" target="_blank" class="social"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/zaid-irfan-khan-9a4b964b/" target="_blank" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
            -->
                <span></span>
                <input type="email" name="email" placeholder="Email" required/>
				<input type="password" name="password" placeholder="Password" required/>
                <a href="index?id=forgot">I Forgot my Password</a>
				<input type="hidden" name="submit" value="" />
				<input type="hidden" name="redirect" value="<?= $redirect; ?>" />
                <button type="submit" class="si">Sign In</button>
				<br/>
				<!-- <p class="formobile">Don't have an account..? <a onclick="switcher('signup')">Sign Up </a> Here..</p> -->
            </form>
			
			<?php } ?>
			
        </div>
       
    </div>
		   

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
