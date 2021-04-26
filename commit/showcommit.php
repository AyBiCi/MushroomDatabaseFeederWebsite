<!DOCTYPE HTML>
<HTML lang="pl-PL">
    <HEAD>
        <meta charset="utf-8">
    </HEAD>
    <BODY>
        <?php
            include("../sqlbase/sql.php");
            
            $table = array();

            if(isset($_GET["id"])){
                $query = mysqli_query($base,"select * from commitsView where ID=".$_GET["id"]);
                $table = mysqli_fetch_array($query);
            }
        ?>

        <H1> <?= $table["typename"] . '/' . $table["mushroomname"]; ?> </H1>
        <p>
            Data utworzenia: <b><?= $table["insertion_date"] . " " . $table["insertion_time"]; ?></b> <br>
            Data edycji: <b> <?= ($table["edit_date"] == "" ? "nigdy" : $table["edit_date"] . " " . $table["edit_time"]); ?></b>
        </p>

        <p>
            Rozmiary głów: <b> <?= $table["head_radius"]; ?> </b> <br>
            Opis: <b><?= $table["description"] ?> </b>
        </p>
    </BODY>
</HTML>