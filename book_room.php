<?php
include "utils/validation.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ghulam Hotel | ROOMS</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/book_room.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body class="dark-theme">
  <?php include 'components/Nav.php'; ?>
  <center>
    <h1 class="heading">Book Your Room</h1>
  </center>

  <?php
  // Retrieve the room details based on the provided id
  include 'utils/data.php';
  // Get the id parameter from the URL
  $room = null;
  $roomId = $_GET['id'];
  // Find the room with the matching id
  foreach ($rooms as $r) {
    if ($r['id'] === intval($roomId)) {
      $room = $r;
      break;
    }
  }

  // Display the room details if found
  if ($room) {
    ?>
    <div class="room">
      <img class="img" src="<?php echo $room['image']; ?>" alt="<?php echo $room['name']; ?>" />
      <div class="room-details">
        <h3><?php echo $room['name']; ?></h3>
        <p class="description"><?php echo $room['description']; ?></p>
        <p class="price"><?php echo $room['price']; ?></p>
      </div>
      <!-- Additional room details can be displayed here -->
    </div>
    <?php
  } else {
    // Display a message if the room is not found
    echo '<p>Room not found.</p>';
  }
  ?>

  <div class="container">
    <h1>Booking Details</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?id=' . $roomId; ?>" method="post">

      <div class="form-group">
        <label for="full-name">Full Name:</label>
        <input type="text" id="full-name" name="full-name" value="<?php echo isset($_POST['full-name']) ? $_POST['full-name'] : ''; ?>">
        <?php if (isset($errors['full-name'])) echo '<p class="error">' . $errors['full-name'] . '</p>'; ?>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
        <?php if (isset($errors['email'])) echo '<p class="error">' . $errors['email'] . '</p>'; ?>
      </div>

      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>">
        <?php if (isset($errors['phone'])) echo '<p class="error">' . $errors['phone'] . '</p>'; ?>
      </div>

      <div class="form-group">
        <label for="check-in">Check-in Date:</label>
        <input type="date" id="check-in" name="check-in" min="<?php echo date('Y-m-d'); ?>" value="<?php echo isset($_POST['check-in']) ? $_POST['check-in'] : ''; ?>">
        <?php if (isset($errors['check-in'])) echo '<p class="error">' . $errors['check-in'] . '</p>'; ?>
      </div>

      <div class="form-group">
        <label for="check-out">Check-out Date:</label>
        <input type="date" id="check-out" name="check-out" min="<?php echo date('Y-m-d'); ?>" value="<?php echo isset($_POST['check-out']) ? $_POST['check-out'] : ''; ?>">
        <?php if (isset($errors['check-out'])) echo '<p class="error">' . $errors['check-out'] . '</p>'; ?>
      </div>

      <div class="form-group">
        <label for="special-requests">Special Requests: <small>(optional)</small></label>
        <textarea id="special-requests" placeholer="Optional" name="special-requests" rows="5"><?php echo isset($_POST['special-requests']) ? $_POST['special-requests'] : ''; ?></textarea>
        <?php if (isset($errors['special-requests'])) echo '<p class="error">' . $errors['special-requests'] . '</p>'; ?>
      </div>

      <div class="">
        <div class="form-group-check">
          <input type="checkbox" id="terms" name="terms">
          <label for="terms">I agree to the Terms and Conditions</label>
        </div>
        <?php if (isset($errors['terms'])) echo '<p class="error">' . $errors['terms'] . '</p>'; ?>
      </div>
      <center>
        <button type="submit" class="button primary-button">Book Room</button>
      </center>
    </form>
  </div>
  <?php include 'components/Footer.php'; ?>

  <button id="scrollToTopBtn" title="Scroll to Top">Top</button>
  <script src="js/script.js"></script>
</body>
</html>
