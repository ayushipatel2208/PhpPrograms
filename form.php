<!Doctype Html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            <h2>Please input your name: </h2>
            <input type="text" name="name" id="name">
            <input type="submit" name="submit">
        </form>
         <?php
             if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
                $name = $_POST['name'];
                echo "<h3> Hello $name </h3>";
             }
       ?>
    </body>
</html>