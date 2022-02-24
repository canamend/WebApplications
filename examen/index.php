<html>
    <head>

    </head>
    <body>

        <form action ="index.php" method="post">
            Name: <input type="text" name="name">
            Edad: <input type="number" name="age">
            <input type="submit">
        </form>

    <br>
    <?php
        $name = $_POST["name"];
        $age = $_POST["age"];
        if($name!=null && $age!=null ){
            echo $_GET["name"];
            $age ++;
            echo "Hello $name you're $age years old";
            $len = strlen($name);
            //for($i = 0; $i< $len; $i ++ ){
            //    echo "<br>$name[$i]";
            //}
        }
    ?>      
    </body>
</html>