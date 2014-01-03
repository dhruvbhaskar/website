<html>

<!--
AUTHOR: Dhruv Bhaskar
LAST MODIFIED: 2 January 2013
-->

<head>

<meta name="description" content="Dhruv Bhaskar Personal Website">
<meta name="keywords" content="Dhruv, Bhaskar, Personal, Website, Portfolio">
<meta name="author" content="Dhruv Bhaskar">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no">

<!-- Load Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,500italic,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

<link href="stylesheet.css" rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="favicon.png">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<title>Dhruv Bhaskar Personal Website</title>

</head>

<body>

<div id="header">
	<img id="banner" src="banner.png" width="1100" height="165" style="cursor:pointer;"/>
</div>

<div id="container">

	<div id="menu">
		<div class="menu_item" id="notes"><span class="menu_icon"><img src="blog.png" /></span>Notes</div>
		<div class="menu_item_empty"></div>
		<div class="menu_item" id="projects"><span class="menu_icon"><img src="projects.png"/></span>Projects</div>
		<div class="menu_item_empty"></div>
		<div class="menu_item" id="resume"><span class="menu_icon"><img src="resume.png"/></span>Resume</div>
	</div>
 
	<div id="content">
		<?php 
		/* Use a backup homepage without SVG content for old versions of IE */
		if(preg_match('/(?i)msie [1-9]/', $_SERVER['HTTP_USER_AGENT'])){ 
			include('homepage_backup.php');
		} 
		else{
			include('homepage.php');
		}
		?>
	</div>

</div> <!-- End of container --> 

<div id="footer">
	<table width="1100" height="150" cellspacing="20" cellpadding="4"> <tr>

	<td width="30%" valign="top">
		&copy; 2013 Dhruv Bhaskar<br/><br/>
		Undergraduate Student <br/>
		Schulich School of Engineering<br/>
		University of Calgary, AB	
	</td>

	<td width="40%">
		<img id="footer_map" src="http://maps.googleapis.com/maps/api/staticmap?center=51.07816,-114.13580&zoom=13&size=450x200&markers=color:blue%7C51.07816,-114.13580&sensor=false"/>
	</td>

	<td width="30%" valign="top">
		<table cellspacing="5" cellpadding="0" id="footer_links">
		<tr onclick="javascript:document.location='http://github.com/dhruvbhaskar';">
		 <td valign="middle"><img src="github.png" height="32" width="32"/></td>
		 <td valign="middle"><span class="link">GitHub</span></td>
		</tr>
		<tr onclick="javascript:document.location='http://www.google.com';">
		 <td><img src="linkedin.png" height="32" width="32"/></td>
		 <td><span class="link">LinkedIn</span></td>
		</tr>
		<tr onclick="javascript:window.open('mailto:dhruvbhaskar95@gmail.com', 'dhruvbhaskar95@gmail.com');">
		 <td><img src="email.png" height="34" width="34"/></td>
		 <td><span class="link">Contact Me</span></td>
		</tr>
		</table>
	</td>
	
	</tr> </table>
</div>

<script type="text/javascript">

/* menu positioning */
$(window).load(function(){
    $(window).scroll(function(){
        if ($(window).scrollTop()>210){
            $('#menu').css('position', 'fixed');
            $('#menu').css('top', 0);
        } else {
            $('#menu').css('position', 'relative');
        }
    });	
});

$('#notes').click(function(){
	$('#content').hide().load('notes.php').show();
});

$('#projects').click(function(){
	$('#content').hide().load('projects.php').show();
});

$('#resume').click(function(){
	window.open('resume.pdf');
});

$('#banner').click(function(){
	<?php 
	if(preg_match('/(?i)msie [1-9]/', $_SERVER['HTTP_USER_AGENT'])){
		echo "$('#content').hide().load('homepage_backup.php').show();";
	} 
	else{
		echo "$('#content').hide().load('homepage.php').show();";
	}
	?>	
});
</script>

</body>

</html>