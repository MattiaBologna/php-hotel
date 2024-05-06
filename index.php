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

    for ($i = 0; $i < count($hotels); $i++) {
        $hotel = $hotels[$i];
        $hotel_name = $hotel['name'];
        $hotel_description = $hotel['description'];
        $hotel_parking = $hotel['parking'];
        $hotel_vote = $hotel['vote'];
        $hotel_distance_to_center = $hotel['distance_to_center'];

        ?>
            <p><strong>Nome:</strong> <?php echo $hotel_name; ?></p> 
            <p><strong>Descrizione:</strong> <?php echo $hotel_description; ?></p> 
            <p><strong>Parcheggio:</strong> <?php echo $hotel_parking; ?></p> 
            <p><strong>Voto:</strong> <?php echo $hotel_vote; ?></p> 
            <p><strong>Distanza dal centro:</strong> <?php echo $hotel_distance_to_center; ?> km</p> 
        <?php
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>
<body>
    <p>Ciao</p>
</body>
</html>