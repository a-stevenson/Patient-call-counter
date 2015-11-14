ABOUT
Patient call counter works with Twilio as a simple call counter designed to allow dental practices track the effectiveness of their online marketing.

DATABASE REQUIREMENTS
In addition to a Twilio account and number, you will also need access to a MySQL database to track the calls.

The database can be created using the following syntax:

CREATE TABLE `incoming_calls` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `call_from_city` varchar(40) DEFAULT NULL,
  `call_from_zip` varchar(40) DEFAULT NULL,
  `call_from_number` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


SET UP
I prefer to run the application at a distinct sub-domain for search engine indexing purposes.
Input the correct database & phone number variables into the setting.php file and direct your Twilio number to answer calls at your.site/call-tracker.php and respond to text messages at your.site/incoming-sms.php.
In the settings.php file, input all of the necessary variables. The other files do not need any modification unless you want to tinker.

SMS SUPPORT
In addition to redirecting calls, the application also forwards any sms messages it receives to your email address and responds with a generic reply that can be configured in settings.php.

HTACCESS
I have included a generic HTACCESS file that redirects anyone trying to access the root of your sub-domain. To use it you will need to input your URL and change the file name to .htaccess on your web server.



Created by Andy Stevenson, Andy@AStevenson.me