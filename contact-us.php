<?php
include("codelibrary/main-include.inc.php");
include("codelibrary/db_util.php");
 if(isset($_POST['submit'])){
            $from=$_POST['email'];
            $to="sales@webmartindia.in";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
	        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	        $headers .= "From: ".$from." " . "\r\n";
			$headers .= 'BCC:sales@webmartindia.in' . "\r\n";
	        $headers .= PHP_EOL;
			$subject="Buisness Enquiry by WebMartIndia To Mahadev Footwear";
			$msg="Name:-   ".$_POST['name']."<br/>Email:- ".$_POST['email']."<br/>Company:- ".$_POST['company']."<br/> Mobile:-   ".$_POST['mobile']."<br/>Phone:- ".$_POST['phone']."<br/>Country:- ".$_POST['country']."<br/>Url:- ".$_POST['url']."<br/>How:- ".$_POST['how']."<br/> Comment:-  ".$_POST['comment'];
			@mail($to, $subject, $msg,$headers);
		    $success="Your Enquiry Has Successfully Sent ! We Will Contact You As Soon, Have A Nice Day!";
			

}
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
<script type="text/javascript">
function validateForm()
{  
var z=document.forms["form2"]["email"].value;
var atpos=z.indexOf("@");
var dotpos=z.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length)
  {
  alert("Not a valid e-mail address");
  document.forms["form2"]["email"].focus();
  document.forms["form2"]["email"].style.backgroundColor="pink";
  return false;
  }
  
  if(isNaN(phone.value)){
	alert("Invalid Phone Number");
	document.forms["form2"]["phone"].focus();
 document.forms["form2"]["phone"].style.backgroundColor="pink";
	return false;
	}
	
  
 var m=document.forms["form2"]["mobile"].value;
  if(m==null || m=="")
  {
    alert("Mobile Number must be filled out");
    document.forms["form2"]["mobile"].focus();
  document.forms["form2"]["mobile"].style.backgroundColor="pink";
    return false;
  }
 if(mobile.value.length<10)
{
alert("Mobile Number should be 10 number");
 document.forms["form2"]["mobile"].focus();
 document.forms["form2"]["mobile"].style.backgroundColor="pink";
return false;
}
if(isNaN(mobile.value)){
	alert("Invalid Mobile Number");
	document.forms["form2"]["mobile"].focus();
 document.forms["form2"]["mobile"].style.backgroundColor="pink";
	return false;
	}
	return true;
	
	
}

</script>
<link rel="stylesheet" href="stylelist.css">

<style type="text/css">
<!--
.style1 {
	font-family: calibri;
	font-size: 24px;
	color: #000000;
	text-shadow: 1px 1px #db8c15;
}
.style3 {color: #243BC7; text-decoration:none;}
.style5 {font-family: calibri}
.style6 {color: #FFFFFF}
.style7 {font-size: 14px}
.style8 {color: #FFFFFF; font-family: calibri; text-decoration:none; }
.style9 {font-weight: bold}
.style10 {color: #FFFFFF; font-family: calibri; text-decoration: none; font-weight: bold; }
.style12 {color: #FFFFFF; font-weight: bold; }
.style32 {font-family: calibri; font-weight: bold; color: #000000; font-size:16px; }
.style20 {font-size: 14px; font-family: calibri; color: #000000; font-weight: bold; }
.style33 {font-family: Georgia, "Times New Roman", Times, serif}
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
      <li class="active"><a href='contact-us.php'><strong>Contact Us</strong></a></li>
	  <li><a href='register.php'><strong>Register</strong></a></li>
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
        <td align="center" valign="top" width="50%"><table width="1000" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECDDCA" >
         <tr>
            <td height="45" align="center" style="color:#000000; font-size:20px; font-family:calibri; font-weight:bold;"><span class="style33">Contact Us</span><br/>
             <img src="images/border-wel.png" width="245" height="5" /></td>
          </tr>
          <tr>
            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left" valign="top" width="67%">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td height="25" align="left" valign="middle" style="border-bottom:dashed 2px #CCCCCC;"><span class="style32">&nbsp;&nbsp;&nbsp;&nbsp;ENQUIRY FORM</span></td>
                                  </tr>
                                   <tr>
                                    <td align="left" valign="top">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top"><form id="form2" name="form2" method="post" action="" onsubmit="return validateForm()" onclick="return show_alert()">
                                    <font color="#33CC00" style="margin-left:80px; font-weight:bold;">
									<?php
									echo $success;
									?>
                                    </font>
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="11%" height="35" align="left" valign="middle"><span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;Name</span><span style="color:#FF0000;">*</span></td>
                                          <td width="41%" align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;<input name="name" type="text" class="design" id="textfield2" required/></td>
                                          <td width="14%" align="left" valign="middle"><span class="style20">Email</span><span style="color:#FF0000;">*</span></td>
                                          <td width="34%" align="left" valign="middle"><input name="email" type="email" class="design" id="email" required/></td>
                                        </tr>
                                        <tr>
                                          <td height="35" align="left" valign="middle"><span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;Company</span><span style="color:#FF0000;">*</span></td>
                                          <td align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;<input name="company" type="text" class="design" id="textfield4" required /></td>
                                          <td align="left" valign="middle"><span class="style20">Mobile No</span><span style="color:#FF0000;">*</span></td>
                                          <td align="left" valign="middle"><input name="mobile" type="number" class="design" id="mobile" required/ maxlength="13"></td>
                                        </tr>
                                        <tr>
                                          <td height="35" align="left" valign="middle"><span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;Phone No</span><span style="color:#FF0000;">*</span></td>
                                          <td align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;<input name="phone" type="number" class="design" id="phone" required/></td>
                                          <td align="left" valign="middle"><span class="style20">Country</span><span style="color:#FF0000;">*</span></td>
                                          <td align="left" valign="middle"><input name="country" type="text" class="design" id="textfield7" required/></td>
                                        </tr>
                                        <tr>
                                         <!-- <td height="35" align="left" valign="middle"><span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;Your URL</span><span style="color:#FF0000;">*</span></td>
                                          <td align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;<input name="url" type="text" class="design" id="url"/></td>
                                          <td align="left" valign="middle"><span class="style20">How did You</span><span style="color:#FF0000;">*</span></td>
                                          <td align="left" valign="middle"><input name="how" type="text" class="design" id="textfield9" required/></td>
                                        </tr>-->
										<!--<td height="35" align="left" valign="middle"><span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;Your URL</span><span style="color:#FF0000;">*</span></td>
                                          <td align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;<input name="url" type="text" class="design" id="url"/></td>-->
                                          <td align="right" valign="middle"><span class="style20">case details</span><span style="color:#FF0000;">*</span></td>
                                          <td align="left" valign="middle"><input name="how" type="text" class="design" id="textfield9" required/></td>
                                        </tr>
                                        <tr>
                                          <td height="35" align="left" valign="middle"><span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;Comments</span><span style="color:#FF0000;">*</span></td>
                                          <td colspan="3" align="left" valign="middle"><br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;<textarea name="comment" cols="73" rows="20" class="design" style="height:90px;" id="comment" required></textarea></td>
                                          </tr>
                                        <tr>
                                          <td align="left" valign="middle">&nbsp;</td>
                                          <td align="left" valign="middle">&nbsp;</td>
                                          <td align="left" valign="middle">&nbsp;</td>
                                          <td align="left" valign="middle">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="left" valign="middle">&nbsp;</td>
                                          <td align="left" valign="middle"> <input type="reset" name="reset" style="background-image:url(images/rest.jpg); background-repeat:no-repeat; color:#FFFFFF width:76px; height:28px;" id="reset" border="0"  value="&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;" />
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input type="submit" style="background-image:url(images/subm.jpg); background-repeat:no-repeat; color:#FFFFFF width:76px; height:28px;" name="submit" id="submit" value="&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;" /></td>
                                          <td align="left" valign="middle">&nbsp;</td>
                                          <td align="left" valign="middle">&nbsp;</td>
                                        </tr>
                                      </table>
                                                                        </form>                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3500.2421559414734!2d77.086367!3d28.682401999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d041375ee1f69%3A0x22467d271347d4e3!2sG-2%2C+Udyog+Nagar%2C+Mangolpuri%2C+New+Delhi%2C+Delhi+110041!5e0!3m2!1sen!2sin!4v1412237963103" width="636" height="210" frameborder="0" style="border:0"></iframe></td>
                                  </tr>
                                </table>
                                </td>
                                <td width="2%" align="left" valign="top">&nbsp;</td>
                                <td width="31%" align="left" valign="top">&nbsp;</td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top">&nbsp;</td>
                                  </tr>
                                 
                                  <tr>
                                    <td align="left" valign="top">&nbsp;</td>
                                  </tr>
                                 
                                  
                                </table></td>
                              </tr>
                  <tr>
                    <td align="left" valign="top">&nbsp;</td>
                    <td align="left" valign="top">&nbsp;</td>
                    <td align="left" valign="top">&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
         
      </tr>
      <tr>
        <td align="center" valign="top"><table width="1000" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
   
              <tr>
                
                
                <td width="34%" align="left" valign="top" style="background-image:url(images/box1.png); background-repeat:no-repeat;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  
                </table></td>
              </tr>
 
            </table></td>
          </tr>
        </table></td>
      </tr>
     
      
      <tr>
        <td align="center" valign="top"></td>
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
