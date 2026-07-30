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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hotel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>HOTELS</h1>
    <div>
        <form action="./searchHotel.php/" method="get">
            <input type="checkbox" name="with-parking" id="with-parking" notchecked>
            <label for="with-parking">With Parking</label>
            <input type="text" name="vote" placeholder="How many stars?">
            <button type="submit">Search</button>
        </form>
    </div>
    <div class=" container my-4">
        <div class="row g-3">
            <?php foreach ($hotels as $hotel): ?>
                <div class="col-12 col-md-4 col-lg-3 mt-5">
                    <ul class="list-group">
                        <li class="list-group-item active"><strong><?= $hotel['name'] ?></strong></li>
                        <li class="list-group-item"><?= $hotel['description'] ?></li>
                        <li class="list-group-item">Parcheggio: <?= $hotel['parking'] ? 'Sì' : 'No' ?></li>
                        <li class="list-group-item">Voto: <?= $hotel['vote'] ?> / 5</li>
                        <li class="list-group-item">Distanza dal centro: <?= $hotel['distance_to_center'] ?> km</li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>