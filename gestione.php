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
        $metodoDiPagamento = $_POST["metodoPagamento"];
        intval($quantita);
        if(isset($_POST["usato"])){
            $stato = $_POST["usato"];
        }else{
            $stato = "nuovo";
        }
        if($stato == "usato"){
            $costoTotale = $quantita * $costo - $costo*0.02;
        }else{
            $costoTotale = $costo * $quantita;
        }
        if($metodoDiPagamento == "Carta"){
            $costoTotale = $costoTotale + 2;
        }
        echo "
        <li>Oggetto: {$oggetto}</li>
        <li>Costo: {$costo}</li>
        <li>Quantità: {$quantita}</li>
        <li>Usato: {$stato}</li>
        <li>Metodo di pagamento: {$metodoDiPagamento}</li>
        <li>Costo totale: {$costoTotale}</li>";
    ?>
    </ul>
</body>
</html>