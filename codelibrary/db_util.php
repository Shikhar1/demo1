<?php
function rs_select($table,$cond='1',$field='*',$order='1',$group='1'){
	$query="select $field from $table where $cond order by $order";// group by $group";
	$query=mysql_query($query) or die(mysql_error());
	return $query;
}
function rs_delete($table,$cond){
	$query="delete  from $table where $cond";
	$query=mysql_query($query) or die(mysql_error());
	return $query;
}
function rs_insert($table,$field,$values){
	$query="insert into $table($field) values($values)";
	$query=mysql_query($query) or die(mysql_error());
	return $query;
}
function rs_update($table,$value,$cond){
	$query="update $table set $value where $cond";
	$query=mysql_query($query) or die(mysql_error());
	return $query;

}
function rs_count($table,$field,$cond){
         $query="select COUNT($field) AS total from $table where $cond";
		 $query=mysql_query($query) or die(mysql_error());
		 $count=mysql_fetch_array($query);
	     return $count['total'];
}

function resizeImage($rationw,$ratioh,$imagepath,$ap){
	list($width_orig, $height_orig) = getimagesize($ap.$imagepath);
	if($ratioh == null){
		if($width_orig < $rationw){
			$twidth = $width_orig;
		}else{
			$twidth = $rationw;
		}
		$ratio_orig = $width_orig/$height_orig;
		$theight = $twidth/$ratio_orig;
		
		$blank_height = $theight;
		$top_offset = 0;
			
	}else{
		if($width_orig <= $rationw && $height_orig <= $ratioh){
			$theight = $height_orig;
			$twidth = $width_orig;
		}else{
			if($width_orig > $rationw){
				$ratio = ($width_orig / $rationw);
				$twidth = $rationw;
				$theight = ($height_orig / $ratio);
				if($theight > $ratioh){
					$ratio = ($theight / $ratioh);
					$theight = $ratioh;
					$twidth = ($twidth / $ratio);
				}
			}
			if($height_orig > $ratioh){
				$ratio = ($height_orig / $ratioh);
				$theight = $ratioh;
				$twidth = ($width_orig / $ratio);
				if($twidth > $rationw){
					$ratio = ($twidth / $rationw);
					$twidth = $rationw;
					$theight = ($theight / $ratio);
				}
			}
		}
	}	
	return array($twidth,$theight);
		
}


function getPagination($rowCount,$rowsperpage,$page,$fnName,$abpath,$disppage)
{
	$pagenum=$page;// what page number
	$pagingstr="";
	//int offset=(int)((pagenum-1)* rowsperpage);
	$maxpage=0;
	$y=0;
	if($rowCount != 0)
	{
		$maxpage= ceil($rowCount/$rowsperpage);// count maximum page 
	}
	if($pagenum>1)
	{ // if page greater page then one
		$page=$pagenum-1;// decrese page no. the page no
		$first='<div class="port-links"><a href="'.$fnName.'&page='.$page.'">&laquo;previous</a></div>';// for the back page
	}	 
	else
	{
			$first='<div class="port-links"><a href="#">&laquo; previous</a></div>';
			// we're on page one, don't enable 'previous' link	
	}
	
	if($pagenum<$maxpage)
	{ // if page no is less then maximum page after the prevoius condition
		$page=$pagenum+1;  // add one in page
		$next ='<div class="port-links"><a href="'.$fnName.'&page='.$page.'">next &raquo;</a></div>'; //it should be linked
	}
	else
	{
		$next ='<div class="port-links"><a href="#" >next &raquo;</a></div>'; //not linked
	}
	
	$pagingstr="";
	$endPos=$disppage;//limit of page to be display in paging
	$startPos=max($pagenum-intval($endPos/2), 1);
    $endPos=$startPos+$endPos-1;
	for($i=$startPos;$i<$endPos && $i <=$maxpage;$i++)
	{
		if($i==$pagenum)
		{
			$pagingstr .='<div class="port-links"><a href="#" id="port-links-active">'.$i.'</a></div>';
		} 
		else 
		{
			$pagingstr .='<div class="port-links"><a href="'.$fnName.'&page='.$i.'">'.$i.'</a></div>';
		}
	}

	$pagingstr=$first.$pagingstr.$next;
	return $pagingstr;
}


function getPaginationForAjax($rowCount,$rowsperpage,$page,$fnName,$abpath,$disppage,$extraurl){
	$pagenum=$page;$prev="";$first="";$last="";$next="";$pagingstr="";
	if($extraurl!="")
		$extraurl.='&page=';
	//int offset=(int)((pagenum-1)* rowsperpage);
	$maxpage=0;
	$y=0;

	if($rowCount != 0){
		$maxpage= ceil($rowCount/$rowsperpage);

		//$y = ceil($rowCount % $rowsperpage);
	}
//	if($y != 0){
//		$maxpage = $maxpage+1;
//	}

	if($pagenum>1){
		$page=$pagenum-1;
		$prev='<a style="cursor:pointer;" onClick="'.$fnName.'(\''.$extraurl.''.$page.'\')"><</a>';
		$first='<a style="cursor:pointer;" onClick="'.$fnName.'(\''.$extraurl.'1\')"><<</a>'; //it should be link
	}
	else{
		$prev='';//not linked
		$first='';//not linked
	}

	if($pagenum<$maxpage){
		$page=$pagenum+1;
		$next='<a style="cursor:pointer;" onClick="'.$fnName.'(\''.$extraurl.''.$page.'\')">></a>'; //it should be linked
		$last='<a style="cursor:pointer;" onClick="'.$fnName.'(\''.$extraurl.''.$maxpage.'\')">>></a>'; //it should be linked
	}
	else{
		$next=""; //not linked
		$last=""; //not linked

	}
	
	$pagingstr="";
	$startPos=1;
	$endPos=$disppage;//limit of page to be display in paging
	$v3=$endPos-3;

	if($maxpage<$endPos)
		$endPos=$maxpage;

	if($page==$maxpage-1 && $page>$v3){
		$startPos=$maxpage-$v3;
		$endPos=$maxpage;
	}
	else if($page==$maxpage  && $page>$v3){
		$startPos=$maxpage-$v3;
		$endPos=$page;
	}
	else if($page>$v3){
		$startPos=$page-$v3;
		$endPos=$page+2;
	}

	for($i=$startPos;$i<=$endPos;$i++){
		if($i==$pagenum){
			$pagingstr .=$i."&nbsp;&nbsp;";
		} 
		else {
			$pagingstr.='<a style="cursor:pointer;" onClick="'.$fnName.'(\''.$extraurl.''.$i.'\')">'.$i.'</a>&nbsp;&nbsp;';
		}
	}

	if($maxpage>1)
		$pagingstr=$first.'&nbsp;'.$prev.'&nbsp;'.$pagingstr.'&nbsp;'.$next.'&nbsp;'.$last;
	else
		$pagingstr="";
		
	return $pagingstr;
}
function getPagination_Next_Prev($rowCount,$rowsperpage,$page,$fnName,$abpath,$disppage){
	$pagenum=$page;$prev="";$first="";$last="";$next="";$pagingstr="";
	//int offset=(int)((pagenum-1)* rowsperpage);
	$maxpage=0;
	$y=0;

	if($rowCount != 0){
		$maxpage= ceil($rowCount/$rowsperpage);

		//$y = ceil($rowCount % $rowsperpage);
	}
//	if($y != 0){
//		$maxpage = $maxpage+1;
//	}

	if($pagenum>1){
		$page=$pagenum-1;
		//$prev='<a href="'.$fnName.'&page='.$page.'"><img src="'.$abpath.'images/page-previous.gif" border="0"></a>';
		$prev='<dt><a href="'.$fnName.'&page='.$page.'"><</a></dt>';
		$first='<dt><a href="'.$fnName.'&page=1"><<</a></dt>'; //it should be link
	}
	else{
		$prev='';//not linked
		$first='';//not linked
	}

	if($pagenum<$maxpage){
		$page=$pagenum+1;
		//$next='<a href="'.$fnName.'&page='.$page.'"><img src="'.$abpath.'images/page-next.gif" border="0"></a>'; //it should be linked
		$next='<dt><a href="'.$fnName.'&page='.$page.'">></a></dt>'; //it should be linked
		$last='<dt><a href="'.$fnName.'&page='.$maxpage.'">>></a></dt>'; //it should be linked
	}
	else{
		$next=""; //not linked
		$last=""; //not linked

	}
	
	$pagingstr="";
	$startPos=1;
	$endPos=$disppage;//limit of page to be display in paging
	$v3=$endPos-3;

	if($maxpage<$endPos)
		$endPos=$maxpage;

	if($page==$maxpage-1 && $page>$v3){
		$startPos=$maxpage-$v3;
		$endPos=$maxpage;
	}
	else if($page==$maxpage  && $page>$v3){
		$startPos=$maxpage-$v3;
		$endPos=$page;
	}
	else if($page>$v3){
		$startPos=$page-$v3;
		$endPos=$page+2;
	}

	for($i=$startPos;$i<=$endPos;$i++){
		if($i==$pagenum){
			$pagingstr .=$i."&nbsp;&nbsp;";
		} 
		else {
			$pagingstr.='<a href="'.$fnName.'&page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
		}
	}

	$pagingstr=$first.'&nbsp;'.$prev.'&nbsp;'.'&nbsp;'.$next.'&nbsp;'.$last;
	return $pagingstr;
}

function getAutoIncrementId($TABLE_NAME,$COLUMN_NAME,$PREFIX,$LENGHT){
	$NEWVALUE;	
	$sql_auto="select max(mid($COLUMN_NAME,".(strlen($PREFIX)+1).")) as maxid from $TABLE_NAME";
	$rs_auto=mysql_query($sql_auto) or die(mysql_error());

		$data_auto=mysql_fetch_array($rs_auto);
		$maxval=$data_auto["maxid"];
		$maxval=$maxval+1;
		$NEWVALUE=$PREFIX;
		for($i=1;$i<=$LENGHT-(strlen($maxval));$i++)
			$NEWVALUE.="0";
		$NEWVALUE.=$maxval;	

	return $NEWVALUE;
}	
function getMaxId($TABLE_NAME,$COLUMN_NAME)
{
	$NEWVALUE="";	
	$sql_auto="select max($COLUMN_NAME) as maxid from $TABLE_NAME";
	$rs_auto=mysql_query($sql_auto) or die(mysql_error());
	if(mysql_num_rows($rs_auto)==0)
		$NEWVALUE = $NEWVALUE+1;
	else
	{
		$data_auto=mysql_fetch_array($rs_auto);
		$maxval=$data_auto["maxid"];
		$NEWVALUE=$maxval+1;
	}
	return $NEWVALUE;
}	
function resize_actual($filename, $savepath, $width,$height)
{
    list($width_orig, $height_orig, $type) = getimagesize($filename);
    $image_p = imagecreatetruecolor($width, $height);
    if($type==2)
    {
        $image = imagecreatefromjpeg($filename);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
        imagejpeg($image_p, $savepath , 100);
    }
    elseif($type==3)
    {
        $image = imagecreatefrompng($filename);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
        imagepng($image_p, $savepath , 100);
    }
    elseif($type==1)
    {
        $image = imagecreatefromgif($filename);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
        imagegif($image_p, $savepath , 100);
    }
    elseif($type)
    {
        $image = imagecreatefromjpeg($filename);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
        imagejpeg($image_p, $savepath , 100);
    }
}

function findexts ($filename) 
{ 
	$filename = strtolower($filename) ; 
	$exts = split("[/\\.]", $filename) ; 
	$n = count($exts)-1; 
	$exts = $exts[$n]; 
	return $exts; 
} 
//************* send mail ************
function send_mail($from,$to,$subject,$message){
	$to = $to;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= "From: ".$from." " . "\r\n";
	$headers .= PHP_EOL;
	//$headers .= "Reply-To: " . $email."\n";
	$subject= $subject;
	$message =$message;
	if(@mail($to, $subject, $message, $headers)){
		return "Success";
	}	
	else{
		return "Failed";
	}
}
//*************end send mail *********
function random_generator($digits){
srand ((double) microtime() * 10000000);
//Array of alphabets
$input = array ("A", "B", "C", "D", "E","F","G","H","I","J","K","L","M","N","O","P","Q",
"R","S","T","U","V","W","X","Y","Z");

$random_generator="";// Initialize the string to store random numbers
for($i=1;$i<$digits+1;$i++){ // Loop the number of times of required digits

if(rand(1,2) == 1){// to decide the digit should be numeric or alphabet
// Add one random alphabet 
$rand_index = array_rand($input);
$random_generator .=$input[$rand_index]; // One char is added

}else{

// Add one numeric digit between 1 and 10
$random_generator .=rand(1,10); // one number is added
} // end of if else

} // end of for loop 

return $random_generator;
} // end of function

function full_url()
#
{
#
$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
#
$protocol = substr(strtolower($_SERVER["SERVER_PROTOCOL"]), 0, strpos(strtolower($_SERVER["SERVER_PROTOCOL"]), "/")) . $s;
#
$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
#
return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
#
}

/*
	SOME LOGICS
if($_SESSION['login_status']!="AuthorizedUser".session_id()){
	$send_back_url=urldecode (full_url());
	$_SESSION["send_back_url"]=$send_back_url;
	$_SESSION["msg"]='<div class="warning"><strong>you must log in to use GADA directory.</div>';
	header("Location: login.php");
	exit;
}
if($_SESSION["send_back_url"]!=""){
	header("Location: ".$_SESSION["send_back_url"]);
	$_SESSION["send_back_url"]="";		
}		
else{
	header("Location: home.php?gd=".random_generator(count($UserName)+10));		
}	
exit;	
*/

function isFound($TableName,$Cond){
	$flag=true;
	$Cond = stripslashes($Cond); 
	$sql="select * from $TableName where $Cond";
	$rs=mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($rs)>0)
		$flag=true;
	else
		$flag=false;
	
	return $flag;	
}


 function sendAttachmentMail($filepath,$displayfilename,$contenttype,$to,$from,$subject){
 
  $random_hash = md5(date('r', time()));
 
  $headers = "From: $from\r\nReply-To: $from";
 
  $headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"";
 
  $attachment = chunk_split(base64_encode(file_get_contents($filepath)));
 
  $output = "
--PHP-mixed-$random_hash;
Content-Type: multipart/alternative; boundary='PHP-alt-$random_hash'
--PHP-alt-$random_hash
Content-Type: text/plain; charset='utf-8'
Content-Transfer-Encoding: 8bit
  
--PHP-alt-$random_hash
Content-Type: text/html; charset='utf-8'
Content-Transfer-Encoding: 8bit
 
--PHP-alt-$random_hash--
 
--PHP-mixed-$random_hash
Content-Type: $contenttype; name=$displayfilename
Content-Transfer-Encoding: base64
Content-Disposition: attachment
 
$attachment
--PHP-mixed-$random_hash--";
 
  return(@mail($to, $subject, $output, $headers));	
 }
 
 //************* send mail ************
function sendMail($from,$to,$subject,$message){
	$to = $to;
    $headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From:".$from."\r\n";				
	$from = $from;
	$subject= $subject;
	$message =$message;
	if(@mail($to, $subject, $message, $headers)){
		return "success";
	}	
	else{
		return "failed";
	}
}

//*************end send mail *********

//********* get pagination for new design
function getPaginationnew($rowCount,$rowsperpage,$page,$fnName,$abpath,$disppage){
	$pagenum=$page;$prev="";$first="";$last="";$next="";$pagingstr="";
	//int offset=(int)((pagenum-1)* rowsperpage);
	$maxpage=0;
	$y=0;

	if($rowCount != 0){
		$maxpage= ceil($rowCount/$rowsperpage);

		//$y = ceil($rowCount % $rowsperpage);
	}
//	if($y != 0){
//		$maxpage = $maxpage+1;
//	}

	if($pagenum>1){
		$page=$pagenum-1;
		$prev='<dt><a href="'.$fnName.'&page='.$page.'"> &lt;&lt; Prev</a></dt>';
		$first='<a href="'.$fnName.'&page=1"><<</a>'; //it should be link
	}
	else{
		$prev='';//not linked
		$first='';//not linked
	}

	if($pagenum<$maxpage){
		$page=$pagenum+1;
		$next='<dt><a href="'.$fnName.'&page='.$page.'">Next &gt;&gt;</a></dt>'; //it should be linked
		$last='<a href="'.$fnName.'&page='.$maxpage.'">>></a>'; //it should be linked
	}
	else{
		$next=""; //not linked
		$last=""; //not linked

	}
	
	$pagingstr="";
	$startPos=1;
	$endPos=$disppage;//limit of page to be display in paging
	$v3=$endPos-3;

	if($maxpage<$endPos)
		$endPos=$maxpage;

	if($page==$maxpage-1 && $page>$v3){
		$startPos=$maxpage-$v3;
		$endPos=$maxpage;
	}
	else if($page==$maxpage  && $page>$v3){
		$startPos=$maxpage-$v3;
		$endPos=$page;
	}
	else if($page>$v3){
		$startPos=$page-$v3;
		$endPos=$page+2;
	}

	for($i=$startPos;$i<=$endPos;$i++){
		if($i==$pagenum){
			$pagingstr .='<dt><a href="javascript:void(0);" id="select">'.$i.'</a></dt>';
		} 
		else {
			$pagingstr.='<dt><a href="'.$fnName.'&page='.$i.'">'.$i.'</a></dt>';
		}
	}

	$pagingstr=$prev.''.$pagingstr.''.$next;
	return $pagingstr;
}
/////////// Make Url According by Us//////////////
function makeUrl($urlStr)
{
       $newUrl="";
       $newUrl=trim($urlStr);
	   $newUrl = preg_replace('!\s+!'," ", $urlStr);
       $newUrl=str_replace("<b>","",$newUrl);
       $newUrl=str_replace("</b>","",$newUrl);
       $newUrl=str_replace("<B>","",$newUrl);
       $newUrl=str_replace("</B>","",$newUrl);
       $newUrl=trim($newUrl);
       $newUrl=str_replace(" ","-",$newUrl);
	  
	   $newUrl=str_replace("&","",$newUrl);
       $newUrl=str_replace("_","-",$newUrl);
	    $newUrl=str_replace("--","-",$newUrl);
       $newUrl=trim($newUrl);
       $newUrl= str_replace("__","-",$newUrl);
       $newUrl=trim($newUrl);
       $newUrl=preg_replace('/[^a-zA-Z0-9\-_]/',"",$newUrl);
       $newUrl=trim($newUrl);
       $newUrl= str_replace("__","-",$newUrl);
       return $newUrl;

}
function getAbsolutePath($url){
//    Split URL
	$Start_Leve=2;
	$fd = parse_url($url);
	//    Get directories
	$path_parts = pathinfo($fd['path']);
	//    Put directories into array
	$dirs = explode("/", $path_parts['dirname']);
	$extension=$path_parts['extension'];
	//    Remove first element as it's blank
	array_shift($dirs);
	$abspath='';
	for($i=$Start_Leve;$i<count($dirs);$i++)
		$abspath.='../';
		
	if(	$extension =='')
		$abspath.='../';
		
	return $abspath;
}

function getNewDate($ndate){
	$ndate=split('/',$ndate);
	$datestr=split(' ',date('d M Y', strtotime($ndate[1].'/'.$ndate[0].'/'.$ndate[2])));
	
}
function createThumbsSingle($pathToImages,$fname, $pathToThumbs, $thumbWidth, $thumbHeight ) 
{
 
    // parse path for the extension
    $info = pathinfo($pathToImages . $fname);
    // continue only if this is a JPEG image
    if ( strtolower($info['extension']) == 'jpg' ) 
    {
     // echo "Creating thumbnail for {$fname} <br />";

      // load image and get image size
      $img = imagecreatefromjpeg( "{$pathToImages}{$fname}" );
      $width = imagesx( $img );
      $height = imagesy( $img );
	  if($width > $thumbWidth){		
		  // calculate thumbnail size
		  $new_width = $thumbWidth;
		  $new_height =$thumbHeight;
		  //$new_height = floor( $height * ( $thumbWidth / $width ) );
	
		  // create a new tempopary image
		  $tmp_img = imagecreatetruecolor( $new_width, $new_height );
	
		  // copy and resize old image into new image 
		  imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
	
		  // save thumbnail into a file
		  imagejpeg( $tmp_img, "{$pathToThumbs}{$fname}" );
	  }  
	  
    }
	if ( strtolower($info['extension']) == 'png' ) 
    {
     // echo "Creating thumbnail for {$fname} <br />";

      // load image and get image size
      $img = imagecreatefrompng( "{$pathToImages}{$fname}" );
      $width = imagesx( $img );
      $height = imagesy( $img );
	  if($width > $thumbWidth){		
		  // calculate thumbnail size
		  $new_width = $thumbWidth;
		  $new_height =$thumbHeight;
		  //$new_height = floor( $height * ( $thumbWidth / $width ) );
	
		  // create a new tempopary image
		  $tmp_img = imagecreatetruecolor( $new_width, $new_height );
		  //$kek=imagecolorallocate($tmp_img, 255, 255, 255);
		  //imagefill($tmp_img,0,0,$kek);
	 imagesavealpha($tmp_img, true);
	 $trans_colour = imagecolorallocatealpha($tmp_img, 0, 0, 0, 127);
	 imagefill($tmp_img, 0, 0, $trans_colour);
		  // copy and resize old image into new image 
		  imagecopyresized( $tmp_img, $img, 0,0,0, 0, $new_width, $new_height, $width, $height );
	
		  // save thumbnail into a file
		  imagepng( $tmp_img, "{$pathToThumbs}{$fname}",0 );
	  }  
	  
    }
  
  if ( strtolower($info['extension']) == 'gif' ) 
    {
     // echo "Creating thumbnail for {$fname} <br />";

      // load image and get image size
      $img = imagecreatefromgif( "{$pathToImages}{$fname}" );
      $width = imagesx( $img );
      $height = imagesy( $img );

	  if($width > $thumbWidth){			
		  // calculate thumbnail size
		  $new_width = $thumbWidth;
		  $new_height =$thumbHeight;
		  //$new_height = floor( $height * ( $thumbWidth / $width ) );
	
		  // create a new tempopary image
		  $tmp_img = imagecreatetruecolor( $new_width, $new_height );
	
		  // copy and resize old image into new image 
		  imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
	
		  // save thumbnail into a file
		  imagegif( $tmp_img, "{$pathToThumbs}{$fname}" );
	  }  
	  
    }


}