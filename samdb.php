<style>.mmm{background:#006699;padding:9px;color:#fff;font-weight:bold;font-size:1.2em;text-align:center;}.mv{background:#555;color:#fff;padding:7px;border-radius:15px;display:inline-block;margin:5px 7px 7px 7px;}.form{padding:5px;margin-bottom:10px;text-align:center;box-shadow: 0px 5px 10px -5px #111;}.form input[type=number]{padding:10px; border:1px #006699 solid; width:240px;font-weight:bold;color:#f44336;text-align:center;}.form input[type=submit]{padding:11px; background:#006699;color:#fff;font-weight:bold;border:0px;transition:0.3s;}.form input[type=submit]:hover{background:#f44336;}.mvinfo{padding:0px;}.mvinfo input[type=text]{padding:7px;width:240px}.mvinfo input[type=submit]{padding:11px; background:#006699;width:90%;text-align:center;color:#fff;font-weight:bold;border:0px;transition:0.3s;border-radius:5px;outline:none;}.mvinfo input[type=submit]:hover{background:#f44336;}.mvlist{background:#f0f0f0;padding:7px 10px;border-bottom:1px #ccc solid;font-weight:bold;}.mvlistt{background:#FFF;padding:7px 10px;border-bottom:1px #ccc solid;font-weight:bold;}.mvtype{display:inline-block;padding:4px;background:#d3d3d3;border-radius:5px;}::placeholder{color:#bbb;opacity:1;}::-ms-input-placeholder{color:#bbb;opacity:1;}::-ms-input-placeholder{color:#bbb;opacity:1;}</style>

<?php 

ini_set('display_errors', 0);


$tt = $_POST["tt"];


$tt = str_replace('/','',$tt);

$tt = str_replace('https:m.imdb.comtitle','',$tt);

$tt = str_replace('https:imdb.comtitle','',$tt);

$tt = str_replace('https:www.imdb.comtitle','',$tt);


$url = 'https://samdb.shakib.cyou/json.php?i=' .$tt.'&o='.$_GET['api_key'];

    $content = file_get_contents($url);
    
    $json = json_decode($content);
    
    if (empty($_GET['api_key'])) {
echo '
<div class="mmm">SAMDB API</div><div class="form">

<div class="mvinfo"><form action="" method="get" enctype="multipart/form-data"><div class="mvlist">Api key:<br/> <input type="text" name="api_key" value=""/></div><br><div class="mvlistt"><center>Note: If you have not api key.  please <a href="//samdb.shakib.cyou">register </a> now.<input type="submit" value="Submit"/></center></div></form></div>';
} 
if (!empty($_GET['api_key'] && empty($_POST['tt']))) {
echo '
<div class="mmm">ADD MOVIE DETAILS</div><div class="form">

<div class="mvinfo"><form action="" method="post" enctype="multipart/form-data"><div class="mvlist">IMdb Link:<br/> <input type="text" name="tt" value=""/></div><div class="mvlist">Size:<br/> <input type="text" name="size" value=""/></div><div class="mvlist">Languages:<br/> <input type="text" name="lang" value=""/></div><div class="mvlist">Quality:<br/> <input type="text" name="quality" value=""/></div>
<div class="mvlist">Screenshot:<br/> <input type="text" name="img" value=""/></div>
<div class="mvlistt">Download Link:<br/> <input type="text" name="link" value=""/></div><div class="mvlistt"><center><input type="submit" value="Submit"/></center></div></form></div>';
} if (!empty($_POST['tt'])) {


echo '<div class="mmm">HTML CODE DETAILS</div><div class="form">

<div class="mvinfo"><textarea rows="9" cols="100"><div style="text-align:center">
<img src="'.$json->Poster.'" width="180px" height="220px" class="pimg" alt="Download '.$json->Title.'"></div>
<div class="bptable">
<div class="list-group">
<div class="list-group-item"><b>Movie Name:</b> '.$json->Title.'</div>
<div class="list-group-item"><b>Director: </b> '.$json->Director.'</div>
<div class="list-group-item"><b>Staring: </b> '.$json->Actors.'</div>
<div class="list-group-item"><b>Quality: </b> '.$_POST['quality'].'</div>
<div class="list-group-item"><b>Relase Date:</b> '.$json->Released.'</div>
<div class="list-group-item"><b>Genre: </b> '.$json->Genre.'</div>
<div class="list-group-item"><b>RunTime: </b> '.$json->Runtime.'</div>
<div class="list-group-item"><b>Story Line: </b> '.$json->Plot.'</div>
</div>
<div class="list-group-item"><b>Size: </b> '.$_POST['size'].'</div>
<div class="list-group-item"><b>Language: </b> '.$_POST['lang'].'</div>
</div>
<p style="text-align: center;">
<img src="'.$_POST['img'].'" width="380" height="620" loading="lazy" class="pscr" alt="'.$json->Title.'"></p>
<p style="text-align: center;"><strong>
<a href="'.$_POST['link'].'" title="Direct Download Link" target="_blank" rel="nofollow noopener" class="buttn red"> Click Here To Download </a></strong></p></textarea>';
} 

?>
