<html>
    <head>
        <title> Multiplication Table </title>
        <style>
            body {
                background: #232F3E;
                color: white;
            }
            .tableBorder {
                padding-top: 75px;
            }
            table {
                border: 1px solid #FF9900;
                align: center;
                
            }
            tr,td {
                border: 1px solid #FF9900;
                align: center;
            }
            h1 {
                padding-top: 100px;
            }
        </style>
    </head>
    <body>
        <h1 align = 'center' padding-top = '100px'> Multiplication Table </h1>
        <div class='tableBorder'>
            <table align = 'center'>
                <?php
                    $N = 20;
                    echo "<tr>";
                    echo "<td style='background: #FF9900;'> * </td>";
                    
                    for($i = 1; $i < $N+1; $i++)
                    {
                        echo "<td style='background: #FF9900;'>".$i."</td>";
                    }
                    echo "</tr>";
                    for($r = 1; $r < $N+1; $r++)
                    {
                        echo "<tr>";
                        echo "<td style='background: #FF9900;'>".$r."</td>";
                        for($c = 1; $c < $N+1; $c++)
                        {
                            if(($r * $c) % 5 == 0)
                                echo "<td style='background: #967569;'>".($r * $c)."</td>";
                            else
                                echo "<td>".($r * $c)."</td>";
                        }
                        echo "</tr>";
                        
                    }
                ?>
            </table>
        </div>
    </body>
</html>

