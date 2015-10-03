<?php 

	include 'phpscripts/header.php';
	
	//Get search variables
	$term = $_GET['term'];
	
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   //Something Posted

}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Manual Library</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="../CMS/style.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<!-- Static Logo Script ( Needs JQuery at least 1.3.2 ) -->
	<script type="text/javascript" src="http://alliedaerosystems.com/HUB/js/staticlogo.js"></script>
</head>
<body>
<div class="cleaner_10"></div>
<div id="formWrap">
	<center><h2>Manual Library</h2></center>
	<div id="header">
		<ul id="simple-menu">
			<li><a href="index.php" title="Manual Library">Manual Library</a></li>
			<li><a href="manualupload.php" title="Manuals">Manual Upload</a></li>
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
    
		<?php
			//return an error messsage if no search term
				if ($term == "") {
					echo "<h2 style='color:black;'>Please enter a search term.</h3>";
					echo "<p>Manufacturer and Model No are the searchable fields.</p>";
				} else {
					echo "<h2 style='color:black;'>Search Results for '$term':</h2>";

					// We preform a bit of filtering
					$term = strtoupper($term);
					$term = strip_tags($term);
					$term = trim($term);
			
					$result = mysql_query("SELECT * FROM Manuals WHERE ((Manufacturer LIKE '%". $term ."%') OR
														 (ModelNo LIKE '%". $term ."%'))
														 ORDER BY Manufacturer ASC") or exit(mysql_error());
			
					while($row = mysql_fetch_object($result)){

						//echo "<h2 style='color:black;'>$row->Manufacturer</h2>";
						echo "<div style='font-size:18px; color:black; padding:5px 0;'>$row->Manufacturer - $row->ModelNo <a href=\"$row->FileName\"><img src=\"../CMS/images/pdfsmall.gif\" height=\"23\" width=\"23\"></a></div>";
						//$dateConverted = $com->displayDate($row->DateUploaded);
						echo "<div style='font-size:14px; color:black;'>$row->Description</div>";
					}
			
				}
			echo '<div class="cleaner_20"></div>';
			echo '<div class="cleaner_20"></div>';
		?>

	</div>
</div>
<?php include 'phpscripts/footer.php';?>
<div class="cleaner_20"></div>
</body>
</html>