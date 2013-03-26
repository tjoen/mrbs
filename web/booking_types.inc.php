<?php

/************************************************
 * Leave this section, it just sets some defaults
 ************************************************/
$booking_types[] = "Z";
$vocab_override["en"]["type.Z"] = "Choose a type";
$default_type = "Z";

/*****************************************************
 * Specify the types that appear in the list and 
 * the order in which they will appear. Double slashes
 * (//) mean that line will be ignored - add them to 
 * hide a type or remove them to display a type.
 *****************************************************/
$booking_types[] = "A";
$booking_types[] = "B";
$booking_types[] = "C";
$booking_types[] = "D";
// $booking_types[] = "E";
// $booking_types[] = "F";
// $booking_types[] = "G";
// $booking_types[] = "H";
// $booking_types[] = "I";
// $booking_types[] = "J";
// $booking_types[] = "K";
// $booking_types[] = "L";
// $booking_types[] = "M";
// $booking_types[] = "N";
$booking_types[] = "V";
$booking_types[] = "W";
$booking_types[] = "X";
$booking_types[] = "Y";

/****************************************************** 
 * Specify the names that will appear against each type 
 ******************************************************/
$vocab_override["en"]["type.A"] = "Mike";
$vocab_override["en"]["type.B"] = "Liz";
$vocab_override["en"]["type.C"] = "Paul";
$vocab_override["en"]["type.D"] = "Ally";
$vocab_override["en"]["type.E"] = "";
$vocab_override["en"]["type.F"] = "";
$vocab_override["en"]["type.G"] = "";
$vocab_override["en"]["type.H"] = "";
$vocab_override["en"]["type.I"] = "";
$vocab_override["en"]["type.J"] = "";
$vocab_override["en"]["type.K"] = "";
$vocab_override["en"]["type.L"] = "";
$vocab_override["en"]["type.M"] = "";
$vocab_override["en"]["type.N"] = "";
$vocab_override["en"]["type.V"] = "*Placement*";
$vocab_override["en"]["type.W"] = "*Sessional*";
$vocab_override["en"]["type.X"] = "*Groups*";
$vocab_override["en"]["type.Y"] = "*External*";

/******************************************************************
 * The actual colour codes are stored in a separate file - towards
 * the end of Themes/theharbour/styling.inc. They can be modified, 
 * e.g. with HEX codes from http://www.colorschemer.com/online.html
 * but be careful not to touch any other parts of the file.
 ******************************************************************/

?>