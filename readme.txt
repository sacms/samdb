       ♥ Welcome to SAMDB API ♥



------------- SAMDB INFO ----------------

Email us :- samdb@shakib.cyou

Website :- https://samdb.shakib.cyou/


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
SAMDB API - SHAKIB.CYOU
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

$url = 'https://samdb.shakib.cyou/json?i=" .$tt."&o='.$GET['api_key']';

remove '.$_GET['api_key'] then use your api key


example:

$url = 'https://samdb.shakib.cyou/json?i=" .$tt."&o=samxxxxxxxx';

Than remove

if (empty($_GET['api_key'])) {
echo '
<div class="mmm">SAMDB API</div><div class="form">

<div class="mvinfo"><form action="" method="get" enctype="multipart/form-data"><div class="mvlist">Api key:<br/> <input type="text" name="api_key" value=""/></div><br><div class="mvlistt"><center>Note: If you have not api key.  please <a href="//samdb.shakib.cyou">register </a> now.<input type="submit" value="Submit"/></center></div></form></div>';
} 

Open samdb.php file check 46 - 51 lines.


then remove

if (!empty($_GET['api_key'] && empty($_POST['tt']))) {


Open samdb.php file check 52 lines.


and put new code


if (empty($_POST['tt'])) {

Put samdb.php file check 52 lines.

Done removed api key input box

