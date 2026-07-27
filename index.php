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

// var_dump($hotels);

$parkingIsPresent = false;

if (isset($_GET['parking']) && $_GET['parking'] === 'on') {
    $parkingIsPresent = true;
}

// var_dump($parkingIsPresent);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-center mt-4 fw-bold">- HOTELS -</h1>

    <!-- <?php

            foreach ($hotels as $hotel) {
                foreach ($hotel as $key => $value) {
                    echo $key . ": $value" . "<br>";
                }
                echo "<br>";
            }

            ?> -->
    <div class="d-flex justify-content-center m-4">
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotels as $hotel) {

                    if ($parkingIsPresent) {
                        if (!$hotel['parking']) {
                            continue;
                        }
                    }


                    echo "<tr>";
                    echo "<td>{$hotel['name']}</td>";
                    echo "<td>{$hotel['description']}</td>";
                    echo "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
                    echo "<td>{$hotel['vote']}</td>";
                    echo "<td>{$hotel['distance_to_center']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <h2 class="text-center">Filtra gli hotel</h2>

    <div class="d-flex  justify-content-center m-4">
        <form class="border p-3" action="">
            <input type="checkbox" name="parking" id="parking">
            <label for="parking">Hotel con parcheggio</label>
            <br>
            <button type="submit" class="btn btn-primary mt-2 d-flex mx-auto">Filtra</button>
        </form>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>