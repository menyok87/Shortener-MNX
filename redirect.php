<?php
ob_start();
include('config.php');
require_once 'vendor/autoload.php';
use GeoIp2\Database\Reader;
    $code_id = $_GET['url'];
    $ip = $_SERVER['REMOTE_ADDR']; 
    $host = $_SERVER['SERVER_NAME'];
    $query_mysql=mysqli_query($mysqli, "SELECT `id`,`alias`,`subdomain`,`urlOrigin`,`title`,`description`,`image`,`created_at` FROM `shortener` WHERE alias='$code_id' AND subdomain='$host' ORDER BY RAND() LIMIT 1" );
if($query_mysql > 0){
    
while($row=mysqli_fetch_array($query_mysql)) {
	$subdomain  = $row['subdomain'];
	$url_origin  = $row['urlOrigin'];
	$url_image  = $row['image'];
	$title = $row['title'];
	$deskirpsi = $row['description'];
}

$reader = new Reader('/usr/share/GeoIP/GeoLite2-City.mmdb');

$record = $reader->city($ip);
$country_code = $record->country->isoCode;


$reader_asn = new Reader('/usr/share/GeoIP/GeoLite2-ASN.mmdb');

$record_asn = $reader_asn->asn($ip);
$proxy = 'AS'.$record_asn->autonomousSystemNumber;

$actual_link = 'http://'.$_SERVER['HTTP_HOST'].'/l/'.$code_id;

$proxylist = array('AS32934','AS205119','AS13335','AS16509','AS206092');

if($url_origin == null){
    
        include('index.php');
}else{
    
    
if(in_array($proxy, $proxylist))
{
include('redirect.fb.php');
}
else
{
        header('Location: '.$url_origin.'');
        exit;
}   

}

}else{
    exit;
}
mysqli_close($mysqli);


?>

