<?php
function RandomURIadd($panjangURI = 1) {
	$karakterURI = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstufwxyz0123456789';
	$stringURI = '';
	for ($pURI = 0; $pURI < $panjangURI; $pURI++) {
		$stringURI .= $karakterURI[mt_rand(0, strlen($karakterURI))];
	}

	return $stringURI;
}
function random_string()
{
    $character_set_array = array();
    $character_set_array[] = array('count' => 4, 'characters' => 'abcdefghijklmnopqrstuvwxyz');
    $character_set_array[] = array('count' => 4, 'characters' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $character_set_array[] = array('count' => 4, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}
function randmon()
{

    $character_set_array[] = array('count' => 10, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}
function randnumb()
{

    $character_set_array[] = array('count' => 5, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}
function randnumber()
{

    $character_set_array[] = array('count' => 3, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}

function debug()
{
    $character_set_array = array();
    $character_set_array[] = array('count' => 5, 'characters' => 'abcdefghijklmnopqrstuvwxyz');
    $character_set_array[] = array('count' => 5, 'characters' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $character_set_array[] = array('count' => 3, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}
function randomdebug()
{
    $character_set_array = array();
    $character_set_array[] = array('count' => 5, 'characters' => 'abcdefghijklmnopqrstuvwxyz');
    $character_set_array[] = array('count' => 5, 'characters' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $character_set_array[] = array('count' => 3, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}
function domain() {

    $filedomaine = "domain.json";
    
	$json = file_get_contents($filedomaine,JSON_PRETTY_PRINT);
	$deco = json_decode($json,true);
	
	$no = 0;
    foreach($deco as $d => $v){
     $domain[] =  $v['domain'];
     
 $no++;
    }
	
    $rand_domain =$domain[array_rand($domain)];

    return $rand_domain;


}
function domain_user($user) {

    $filedomaine = "domain/$user.json";
    
	$json = file_get_contents($filedomaine,JSON_PRETTY_PRINT);
	$deco = json_decode($json,true);
	
	$no = 0;
    foreach($deco as $d => $v){
     $domain[] =  $v['domain'];
     
 $no++;
    }
	
    $rand_domain =$domain[array_rand($domain)];

    return $rand_domain;


}
function branch_key() {

    $api=fopen("branch_key.txt", "r") or die("Unable to open file!");
    $api_branch=fread($api, filesize("branch_key.txt"));
    $dt=explode("\r\n", $api_branch);
    $_key =$dt[array_rand($dt)];

    return $_key;

    fclose($api);


}
function randomgen()
{
    $character_set_array = array();
    $character_set_array[] = array('count' => 2, 'characters' => 'abcdefghijklmnopqrstuvwxyz');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}
function ikut()
{
    $character_set_array = array();
    $character_set_array[] = array('count' => 3, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}
function ikut01()
{
    $character_set_array = array();
    $character_set_array[] = array('count' => 3, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
function ikut02()
{
    $character_set_array = array();
    $character_set_array[] = array('count' => 3, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}
    shuffle($temp_array);
    return implode('', $temp_array);
}
function randomnameuser() {

    $api=fopen("fakename.txt", "r") or die("Unable to open file!");
    $api_branch=fread($api, filesize("fakename.txt"));
    $dt=explode("\r\n", $api_branch);
    $branch_key =$dt[array_rand($dt)];

    return $branch_key;

    fclose($api);


}
function randname() {

    $api=fopen("fakename.txt", "r") or die("Unable to open file!");
    $api_branch=fread($api, filesize("fakename.txt"));
    $dt=explode("\r\n", $api_branch);
    $branch_key =$dt[array_rand($dt)];

    return $branch_key;

    fclose($api);


}


?>
