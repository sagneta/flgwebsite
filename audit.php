<?php

$gender = $_POST['gender'];
$userid = $_POST['userid'];
$locale = $_POST['locale'];
$timezone = $_POST['timezone'];
$username = $_POST['username'];
$hometown = trim($_POST['hometown'],"'");
$name = $_POST['name'];

$link = mysql_connect("localhost", "sgneta_1", "FbRh53SXdDCSVd2f") or die("could not connect");


               
//echo "'$gender', '$userid', '$locale', $timezone, '$username', '$hometown', '$name' \n";

$result = mysql_select_db("sgneta_veggie",$link);
$query = "INSERT INTO audit (gender, userid, locale, timezone, username, hometown, name)  VALUES ('$gender', '$userid', '$locale', $timezone, '$username', '$hometown', '$name' )";
//echo "$query" . "\n";

$success = mysql_db_query("sgneta_veggie", $query);
if ($success) {
    echo "OK";
}
else {
    echo  "Audit information not successfully inserted into database.\n";
    echo mysql_errno($link) . ": " . mysql_error($link). "\n";
}


mysql_close($link);
?>
