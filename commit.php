<?php
    include("sql.php");

    if(isset($_POST["id"])){

        mysqli_query($base, "insert into commits values("
                    ."NULL,"
                    .$_POST["id"].","
                    .$_POST["radius"].","
                    ."\"".$_POST["description"]."\","
                    ."\"".$_POST["picture-name"]."\")"
        );
        echo "Commit sent to database.";
    }
