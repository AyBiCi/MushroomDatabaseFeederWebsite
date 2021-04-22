<?php
include("sql.php");

//test if it's installed or not
$test_query = mysqli_query($base, "show tables");

while($name = mysqli_fetch_array($test_query)){
    if($name[0] == "types")
    {
        echo "Database already installed!";
        return;
    }
}

//list all the files
$types = glob('mushrooms/*');

foreach($types as $type){
    $name = substr($type, 10);
    $data = fopen($type, "r");
    echo "<h2>".$name."</h2><br>";

    while(!feof($data)){
        echo fgets($data)."<br>";
    }
}
