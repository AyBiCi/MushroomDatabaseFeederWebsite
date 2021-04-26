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
$type_id = 1;
$count = 0;

//Create table types
mysqli_query($base, 'create table types(ID int primary key, name varchar(16))');
mysqli_query($base, 'create table mushrooms(ID int primary key auto_increment, type_id int, name varchar(64))');
mysqli_query($base, 'create table commits(ID int primary key auto_increment, 
                     mushroom_id int, 
                     head_radius int,
                     description varchar(1024),
                     picture_name text)');

foreach($types as $type){
    $name = substr($type, 10);
    $data = fopen($type, "r");
    mysqli_query($base, 'insert into types values('.$type_id.', "'.$name.'")');

    echo "<h2>".$name."</h2><br>";

    while(!feof($data)){
        $mushroom_name = ucfirst(trim(fgets($data)));
        mysqli_query($base, 'insert into mushrooms values(NULL, '.$type_id.',"'.$mushroom_name.'")');
        echo mysqli_error($base);
        echo $mushroom_name."<br>";
        $count++;
    }
    $type_id++;
}

echo "<br><h3>Razem: ".$count."<h3>";
