<?php
$servername = "localhost";
$username = "usernameHere";
$password = "passwordHere";
$database = "dbHere";

try {
    $conn = new PDO("mysql:host=$servername;dbname=" . $database . ";charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT url, title, imageUrl, imageAlt from links");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $arr = $stmt->fetchAll();
    print "var kittens = " .(json_encode($arr)). ";";
    }
catch(PDOException $e)
    {
      $res = array("url"=>"", "title"=>"Connection failed: " . $e->getMessage() ,"imageURL"=>"", "imageAlt"=>"");
    print "var kittens = " .(json_encode($res)) . ";";
    }
?>
