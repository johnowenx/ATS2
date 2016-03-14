<?php 
	
	echo phpinfo();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Manual Library</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="../CMS/style.css" rel="stylesheet" type="text/css" />
    
</head>
<body>
<div class="cleaner_10"></div>
<div id="formWrap">
	<center><h2>Manual Library</h2></center>
	<div id="header">
		<ul id="simple-menu">
			<li><a href="index.php" title="Manual Library">Manual Library</a></li>
			<li><a href="notes.php" title="Add Note">Add Note</a></li>
            <li><a href="search.php" title="Search" class="current">Search</a></li>
		</ul>
	</div>
</div>

<div class="cleaner_20"></div>
<div id="page-wrap">
	<div id="contact-area">
    		<div class="cleaner_20"></div>
    		<form method="get" action="search.php">
						<label class="label10" for="term">Search Term:</label>
						<input type="text" name="term" id="term" placeholder="Keyword" value="<?php echo $term; ?>" />

						<input type="submit" name="search" value="Search" class="submit-button" />
			</form>
    
	</div>
</div>
<div class="cleaner_20"></div>
</body>
</html>
