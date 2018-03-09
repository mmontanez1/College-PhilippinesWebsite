<?php
if($_POST){
    $name = $_POST['name'];
    $content = $_POST['commentContent'];
    $handle = fopen("Feedback.html","a");
    fwrite($handle, "<b>" . $name . "</b>:<br/>" . $content . "<br/>");
    fclose($handle);
}
?>

<!-- Feedback form -->
<html>
<body>
<form action ="" method ="POST">
    comments: <textarea rows = "10" cols = "30" name = "commentContent"></textarea><br/>
    Name: <input type ="text" name = "name"><br/>
    <input type ="submit" value ="Post"><br/>
</form>
<?php include "Feedback.html"; ?>
</body>
</html>

