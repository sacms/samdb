       ♥ Welcome to SAMDB API ♥

     <----- Author Info Start ----->

Author :- Shakib Ahmed

URI :- https://facebook.com/expertskb

E-mail :- shakibwap@yahoo.com

Telegram :- https://t.me/expertskb

     <----- Author Info End ----->


------------- SAMDB INFO ----------------

Email us :- samdb@app.shakib.cyou

Website :- https://app.shakib.cyou/imdb/


----------------- END -------------------


We have given you this code. You can take more files from more items +  download link + Json if you want.





First purcashe api key free [no limit]



You can use our api service for free without waste time and extra money...!





---------------------------
----------------------
---------------
----------
-----
--
-
SAMDB API - SHAKIB
-
--
-----
-----------
----------------
------------------------
-----------------------------



Let's go

======================

#Logic

★★★★★

How to remove api key input box

=>=>=>=>=>=>=>=>

Open samdb.php file check 27 lines.

$url = 'https://api.shakib.cyou/imdb/json.php?i=" .$tt."&o=".$_GET['api_key'];


remove ".$_GET['api_key'] then use your api key


example:

$url = 'https://api.shakib.cyou/imdb/json.php?i=" .$tt."&o=samxxxxxxxx';

Than remove

if (empty($_GET['api_key'])) {
echo '
<div class="mmm">SAMDB API</div><div class="form">

<div class="mvinfo"><form action="" method="get" enctype="multipart/form-data"><div class="mvlist">Api key:<br/> <input type="text" name="api_key" value=""/></div><br><div class="mvlistt"><center>Note: If you have not api key.  please <a href="//app.shakib.cyou/imdb">register </a> now.<input type="submit" value="Submit"/></center></div></form></div>';
} 

Open samdb.php file check 46 - 51 lines.


then remove

if (!empty($_GET['api_key'] && empty($_POST['tt']))) {


Open samdb.php file check 52 lines.


and put new code


if (empty($_POST['tt'])) {

Done removed api key input box



Full #logic this code on you see sambd.php


#Function 

function samdb(){ include_once('samdb.php'); } add_shortcode('samxxxxxxxx' , 'samxxxxxxxx');


First trick you needs to change samxxxxxxxx to sam[your api key withou space] 


example: sam34303333



don't use example code security reasons


The function put it now your wordpress theme functions.php file


<?php

than paste your file


example:

<?php

function samdb(){ include_once('samdb.php'); } add_shortcode('samxxxxxxxx' , 'samxxxxxxxx');



Then move samdb.php file to your theme folder


example: file:///storage/emulated/0/Download/i%20Theme/


This is mobile root. If you are pc & tab user search on youtube or google and read blog & watch video


Done our program already setup


How to live samdb api on wordpress


Go to admin panel / pages option then add new pages

Choice your name [private] (do not share anyone page link)

And Second box put now


[samxxxxxxxx]

Note: not remove [] you can use full code like bbcode style

example :
[sam34303333]

Done great jobs...!