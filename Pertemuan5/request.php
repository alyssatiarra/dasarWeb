<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_REQUEST['fname'];
                if (empty($name)){
                    echo "Name is empy";
                } else {
                    echo $name;
                }
            }
        ?>
    </body>
</html>