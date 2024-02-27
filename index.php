<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP First Introduction</title>

    <link rel="stylesheet" href="style.css" />
</head>

<body class="my_wrapper">

    <?php require_once("header.php") ?>

    <main>
        <?php
        // Request Method Post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["name"])) {
                echo "Name: " . $_POST["name"] . "<br>";
            }
            if (isset($_POST["email"])) {
                echo "Email: " . $_POST["email"] . "<br>";
            }
            if (isset($_POST["msg"])) {
                echo "Message: " . $_POST["msg"] . "<br>";
            }
        }
        ?>
        <div class="container">
            <div>
                <form action="index.php" method="POST">
                    <input name="name" required type="text" placeholder="Type your name...">
                    <input name="email" required type="email" placeholder="Type your email...">
                    <textarea name="msg" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="loop_wrapper">
                <?php require_once("loop.php") ?>
            </div>
        </div>

    </main>
    <div class="copy">
        <?php require_once("footer.php") ?>
    </div>
</body>

</html>