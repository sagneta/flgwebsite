<!DOCTYPE  PUBLIC >
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="content-type"/>
<title>Guest Page</title>

<link rel="shortcut icon" href="../css/images/hot_chili.ico" type="image/x-icon" />
<link rel="icon" href="../css/images/hot_chili.ico" type="image/x-icon" />
<link type="text/css" href="../css/smoothness/jquery-ui-1.8.17.custom.css" rel="stylesheet" />   
<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../css/mystyle.css">    
<script type="text/javascript" src="../js/myjs.js"></script>

    <script type="text/javascript">

            $(document).ready(function(){ 
                $().vegInitialize();
            });  // ready...

</script>


</head>
<body>

  <div id="header">
    <div id="container">
      <div id="logo">Guest Log</div>
      <div align="right">
        <button class="headerButtons" type="button" id="Home">Home</button>
       </div>
    </div>
  </div>
  
  <div id="container">
    <div id="left-sidebar">
      <div id="logo">
        <img height="98%" src="../css/images/garden/RedCabbage_Small.jpg"/>
      </div>
    </div>
  </div>

   
  <p id="about-text">
<?php
$link = mysql_connect("localhost", "sgneta_1", "FbRh53SXdDCSVd2f") or die("could not connect");
$query = "SELECT gender, userid, locale, timezone, username, hometown, name, hittime FROM audit";
$result = mysql_db_query("sgneta_veggie", $query);
if($result){
    while ($row = mysql_fetch_assoc($result)) {
        echo <<<EOT
            <span>{$row['name']}, {$row['hometown']}, {$row['hittime']}</span></br>
EOT;
    }
} else {
   echo "DB Error, could not query the database\n";
   echo 'MySQL Error: ' . mysql_error();
}
mysql_free_result($result);
?>
</p>
  
  






</body>
</html>
