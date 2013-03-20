<?php

/***************************************************
 * Default type for new bookings, leave this section
 ***************************************************/
$booking_types[] = "Z";
$vocab_override["en"]["type.Z"] = "Choose a type";
$default_type = "Z";

/******************************************************
 * Colours have been defined for 18 different types. 
 * Here you can choose the names for those types, which 
 * types will appear in the list and in what order.
 ******************************************************/

/****************************************************** 
 * Specify the names that will appear against each type 
 ******************************************************/
$vocab_override["en"]["type.A"] = "Therapist 1";
$vocab_override["en"]["type.B"] = "Therapist 2";
$vocab_override["en"]["type.C"] = "Therapist 3";
$vocab_override["en"]["type.D"] = "Therapist 4";
$vocab_override["en"]["type.E"] = "Therapist 5";
$vocab_override["en"]["type.F"] = "Therapist 6";
$vocab_override["en"]["type.G"] = "Therapist 7";
$vocab_override["en"]["type.H"] = "Therapist 8";
$vocab_override["en"]["type.I"] = "Therapist 9";
$vocab_override["en"]["type.J"] = "Therapist 10";
$vocab_override["en"]["type.K"] = "Therapist 11";
$vocab_override["en"]["type.L"] = "Therapist 12";
$vocab_override["en"]["type.M"] = "Therapist 13";
$vocab_override["en"]["type.N"] = "Therapist 14";
$vocab_override["en"]["type.O"] = "Therapist 15";
$vocab_override["en"]["type.P"] = "Therapist 16";
$vocab_override["en"]["type.X"] = "*External*";
$vocab_override["en"]["type.Y"] = "*Placement*";

/*********************************************************
 * Specify the types that appear in the list and the order
 * in which they will appear. The double slashes (//) mean 
 * that line will be ignored, so they can be added to hide
 * a type, or removed to display a type in the list.
 *********************************************************/
$booking_types[] = "A";
$booking_types[] = "B";
$booking_types[] = "C";
$booking_types[] = "D";
$booking_types[] = "E";
$booking_types[] = "F";
// $booking_types[] = "G";
// $booking_types[] = "H";
// $booking_types[] = "I";
// $booking_types[] = "J";
// $booking_types[] = "K";
// $booking_types[] = "L";
// $booking_types[] = "M";
// $booking_types[] = "N";
// $booking_types[] = "O";
// $booking_types[] = "P";
$booking_types[] = "Y";
$booking_types[] = "X";

?>