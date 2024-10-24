<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
        $oggetto = $_POST["nomeOggetto"];
        $costo = $_POST["costo"];
        $quantita = $_POST["quantita"];
        $usato = $_POST["usato"];
        $metodoDiPagamento = $_POST["metodoPagamento"];
        echo "
        <li>Oggetto: {$oggetto}</li>
        <li>Costo: {$costo}</li>
        <li>Quantità: {$quantita}</li>
        <li>Usato: {$usato}</li>
        <li>Metodo di pagamento: {$metodoDiPagamento}</li>";
    ?>
    </ul>
</body>
</html>