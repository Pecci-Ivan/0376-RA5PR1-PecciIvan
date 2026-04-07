<?php
$numero = 10;
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Taula de multiplicar del <?= $numero ?></title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 400px;
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
        .parell { background-color: #f0f0f0; }
        .senar { background-color: #ffffff; }

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

<?php if ($numero < 1 || $numero > 12): ?>
    <div class="error">Error: el número ha d’estar entre 1 i 12.</div>

<?php else: ?>
    <table>
        <tr>
            <th colspan="5">Taula del <?= $numero ?></th>
        </tr>

        <?php for ($i = 1; $i <= 10; $i++): 
            $classe = ($i % 2 == 0) ? "parell" : "senar";
            $resultat = $numero * $i;
        ?>
            <tr class="<?= $classe ?>">
                <td><?= $numero ?></td>
                <td>x</td>
                <td><?= $i ?></td>
                <td>=</td>
                <td><?= $resultat ?></td>
            </tr>
        <?php endfor; ?>
    </table>
<?php endif; ?>

</body>
</html>
