<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE> Dodaj grzyba </TITLE>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <SCRIPT src="searcher/searcher.js"></SCRIPT>
        <link rel="stylesheet" href="style.css">
    </HEAD>

    <BODY>
    <h1> Add mushroom record </h1>
        <div id="search-box">
            <input type="text" oninput="newQuery()" id="search" placeholder="Find mushroom">
            <ul>
                <span id="found-list">
                </span>
            </ul>
        </div>
        <div id="main">
        
         <FORM action="commit.php" method="post">

            Family: 
            <input type="text" id="type" readonly><br>

            Type:
            <input type="text" id="name" readonly><br>
            Mushroom id: <input type="number" id="id" name="id" readonly><br><br>
            
            Head radius:
            <input type="number" name="radius"> <br><br>

            Picture/Pictures names:
            <input type="text" name="picture-name"><br><br>
            Description:<br><textarea name="description" rows="15" cols="40"></textarea><br><br>
            <input type="submit" value="Add mushroom">
         </FORM>
         </div>
    </BODY>
</HTML>