<!DOCTYPE html>
<html>
    <head>
        <title>Form input PHP</title>
    </head>
    <body>
        <h2>Form input PHP</h2>
        <?php
            $inputErr = "";
            $input = "";
            $emailErr = "";
            $email = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST['input'])) {
                    $inputErr = "Input harus diisi <br>";
                } else {
                    $input = $_POST['input'];
                    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
                    echo "Data berhasil disimpan";
                }
                if(empty($_POST["email"])){
                    $emailErr = "Email harus diisi";
                } else {
                    $email = $_POST['email'];
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
                    } else {
                        echo "Email harus sesuai format";
                    }
                }
            }
        ?>

            <form action="<?php echo htmlspecialchars(($_SERVER["PHP_SELF"]));?>" method="post">
                <label for="input">Input</label>
                <input type="text" name="input" id="input"> <br> <br>

                <label for="email">Email: </label>
                <input type="email" name="email" id="email"><br><br>

                <span class="error">
                    <?php echo $inputErr ?>
                </span> <br>
                <input type="submit" name="submit" value="submit">
            </form>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    echo "<p> Data yang diinputkan: $email</p>";
                }
            ?>
    </body>
</html>