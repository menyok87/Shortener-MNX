<?php

function randname() {

    $api=fopen("fakename.txt", "r") or die("Unable to open file!");
    $api_branch=fread($api, filesize("fakename.txt"));
    $dt=explode("\r\n", $api_branch);
    $branch_key =$dt[array_rand($dt)];

    return $branch_key;

    fclose($api);


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

function random_title()
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
function random_no1()
{

    $character_set_array[] = array('count' => 1, 'characters' => '123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}
function images(){
    $params = [
'https://i.imgur.com/QBQhwFG.png',
'https://i.imgur.com/dxFzCnZ.png',
'https://i.imgur.com/6r0uKhj.png',
'https://i.imgur.com/PG5Ysgd.png',
'https://i.imgur.com/bpkBFio.png',
'https://i.imgur.com/06AFwQn.png',
'https://i.imgur.com/IOKsJPn.png',
'https://i.imgur.com/zflAGbr.png',
'https://i.imgur.com/kshJwHB.png',
'https://i.imgur.com/ozNfDYt.png',
'https://i.imgur.com/zoNIyf6.png',
'https://i.imgur.com/OD8zqhB.png',
'https://i.imgur.com/I9wAtpa.png',
'https://i.imgur.com/KHKi2wi.png',
'https://i.imgur.com/yfd2MyV.png',
'https://i.imgur.com/gpVfLQ0.png',
'https://i.imgur.com/UDmCFoz.png',
'https://i.imgur.com/5ma4yYu.png',
'https://i.imgur.com/wSrrcIp.png',
'https://i.imgur.com/elpUkGi.png',
'https://i.imgur.com/8SKlacO.png',
'https://i.imgur.com/DZTYc8U.png',
'https://i.imgur.com/Qa25X9y.png',
'https://i.imgur.com/Es0cwUJ.png',
'https://i.imgur.com/MZ8UzN3.png',
'https://i.imgur.com/2QMzMJ4.png',
'https://i.imgur.com/BWXvWlm.png',
'https://i.imgur.com/BWnHocI.png',
'https://i.imgur.com/y50pWmp.png',
'https://i.imgur.com/HVh0k9q.png',
'https://i.imgur.com/A8kBoPK.png',
'https://i.imgur.com/gpSTDbj.png',
'https://i.imgur.com/edX8R8b.png',
'https://i.imgur.com/ANmPFvg.png',
'https://i.imgur.com/f0RDibj.png',
'https://i.imgur.com/o8iAfWR.png',
'https://i.imgur.com/h9lUs5g.png',
'https://i.imgur.com/Hcj7fUD.png',
'https://i.imgur.com/xs3uSm2.png',
'https://i.imgur.com/3aKn5fY.png',
'https://i.imgur.com/wHGXS4c.png',
'https://i.imgur.com/Elmc2Ln.png',
'https://i.imgur.com/SKFhxJE.png',
'https://i.imgur.com/SKFhxJE.png',
'https://i.imgur.com/EDRqtwE.png',
'https://i.imgur.com/E10fSt6.png',
'https://i.imgur.com/ove1Ygk.png',
'https://i.imgur.com/w3Ks1pV.png',
'https://i.imgur.com/O1bQsRA.png',
'https://i.imgur.com/WwMiGHx.png',
'https://i.imgur.com/49iuC7I.png',
'https://i.imgur.com/vyNUs5f.png',
'https://i.imgur.com/ZOIcC1Y.png',
'https://i.imgur.com/0QbvmE6.png',
'https://i.imgur.com/3m60WBE.png',
'https://i.imgur.com/lOsts99.png',
'https://i.imgur.com/sOjh7GB.png',
'https://i.imgur.com/xtXzwp8.png',
'https://i.imgur.com/ahMBiyR.png',
'https://i.imgur.com/kQFKCSX.png'
    ];

    $image =$params[array_rand($params)];
    
    return $image;
}

function description(){
    $params = [
    'Masturbation',
    'Female Orgasm',
    'Hardcore',
    'Creampie',
    'My Sexy exGirlfriend',
    'Beauty BIG ass Masturbating',
    'Teen Grils Creampie',
    'Female Orgasm LIVE..!!',
    'Teen Grils Hot',
    'Big Cock',
    'Big Tits Hot Grils'
    ];

    $category =$params[array_rand($params)];
    
return "HD Porn Videos by category – " . $category;
}
?>