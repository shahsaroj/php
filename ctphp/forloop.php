<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table of 2</title>
    <style>
        table {
            border-collapse: collapse;
            width: 20%;
        }
        th, td {
            border: 1px solid black;
            padding: 2px;
            text-align: center;
           
        }
    </style>
</head>
<body>
    <h2>Multiplication Table of 2</h2>
    <table>
        <tbody>
            <?php
            // Display multiplication table of 2
            for ($i = 1; $i <= 10; $i++) {
                $result = $i * 2;
                echo "<tr>";
                echo "<td>2*$i=$result</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>