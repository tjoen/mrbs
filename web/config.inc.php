<?php

/*************************************
 * The Harbour MRBS Configuration File
 *************************************/


/**********
 * Timezone
 **********/
$timezone = "Europe/London";


/*****************
 * Database config
 *****************/
require "database_config.inc.php";  // For security purposes our database details are stored in a separate file


/*******
 * Theme
 *******/
$theme = "theharbour";  // Our custom theme in the Theme folder


/*********************************
 * Site identification information
 *********************************/
$mrbs_admin        = "The Harbour Administrator";
$mrbs_company      = "The Harbour";                         // The name of our organisation
$mrbs_company_logo = "Themes/$theme/logo.png";              // The logo displayed in the header
$mrbs_company_url  = "http://www.the-harbour.co.uk/rooms";  // The URL used for the logo and home link
$url_base          = "http://www.the-harbour.co.uk/rooms";


/*************************
 * Authentication settings
 *************************/

$auth['deny_public_access'] = TRUE;  // Prevent the public, i.e. users who are not logged in, from being able to access the site and view bookings
$auth["type"]               = "db";  // Store authentication information in the database


/******************
 * Display settings
 ******************/
$weekstarts           = 1;           // Start the week on Monday
$hidden_days          = array(6,0);  // Hide Saturday (6) and Sunday (0) as the meeting rooms are not available on these days
$dateformat           = 1;           // Display short dates in non-US format
$default_view         = "month";     // Set the default view to month
$month_cell_scrolling = FALSE;       // Have cells expand to display all their bookings rather than present a scroll bar
$max_slots            = "288";       // Maximum number of booking slots per day, if the site were to be configured with a 5 minute booking resolution


/*****************************
 * Confidential field settings
 *****************************/
$is_private_field['entry.name']        = TRUE;   // Client name
$is_private_field['entry.description'] = TRUE;   // Additional information
$is_private_field['entry.create_by']   = FALSE;  // Therapist name


/****************
 * Email settings
 ****************/
$mail_settings['admin_backend'] = 'sendmail';            // Use PHP Sendmail to send emails
$sendmail_settings['path']      = '/usr/sbin/sendmail';  // Path to Sendmail, as specified in the output from phpinfo();
$sendmail_settings['args']      = '-t -i';               // Additional Sendmail parameters, as specified in the output from phpinfo();


/*****************
 * Email addresses
 *****************/
$mrbs_admin_email            = "The Harbour <harbour@robash.me.uk>";  // Administrator email address
$mail_settings['from']       = "The Harbour <harbour@robash.me.uk>";  // From address shown in emails sent by MRBS
$mail_settings['recipients'] = "The Harbour <harbour@robash.me.uk>";  // Recipient for emails sent when a booking is made


/****************
 * Email policies
 ****************/
$mail_settings['admin_on_bookings']      = TRUE;   // Email administrator on new booking
$mail_settings['area_admin_on_bookings'] = FALSE;  // Email area administrators on new booking, disabled as we have a single area
$mail_settings['room_admin_on_bookings'] = FALSE;  // Email room administrators on new booking, disabled as we have a single administrator for all rooms
$mail_settings['booker']                 = TRUE;   // Email the person making the booking
$mail_settings['book_admin_on_approval'] = FALSE;  // Email a separate administrator if approval is required, disabled as all bookings require approval
$mail_settings['on_new']                 = FALSE;  // Email when a booking is created
$mail_settings['on_change']              = FALSE;  // Email when a booking is changed
$mail_settings['on_delete']              = FALSE;  // Email when a booking is deleted
$mail_settings['details']                = FALSE;  // Include a link to the booking in emails, not all the booking details
$mail_settings['html']                   = FALSE;  // Send emails in plain text
$mail_settings['icalendar']              = FALSE;  // Do not include an attachment with iCalendar details


/****************************
 * Email development settings
 ****************************/
$mail_settings['debug'] = TRUE;
$mail_settings['disabled'] = TRUE;


/*********
 * Reports
 *********/
$csv_col_sep         = "\t";  // Include the right separator between columns/fields so exported CSV files are handled correctly in Microsoft Excel
$default_report_days = 30;    // Default number of days a report should cover


/****************************************************************
 * Vocabulary
 * Use this section to overide vocabulary defined in lang/lang.en
 ****************************************************************/
$vocab_override['en']['namebooker']      = "Client name (kept private)";             // Used to overide vocabulary on edit_entry.php
$vocab_override['en']['fulldescription'] = "Additional information (kept private)";  // Used to overide vocabulary on edit_entry.php
$vocab_override['en']['description']     = "Additional information";                 // Used to overide vocabulary on view_entry.php
$vocab_override['en']['unavailable']     = "Confidential";                           // Used to overide vocabulary in functions_table.inc
$vocab_override['en']['private']         = "Confidential";                           // Used to overide vocabulary on view_entry.php
$vocab_override['en']['norights']        = "You do not have the necessary rights to view this page. If you are having problems logging in please contact <a href=mailto:info@the-harbour.co.uk>info@the-harbour.co.uk</a>.";

?>