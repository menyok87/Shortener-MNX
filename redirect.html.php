<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <meta name=viewport content="width=device-width,minimum-scale=1" />
    <meta property=og:type content="Article" />
    <meta property="og:locale" content="en_US" />
    <meta property=fb:app_id content="274266067164" />
    <meta property=fb:admin content="237344263766628" />
    <meta property=fb:locale content="en_US" />
    <meta property="og:title" content="<?php echo $title;?>">
    <meta property="og:description" content="<?php echo $deskirpsi;?>">
    <meta property="og:image" content="<?php echo $url_image;?>">
    <meta property="og:url" content="<?php echo $actual_link;?>">
    <link href="<?php echo $url_image;?>" rel="alternate" media="only screen and (max-width: 640px)">
    <link rel="canonical" href="<?php echo $actual_link;?>">
    <meta name=twitter:app:country content=US />
    <meta property="twitter:title" content="<?php echo $title;?>">
    <meta property="twitter:description" content="<?php echo $deskirpsi;?>">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:image" content="<?php echo $url_image;?>">
    <meta property="twitter:url" content="<?php echo $actual_link;?>">
    <title><?php echo $title;?></title>
</head>
<body><?php header('Location: '.$url_origin.''); exit;?><h1><?php echo $title;?></h1><img src="<?php echo $url_image;?>" alt="<?php echo $title;?>"></body>
</html>
