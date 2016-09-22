 <?php
 include_once("db_conf.php");
 ?>
<!doctype html>
<html>
<head>
    <title>Cloud Notes | Home</title>
    <link rel="stylesheet" type="text/css" href="css/theme.css">
</head>
<body>
<div id="page_banner">
<div id=search_form>
     <form >
      <input type="text" name="query" id="query" />
      <input type="submit" value="Search">
     </form>
    </div>    
    <h1>Cloud Notes</h1>
</div>

<div id="main">
<?php include_once("navigation.php"); ?>
 
 <div id="content_pane">
    
 </div>

</div>
 

<div id="footer">
 <img src="img/88x31.png" alt="CC" height="31px" width="88px">
 <p style="width: 30%;">Except where otherwise noted, contents on this website is licenced under <b>Creative common Attributes 3.0</b> License</p>

</div>


</body>
</html>
<?php $conn->close(); ?>


