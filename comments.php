<div id="comments">
    <h2>Comments</h2>
<?php   
if(isset($_POST['submit']))
{
    $sql = "INSERT INTO comments (name, email, comment,page) VALUES ('$_POST[name]','$_POST[email]','$_POST[comment]','$_POST[page]')";
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:$page");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h3>Give your comments</h3>
    <form action="" method="post" onsubmit="return captcha_check()">
      <label><span>E-mail ID:*</span><input type="email" name="email" id="email" value=""> <i>(We respect your privacy)</i></label>
      <label><span>Name:*</span><input type="text" name="name" id="name" value="" /></label>      
      <label>Comments:* </label> <textarea name="comment" id="comment" cols=100 rows=5></textarea>
      <input type="hidden" name="page" value="<?php echo $page ?>"/>
      <label style="display: inline;">Fill the right answer: <p style="display: inline;" id="a"><?php echo(rand(1,10))?></p> + <p style="display: inline;" id="b"><?php echo(rand(11,100))?></p> = 
      <input type="integer" id="c" style="width: 50px;"/>
      </label>
      <br/>
      <input type="submit" value="Comment" name="submit"/>
     </form> 


<?php 
    $sql = "SELECT name, comment, date FROM comments WHERE page='$page' order by date";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
                echo "<p id='comment_box'>
                <span id='comment_name' >".$row["name"]."</span> <span id='comment_date'><i>".$row["date"]."</i></span>
                <span id='comment_text'>".$row["comment"]."</span>  </p>";
                }
    }
    else{echo "<span> No comments found. </span>"; }
?>

        
</div>
