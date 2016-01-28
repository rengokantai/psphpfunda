<?php
require 'L9_info.php';
$que = "SELECT name from testphp";
$res = $connection->query($que);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="final.php">
    <select name="author" id="author">
       <?php while($single = $res->fetch_assoc()):?>
        <option value="<?=$single['name']?>"><?= $single['name']?></option>
        <?php endwhile;
       //must use short syntax!
       ?>
    </select>
    <input type="checkbox" name="century" value="17">
    <input type="checkbox" name="century" value="18">
    <input type="checkbox" name="century" value="19">
    <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
</form>

</body>
</html>