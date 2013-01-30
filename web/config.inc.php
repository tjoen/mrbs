<?php

// $Id: config.inc.php 2211 2011-12-24 09:27:00Z cimorrison $

/**************************************************************************
 *   MRBS Configuration File
 *   Configure this file for your site.
 *   You shouldn't have to modify anything outside this file
 *   (except for the lang.* files, eg lang.en for English, if
 *   you want to change text strings such as "Meeting Room
 *   Booking System", "room" and "area").
 **************************************************************************/

/**********
 * Timezone
 **********/
 
// The timezone your meeting rooms run in. It is especially important
// to set this if you're using PHP 5 on Linux. In this configuration
// if you don't, meetings in a different DST than you are currently
// in are offset by the DST offset incorrectly.
//
// Note that timezones can be set on a per-area basis, so strictly speaking this
// setting should be in areadefaults.inc.php, but as it is so important to set
// the right timezone it is included here.
//
// When upgrading an existing installation, this should be set to the
// timezone the web server runs in.  See the INSTALL document for more information.
//
// A list of valid timezones can be found at http://php.net/manual/timezones.php
// The following line must be uncommented by removing the '//' at the beginning
$timezone = "Europe/London";


/*******************
 * Database settings
 ******************/
// Which database system: "pgsql"=PostgreSQL, "mysql"=MySQL,
// "mysqli"=MySQL via the mysqli PHP extension
// $dbsys = "mysql";
// Hostname of database server. For pgsql, can use "" instead of localhost
// to use Unix Domain Sockets instead of TCP/IP.
// $db_host = "localhost";
// Database name:
// $db_database = "mrbs";
// Database login user name:
// $db_login = "mrbs";
// Database login password:
// $db_password = 'mrbs-password';
// Prefix for table names.  This will allow multiple installations where only
// one database is available
// $db_tbl_prefix = "mrbs_";
// Uncomment this to NOT use PHP persistent (pooled) database connections:
// $db_nopersist = 1;
require 'database_config.inc.php';


/* Add lines from systemdefaults.inc.php and areadefaults.inc.php below here
   to change the default configuration. Do _NOT_ modify systemdefaults.inc.php
   or areadefaults.inc.php.  */


/*********************************
 * Site identification information
 *********************************/
$mrbs_admin = "The Harbour Administrator";
$mrbs_admin_email = "The Harbour <harbour@robash.me.uk>";
// NOTE:  there are more email addresses in $mail_settings below.    You can also give
// email addresses in the format 'Full Name <address>', for example:
// $mrbs_admin_email = 'Booking System <admin_email@your.org>';
// if the name section has any "peculiar" characters in it, you will need
// to put the name in double quotes, e.g.:
// $mrbs_admin_email = '"Bloggs, Joe" <admin_email@your.org>';

// The company name is mandatory.   It is used in the header and also for email notifications.
// The company logo, additional information and URL are all optional.

$mrbs_company = "The Harbour";   // This line must always be uncommented ($mrbs_company is used in various places)

// Uncomment this next line to use a logo instead of text for your organisation in the header
$mrbs_company_logo = "Themes/theharbour/harbour-logo.png";    // name of your logo file.   This example assumes it is in the MRBS directory

// Uncomment this next line for supplementary information after your company name or logo
//$mrbs_company_more_info = "You can put additional information here";  // e.g. "XYZ Department"

// Uncomment this next line to have a link to your organisation in the header
$mrbs_company_url = "http://www.the-harbour.co.uk/";

// This is to fix URL problems when using a proxy in the environment.
// If links inside MRBS appear broken, then specify here the URL of
// your MRBS root directory, as seen by the users. For example:
// $url_base =  "http://webtools.uab.ericsson.se/oam";
// It is also recommended that you set this if you intend to use email
// notifications, to ensure that the correct URL is displayed in the
// notification.
$url_base = "http://webdev/mrbs/web";


?>