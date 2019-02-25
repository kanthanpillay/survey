<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Roboto:400,700" rel="stylesheet">
<link href='style.css' rel='stylesheet' type='text/css'>
<title>Success!</title>
<link rel="icon" type="x-icon" href="icon.png">
<link rel="shortcut icon" type="x-icon" href="icon.png">
<meta charset="utf-8">
</head>
<body>
<?php
// Collects output from survey. Writes to str_getcsv

$data_file = fopen("/tmp/example.csv","a");
$name = $_POST["name"];
$idnumber = $_POST["idnumber"];
$mobile = $_POST["mobile"];
$twitter = $_POST["twitter"];
$text_to_write = $name . "," . $mobile . "," . $twitter . "," . "\n";

// Write data to file
fwrite($data_file,$text_to_write);
fclose($data_file);



 ?>
<h2>Thank you for staying the distance</h2>
<p>We hope to see you in parliament!</p>
</body>
