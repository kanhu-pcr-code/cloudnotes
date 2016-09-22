 <?php
 include_once("db_conf.php");
 include_once("header_sect.php");
 
 if(isset($_POST['submit']))
{
  if($_POST['pwd'] == $password and  file_exists($_POST["url"]))
  {
     $sql = "INSERT INTO web_pages (web_url, description, key_words,one_word,level) VALUES ('$_POST[url]','$_POST[desc]','$_POST[kwd]','$_POST[oneword]','$_POST[level]')";
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:$page");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  else{
  echo "Error: Password or File names '$_POST[url]' does not exit !!!";
  } 
}
 
 
 
 
 ?>
 
 <h2>Add a new PHP page to htdocs: internal use only</h2>
<div id="comments"> 
 <form action="" method="post" onsubmit="">
 <label><span>WEB url:</span><input type="text" name="url" id="url"> <i>(e.g: bioinfo.php)</i></label>
 <label><span>Description: </span><input type="text" name="desc" id="desc"> <i>(e.g: max. 250 words)</i></label>
 <label><span>Keywords: </span><input type="text" name="kwd" id="kwd"> <i>(e.g: separated by ;)</i></label>
 <label><span>Oneword for hyperlnks: </span><input type="text" name="oneword" id="oneword"> <i>(e.g: Bioinformatics)</i></label>
 <label><span>Main thread: </span><input type="checkbox" name="root" id="root" value=0 onclick="update_level()"> <i>(e.g: Major thread)</i></label>
 <label><span>Select a major thread: </span>
 <select name="level_sel" id="level_sel"  onchange="update_level()">
<?php 
$sql="SELECT sl,one_word from web_pages WHERE level=0 order by web_url";
echo "<option value=''>Select a major thread</option>";

$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<option value=".$row["sl"].">".$row["one_word"]."</option>";        
        }
    }
?>    
  </select>
  </label>
 <label><span>Level</span><input type="text" name="level" id="level" readonly style="width: 50px;"><i>  (e.g: 0)</i></label>
 
  <label><span>Password</span><input type="password" name="pwd" id="pwd"></label>
  
  
 <input type="submit" value="Add" name="submit">
 </form>
 
</div> 
 
 
 <?php
 include_once("footer_sect.php"); 
 ?>

