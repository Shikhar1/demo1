<?php
include("codelibrary/main-include.inc.php");
include("codelibrary/db_util.php");
$sreh = $_REQUEST['item'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mahadev Footwear | PU Fair | Tasco Footwears</title>
<link rel="icon" type="images/favicon.png" href="images/favicon.png" />
<link href="css/stylee.css" rel="stylesheet" type="text/css" />
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
<script>
$(document).ready(function(){

	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
</script>

<style type="text/css">
#pagewrap {
          width:100%;
		   height:auto;border: 0px red solid;float:left; 
		   padding-left: 0px;
	       position: relative;
		   margin: 0 auto;
		   }

/*
Back to top button 
*/
#back-top {
	position: fixed;
	bottom: 35px;
	margin-left:61%;
	
}
#back-top a {
	width: 108px;
	display: block;
	text-align: center;
	font: 11px/100% Arial, Helvetica, sans-serif;
	text-transform: uppercase;
	text-decoration: none;
	color: #bbb;
	/* background color transition */
	-webkit-transition: 1s;
	-moz-transition: 1s;
	transition: 1s;
}
#back-top a:hover {
	color: #000;
}
/* arrow icon (span tag) */
#back-top span {
	width: 108px;
	height: 90px;
	display: block;
	margin-bottom: 7px;
	background: url(images/arrows-up.png) no-repeat center center;
	/* rounded corners */
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
	/* background color transition */
	-webkit-transition: 1s;
	-moz-transition: 1s;
	transition: 1s;
}
#back-top a:hover span {
	background-color:;
}
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
                Offering the ultimate design, comfort and fit, each “Mahadev Footwear” products is the manifestation of high standards of workmanship, latest technology and thoughtful engineering. No wonder, “Mahadev Footwear”, today, is synonymous with quality and performance for millions across the country.
                </marquee> </td>
              </tr>
              <tr>
                <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="18%" height="110" align="center" valign="middle"><a href="index.php"><img src="images/tasco.png" alt="Mahadev Footwear | PU Fair | Tasco Footwears" width="171" height="44" border="0" /></a></td>
                    <td width="62%" align="center" valign="middle"><img src="images/mahadev-footwear.png" alt="Mahadev Footwear | PU Fair | Tasco Footwears" width="449" height="54" /></td>
                    <td width="20%" align="center" valign="middle"><img src="images/pu-fair.png" alt="Mahadev Footwear | PU Fair | Tasco Footwears" width="201" height="81" /></td>
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
   <li class="active"><a href='index.php'><strong>Home</strong></a></li>
    <li><a href='about-us.php'><strong>About Us</strong></a></li>
     <?php
   $query="select * from brand where status='Y' order by brand_order ";
   $run=mysql_query($query);
   while($result=mysql_fetch_array($run))
   { 
   ?>
    
   <li class='has-sub'><a href='#'><strong><?php echo $result['brand_name']; ?></strong></a>
      <ul style="z-index:99999">
          <?php
      $query1="select * from category where brand_id='".$result['id']."' and status='Y' order by catorder";
	  $run1=mysql_query($query1);
	  while($result1=mysql_fetch_array($run1))
	  {
	  ?>
               <li><a href='#'><?php echo $result1['catname']; ?></a>
                <ul>
                <?php
                $query2="select * from sub_category where cat_id='".$result1['id']."' and status='Y' order by subcategory_order";
	  $run2=mysql_query($query2);
	  while($result2=mysql_fetch_array($run2))
	  {
	  ?>
               <li><a href='products.php?brand_id=<?php echo $result['id'];?>&cat_id=<?php echo $result1['id'];?>&sub_id=<?php echo $result2['id'];?>'><?php echo $result2['subcatname']; ?></a></li>
               <?php } ?>
            </ul>
            </li>
                 <?php } ?>
            </ul>
         </li>
        <?php
		}
		?>
        <li><a href='quality.php'><strong>Quality</strong></a></li>
      <li><a href='Infrastructure.php'><strong>Infrastructure</strong></a></li>
      <li><a href='contact-us.php'><strong>Contact Us</strong></a></li>
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
    	<div class="container-left">
        	<table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
             <td width="100%" height="45" align="middle" valign="middle" style="border-bottom: dotted #000000 1px; background-image:url(images/categery-title.PNG); background-repeat:no-repeat;"><span class="our">Our Product</span></td>
             </tr>
				                <?php
							    $brand_query=mysql_query("select * from brand where status='Y' order by brand_order");
							    while($brand_data=mysql_fetch_array($brand_query))
								{
								  $categ_id=mysql_fetch_array(mysql_query("select * from category where brand_id='".$brand_data['id']."'"));
								  $subcatg_id=mysql_fetch_array(mysql_query("select * from sub_category where cat_id='".$categ_id['id']."'"));
							  ?>             
                 <tr>
                   
                   <td width="100%" height="35" align="middle" valign="middle" style="border-bottom: dotted #000000 1px; background-image:url(images/categey-list.png); background-repeat:no-repeat;"><a href="products.php?brand_id=<?php echo $brand_data['id'];?>&cat_id=<?php echo $categ_id['id'];?>&sub_id=<?php echo $subcatg_id['id'];?>" style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:16px;"><?php echo $brand_data['brand_name']; ?></a>
                   </td>
                    </tr>
                               <?php
							  $brand_id=$_GET['brand_id']; 
							  $cate=mysql_query("select * from category where brand_id='".$brand_data['id']."' and status='Y'");
							  while($category_data=mysql_fetch_array($cate))
							  {
							   $query_sub=mysql_fetch_array(mysql_query("select * from sub_category where cat_id='".$category_data['id']."'"));
							   if($category_data['brand_id']==$brand_id)
							   {
							 
							  ?>
                 
                 <tr>
                   
                   <td width="100%" height="30"align="middle" valign="middle" style="border-bottom:solid 1px #999999; background-color: #49505a;"><a href="products.php?brand_id=<?php echo $brand_data['id'];?>&cat_id=<?php echo $category_data['id'];?>&sub_id=<?php echo $query_sub['id'];?>" class="sidemenu01">&nbsp; &nbsp;<?php echo $category_data['catname']; ?></a></td>
                    <td align="left" valign="top">&nbsp;</td>
                              </tr>
                               <?php
							  $cat_id=$_GET['cat_id']; 
							  $subcate=mysql_query("select * from sub_category where cat_id='".$category_data['id']."' and status='Y'");
							  while($subcategory_data=mysql_fetch_array($subcate))
							  {
							  
							   if($subcategory_data['cat_id']==$cat_id)
							   {
							 
							  ?>
                              
                             <tr>
                  
                   <td width="100%" height="30" align="middle" valign="middle" style="border-bottom:dotted 1px #999999;  background-color: #49505a;"><a href="products.php?brand_id=<?php echo $brand_data['id']; ?>&cat_id=<?php echo $category_data['id']; ?>&sub_id=<?php echo $subcategory_data['id'];?>" class="sidemenu">&nbsp; &nbsp;<?php if($subcat_id==$subcategory_data['id']) { ?> <strong style="color: #FFCC00;"><?php echo $subcategory_data['subcatname']; ?></strong><?php } else { ?><?php echo $subcategory_data['subcatname']; ?> <?php } ?></a></td>
                    <td align="left" valign="top">&nbsp;</td>
                              </tr>
                               
                                <?php
							   }
							  }
							 }
							 }
							 }
						   
							  ?>
                
             </table>
            <div class="galley" style="height:285px; background-color:#ecddca;">
            	<div class="gellery-text">QUALITY</div>
                <div class="gallery-image">
<marquee direction="up" scrollamount="2" behavior="alternate" style="height:230px; font-size:12px; box-shadow: 0px 2px 5px rgba(50, 50, 50, 0.75);background:#FFFFFF; color:#000000;"><p>Mahadev Footwear Established In 1995 & Highlighted our brand across In India.So,after delivering quality based & maximum satisfactory products which lead us to getting business from all the corners Of the India. There are latest Equipped Technology & Machinery in our Manufacturing Plant that results outstanding quality & able to deliver our products on time with maximum Satisfactory Results. Offering the ultimate design, comfort and fit, each “Mahadev Footwear” products is the manifestation of high standards of workmanship, latest technology and thoughtful engineering. No wonder, “Mahadev Footwear”, today, is synonymous with quality and performance for millions across the country. </p></marquee>
               </div> <!--gellery-->
            </div>
            </div>
           <div class="container-right" id="pagewrap">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="22" align="left" valign="middle"> &nbsp; <strong style="color:#000000;">Search:</strong> <font style="color:#999999;"><?php echo $sreh;?> </font></td>
            </tr>
            <tr>
              <td  align="left" valign="top" > 
			 <div id="main_2" >
             <?php
			  if(isset($_REQUEST['search_x']))
				  {
				  $search=$_REQUEST['item'];
            $sql=mysql_query("select product.*,brand.*,category.*,sub_category.* from  product left join brand on product.brand_id=brand.id left join category  on product.cat_id=category.id left join sub_category on product.sub_id =sub_category.id where product.productname like '%$search%' or brand.brand_name like '%$search%' or category.catname like '%$search%' or sub_category.subcatname like '%$search%'");
			   @$rsdata=mysql_fetch_array($sql);
			   if($rsdata)
			   {
			   while(@$rsdata=mysql_fetch_array($sql)){
				   $id=$rsdata['0'];
		           ?>
                <div class="box">
                 <div class="swich_name">Artical No:- <?php echo $rsdata['productname'];?></div>
                  <div class="swich"> <a href="products-desc.php?pid=<?php echo $id;?>&brand_id=<?php echo $rsdata['brand_id'];?>&cat_id=<?php echo $rsdata['cat_id'];?>&sub_id=<?php echo $rsdata['sub_id'];?>" ><img src="productimage/large/<?php echo $rsdata['imagepath'];?>" width="215" height="166" border="0" class="pu-black" alt="<?php echo $rsdata['subcatname'];?>"/></a> </div>
                                     
                              <div class="swich_name2" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">&nbsp;</td>
    <td width="50%" height="45" align="right" valign="bottom"><strong> <a href="products-desc.php?pid=<?php echo $id;?>&brand_id=<?php echo $rsdata['brand_id'];?>&cat_id=<?php echo $rsdata['cat_id'];?>&sub_id=<?php echo $rsdata['sub_id'];?>" class="link-intro1"  >VIEW MORE</a></strong> &nbsp; &nbsp; </td>
  </tr>
</table></div>
          </div>
                <?php
				 }
			}
			else
			{
				echo "Record Not Found!!!";
			}
				 
				}
				?>
              </div>
             
            
              
             
             </td>
            </tr>

            
                              </table>
          <!--spry-->
           <p id="back-top">
		<a href="#top"><span></span></a>
	</p>
        </div>
    </div></td>
      </tr>
    
    
    
     
      <tr>
        <td align="center" valign="top" style="background-image:url(images/footer.jpg); background-repeat:repeat-x;"><table width="1000" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="90%" height="43" align="center" valign="bottom" class="bottom-link_2 style3"><a href="#" class="style8"> Home</a> <span class="style6">|</span> <a href="#" class="style8"> About Us</a> <span class="style6">|</span> <a href="#" class="style8"> Brand</a> <span class="style6">|</span> <a href="#" class="style8">Products </a><span class="style6">|</span> <a href="#" class="style8">Distributer</a> <span class="style6">|</span> <a href="#" class="style8">Contact Us</a></td>
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
                      <td width="86%" height="26" align="left" valign="middle" class="style5 style6 style7">&nbsp; 2014 &copy; Mahadev Footwear. All Rights Reserved. </td>
                       <td width="8%" align="right" valign="middle" class="style5 style6 style7">Powered By&nbsp;</td>
                      <td width="6%" align="left" valign="middle" class="style5 style6 style7"><a href="http://webmartindia.in/" target="_blank"><img src="images/webmartindia.png" alt="webmartindia" title="webmartindia"  border="0" /></a></td>
                    </tr>
                </table></td>
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
</td>
</tr>
</table>
</td>
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
