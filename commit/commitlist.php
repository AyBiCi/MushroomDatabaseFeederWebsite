<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <title> Commit List </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style.css?2">
    </HEAD>
    <BODY>
        <div id="menu">
            <div id="logo">GRZYBHUB</div>
            <a href="commitlist.php"><div id="menubuton">Commity</div></a>
        </div>

        <table>
            <tr>
                <th> ID </th> <th> Nazwa </th> <th> Data utworzenia </th>
            </tr>
        <?php
            include("../sqlbase/sql.php");

            $query = mysqli_query($base,"select * from commitsview");

            while($row = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$row[0]."</td><td><a href=\"showcommit.php?id=".$row[0]."\">".$row[1]."/".$row[2]."</a></td><td>".$row["insertion_date"]."</td>";
                echo "</tr>";
            }
        ?>
        <tr><td>+</td><td><a href="add.html">Dodaj nowy</a></td><td></td></tr>
        </table>
    </BODY>
</HTML>