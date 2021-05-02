<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <title> Commit List </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style.css?2">
    </HEAD>
    <BODY>
        <?php include("../start.php"); ?>
        <table>
            <tr>
                <th> ID </th> <th> Nazwa </th> <th> Data utworzenia </th>
            </tr>
        <?php
            $query = mysqli_query($base,"select * from commitsview");

            while($row = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$row[0]."</td><td><a href=\"showcommit.php?id=".$row[0]."\">".$row[1]."/".$row[2]."</a></td><td>".$row["insertion_date"]."</td>";
                echo "</tr>";
            }
        ?>
        <tr><td>+</td><td><a href="add.php">Dodaj nowy</a></td><td></td></tr>
        </table>
    </BODY>
</HTML>