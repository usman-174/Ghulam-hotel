<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ghulam Hotel | ROOMS</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/room.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>
  <body class="dark-theme">
  <?php include 'components/Nav.php'; ?>
    <center>
      <h1 class="heading">Rooms</h1>
    </center>

    <section class="rooms">
  <?php
  // Array of rooms
  include 'utils/data.php';

  // Loop through the rooms array and generate the HTML for each room
  foreach ($rooms as $room) {
    ?>
    <div class="room">
      <img class="imagemulti" src="<?php echo $room['image']; ?>" alt="<?php echo $room['name']; ?>" />
      <h3><?php echo $room['name']; ?></h3>
      <p class="price"><i> <?php echo $room['type']; ?></i></p>

      <p class="description"><?php echo $room['description']; ?></p>
      <p class="price"><?php echo $room['price']; ?></p>
      
      <button class='button primary-button' onclick="redirectToBookRoom('<?php echo $room['id']; ?>')">Book Now</button>

    </div>
    <?php
  }
  ?>
</section>

    <?php include 'components/Footer.php'; ?>
   
    <button id="scrollToTopBtn" title="Scroll to Top">Top</button>
    <script src="js/script.js"></script>
 
  </body>
</html>
