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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<section>   
    <div class="ms_container"> 
        <h1 class="text-center mb-5 mt-3">PHP Hotel</h1>

            <table class="table  table-striped">
                <thead>
                    <tr>
                    <th scope="col">Nome Hotel</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                    </tr>
                </thead>

                <?php foreach ($hotels as $key => $hotels_array) { ?>

                <tbody>
                    <tr>
                    <td scope="row"><?php echo $hotels_array['name'] ?></td>
                    <td><?php echo $hotels_array['description'] ?></td>
                    <td><?php echo $hotels_array['vote'] ?></td>
                    <td><?php echo $hotels_array['parking'] ?></td>
                    <td><?php echo $hotels_array['distance_to_center'] ?></td>
                    </tr>
                    <tr>
                </tbody>

                <?php }?> 
            </table>

    
 
    </div>
</section>      
</body>
</html>