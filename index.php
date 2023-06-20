<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <title>Hotel Booking</title>
  </head>
  <body class="dark-theme">
  <?php include 'components/Nav.php'; ?>

    <section class="hero">
      <div class="hero-content">
        <h1 class="hero-title">Find Your Perfect Getaway</h1>
        <p class="hero-mission">
          Book your dream hotel online with ease and convenience.
        </p>
        <a
          href="rooms.php
        "
        >
        <button class="button primary-button live-btn">
            See Rooms
          </button>
        </a>
      </div>
    </section>

    <section class="about" id="about">
      <div class="about-content">
        <h1>About Us</h1>
        <p>
          Welcome to Ghulam Hotel, a premier destination for your next vacation.
          With our luxurious accommodations, exceptional service, and
          breathtaking views, we aim to provide you with an unforgettable
          experience.
        </p>

        <h1>Our Mission</h1>
        <p>
          At Ghulam Hotel, our mission is to exceed your expectations and create
          memorable moments during your stay. Whether you're here for leisure or
          business, our dedicated staff is committed to ensuring your comfort
          and satisfaction.
        </p>

        <h1>Our Facilities</h1>
        <ul>
          <li>Spacious and well-appointed rooms</li>
          <li>Swimming pool and fitness center</li>
          <li>On-site restaurants offering a variety of cuisines</li>
          <li>Conference and event spaces</li>
          <li>24-hour room service</li>
        </ul>
      </div>
    </section>
    <hr />
    <br />
    <section class="contact" id="contact">
      <h1>Contact Us</h1>
      <form id="contactForm"  action="#" method="POST">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="email" id="email" name="email" required placeholder="abc@abc.com..." />
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" required placeholder="Hi, I would like to..."></textarea>
        </div>
        <button type="reset"  class="button primary-button contact-btn">
          Submit
        </button>
      </form>
    </section>
    <?php include 'components/Footer.php'; ?>
    <button id="scrollToTopBtn" title="Scroll to Top">Top</button>

    <script src="js/script.js"></script>
  </body>
</html>
