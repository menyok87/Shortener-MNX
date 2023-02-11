<?php

function api_cutly() 
{

    $api=fopen("_apiCutly.txt", "r") or die("Unable to open file!");
    $api_branch=fread($api, filesize("_apiCutly.txt"));
    $dt=explode("\r\n", $api_branch);
    $_key =$dt[array_rand($dt)];

    return $_key;

    fclose($api);


}
function get_tiny_url($url)  
{  
	$ch = curl_init();  
	$timeout = 5;  
	curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
	$data = curl_exec($ch);  
	curl_close($ch);  
	return $data;  
}
function ssur($url)
{  
	//get content
	$ch = curl_init();  
	curl_setopt($ch,CURLOPT_URL,'https://ssur.cc/api.php?appkey=RKqh9qcjDoe4&format=json&longurl='.$url.'');  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);  
	$content = curl_exec($ch);  
	curl_close($ch);
	
$urlc =  json_decode($content,true);

	return $urlc['ae_url'];  
}
function iii($url) 
{

    
$postDataArray = [
	"lurl"=>$network,
	"captcha"=> ''
	];
 
$data = http_build_query($postDataArray);
$urls = "https://iii.im/gen.php?lurl=$url";
$cURL = curl_init();
curl_setopt($cURL, CURLOPT_URL,$urls);
curl_setopt($cURL, CURLOPT_POSTFIELDS, $data);
curl_setopt($cURL, CURLOPT_HEADER,false);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER,true);
curl_setopt($cURL, CURLOPT_POST, true);
curl_setopt($cURL, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($cURL, CURLOPT_CONNECTTIMEOUT,10);
$response = curl_exec($cURL);
curl_close($cURL);
	
	$urlshr =  explode('|',$response)[1];


	return $urlshr;  


}
function cutly($url){

$apikey=api_cutly();

//    $curl = new Curl();
//    $curl->setOpt(CURLOPT_FOLLOWLOCATION, true);
//    $curl->get('https://cutt.ly/api/api.php', [
//    'key' => $apikey,
//    'short' => $url
//]);

$ch = curl_init('https://cutt.ly/api/api.php?key='.$apikey.'&short='.urlencode($url).'');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json')
);
$result = curl_exec($ch);
curl_close($ch);
$urldot =  json_decode($result,true);
return $urldot['url']['shortLink'];


}

function link_eu($title,$description,$image,$shortBranch){

	$postDataArray = [
	"title"=>$title,
	"deskirpsi"=>$description,
	"url_image"=> $image,
	"url_origin"=>$shortBranch
	];
 
$data = http_build_query($postDataArray);
 
$url = 'https://mnx-family.live/custom_link/generat_link.php';
$cURL = curl_init();
curl_setopt($cURL, CURLOPT_URL,$url);
curl_setopt($cURL, CURLOPT_POSTFIELDS, $data);
curl_setopt($cURL, CURLOPT_HEADER,false);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER,true);
curl_setopt($cURL, CURLOPT_POST, true);
curl_setopt($cURL, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($cURL, CURLOPT_CONNECTTIMEOUT,10);
$response = curl_exec($cURL);
curl_close($cURL);


	return $response;
	

}
function mnx_link($domain,$title,$description,$image,$shortBranch){

	$postDataArray = [
	"title"=>$title,
	"deskirpsi"=>$description,
	"url_image"=> $image,
	"domain"=> $domain,
	"url_origin"=>$shortBranch
	];
 
$data = http_build_query($postDataArray);
 
$url = 'https://mnx-team.me/link_share/generat_link.php';
$cURL = curl_init();
curl_setopt($cURL, CURLOPT_URL,$url);
curl_setopt($cURL, CURLOPT_POSTFIELDS, $data);
curl_setopt($cURL, CURLOPT_HEADER,false);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER,true);
curl_setopt($cURL, CURLOPT_POST, true);
curl_setopt($cURL, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($cURL, CURLOPT_CONNECTTIMEOUT,10);
$response = curl_exec($cURL);
curl_close($cURL);


	return $response;
	

}
function link_gambar($image){

	$postDataArray = [
	"url_image"=> $image
	];
 
$data = http_build_query($postDataArray);
 
$url = 'https://cdn.mnx-team.eu.org/generat_link.php';
$cURL = curl_init();
curl_setopt($cURL, CURLOPT_URL,$url);
curl_setopt($cURL, CURLOPT_POSTFIELDS, $data);
curl_setopt($cURL, CURLOPT_HEADER,false);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER,true);
curl_setopt($cURL, CURLOPT_POST, true);
curl_setopt($cURL, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($cURL, CURLOPT_CONNECTTIMEOUT,10);
$response = curl_exec($cURL);
curl_close($cURL);


	return $response;
	

}
function isgd($url)  
{  
	//get content
	$ch = curl_init();  
	curl_setopt($ch,CURLOPT_URL,'https://is.gd/create.php?format=simple&url='.$url.''); 
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json')
);
	$content = curl_exec($ch);  
	curl_close($ch);
	
	//return the data
	return $content;  
}
function clck($url)  
{  
	//get content
	$ch = curl_init();  
	curl_setopt($ch,CURLOPT_URL,'https://clck.ru/--?url='.$url.'');  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json')
);
	$content = curl_exec($ch);  
	curl_close($ch);
	
	//return the data
	return $content;  
}

function clicom($url,$domain)
{
  $api_key = array(
    '/OqYVw7dDw+XGM5zPu02Sva1sM7n9AwycPundKfHP78=',
    'JMBt0NuFOBZ7Lo+UZ0Win3yl/DwWy4MlGbcSisIDD/A=',
    'LTQ0o61/qMGNoUCd/g/GuGZ+qjhnbTWt6zJjcUIabhA=',
    'BqzxDJzkJxzL37ltcPWAC35UpzX7yjNd1gb7jxIwkTE=',
    '5DyYkhssoo0c9Pv4F+2IWfn0R+z+eo1wFSp89nNLv7Q=',
    '9CZr/r306QHc09ws2oAp+vRKkKLCG94lu1knTrKUS94=',
    '1cLK/TA5TMiyi+lrdC9uKcjkdoGv5bPo2PxBT9dMYNQ='

  );
  
  $_key =$api_key[array_rand($api_key)];
  $date = date('Y');
  $id_campaign = rand(10000000000,1000000000000);
  $utm_phone = rand(10000000000,1000000000000);
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://cli.com/api/v1/link",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_MAXREDIRS => 2,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer $_key",
      "Content-Type: application/json",
    ),
    CURLOPT_POSTFIELDS => '{
      "domain": "'.$domain.'",
      "target_url": "'.$url.'",
      "is_deep": false,
      "right_side": "",
      "utm_phone": "8'.$utm_phone.'",
      "utm_source": "twitter",
      "utm_medium": "banner",
      "utm_campaign": "'.$date.'",
      "utm_content": "my ad",
      "utm_term": "term",
      "callback_url": "'.$url.'",
      "id_campaign": "'.$id_campaign.'"
    }',
  ));
  
  $response = curl_exec($curl);
  
  $urle =  json_decode($response,true);
  curl_close($curl);
  return $urle['result'];
  }


function goolnk($url) {
    
$data = array(
    "url" => "$url",
);

$payload = json_encode($data);



// Prepare new cURL resource
$ch = curl_init('https://goolnk.com/api/v1/shorten');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set HTTP Header for POST request 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);

// Submit the POST request
$result = curl_exec($ch);

curl_close($ch);

$urlbranch =  json_decode($result,true);
return $urlbranch['result_url'];
}
function shr($url,$domain) {


	//get content
	$ch = curl_init();  
	curl_setopt($ch,CURLOPT_URL,'https://partner.banter.family/api.shr.php?service='.$domain.'&url='.$url.'');  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json')
);

	$content = curl_exec($ch);  
	curl_close($ch);
	
	$urlshr =  json_decode($content,true);


	return $urlshr['data'];  


}
function cokone($domain,$title,$description,$image,$shortBranch){

	$postDataArray = [
	"title"=>$title,
	"deskirpsi"=>$description,
	"url_image"=> $image,
	"domain"=> $domain,
	"url_origin"=>$shortBranch
	];
 
$data = http_build_query($postDataArray);
 
$url = 'http://mnx-family.live/custom_link/generat_link.php';
$cURL = curl_init();
curl_setopt($cURL, CURLOPT_URL,$url);
curl_setopt($cURL, CURLOPT_POSTFIELDS, $data);
curl_setopt($cURL, CURLOPT_HEADER,false);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER,true);
curl_setopt($cURL, CURLOPT_POST, true);
curl_setopt($cURL, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($cURL, CURLOPT_CONNECTTIMEOUT,10);
$response = curl_exec($cURL);
curl_close($cURL);


	return $response;
	

}
function bomto($url) {


  $api = array(
    '0dpjraaX5QWc',
    'fy1EuUmGTNMi',
    'GSSvVHGkbkI5',
    'gB0xLZo7DrtO',
    'ywktBL2j5lKW',
    'K2zyNF4DWMSc',
    'H8sq0Bsk4Ptm'
    );
    
$apikey=$api[array_rand($api)];
	//get content
	$ch = curl_init();  
	curl_setopt($ch,CURLOPT_URL,'https://bom.so/api/?key='.$apikey.'&url='.$url.'');  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);  
	$content = curl_exec($ch);  
	curl_close($ch);
	
	$urlshr =  json_decode($content,true);
	return $urlshr['short'];  
}

function pakso($url, $custom = "", $format = "json") { 
$api_url = "https://pak.so/api/?key=XvSgA1bcx0fS";
$api_url .= "&url=".urlencode(filter_var($url, FILTER_SANITIZE_URL));
if(!empty($custom)){
$api_url .= "&custom=".strip_tags($custom);
}
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => $api_url
));
$Response = curl_exec($curl);
curl_close($curl);
if($format == "json"){
$Ar = json_decode($Response,TRUE);
if($Ar["error"]){
return $Ar["msg"];
}else{
return $Ar["short"];
}
}else{
return $Response;
}
}
//function pakso($url) {

//$curl = curl_init();
//curl_setopt_array($curl, array(
//  CURLOPT_URL => "https://pak.so/api/url/add",
//  CURLOPT_RETURNTRANSFER => true,
//  CURLOPT_ENCODING => "",
//  CURLOPT_MAXREDIRS => 2,
//  CURLOPT_TIMEOUT => 30,
//  CURLOPT_FOLLOWLOCATION => true,
 // CURLOPT_CUSTOMREQUEST => "POST",
//  CURLOPT_HTTPHEADER => array(
//    "Authorization: Token XvSgA1bcx0fS",
//    "Content-Type: application/json",
//  ),  
//  CURLOPT_POSTFIELDS => '{
//    "url": "'.$url.'",
//    "type": "direct"
//  }',
//));

//$response = curl_exec($curl);
//curl_close($curl);
	
//	$urlshr =  json_decode($response,true);
//	return $urlshr['short'];  
//}

function bnc($key,$random,$caronical,$title,$description,$image,$linkCPA){
    $data1 = array(
    "branch_key" => "$key",
    "stage" => "$random",
    "feature" => "$random",
    "data" => array (
    '$og_url' => "$caronical",
    '$canonical_identifier' => "$random",
    '$og_type' => "article",
    '$content_type' => "website",
    '$og_title'=> "$title",
    '$og_description'=> "$description",
    '$og_image_url'=> "$image",
    '$ios_url' => "$linkCPA",
    '$ipad_url' => "$linkCPA",
    '$android_url' => "$linkCPA",
    '$original_url' => "$linkCPA",
    '$samsung_url' => "$linkCPA",
    '$windows_phone_url' => "$linkCPA",
    '$blackberry_url' => "$linkCPA",
    '$fire_url' => "$linkCPA",
    '$desktop_url' => "$linkCPA",
    "custom_boolean"=> true,
    "custom_integer"=> "$random",
    "custom_string" => "$random",
    "custom_object"=>array("random" => "$random")
  )

);

$payload = json_encode($data1);


// Prepare new cURL resource
$ch = curl_init('https://api2.branch.io/v1/url');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set HTTP Header for POST request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);

// Submit the POST request
$result = curl_exec($ch);

curl_close($ch);

$urlbranch =  json_decode($result,true);



$uriB = $urlbranch['url'];

$x = $uriB;
$framework = str_replace("/","\n",$x);
$exploed = explode("\n" ,$framework);
$bb = $exploed[3];
if ($bb){
$bnc = "https://bnc.lt/$bb";

return $bnc;
}
}
function applink($key,$random,$caronical,$title,$description,$image,$linkCPA){
    $data1 = array(
    "branch_key" => "$key",
    "stage" => "$random",
    "feature" => "$random",
    "data" => array (
    '$og_url' => "$caronical",
    '$og_app_id' => "174829003346",
    '$canonical_identifier' => "$random",
    '$og_type' => "article",
    '$content_type' => "website",
    '$og_title'=> "$title",
    '$og_description'=> "$description",
    '$og_image_url'=> "$image",
    '$og_image_width'=> "1200px",
    '$og_image_height'=> "630px",
    '$twitter_title'=> "$title",
    '$twitter_description'=> "$description",
    '$twitter_image_url'=> "$image",
    'twitter_site'=> "$caronical",
    '$ios_url' => "$linkCPA",
    '$ipad_url' => "$linkCPA",
    '$android_url' => "$linkCPA",
    '$original_url' => "$linkCPA",
    '$samsung_url' => "$linkCPA",
    '$windows_phone_url' => "$linkCPA",
    '$blackberry_url' => "$linkCPA",
    '$fire_url' => "$linkCPA",
    '$desktop_url' => "$linkCPA",
    "custom_boolean"=> true,
    "custom_integer"=> "$random",
    "custom_string" => "$random",
    "custom_object"=>array("random" => "$random")
  )

);

$payload = json_encode($data1);


// Prepare new cURL resource
$ch = curl_init('https://api2.branch.io/v1/url');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set HTTP Header for POST request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);

// Submit the POST request
$result = curl_exec($ch);

curl_close($ch);

$urlbranch =  json_decode($result,true);



$uriB = $urlbranch['url'];

return $uriB;
}

function applink1($appid,$random,$caronical,$title,$description,$image,$linkCPA){
    $data1 = array(
    "app_id" => "$appid",
    "stage" => "$random",
    "feature" => "$random",
    "data" => array (
    '$og_url' => "$caronical",
    '$canonical_identifier' => "$random",
    '$og_type' => "article",
    '$content_type' => "website",
    '$og_title'=> "$title",
    '$og_description'=> "$description",
    '$og_image_url'=> "$image",
    '$ios_url' => "$linkCPA",
    '$ipad_url' => "$linkCPA",
    '$android_url' => "$linkCPA",
    '$original_url' => "$linkCPA",
    '$samsung_url' => "$linkCPA",
    '$windows_phone_url' => "$linkCPA",
    '$blackberry_url' => "$linkCPA",
    '$fire_url' => "$linkCPA",
    '$desktop_url' => "$linkCPA",
    "custom_boolean"=> true,
    "custom_integer"=> "$random",
    "custom_string" => "$random",
    "custom_object"=>array("random" => "$random")
  )

);

$payload = json_encode($data1);


// Prepare new cURL resource
$ch = curl_init('https://api2.branch.io/v1/url/bulk');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set HTTP Header for POST request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);

// Submit the POST request
$result = curl_exec($ch);

curl_close($ch);

$urlbranch =  json_decode($result,true);



$uriB = $urlbranch['url'];

return $uriB;
}


    function netlify($email,$accesstoken,$filezip)
    {
    $data = file_get_contents($filezip,true);
    $crl = curl_init('https://api.netlify.com/api/v1/sites/');
    $headr = array();
    $headr[] = 'Content-Type: application/zip';
    $headr[] = 'User-Agent: MyApp ('.$email.')';
    $headr[] = 'Authorization: Bearer '.$accesstoken;
    curl_setopt($crl, CURLOPT_HTTPHEADER,$headr);     
    curl_setopt($crl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($crl, CURLOPT_POST,true);
    $rest = curl_exec($crl);
    curl_close($crl); 
    return $rest;
    }



    
    function creat_index($user,$linkcpa){
        
        
      $UR = fopen('filezip/'.$user.'/'.$user.'/index.html' , 'w+') or die ('index netlify gak kenek');
      define('HTML','
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <meta name=viewport content="width=device-width,minimum-scale=1" />
    <base href="https://cdn-adef.akamaized.net">
    <meta property=og:type content="website" />
    <meta property="og:locale" content="en_US" />
    <meta property=fb:app_id content="274266067164" />
    <meta property=fb:admin content="237344263766628" />
    <meta property=fb:locale content="en_US" />
    <meta property="og:title" content="LIVE">
    <meta property="og:description" content="1.234.765 Views">
    <meta property="og:image" content="/landings/178004/1575471931/images/nike.gif">
    <meta property="og:url" content="https://v2.tailwindcss.com/">
    <link href="/landings/178004/1575471931/images/nike.gif" rel="alternate" media="only screen and (max-width: 640px)">
    <link rel="canonical" href="https://v2.tailwindcss.com/">
    <meta name=twitter:app:country content=US />
    <meta property="twitter:title" content="LIVE">
    <meta property="twitter:description" content="1.234.765 Views">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:image" content="/landings/178004/1575471931/images/nike.gif">
    <meta property="twitter:url" content="https://v2.tailwindcss.com/">

<link rel="stylesheet" type="text/css" href="/landings/178004/1575471931/css/css.css?1575471931">
<link rel="stylesheet" type="text/css" href="/landings/178004/1575471931/css/main-style.css?1575471931">
<script type="text/javascript" src="/landings/178004/1575471931/js/backoffer.js?1575471931"></script>
<style>
.center {
text-align: center;
}
</style>
</head>
<html>
<body>
<div class="wrapper">
<!-- START BG block -->
<div class="bg-block">
<div class="bg-block-overlay"></div>
</div>
<p>
<p class="center"><img style="max-width: 45%" id="logo" src="/landings/178004/1575471931/images/snapchat_sex.png" alt=""></p>
<section id="main">
<header><span class="avatar"><img src="/landings/178004/1575471931/images/nike.gif" alt=""></span>
<h1> Choose & Enjoy <br> Fuck one of our hottest girls right now </h1>
<p><b> THIS WEBSITE IS FREE </b><br> Click the link below </p>
</header>
<footer><a href="'.$linkcpa.'"><button type="submit" class="btn btn-danger btn-lg stylee"> CONTINUE </button></a></footer>
</section><!-- Footer -->
<footer id="footer">
<ul class="copyright">
<li> © NOTHING IN LIFE IS FREE. EXCEPT THIS. THIS IS ACTUALLY FREE OF CHARGE. </li>
</ul>
</footer>
</div>
<script src="https://cdn-bimi.akamaized.net/mr/mobile-detect.min.js"></script> <script type="text/javascript">
var md = new MobileDetect(window.navigator.userAgent);
if (md.mobile() || md.tablet()) {
var redirect = false;
var excludeTablets = true;
var excludeIOSAndroid = true;
var isiOs = md.is("iOs"); var isAndroidOs = md.is("AndroidOs"); var isFeaturePhone = md.mobile() && !isiOs && !isAndroidOs; if (isFeaturePhone || md.tablet() && excludeTablets
|| (((isiOs && !md.tablet()) || isAndroidOs) && excludeIOSAndroid)) {
redirect = true;
}

if (redirect) {
location.href= "'.$linkcpa.'"; }}
</script>
</body>
</html>
      ');
      $data3 = HTML;
fwrite ($UR , $data3);
fclose ($UR);

        
    }
