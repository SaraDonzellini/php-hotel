<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
  <main>
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
    
    $parking = isset($_GET['parcheggio']);
    if ($parking)  {
      $hotelWithParking = [];
      foreach ($hotels as $key => $value) {
        if ($value['parking']) {
          $hotelWithParking[]= $value;
          
        }
      }
      $hotels = $hotelWithParking;
    }

    $vote = isset($_GET['voto']);
    if ($vote)  {
      $hotelVotes = [];
      foreach ($hotels as $key => $value) {
        if ($value['vote'] >= 1) {
          $hotelVotes[]= $value;
          
        }
      }
      $hotels = $hotelVotes;
    }

    ?>
    <section class="container">
      <div class="row">
        <div class="col-12">
          <h1>
            Hotels
          </h1>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-6">
          <form action="./index.php" method="GET">
            <label for="parcheggio">Verifica se l'hotel ha un parcheggio</label>
            <input type="checkbox" <?php echo 'ciao'; ?> name="parcheggio" id="parcheggio"><br>
            <label for="voto">Cerca per voto dell'hotel</label>
            <input type="number" name="voto" id="voto">
            <button type="submit">Cerca</button>
          </form>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-2"><h3>Nome</h3></div>
        <div class="col-2"><h3>Descrizione</h3></div>
        <div class="col-2"><h3>Parcheggio</h3></div>
        <div class="col-2"><h3>Voto</h3></div>
        <div class="col-2"><h3>Distanza dal centro</h3></div>
      </div>

    </section>
    <section class="container">
      <div class="row">
        <?php
        foreach ($hotels as $key => $value) {
          foreach ($value as $my_key => $element) {
            echo "<div class='col-2'>$element</div>";
            echo "<br>";
          }
        }

        ?>

      </div>
    </section>
    <p>

    </p>

  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>