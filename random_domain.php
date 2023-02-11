<?php
function domain_random() {
    
    
    $mysqli = mysqli_connect("localhost","reank","Menyok.12345","reank_smartlink");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

    $query_mysql_domain_admin =mysqli_query($mysqli, "SELECT `id`, `domain`, `type` FROM `domain` WHERE type LIKE '%SHARE%' ORDER BY RAND() LIMIT 1" );
while($d_a=mysqli_fetch_array($query_mysql_domain_admin)) {
     $domain_admin .=  $d_a['domain'];

}
    return $domain_admin;
}

?>