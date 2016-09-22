<div id="nav_menu">
  <ul>
   <li><a href="index.php">Home </a></li>
<?php
$sql = "SELECT sl,web_url,one_word FROM web_pages WHERE level=0 order by one_word";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li><a href=".$row["web_url"].">[+] ".$row["one_word"]."</a>";
        $sub_page = $conn->query("SELECT sl,web_url,one_word FROM web_pages WHERE level=$row[sl] order by one_word"); 
                if ($sub_page->num_rows > 0) {
                           echo "<ul>";
                        while($r = $sub_page->fetch_assoc()) {
                               echo "<li><a href=".$r["web_url"].">[+] ".$r["one_word"]."</a></li>";
                        }
                        echo "</ul>";
                }       
       echo "</li>";
    }
} else {
    echo "0 results";
}

?> 
   <li><a href="about.php">About Me</a></li>
  </ul>
 
</div>
