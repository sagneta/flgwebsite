<?php

require "./phplibs/facebook.php";

$facebook = new Facebook(array(
    'appId'  => '417803644926487',
    'secret' => '6c8b0788f14044dbf8f2ca6cf8565fb4'
));

$user = $facebook->getUser();


if ($user) {
    $gender = $_POST['gender'];
    $userid = $_POST['userid'];
    $locale = $_POST['locale'];
    $timezone = $_POST['timezone'];
    $username = $_POST['username'];
    $hometown = trim($_POST['hometown'],"'");
    $name = $_POST['name'];

    $link = mysql_connect("localhost", "sgneta_1", "FbRh53SXdDCSVd2f") or die("could not connect");

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
}else {
    echo 'Not authenticated.';
}
?>
