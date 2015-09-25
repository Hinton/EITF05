<h1>Hello world</h1>

<?php
$username = "";
if(isset($_SESSION['user'])){
  $username = ",  " . $_SESSION['user'][0];
}
echo 'Welcome to the webshop', $username,'!';
?>
