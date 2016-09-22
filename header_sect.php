<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cloud Notes | <?php echo $page ?> </title>
    <link rel="stylesheet" type="text/css" href="css/theme.css">
     <script src="js/js_functions.js"></script> 
</head>
<body>
<div id="page_banner">
<div id=search_form>
     <form >
      <input type="text" name="query" id="query" style="width:15em;" placeholder="search site">
      <input type="submit" value="Search" style="border:0.1em solid  black; background:#ccc; height: 30px;" >
     </form>
    </div>    
    <h1>Cloud Notes</h1>
</div>

<div id="main">
<?php include_once("navigation.php"); ?>
 
<div id="content_pane">
