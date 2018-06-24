<?php
error_reporting(0);
require_once("polpackunpack.php");
$tdata = getdata();



			
function getmicrotime() {
  list($usec, $sec) = explode(" ",microtime());
  return ((float) $sec * 1000.0 + (float) $usec / 1000.0);
}

function getdata() {

  $filename = "ssave.rep";

  clearstatcache();
  if (file_exists($filename)) {
    /* Gets the last "Modified at (time) for the file. Used to base last write/refresh */
    /* If it has not been the "xx" at the end of the if statement in seconds since     */
		
    /* the last modified time (compared to the current Unix Time), it will read all    */
    /* the info from the text file instead to return to the main system. The info is   */
    /* stored per line and read back so that each line is read into an array.          */
    /* Each line is an element in our array just like how we recorded it before in     */
    /* reverse from array to newlines into the text file                               */
   



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><title>PvP Arena</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="Description" content="Strona darmowego serwera PVP Ultimy Online." />
<meta name="Keywords" content="Ultima Online, PvP, Serwer, Darmowy, Shard UO, UO" />
<meta http-equiv="Content-Language" content="pl" />
<meta name="Author" content="Piotr Kurnicki" />


</head><body>

<div id="top" align="center"><img src="grafika/logo.jpg" style="border: 5px solid #000; padding: 0px;" /></div>

<div id="left" align="center"><p>
     <dl>
       <dt>Ogólne</dt>
       <dd><a href="index.php?strona=news">News</a></dd>
       <dd><a href="index.php?strona=oshardzie">O shardzie</a></dd>
			 <dd><a href="index.php?strona=pomoc">Jak zacząć?</a></dd>
			 <dd><a href="index.php?strona=regulamin">Regulamin</a></dd>
			 <dd><a href="index.php?strona=konto">Konto</a></dd>
			 <dd><a href="index.php?strona=ekipa">Ekipa</a></dd>
       <dd><a href="index.php?strona=download">Download</a></dd>
       <dd><a href="http://www.arenapvp.fora.pl" TARGET="_blank">Forum</a></dd>
       <dd><a href="index.php?strona=irc">Irc</a></dd>
			 
       
       </dl>
       <br>
       <dl>
       <dt>Umiejętności</dt>
			 <dd><a href="index.php?strona=anatomia">Anatomia</a></dd>
			 <dd><a href="index.php?strona=identyfikacja">Identyfikacja</a></dd>
			 <dd><a href="index.php?strona=wiedzaobroni">Wiedza o broni</a></dd>
			 <dd><a href="index.php?strona=odkrywanie">Odkrywanie</a></dd>
			 <dd><a href="index.php?strona=madrosc">Madrosc</a></dd>
			 <dd><a href="index.php?strona=ukrywanie">Ukrywanie</a></dd>
			 <dd><a href="index.php?strona=zatruwanie">Zatruwanie</a></dd>
			 <dd><a href="index.php?strona=mrocznamadrosc">Mroczna Madrosc</a></dd>
			 <dd><a href="index.php?strona=oswajanie">Oswajanie</a></dd>
			 <dd><a href="index.php?strona=tropienie">Tropienie</a></dd>
			 <dd><a href="index.php?strona=skradanie">Skradanie</a></dd>
			 <dd><a href="index.php?strona=kartografia">Kartografia</a></dd>
			 <dd><a href="index.php?strona=leczenie">Leczenie</a></dd>
			 <dd><a href="index.php?strona=leczeniezw">Wskrzeszanie Zwierząt</a></dd>
			 <dd><a href="index.php?strona=gornictwo">Górnictwo</a></dd>
       <dd><a href="index.php?strona=kowalstwo">Kowalstwo</a></dd>
       <dd><a href="index.php?strona=drwalstwo">Drwalstwo</a></dd>
       <dd><a href="index.php?strona=krawiectwo">Krawiectwo</a></dd>
			 <dd><a href="index.php?strona=wlam">Włamywanie</a></dd>
       </dl>
       <br>
       <dl>
       <dt>Klasy</dt>
       <dd><a href="index.php?strona=wojownik">Wojownik</a></dd>
       <dd><a href="index.php?strona=mag">Mag</a></dd>
       <dd><a href="index.php?strona=lucznik">Lucznik</a></dd>
       </dl>
       <br>
       <dl>
       <dt>Świat</dt>
			 <dd><a href="index.php?strona=faq">FAQ</a></dd>
			 <dd><a href="index.php?strona=komendy">Komendy</a></dd>
			 <dd><a href="index.php?strona=duel">Duel</a></dd>
       <dd><a href="index.php?strona=kulepszen">Kule Ulepszeń</a></dd>
       <dd><a href="index.php?strona=magiki">Magiki</a></dd>
			 <dd><a href="index.php?strona=arty">Artefakty</a></dd>
			 <dd><a href="index.php?strona=rare">Rzadkie przedmioty</a></dd>
			 <dd><a href="index.php?strona=mapy">Mapy skarbów</a></dd>
			 <dd><a href="index.php?strona=pscroll">Power Scrolle</a></dd>
       <dd><a href="index.php?strona=championy">Championy</a></dd>
       <dd><a href="index.php?strona=eventy">Eventy</a></dd>
       <dd><a href="index.php?strona=vetawards">VET Awards</a></dd>
       </dl>
     </p>
</div>
<div id="middle"><p>

   <?PHP

   @$strona=$_GET['strona']; 				// 1


  if (file_exists('strony/'.$strona.'.php'))
    include('strony/'.$strona.'.php'); 	// 2
    else
	include("strony/news.php");

?>

</p></div>



<div id="right"><p>
<br>


<?php

error_reporting(0);
if (eregi("block-Shard_Status.php", $_SERVER['PHP_SELF'])) {
    Header("Location: index.php");
    die();
}
$fsocked = @fsockopen("127.0.0.1", 2020, $errno, $errstr, 1);
if ($fsocked) {
  $content .= "<b><font color=\"#337000\">ONLINE</font></b><br>\n";
  $content .= "Uptime: $tdata[0]<br>\n";
  $content .= "Graczy: $tdata[1]<br>\n";

  fclose($fsocked);
}
else {
  $content .= "<b><font color=\"#CC0000\">OFFLINE</font></b><br>";
  fclose($fsocked);
}
echo "$content<br>";



?>
monar.no-ip.biz,5001<br>

<br>
LINKI:<br>
<a href="http://uo.toplista.pl/?we=fakencziken"><img src="http://uo.toplista.pl/toplista.pl/uo/button.gif" width=120 height=40 border=0 alt="UO Toplista"></a><br>
<a href="http://ultima.top-100.pl/?we=fakencziken"><span style="width:120px;height:40px;overflow:hidden;background:#EE0000;border:2px;border-color:#FF2222;border-style:outset;padding:5px;font:bold 11px verdana;color:white;text-decoration:none;text-align:center;cursor:pointer">Ultima Online :: Top 100</span></a>

</p>
</div>
<p><b><font color = "#FFFFFF">Created by Piotr "qrak" Kurnicki 2007-2014 ©</font><b><br><br></p>
</body>
</html>


