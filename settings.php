<?php
/**********DB CONNECTION ********/
$DB_host='db.astevenson.me';
$DB_username='caller901';
$DB_password='A67h3QqB3';
$DB_name='call_server_astevenson';
$DB_table='grand_dental_calls';

/**********CALL SETTINGS**************/
//This is the number that your Twilio redirects to.
$office_phone_number='15152231940';


/**********SMS SETTINGS*******/
//This is the email address that all text messages sent to your Twilio number will be forwarded to.
$email_address = 'businessoffice@grand.dental';

//This is the reply that is automatically sent to all text messages received at your number.
$genericSMSreply = 'Thank you for contacting Grand Dental! Your message has been forwarded to our email inbox. If you would like immediate assistance please call this number. Have a great day!';
