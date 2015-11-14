<?php
/**********DB CONNECTION ********/
$DB_host='db.your.site';
$DB_username='username';
$DB_password='password';
$DB_name='call_server';
$DB_table='incoming_calls';  //This is the default if you use the syntax in the readme

/**********CALL SETTINGS**************/
//This is the number that your Twilio redirects to.
$office_phone_number='15553338888'; //Make sure to use the full number, that means putting a 1 before your area code if you are in the US.


/**********SMS SETTINGS*******/
//This is the email address that all text messages sent to your Twilio number will be forwarded to.
$email_address = 'email@your.site';

//This is the reply that is automatically sent to all text messages received at your number.
$genericSMSreply = 'Thank you for contacting us! Your message has been forwarded to our email inbox. If you would like immediate assistance please call this number. Have a great day!';























