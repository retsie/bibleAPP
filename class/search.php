<?php
include_once('config.php');
include_once('BibleDAO.php');
$search = (isset($_POST['verse_text'])) ? $_POST['verse_text']: false;

$results = BibleDAO::getSearch($search);
$resultsNum = BibleDAO::searchNumResults($search);

if($resultsNum == false){
	echo "<p style = 'color:red'>No Results Found</p>";
}else {
	echo "<p style = 'color:blue'>".$resultsNum." Results Found</p></br>";
	foreach($results as $result){
		echo "<p style = 'color:green'>".$result['BookName']." ".$result['chapter_number'].":".$result['verse_number']."</p></b><br>";
		echo "<p>".$result['verse_text']."</p></br>";
	}
}
                              
         
  ?>
