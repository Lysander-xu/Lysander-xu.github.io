<?php
highlight_file(__FILE__);
include("flag.php");
$a = $_GET['a'];

if (isset($a)){
    if($a === "2025") {
        die("no");
    } else {
        echo "<br>"."yes"."<br>";
    }
    if(intval($a,0) === 2025) {
        echo "yes yes"."<br>";
        echo "Congratulations! You have passed the first level, the next level is ".$path."<br>";
    } else {
        die("no no");
    }
} else {
    echo "a is not set"."<br>";
}