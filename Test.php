<!DOCTYPE HTML>
<html lang="en" dir="ltr">
<head>
  <title>Eventbrite</title>

 <meta charset="UTF-8">

 </head>
 <body>

 <?php
 // load the API Client library
 include "eventbrite.php";

 // Initialize the API client
 // Eventbrite API / Application key (REQUIRED)
 // http://www.eventbrite.com/api/key/
 // Eventbrite user_key (OPTIONAL, only needed for reading/writing private user data)
 // http://www.eventbrite.com/userkeyapi

 $eb_client = new Eventbrite(array('app_key'=>'ODTENNPIQWWFYQDEFK'));
 // For more information about the features that are available through the Eventbrite API, see      http://developer.eventbrite.com/doc/
$resp = $eb_client->event_get( array('id' => '102120459042') );


 //mark-up the list of events that were requested
 // render in html - ?>
 <style type="text/css">
 .eb_event_list_item{
   padding-top: 20px;
 }
 .eb_event_list_title{
   position: absolute;
   left: 300px;
   width: 300px;
   overflow: hidden;
 }
 .eb_event_list_date{
   padding-left: 20px;
 }
 .eb_event_list_time{
   position: absolute;
   left: 200px;
 }
 .eb_event_list_location{
   position: absolute;
   left: 620px;
 }
 </style>

 <h1>My Event List:</h1>
 <?= Eventbrite::eventList( $resp, 'eventListRow'); ?>
<?= $resp.json_decode(); ?>
 </body>
 </html>
