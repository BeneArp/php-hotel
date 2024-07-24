<!-- Stampare tutti i nostri hotel con tutti i dati disponibili. -->
<!-- mostrate le informazioni con una tabella.
Il valore relativo al parcheggio deve essere indicato con “Sì” o “No” -->

<!-- Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore) -->

<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    $data = $_GET;
    var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Hotel</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    
    <!-- <ul> -->
        <?php //foreach($hotels as $hotel) : ?>
            <?php //foreach($hotel as $chiave => $valore) : ?>
                <!-- <li><?php //echo $chiave ?> <?php //echo $valore ?></li> -->
            <?php //endforeach; ?>
        <?php //endforeach; ?>
    <!-- </ul> -->


    <div class="container-md mt-5">
        <form action="index.php" method="GET">
            <select class="form-select" name="parking" id="">
                <option value="">Scegli un opzione</option>
                <option value="si">Con parcheggio</option>
                <option value="no">Senza parcheggio</option>
            </select>
            <button type="submit" class="btn btn-primary mt-3">Invia</button>
        </form>
        <!-- table -->
        <table class="table table-striped table-hover mt-5">
            <thead>
                
                <tr>
                    <?php foreach($hotels[0] as $chiave => $valore) : ?>
                        <th scope="col"><?php echo $chiave ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($hotels as $hotel) : ?>
                        <tr>
                    <th scope="row"><?php echo $hotel['name'] ?></th>
                    <td><?php echo $hotel['description'] ?></td>
                    <td><?php echo $hotel['parking'] ?></td>
                    <td><?php echo $hotel['distance_to_center'] ?> km</td>
                    <td><?php echo $hotel['vote'] ?>/5</td>
                </tr>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>

    </div>

</body>
</html>