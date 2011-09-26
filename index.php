<!DOCTYPE html>
<?php  //*----------------------------------DEBUG ----------------------------------------*/  
error_reporting(E_ALL);
ini_set("display_errors", 1);
//*----------------------------------DEBUG ----------------------------------------*/ ?>
<html lang="">
<head>
  <meta charset="utf-8">
	<title>Moore, Christopher A. || Web Developer</title>
	<meta name="description" content="Christopher Moore is a PHP + AJAX Developer, With experience developing with A variety of web languages." />
  	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	 <script type="text/javascript" src="http://www.google.com/jsapi"></script>
	    	<script type="text/javascript">
	    		google.load('jquery', '1');
	    	</script>
			<script type="text/javascript">
	    		$(function(){
		    		 $('li').addClass('button-green'); 	
		    		 // make li's clickable
		    		 $('li').click(function (){
		    		 	// remove prior results
		    		 	$('#result').remove();
		    		 	
		    		 	//grab variable from button
		    		 	var content = $(this).text();		    		
 			 	        $.ajax({
			 	        		  type: "POST",
			 	        		  data: "req=" + content,
								  url: 'request.php',
								  success: function(data) 
								  	{
	 							   		$('<div id="result"/>').html(data).fadeIn(1000).appendTo('section');	
								 	}
				 			});// END AJAX
		    		 });//END Click Function
		    	});//END Doc Ready
	    	</script>
	 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		Christopher A. Moore<br/>
		<h1>PHP + AJAX Developer</h1><br/>
		chris@camdesigns.net<br/>
		(858) 349-3077<br/>
		<?php
			$gravatar_link = 'http://www.gravatar.com/avatar/d228015b944898cbf471d53da8851478?s=180';
		 	echo '<img src="' . $gravatar_link . '" />';
		 ?>
	</header>
	<aside>
		<nav>
			<ul>
				<?php
					// db con
					$db = mysql_connect('localhost', 'root', 'root') or die("Uh-oh you broke the Database");
					mysql_select_db("cam_resume", $db);
					// get column
					$result = mysql_query('SELECT name FROM `categories`;');
					while ($row = mysql_fetch_row($result)) 
						{
						    foreach ($row as $r) 
							    {
							        print('<li>'.$r . '</li>');
							    }
						}
		    	?>
			</ul>
		</nav>
	</aside>	
	<section>
		
	</section>
</body>
</html>