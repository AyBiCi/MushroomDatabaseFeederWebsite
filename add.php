<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE> Dodaj grzyba </TITLE>

        <SCRIPT>

        </SCRIPT>

        <STYLE>
            div{
                border: 1px solid black;
                margin-left: 20px;
                margin-right: 20px;
                margin-top: 20px;
                text-align: center;
            }
            #search{
                width: 99.3%;
            }
            #main{
                padding-bottom: 20px;
            }
        </STYLE>
    </HEAD>

    <BODY>
        <div id="search-box">
            <input type="text" id="search" placeholder="Szukaj grzyba">
        </div>
        <div id="main">
        <h1> Add mushroom record </h1>
         <FORM>

            Family: 
            <SELECT name="familyid">
                <option value="1">Borowiki</option>
            </SELECT> <br>

            Type:
            <SELECT name="type">
                <option value="1">Borowik szlachetny</option>
            </SELECT> <br> <br>
            
            Head radius:
            <input type="number" name="radius"> <br><br>

            Picture/Pictures names:
            <input type="text" name="picture-name"><br><br>

            <input type="submit" value="Dodaj grzyba">

         </FORM>
         </div>
    </BODY>
</HTML>