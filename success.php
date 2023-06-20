<?php
include 'utils/data.php';
include 'components/Nav.php';

$roomId = $_GET['id'];
$room = null;

foreach ($rooms as $r) {
    if ($r['id'] === intval($roomId)) {
        $room = $r;
        break;
    }
}

$fullName = htmlspecialchars($_REQUEST['full-name']);
$email = htmlspecialchars($_REQUEST['email']);
$phone = htmlspecialchars($_REQUEST['phone']);
$checkIn = $_REQUEST['check-in'];
$checkOut = $_REQUEST['check-out'];
$specialRequests = htmlspecialchars($_REQUEST['special-requests']);

$checkInDate = new DateTime($checkIn);
$checkInFormatted = $checkInDate->format('j F Y');

$checkOutDate = new DateTime($checkOut);
$checkOutFormatted = $checkOutDate->format('j F Y');

$numberOfDays = $checkInDate->diff($checkOutDate)->days;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/success.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Success</title>
</head>
<body class="dark-theme">
    <center>
        <h1 class="heading">Thanks for the booking</h1>
    </center>
    <div class="container">
        <?php if ($room): ?>
            <div class="room">
                <img class="img" src="<?php echo $room['image']; ?>" alt="<?php echo $room['name']; ?>" />
                <div class="room-details">
                    <h3><?php echo $room['name']; ?></h3>
                    <p class="description"><?php echo $room['description']; ?></p>
                    <p class="price"><?php echo $room['price']; ?></p>
                </div>
            </div>
            <div class="card">
                <h2>Booking Details</h2>
                <p><strong>Full Name:</strong> <?php echo $fullName; ?></p>
                <p><strong>Email:</strong> <?php echo $email; ?></p>
                <p><strong>Phone:</strong> <?php echo $phone; ?></p>
                <p><strong>Check-in Date:</strong> <?php echo $checkInFormatted; ?></p>
                <p><strong>Check-out Date:</strong> <?php echo $checkOutFormatted; ?></p>
                <p><strong>Nights of stay:</strong> <?php echo $numberOfDays; ?></p>
                <?php if ($specialRequests): ?>
                    <p><strong>Special Requests:</strong> <?php echo $specialRequests; ?></p>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <p>Room not found.</p>
        <?php endif; ?>
    </div>

    <?php include 'components/Footer.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>
