<?php

/***************************************************
 * Default type for new bookings, leave this section
 ***************************************************/
$booking_types[] = "Z";
$vocab_override["en"]["type.Z"] = "Choose a type";
$default_type = "Z";


/****************************************************
 * Colours have been defined for 18 different types. 
 * Here you can choose which types will appear in the 
 * list, in what order and their names.
 ****************************************************/

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
$booking_types[] = "U";
$booking_types[] = "V";
$booking_types[] = "Y";
$booking_types[] = "X";

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
$vocab_override["en"]["type.U"] = "*Placement*";
$vocab_override["en"]["type.V"] = "*Sessional*";
$vocab_override["en"]["type.X"] = "*External*";
$vocab_override["en"]["type.Y"] = "*Groups*";


?>