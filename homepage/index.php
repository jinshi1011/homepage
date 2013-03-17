<?php
    $link = mysql_connect("localhost","root","111111");
     
    if (!$link)
    {
    	die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("homepage", $link);

    $query = "select * from visit where id=1";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $visitTimes = $row["times"];
    
    $query = "update visit set times=" . ($visitTimes+1) . " where id=1";
    mysql_query($query);
	     
    mysql_close($link);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>jinshi's homepage</title>
		<link rel="stylesheet" href="css/default.css" media="all">
	</head>
	<body>
		<div id="wrap">
			<div id="sidebar">
				<div id="blog_title">
					<a href="http://jinshi.10ss.me">jinshi</a>
				</div>
				<div id="blog_description">
					最近来访 <span id="visitTimes"><?php echo $visitTimes; ?></span> 次
				</div>
				<ul id="blog_links">
					
				</ul>
			</div>
			<div id="content">
				<p>sadhfoasjdfoasfho</p>
				<img src="images/1.jpg" alt="狗狗">
			</div>
		</div>
	</body>
</html>