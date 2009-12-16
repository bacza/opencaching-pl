<?php

  //prepare the templates and include all neccessary
//	require_once('./lib/common.inc.php');
	
	//Preprocessing
	if ($error == false)
	{
require("../lib/jpgraph/src/jpgraph.php");
require('../lib/jpgraph/src/jpgraph_bar.php');
require('../lib/jpgraph/src/jpgraph_date.php');
require("../lib/jpgraph/src/jpgraph_pie.php");
require("../lib/jpgraph/src/jpgraph_pie3d.php");

  require('../lib/web.inc.php');
  sql('USE `ocpl`');
  
		// check for old-style parameters
		if (isset($_REQUEST['userid']) && isset($_REQUEST['title']))
		{
			$user_id = $_REQUEST['userid'];
			$titles = $_REQUEST['title'];
		}
		
  $y=array();
  $x=array();
  
  
/*
Zalozenia:

zmienna weyjsciowa user_id wiec zapytanie typu user_stat.php?user_id=xx
$startdate = user.date_created (data rejstracji)
$endtime = date("Y-m-d H:i:s"); biezaca data
$tartdate-$endtime= $difftime   ilosc dni jakie upynelo od rejstracji na OC PL
--------------------------------

Ogolny stat:
Liczba ukrytych: user.hidden_count
Liczba znalezionych: user.founds_count
Liczba nieznalezionych: user.notfounds_count
Liczba komentarzy: user.log_notes_count
W ilu uczestniczyl wydarzeniach: search cache_logs count() WHERE type=7 AND user_id=user.user_id
------------------------------
*/

if ($titles == "CreateCachesYear") {
$rsCreateCachesYear= sql("SELECT COUNT(*) `count`,YEAR(`date_created`) `year` FROM `caches` WHERE user_id=&1 GROUP BY YEAR(`date_created`) ORDER BY YEAR(`date_created`) ASC",$user_id);

				if ($rsCreateCachesYear !== false){
					while ($ry = mysql_fetch_array($rsCreateCachesYear)){
					$y[] = $ry['count'];
					$x[] = $ry['year'];}
					}
				mysql_free_result($rsCreateCachesYear);
		}


if ($titles == "CreateCachesMonth") {
$rsCreateCachesMonth = sql("SELECT COUNT(*) `count`, MONTH(`date_created`) `month`, YEAR(`date_created`) `year` FROM `caches` WHERE user_id=&1 GROUP BY MONTH(`date_created`), YEAR(`date_created`) ORDER BY YEAR(`date_created`) ASC, MONTH(`date_created`) ASC",$user_id);

 				if ($rsCreateCachesMonth !== false) {

				while ($rm = mysql_fetch_array($rsCreateCachesMonth)){
					$y[] = $rm['count'];
					$x[] = $rm['month'];}
					}

 mysql_free_result($rsCreateCachesMonth);
				
				}

if ($titles == "CachesFindYear") {
$rsCachesFindYear = sql("SELECT COUNT(*) `count`,YEAR(`date_created`) `year` FROM `cache_logs` WHERE type=1 AND user_id=&1 GROUP BY YEAR(`date_created`) ORDER BY YEAR(`date_created`) ASC",$user_id);

  				if ($rsCachesFindYear !== false) {
				while ($rfy = mysql_fetch_array($rsCachesFindYear)){
					$y[] = $rfy['count'];
					$x[] = $rfy['year'];}
					}
				mysql_free_result($rsCachesFindYear);
}

if ($titles == "CachesFindMonth") {
$rsCachesFindMonth= sql("SELECT COUNT(*) `count`,YEAR(`date_created`) `year` , MONTH(`date_created`) `month` FROM `cache_logs` WHERE type=1 AND user_id=&1 GROUP BY MONTH(`date_created`) , YEAR(`date_created`) ORDER BY YEAR(`date_created`) ASC, MONTH(`date_created`) ASC",$user_id);

 				if ($rsCachesFindMonth !== false){

				while ($rfm = mysql_fetch_array($rsCachesFindMonth)){
					$y[] = $rfm['count'];
					$x[] = $rfm['month'];}
				}
				mysql_free_result($rsCachesFindMonth);
}


				
// Create the graph. These two calls are always required
$graph = new Graph(600,200,'auto');
$graph->SetScale('textint');
 
// Add a drop shadow
$graph->SetShadow();
 
// Adjust the margin a bit to make more room for titles
 $graph->SetMargin(40,30,20,40);
 
// Create a bar pot
$bplot = new BarPlot($y);
 
// Adjust fill color
$bplot->SetFillColor('steelblue2');
$graph->Add($bplot);
 
// Setup the titles
$graph->title->Set('Statystyka usera');
$graph->xaxis->title->Set('Rok');
$graph->xaxis->SetTickLabels($x);
$graph->yaxis->title->Set('Liczba skrzynek');
 
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
 
  
// Setup the values that are displayed on top of each bar
$bplot->value->Show();
 
// Must use TTF fonts if we want text at an arbitrary angle
$bplot->value->SetFont(FF_FONT1,FS_BOLD);
$bplot->value->SetAngle(0);

// Display the graph

  $graph->Stroke();
  }
  
  ?>
