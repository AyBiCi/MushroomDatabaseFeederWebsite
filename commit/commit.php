<?php
    include("../sqlbase/sql.php");

    if(isset($_POST["id"])){

        mysqli_query($base, "insert into commits values("
                    ."NULL,"
                    .$_POST["id"].","
                    ."\"".$_POST["radius"]."\","
                    ."\"".$_POST["description"]."\","
                    ."\"".$_POST["picture-name"]."\",
                    NULL, NULL,NULL,NULL)"
        );
        echo "Commit sent to database.";
    }
