<html>
<body>

<?php

$name = $_POST['name'];

if ($name != null){
    $name = $name . " LAST-NAME";
} else {
    die('name is empty');
}

?>
Welcome <?php echo $name; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>