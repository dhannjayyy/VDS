<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/events.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <title>Events</title>
  <link rel="icon" type="image/x-icon" href="images/favicon/favicon-1.png">


</head>

<body id="event-body">
  <?php require 'assets/navbar.php' ?>
  <header class="event-page" data-aos="fade-down">
    <h1 data-aos="fade-down" data-aos-delay="250">EVENTS</h1>
  </header>
  <section id="events-list">
    <div class="container-event">
      <div class="event" data-aos="slide-right">
        <div class="event-content">
          <h2>Personal Training</h2>
          We will create a speacial class for you. We will help you start on the proper diet and right mind set.
        </div>
        <button class="quote-button"> GET QUOTATION </button>
      </div>
      <div class="event" data-aos="slide-right">
        <div class="event-content">
          <h2>Zumba Classes</h2>
          Zumba makes yo feel happy, healthy, strong, confident, amazing, fresh, and unstoppable.
        </div>
        <button class="quote-button"> GET QUOTATION </button>
      </div>
      <div class="event" data-aos="slide-right">
        <div class="event-content">
          <h2>Aerobics</h2>
          Step up and burn some calories. Works out your arms, legs, and back, good for stamina, improves heart beat.
        </div>
        <button class="quote-button"> GET QUOTATION </button>
      </div>
      <div class="event" data-aos="slide-left">
        <div class="event-content">
          <h2>Cross Fit Workout</h2>
          Cross fit is a type of trainig used that is considered high intensity. it is based on varios exercises and functional movement.
        </div>
        <button class="quote-button"> GET QUOTATION </button>
      </div>
      <div class="event" data-aos="slide-left">
        <div class="event-content">
          <h2>Wedding Choreography </h2>
          We customize Choreography in different ways to suit your need. Make yor wedding more entertainig with us.
        </div>
        <button class="quote-button"> GET QUOTATION </button>
      </div>
      <div class="event" data-aos="slide-left">
        <div class="event-content">
          <h2>Stage Shows</h2>
          Our creative team brings different, innovative and matchless ideas for different events.
        </div>
        <button class="quote-button"> GET QUOTATION </button>
      </div>
      <div class="event" data-aos="slide-right">
        <div class="event-content">
          <h2>Cultural Shows</h2>
          Strong network, all time customer support, professional team, Innovative ideas, affordable services.
        </div>
        <button class="quote-button"> GET QUOTATION </button>
      </div>
      <div class="event" data-aos="slide-right">
        <div class="event-content">
          <h2>Workshops</h2>
          We conduct and provide workshops.
          Get in the right groove and basic techniques in 3 days of workshop.
        </div>
        <button class="quote-button"> GET QUOTATION </button>
      </div>
      <div class="event" data-aos="slide-right">
        <div class="event-content">
          <h2>Annual events</h2>
          We always try to surprise people and create the wow effect, exceeded their expectations in the most ordinary things.
        </div>
        <button class="quote-button"> GET QUOTATION </button>
      </div>
      <div class="modal-background">
        <div class="modal">
          <h2 id="quotation-heading">GET A QUOTATION</h2>
          <form id="quotation-form" action="" method="post">
            <div class="form-control">
              <input type="name" name="name" id="booking-name" placeholder="Enter your name">
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error Message</small>
            </div>
            <div class="form-control">
              <input type="email" name="email" id="booking-email" placeholder="Enter your email">
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error Message</small>
            </div>
            <div class="form-control">
              <input id="booking-phone" type="number" name="phone" minlength="10" maxlength="10" placeholder="Enter Phone Number">
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error Message</small>
            </div>
            <select name="event" id="">
              <option value="">CHOOSE EVENT</option>
              <option value="Personal Training">Personal Training</option>
              <option value="Zumba Classes">Zumba Classes</option>
              <option value="Aerobics">Aerobics</option>
              <option value="CrossFit Workout">CrossFit Workout</option>
              <option value="Wedding Choreography">Wedding Choreography</option>
              <option value="Stage Shows">Stage Shows</option>
              <option value="Cultural Shows">Cultural Shows</option>
              <option value="Workshops">Workshops</option>
              <option value="Annual events">Annual events</option>
            </select>
            <textarea name="message" id="quotation-form-message" cols="15" rows="5" maxlength="1000" placeholder="Brief us about your event" required></textarea>
            <input id="quote-submit" type="submit" name="submit" value="SUBMIT">
          </form>
          <i id="modal-close" class="fas fa-times"></i>
        </div>
      </div>
    </div>
  </section>
  <section class="previous-events">
    <h1 data-aos="fade-down"> MEMORIES FROM PREVIOUS EVENTS </h1>
    <div class="previous-container">
      <div class="memory memory-1" data-aos="slide-right">
        <img src="images/EVENTS/event-1.webp" alt="" class="memory-image">
        <div class="memory-content">
          <h3>Wedding Choreography</h3>
          <p>Ring ceremony of Mr and Mrs Aggarwal. Wedding event choreographed by Voyage Dance Studio</p>
        </div>
      </div>
      <div class="memory memory-2" data-aos="slide-left">
        <div class="memory-content">
          <h3>Beat The Step Season 1</h3>
          <p>Beat The Step Season 1 organized by Voyage Dance Studio</p>
        </div>
        <img src="images/EVENTS/event-2.webp" alt="" class="memory-image">
      </div>
      <div class="memory memory-3" data-aos="slide-right">
        <img src="images/EVENTS/event-3.webp" alt="" class="memory-image">
        <div class="memory-content">
          <h3>Beat The Step Season 2</h3>
          <p>Beat The Step Season 2 by Voyage Dance Studio. Aryan Patra was our celebrity guest.</p>
        </div>
      </div>
      <div class="memory memory-4" data-aos="slide-left">
        <div class="memory-content">
          <h3>Festive Ocassion</h3>
          <p>Festival Ocassion, Ramayan by Voyage Dance Studio. Yogesh Dhama (BJP leader) was our chief guest.</p>
        </div>
        <img src="images/EVENTS/event-4.webp" alt="" class="memory-image">
      </div>
    </div>
  </section>
  <svg class="event-blob" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
    <defs>
      <pattern id="pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse" fill="#d1d8e0">
        <path d="M0 40L40 0H20L0 20M40 40V20L20 40"></path>
      </pattern>
    </defs>
    <path id="blob" d="M409,320Q331,390,232,421Q133,452,93,351Q53,250,97.5,157Q142,64,230,98Q318,132,402.5,191Q487,250,409,320Z" fill="url(#pattern)"></path>
  </svg>
  <svg class="event-blob-2" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
    <defs>
      <pattern id="pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse" fill="#d1d8e0">
        <path d="M0 40L40 0H20L0 20M40 40V20L20 40"></path>
      </pattern>
    </defs>
    <path id="blob" d="M409,320Q331,390,232,421Q133,452,93,351Q53,250,97.5,157Q142,64,230,98Q318,132,402.5,191Q487,250,409,320Z" fill="url(#pattern)"></path>
  </svg>
  <svg class="event-blob-3" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
    <defs>
      <pattern id="pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse" fill="#d1d8e0">
        <path d="M0 40L40 0H20L0 20M40 40V20L20 40"></path>
      </pattern>
    </defs>
    <path id="blob" d="M331,313.5Q177,377,156,213.5Q135,50,310,150Q485,250,331,313.5Z" fill="url(#pattern)"></path>
  </svg>
  <svg class="event-blob-4" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
    <defs>
      <pattern id="pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse" fill="#d1d8e0">
        <path d="M0 40L40 0H20L0 20M40 40V20L20 40"></path>
      </pattern>
    </defs>
    <path id="blob" d="M331,313.5Q177,377,156,213.5Q135,50,310,150Q485,250,331,313.5Z" fill="url(#pattern)"></path>
  </svg>
  <?php require 'assets/footer.php' ?>
  <script src="javascript/navbar.js"></script>
  <script src="javascript/events.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="javascript/formValidation.js"></script>
  <script>
    formListener("quotation-form");
  </script>
</body>

</html>