<?php
include("codelibrary/main-include.inc.php");
include("codelibrary/db_util.php");
$enquiry_pro=mysql_query("select productname from product where id='".$_GET['pid']."'");
while($row=mysql_fetch_array($enquiry_pro))
  {
    $productname=$row[0];
  ?>
<?php
if(isset($_POST['submit'])){
           session_start();
           $real_captcha = $_SESSION['my_captcha'] ;
		   $captcha = $_POST['t1'] ;
           $from=$_POST['buyer_email'];
		   if($real_captcha==$captcha){
           $to="sales@webmartindia.in";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
	        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	        $headers .= "From: ".$from." " . "\r\n";
			$headers .= 'BCC:sales@webmartindia.in' . "\r\n";
	        $headers .= PHP_EOL;
			$subject="Buisness Enquiry by WebMartIndia To Mahadev Footwear";
			$msg="Buyer Name:-   ".$_POST['buyer_name']."<br/>Buyer Email:-    ".$_POST['buyer_email']."<br/>Enquiry Product:-  ".$productname."<br/>Contact Number:-  ".$_POST['mobile']."<br/>Message:-  ".$_POST['buyer_message'];
			@mail($to, $subject, $msg,$headers);
		$success="Your Enquiry Has Successfully Sent<br> We Will Contact You As Soon, Have A Nice Day!";
		}
		else
		{
		$missmatch=" Missmatch Captcha!!!";
		
		}
	
}
?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta http-equiv="Content-Language" content="en-us">

<title>Product Enquiry From</title>
<link href="css/style-1.css" rel="stylesheet" type="text/css" />
<style>
body{font-family:Verdana, Geneva, sans-serif; font-size:12px; margin:0; padding:0;}
.wrapper{width:400px;margin:auto;}
h1{color: #cf0101;}
table tr td{padding-bottom:8px;}
.clearfix{*zoom:1;}.clearfix:before,.clearfix:after{display:table;content:"";line-height:0;}
.clearfix:after{clear:both;}
.mr{border:1px solid #cccccc; width:72px; height:38px; padding:10px;);   }
.name{border:1px solid #cccccc; width:260px; height:22px;  background:#f9f9f9 url(images/input_bg.jpg);}
.email{border:1px solid #cccccc; width:336px; height:22px;   background:#f9f9f9 url(images/input_bg.jpg); }
.std{border:1px solid #cccccc; width:53px; height:17px; padding:10px;  background:#f9f9f9 url(images/input_bg.jpg); }
.inpp1{border:1px solid #cccccc; width:255px; height:17px; padding:10px;  background:#f9f9f9 url(images/input_bg.jpg); }
.state{border:1px solid #cccccc; width:350px; height:38px; padding:10px;  background:#f9f9f9 url(images/input_bg.jpg);  }
.city{border:1px solid #cccccc; width:350px; height:38px; padding:10px;  background:#f9f9f9 url(images/input_bg.jpg); }
.address{ max-height:100px; max-width:333px; height:70px ;border:1px solid #cccccc; width:350px;  padding:10px;  }
.country{border:2px solid white; width:334px; height:20px; background:#ebebeb; border-radius:5px; -moz-box-shadow: 0 0 5px #888;
-webkit-box-shadow: 0 0 5px#888;
box-shadow: 0 0 5px #888;}
.country2{border:2px solid #888; width:334px; height:20px; background:#ebebeb; border-radius:5px; -moz-box-shadow: 0 0 5px #888;
-webkit-box-shadow: 0 0 5px#888;
box-shadow: 0 0 5px #888;}
input[type="reset"], input[type="submit"]{border:none; background:#cf0101; color:white; border-radius:5px; padding:5px;-moz-box-shadow: 0 0 5px #888;
-webkit-box-shadow: 0 0 5px#888;
box-shadow: 0 0 5px #888;}

.trans{position:absolute; top:0px; left:0; margin:auto; height:800px; width:100%; background-color:black; z-index:11; -moz-opacity: 0.7; opacity:.70; filter: alpha(opacity=70);}
.trans2{position:absolute; top:0px; left:0; margin:auto; height:100%; width:100%; background-color:black; z-index:12; -moz-opacity: 0.7; opacity:.70; filter: alpha(opacity=70);}

.popup {position:fixed; top:0px;  height:auto; z-index:12; margin-top:5px; left:25px; background:#fff; width:900px; border:5px solid #CCC; border-radius:10px; -webkit-border-radius:10px;}
.tnc {position:fixed; top:0px;  height:auto; z-index:12; margin-top:0px; left:25px; background:#fff; width:520px; border:5px solid #CCC; border-radius:10px; -webkit-border-radius:10px;}
.enquiry_popup {position:fixed; top:0px; left:20%;  max-height:550px; z-index:15;  margin-top:5px; background:#fff; width:600px; border:5px solid #CCC; border-radius:10px; -webkit-border-radius:10px;}
.popup_box_divloader {position:fixed; top:20px; left:25%;  height:auto; z-index:12;  margin-top:5px; background:#fff; width:300px; border:5px solid #CCC; border-radius:10px; -webkit-border-radius:10px;}
.popup_quiz {position:fixed; top:29%; left:30%;  height:auto; z-index:12;  margin-top:5px; background:#fff; width:550px; border:5px solid #CCC; border-radius:10px; -webkit-border-radius:10px;}
</style>
<script language="javascript" src="js/function.js" type="text/javascript"></script>
  <script src="js/register.js" type="text/javascript"></script>
  <script type="text/javascript">
function reload()
{
img = document.getElementById("capt");
img.src="captcha-demo.php?rand_number=" + Math.random();
}
</script>
 <script type="text/javascript">
function validateForm()
{  
var z=document.forms["form1"]["buyer_email"].value;
var atpos=z.indexOf("@");
var dotpos=z.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length)
  {
  alert("Not a valid e-mail address");
  document.forms["form1"]["buyer_email"].focus();
  document.forms["form1"]["buyer_email"].style.backgroundColor="pink";
  return false;
  }
  
 var m=document.forms["form1"]["mobile"].value;
  if(m==null || m=="")
  {
    alert("Number must be filled out");
    document.forms["form1"]["mobile"].focus();
  document.forms["form1"]["mobile"].style.backgroundColor="pink";
    return false;
  }
 if(mobile.value.length<10)
{
alert("Number should be 10 number");
 document.forms["form1"]["mobile"].focus();
 document.forms["form1"]["mobile"].style.backgroundColor="pink";
return false;
}
if(isNaN(mobile.value)){
	alert("Invalid Number");
	document.forms["form1"]["mobile"].focus();
 document.forms["form1"]["mobile"].style.backgroundColor="pink";
	return false;
	}
	return true;
	
	
}

</script>

</head>

<body >

      <div class="wrapper clearfix"  >
         <form action="" id="form1" name="form1"  method="post" onSubmit="return validateForm()" onClick="return show_alert()"> 
       <table width="100%" style=" border:2px solid #bf0f23; margin-top:20px;">
       <tr>
           <td colspan="3" align="center"><h1>PRODUCT ENQUIRY</h1></td>
           <td>&nbsp;</td>
         </tr>
         <tr> <td align="right"><!--<b>Name</b><span style="color:#d80546">*</span>--></td>
          <td><!--<b>:</b>--></td>
           <td>
         <input type="text" style="width:260px; height:25px; border:1px solid #cccccc; background:#f9f9f9 url(images/input_bg.jpg);" value=" <?php echo $productname;}?>"  maxlength="30"></td></tr>
     
         <tr>
           <td align="right"><!--<b>Name</b><span style="color:#d80546">*</span>--></td>
           <td><!--<b>:</b>--></td>
           <td>
          
           <div class="span1 clearfix">
           
           <select class="mr" id="ddlsalut">
               <option>Mr.</option>
               <option>Ms.</option>
             </select>
             <input type="text" style="padding-left:5px;" class="name" id="buyer_name" name="buyer_name" onFocus="clearDefault(this)" onBlur="restore(this)" placeholder="Name" maxlength="30" required></div></td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td align="right"></td>
           <td valign="top"><!--:--></td>
           <td><input type="email" class="email" style="padding-left:5px;" id="buyer_email" name="buyer_email" onFocus="clearDefault(this)" onBlur="restore(this)" placeholder="Email" maxlength="30" required></td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td align="right"></td>
           <td><!--<b>:</b>--></td>
           <td style="padding-left:1px;"> <label for="mobile">Mobile</label>
             <input id="rdbmob" type="radio" checked="true" name="Contact" onClick="showMobile();">
             <label for="phone">Phone</label>
             <input type="radio" id="rdbphone" onClick="showPhone();" name="Contact" class="sele2"><br/><br/>
             
             <input type="text" style=" border:solid #CCCCCC 1px; width:255px; height:22px;background:#f9f9f9 url(images/input_bg.jpg);" id="mobile" name="mobile"  maxlength="13" onBlur="restore(this)" onFocus="clearDefault(this)" placeholder="Number" required></td>
             
           <td>&nbsp;</td>
         </tr>
         <tr>
          
           <td><div class="span1"><div id="divmobile" runat="server"> 
               
             </div></div>
             </td>
             </tr>
             
          
         <tr>
           <td align="right"></td>
           <td valign="top"><!--:--></td>
           <td><textarea cols="25" rows="3" class="address" style="padding-left:5px;" id="buyer_message" onFocus="clearDefault(this)" onBlur="restore(this)" placeholder="Enquiry" name="buyer_message" required></textarea></td>
           <td>&nbsp;</td>
         </tr>
         
         <tr>
           <td align="right"></td>
           <td valign="top"><!--:--></td>
         <td>
         Entre Code:
				<input type=text name=t1 style="width:100px; height:23px; border:solid #CCCCCC 1px; border-radius:3px;" required>
<img src=captcha-demo.php id="capt" height="20px">&nbsp;<a href="#" onClick="reload()"><img src="images/reload.png" /></a>
        </td>
          <td>&nbsp;</td>
        </tr>
		
			<br />
         
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td><span style="font-size:12px;">* All Fields are mandatory </span></td>
           <td></td>
         </tr>
        
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td><a href="javascript:clearval();" style="text-decoration:none;">
             <input id="btnreset" style="cursor:pointer" class="submit" name="Reset" type="Reset" title="Reset" value="Reset">
             </a>
             <input id="btnsubmit" style="cursor:pointer" class="submit" name="submit" type="submit" title="Submit" value="Submit"></td>
           <td></td>
         </tr>
     </table>
     <font style="color:#FF0000; font-weight:bold;"><?php echo $missmatch;?></font>
    <font style="color:#3333FF; font-weight:bold;"><?php echo $success;?></font>
     </form>
</div>

</body></html>