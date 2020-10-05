<html>
    <head>
        <title> Basic For Loop </title>
        <style>
            body {
                background: #232F3E;
                color: #FF9900;
            }
            section {
                padding-top: 50px;
            }
        </style>
    </head>
    <body>
        <section align= 'center'>
        <?php
            for($i = 1; $i < 7; $i++)
            {
                echo "<h$i>Welcome to PHP</h$i>";
            }
            $a = 10;
            $b = 15;
            echo "($a+$b)";
        ?>
        </section>
    </body>
</html>
