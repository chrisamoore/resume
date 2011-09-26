<?php	
	// get params from prev page
	$request = $_POST['req'];
	
	// handle DB cons
	$db = mysql_connect('localhost', 'root', 'root') or die("Uh-oh you broke the Database");
	mysql_select_db("cam_resume", $db);
	//*--------------------------Dynamic RDB CALL------------------------------------------------*/ 
	
	$cat = mysql_query("SELECT id FROM `categories` WHERE `name` = '$request' ;");
	while ($rows = mysql_fetch_row($cat)) 
			{
			    foreach ($rows as $r) 
				    {
				      // just hold the var $r
				    }
			}
			
	$result = mysql_query("SELECT content FROM `content` WHERE category_id ='$r';");
		while ($row = mysql_fetch_row($result)) 
			{
			    foreach ($row as $r) 
				    {
				        echo(''.$r.'<br/>');
				    }
			}
	//*---------------------------Dynamic RDB CALL-----------------------------------------------*/ 
?>