<?php
ini_set('date.timezone', 'Australia/Sydney');
$time = date ('H:i:s');
print $time;

?>


<html>
<head>
  <title>FDC Shirts</title>
</head>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<body>
  <h1>Shirts</h1>
  <p>&copy;<?php echo date ('Y');?> Butts</p>

<?php
ini_set('date.timezone', 'Australia/Sydney');
$hour = date('G');

if ($hour < 12){
  echo "Buon Giorno!";
}
if ($hour >= 12 and $hour < 17) {
  echo "Buon Pomeriggio";
}
if ($hour >= 17 and $hour < 20) {
  echo "Buona Sera";
}
if ($hour > 20) {
  echo "Buona Notte";
}

?>
