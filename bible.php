<?php
include_once('class/config.php');
include_once('class/BibleDAO.php');

$books = BibleDAO::getBooks();
$defaultChapters = BibleDAO::getChapterNumbers(1);
$defaultVerses = BibleDAO::getVerseNumbers(1, 1);
$defaultVerseText = BibleDAO::getVerseText(1, 1, 1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml">
     <head><link rel="stylesheet" type="text/css" href="assets/css/style.css"></head>
     <title>Bible</title>
     <body> <img src = "assets/images/background.jpg" id = "bg">
     <div class = "header">
          <div id = "title">Online Digital Bible</div>
          <div class = "menu">   
               Books:
               <select name="books" id="books">
	               <?php foreach($books as $id => $book): ?>
		               <option value="<?= $id ?>"><?= $book ?></option>
	               <?php endforeach ?>
               </select>

               Chapters:
               <select name="chapters" id="chapters">
	               <?php for($i = 1; $i <= $defaultChapters; $i++): ?>
		               <option value="<?= $i ?>"><?= $i ?></option>
	               <?php endfor ?>
               </select>

               Verses:
               <select name="verses" id="verses">
	               <?php for($i = 1; $i <= $defaultVerses; $i++): ?>
		               <option value="<?= $i ?>"><?= $i ?></option>
	               <?php endfor ?>
               </select>
               <button id ="menuSearch" >Search</button>
          </div>
             
 <div class = "content">
     <div id = "sitas"></div>        
     <div id = "phrase"><div id="verse_text">
	<?= $defaultVerseText ?>
</div></div>
  <div id = "searchOverlay"></div>            
<div class = "search">
               <input type="text" name="text1" size="12" id = "key" >
              
                     
                       <div id = "result"></div>
          </div>

<body>
</html>

<script type="text/javascript" src="class/jquery.1.10.2.js"></script>
<script type="text/javascript" src="bible.js"></script>
<script type="text/javascript" src="search.js"></script>
