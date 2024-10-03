<?php 
// Recupero i dati del Form

$parkingChoice = isset($_GET["parking"]);

$starChoice = $_GET["vote"];

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quia blanditiis aperiam rem corporis cupiditate possimus praesentium dolorem temporibus! Pariatur dolor soluta atque numquam quidem magnam asperiores corporis obcaecati nulla!',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quia blanditiis aperiam rem corporis cupiditate possimus praesentium dolorem temporibus! Pariatur dolor soluta atque numquam quidem magnam asperiores corporis obcaecati nulla!',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare ',
        'description' => 'Hotel Rivamare Descrizione Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quia blanditiis aperiam rem corporis cupiditate possimus praesentium dolorem temporibus! Pariatur dolor soluta atque numquam quidem magnam asperiores corporis obcaecati nulla!',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quia blanditiis aperiam rem corporis cupiditate possimus praesentium dolorem temporibus! Pariatur dolor soluta atque numquam quidem magnam asperiores corporis obcaecati nulla!',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quia blanditiis aperiam rem corporis cupiditate possimus praesentium dolorem temporibus! Pariatur dolor soluta atque numquam quidem magnam asperiores corporis obcaecati nulla!', 
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awensome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-primary text-center">Hotel List</h1>

        <?php foreach($hotels as $hotel) {?>    <!-- Per ogni hotel in lista... -->

            <h3 class="mt-5">
                <?php echo $hotel['name'] ?>
            </h3>

            <ul>
                <li class="p-2">
                    <span class="fw-bold pb-5">Voto: <?php 
                        for($i = 0 ; $i < $hotel['vote'] ; $i++ ) { echo '<i class="fa-solid fa-star text-warning"></i>';} ?>
                    </span><br>
                    <p class="fs-4"><?= $hotel['description'] ?></p>
                </li>
                <li>
                    <strong>Parcheggio: </strong><?= $hotel['parking'] ? ("Si") : ("No")?><br>
                    <span>Distanza dal centro: <?= $hotel['distance_to_center'] ?> Km</span>
                </li>
            </ul>

        <?php } ?>

    </div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


