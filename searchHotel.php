<?php


$vote = $_GET['vote'] ?? '';
$withParking = isset($_GET['with-parking']); // restituisce true o false

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


$toshow = [];

foreach ($hotels as $hotel) {
    if ($withParking && !$hotel['parking']) {
        continue;
    }

    if ($vote !== '' && $hotel['vote'] < (int)$vote) {
        continue;
    }

    $toshow[] = $hotel;
}

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="hotel.css">
</head>
<body>
    <div class="container my-4">
        <h1 class="mb-4">HOTELS</h1>

        <div class="row g-3">
            <?php foreach ($toshow as $hotel): ?>
                <div class="col-12 col-md-4 col-lg-3">
                    <ul class="list-group">
                        <li class="list-group-item active"><strong><?= $hotel['name'] ?></strong></li>
                        <li class="list-group-item"><?= $hotel['description'] ?></li>
                        <li class="list-group-item">Parcheggio: <?= $hotel['parking'] ? 'Sì' : 'No' ?></li>
                        <li class="list-group-item">Voto: <?= $hotel['vote'] ?> / 5</li>
                        <li class="list-group-item">Distanza dal centro: <?= $hotel['distance_to_center'] ?> km</li>
                    </ul>
                </div>
            <?php endforeach; ?>
            
            <?php if (empty($toshow)): ?>
                <div class="col-12">
                    <div class="alert alert-warning">Nessun hotel trovato con i criteri selezionati.</div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>