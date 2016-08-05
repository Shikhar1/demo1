<?php
include("codelibrary/main-include.inc.php");
include("codelibrary/db_util.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-COURT</title>
<link rel="icon" type="images/favicon.png" href="images/favicon.png" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

   <link rel="stylesheet" href="styles.css">
   <script src="latest.js" type="text/javascript"></script>
   <script src="script.js"></script>
   
   
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<script src="js/modernizr.custom.17475.js"></script>

<link rel="stylesheet" href="stylelist.css">
<style type="text/css">
<!--
.style1 {
	font-family: calibri;
	font-size: 24px;
	color: #000000;
	text-shadow: 1px 1px #db8c15;
}
-->
</style>


<style type="text/css">


#f1_container {
	position: relative;
	margin: 10px auto;
	width: 98px;
	height: 90px;
	z-index: 1;
}
#f1_container {
  -webkit-perspective: 1000px;
  -moz-perspective: 1000px;
  -o-perspective: 1000px;
  perspective: 1000px;
}
#f1_card {
  width: 100%;
  height: 100%;
  -webkit-transform-style: preserve-3d;
  -webkit-transition: all 1.0s linear;
  -moz-transform-style: preserve-3d;
  -moz-transition: all 1.0s linear;
  -o-transform-style: preserve-3d;
  -o-transition: all 1.0s linear;
  transform-style: preserve-3d;
  transition: all 1.0s linear;
}
#f1_container:hover #f1_card, #f1_container.hover_effect #f1_card {
  -webkit-transform: rotateY(180deg);
  -moz-transform: rotateY(180deg);
  -o-transform: rotateY(180deg);
  transform: rotateY(180deg);

 
}
.face {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden;
}
.face.back {
  display: block;
  -webkit-transform: rotateY(180deg);
  -webkit-box-sizing: border-box;
  -moz-transform: rotateY(180deg);
  -moz-box-sizing: border-box;
  -o-transform: rotateY(180deg);
  -o-box-sizing: border-box;
  transform: rotateY(180deg);
  box-sizing: border-box;
  padding: 10px;
  color: white;
  text-align: center;
  background-color: #aaa;
}
</style>


        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo-tab.css" />
		<link rel="stylesheet" type="text/css" href="css/tabs.css" />
		<link rel="stylesheet" type="text/css" href="css/tabstyles.css" />
  		<script src="js/modernizr.custom.js"></script>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7243260-2']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<style type="text/css">
<!--
.style3 {color: #243BC7; text-decoration:none;}
.style5 {font-family: calibri}
.style6 {color: #FFFFFF}
.style7 {font-size: 14px}
.style8 {color: #FFFFFF; font-family: calibri; text-decoration:none; }
-->
</style>
</head>

<body>
	<svg class="hidden">
			<defs>
				<path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z"/>
			</defs>
	</svg>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="10" align="center" valign="top" style="background-image:url(images/top-part.jpg); background-repeat:repeat-x;"><table width="1000" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="28" align="left" valign="middle"> <marquee behavior="alternate" scrollamount="1" class="content-main">
                A court is a tribunal, often as governmental institution, with the authority to adjudicate legal disputes between parties and carry out the administration of justice in civil, criminal, and administrative matters in accordance with the rule of law.
                </marquee> </td>
              </tr>
              <tr>
                <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="18%" height="110" align="center" valign="middle">&nbsp;</td>
                    <td width="62%" align="center" valign="middle" style="color:#F00; font-size:48px; font-weight:900;">JUDICIARY<td>
                    <td width="20%" align="center" valign="middle">&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
          <td align="center" valign="top" bgcolor="#363636"><table width="1100" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><div id='cssmenu'>
<ul>
   <li><a href='index.php'><strong>Home</strong></a></li>
    <li><a href='about-us.php'><strong>About Us</strong></a></li>
        
      <li><a href='contact-us.php'><strong>Contact Us</strong></a></li>
	  <li class="active"><a href='register.php'><strong>Register</strong></a></li>
	  <li><a href='login.php'><strong>Login</strong></a></li>
</ul>
</div></td>
    <td width="23%" align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="43" align="right" valign="middle" style="background-image:url(images/serch.png); background-repeat:no-repeat; border:solid #00FF00 0px;"><form id="form1" name="form1" method="post" action="search.php?id=AS676DFGope2434XZW">
          <table width="97%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="50%"><input name="item" type="text" id="item" style=" width:135px;;border:0px; margin-left:20px;" size="12" placeholder="Search"; required/></td>
              <td width="30%"><input type="image" style="cursor:pointer; outline:none;" name="search" width="74px" height="28" src="images/invi.png" /></td>
            </tr>
          </table>
        </form>        </td>
      </tr>
    </table></td>
  </tr>
  
</table>
</td>
          </tr>
    
      <tr>
        <td align="center" valign="top"><table width="1000" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td bgcolor="#ECDDCA"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="26%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" valign="top">&nbsp;
            </td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><div id="container">
    	
            </div></td>
                  </tr>
                  
                  
                </table></td>
                <td width="1%" align="left" valign="top">&nbsp;</td>
                <td width="73%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left" valign="top">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><strong style="color:#000000; margin-left:7px;">Registration Form</strong></td>
                  </tr>
                <tr>
            <td class="content-main">
			<form action="" method="post">
			<table  width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
			<td style="height:40px;">Name</td>
			<td>:</td>
			<td style="margin-bottom:10px;"><input type="text" name="name"><br></td>
			</tr>
			<tr>
			<td style="height:40px;">Email</td>
			<td>:</td>
			<td style="margin-bottom:10px;"><input type="email" name="email"><br></td>
			</tr>
			<tr>
			<td style="height:40px;">contact No.</td>
			<td>:</td>
			<td style="margin-bottom:10px;"><input type="number" name="contact_no"><br></td>
			</tr>
			<tr>
			<td style="height:40px;">Address</td>
			<td>:</td>
			<td style="margin-bottom:10px;"><input type="text" name="address"><br></td>
			</tr>
			<tr>
			<td style="height:40px;">Password</td>
			<td>:</td>
			<td style="margin-bottom:10px;"><input type="password" name="password"><br></td>
			</tr>
             <tr>
			<td></td>
			<td>:</td>
			<td><input type="submit" name="signup" value="SignUp"></td>
			</tr>			
			</table>
			</form>
			
			</td>
          </tr>
		  <?php
		   if(isset($_POST['signup'])){
            $name=$_POST['name'];
			$email=$_POST['email'];
			$contactno=$_POST['contact_no'];
			$address=$_POST['address'];
			$password=$_POST['password'];

			$sql = mysql_query("INSERT INTO register (name, email, contact_no, address, password)
VALUES ('$name', '$email', '$contactno', '$address', '$password')");
             echo "Registration completed!!";

		   }
		   ?>
		  
                  <tr>
                    <td align="left" valign="top">&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
              
            </table></td>
          </tr>
          
          
        </table></td>
      </tr>
    
    
    
     
      <tr>
        <td align="center" valign="top" style="background-image:url(images/footer.jpg); background-repeat:repeat-x;"><table width="1000" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="90%" height="43" align="center" valign="bottom" class="bottom-link_2 style3"><a href="index.php" class="style8"> Home</a> <span class="style6">|</span> <a href="about-us.php" class="style8"> About Us</a>  <span class="style6">|</span><a href="contact-us.php" class="style8">Contact Us</a></td>
              </tr>
              <tr>
                <td height="26" align="center" valign="top" class="style5"><table width="200" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="76" height="37"><span class="style6">Follow Us :</span></td>
                      <td width="33" align="center" valign="middle"><a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.png" width="27" height="27" border="0" class="facebook" /></a></td>
                      <td width="91" align="left" valign="middle"><a href="https://twitter.com/" target="_blank"><img src="images/twitter.png" width="27" height="27" border="0" class="twitter" /></a></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center" class="bottom-link_2 style3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="86%" height="26" align="left" valign="middle" class="style5 style6 style7">&nbsp; 2014 &copy;. All Rights Reserved. </td>
                       <td width="8%" align="right" valign="middle" class="style5 style6 style7">Powered By&nbsp;</td>
                      <td width="6%" align="left" valign="middle" class="style5 style6 style7">Rozi</td>
                    </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

<script src="js/cbpFWTabs.js"></script>
<script>
			(function() {

				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});

			})();
		</script>
        
        

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquerypp.custom.js"></script>
<script type="text/javascript" src="js/jquery.elastislide.js"></script>
<script type="text/javascript">
			
			$( '#carousel' ).elastislide();
			
</script>
</body>
</html>
