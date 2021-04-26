<?php
    include("../sql.php");

    if(isset($_GET["query"])){
        $z = 'select mushrooms.ID,
              types.name,
              mushrooms.name from mushrooms
              join types on mushrooms.type_id = types.ID
              where mushrooms.name like "%'.$_GET["query"].'%" limit 5';
        $r = mysqli_query($base, $z);
        echo mysqli_error($base);
        
        $arr = array();

        $i = 0;
        while($a = mysqli_fetch_array($r)){
            $arr[$i++] = array (
                          "id" => $a[0] , 
                          "type_name" => $a[1],
                          "name" => $a[2] 
                         );   
        }
        echo json_encode($arr);

    }