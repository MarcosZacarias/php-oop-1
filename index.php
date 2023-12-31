<?php
include __DIR__ . "/server.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Titolo</title>

  <!-- LINK VUE.JS -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <!-- LINK BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <!-- LINK MY CSS -->
  <link rel="stylesheet" href="./css/style.css" />

  <!-- SCRIPT MY JAVASCRIPT -->
  <script src="./js/main.js" defer></script>
</head>

<body>
  <!-- DIV VUE.JS -->
  <div id="app">
    <div class="container p-2">
      <div class="row g-3">
        <!-- Loop foreach movie in list movies -->
        <?php foreach ($list_productions as $production): ?>
        <div class="col-3">
          <div class="card">

            <?= $production->getDetails() ?>

          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
  <!-- SCRIPT BOOTSTRAP JAVASCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>