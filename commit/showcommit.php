<!DOCTYPE HTML>
<HTML lang="pl-PL">
    <HEAD>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style.css?10">
    </HEAD>
    <BODY>
        <?php include("../start.php");?>
        <div id="main">
        <?php
            
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
        </div>
    </BODY>
</HTML>