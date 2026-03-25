<?php
   
    $numero = 7; 
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Taula de multiplicar del <?php echo $numero; ?></title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 300px;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        th {
            background-color: #333;
            color: white;
            padding: 8px;
        }
        td {
            border: 1px solid #999;
            padding: 6px;
        }
        .parell {
            background-color: #f0f0f0;
        }
        .senar {
            background-color: #ffffff;
        }
        .error {
            text-align: center;
            color: red;
            font-weight: bold;
            margin-top: 40px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    
<?php
  
    if ($numero < 1 || $numero > 12) {
        echo "<div class='error'>Error: el número ha d’estar entre 1 i 12.</div>";
    } else {
        echo "<table>";
        echo "<tr><th colspan='3'>Taula del $numero</th></tr>";
       
        for ($i = 1; $i <= 10; $i++) {
            $classe = ($i % 2 == 0) ? "parell" : "senar";
            $resultat = $numero * $i;
            echo "<tr class='$classe'><td>$numero</td><td>x</td><td>$i = $resultat</td></tr>";
        }
        echo "</table>";
    }
?>
</body>
</html>