<?php

require_once('settings.php');

/****DEFINE THE PARAMETERS****/
$caller_number = $_POST['From'];
$caller_city = $_POST['FromCity'];
$caller_zip = $_POST['FromZip'];

/****CONNECT TO THE DB****/
$connection = new mysqli($DB_host, $DB_username, $DB_password, $DB_name);

/****INPUT INTO THE DB****/
$add_record = "INSERT INTO $DB_table (call_from_city, call_from_zip, call_from_number)
VALUES ('$caller_city', '$caller_zip', '$caller_number')";

$connection->query($add_record);

/****REDIRECT THE CALL****/
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n <Response><Dial>" . $office_phone_number . "</Dial></Response>";

?>


Patient call tracker lets small businesses track who calls them from their online presences with Twilio. Find it on GitHub.