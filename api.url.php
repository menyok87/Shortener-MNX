<?php
    include('config.php');
    include('api.random.php');
    include('random_domain.php');
    include 'vendor/autoload.php';

$faker = Faker\Factory::create();
if(isset($_POST['url'])){
$titles = $_POST['title'];
$descriptions = $_POST['description'];
$images = trim($_POST['image']);
$domain = trim($_POST['domain']);
$urlOrigin = trim($_POST['url']);
$domain_share = domain_random();
$date = date('Y-m-d');
$views1= random_no1();
$views2= random_title();
$views3= random_title();
    $sub1    = $faker->numberBetween($min = 1, $max = 9999999);
    $sub2    = strtolower($faker->firstNameFemale());
    $subd    = strtolower($faker->firstNameFemale());
    $alias    = $faker->uuid();
$url_image = images();
$title = description();
$description = $views1.'.'.$views2.'.'.$views3.' Views';
$aliase = $sub2.''.$sub1;
$subdomain = $aliase.".".$domain_share;

    
if($titles == ""){
    $ttl = $title;
}else{
    $ttl = $titles;
}
if($descriptions == ""){
    $des = $description;
    
}else{
    $des = $descriptions;
}
if($images == ""){
    $img = $url_image;
}else{
    $img = $images;
}

  $query = "INSERT INTO `shortener`(`id`, `alias`, `subdomain`, `urlOrigin`, `title`, `description`, `image`, `created_at`) VALUES (NULL,'$alias','$subdomain','$urlOrigin','$ttl','$des','$img','$date')";
    mysqli_query($mysqli,$query);
    
    $LINKKUAT = "https://$subdomain/l/$alias";

print $LINKKUAT;

mysqli_close($mysqli);
}
?>