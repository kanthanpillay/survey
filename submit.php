<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Roboto:400,700" rel="stylesheet">
<link href='style.css' rel='stylesheet' type='text/css'>
<title>Thank you!</title>
<link rel="icon" type="x-icon" href="icon.png">
<link rel="shortcut icon" type="x-icon" href="icon.png">
<meta charset="utf-8">
</head>
<body>
<?php
// Collects output from survey. Writes to str_getcsv

$data_file = fopen("/var/tmp/example.tsv","a");
$name = $_POST["name"];
$idnumber = $_POST["idnumber"];
$mobile = $_POST["mobile"];
$twitter = $_POST["twitter"];
$origurl = $_POST["origurl"];
$text_to_write = $name . "\t" . $idnumber . "\t" . $mobile . "\t" . $twitter . "\t" . $origurl . "\t" . "\n";

// Write data to file
fwrite($data_file,$text_to_write);
fclose($data_file);



 ?>
<h2>You made it this far!</h2>
<p>We hope to see you in parliament!</p>
<p><?php print_r($_POST); ?>
</body>
~
