<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VDS</title>
    <link rel="icon" type="image/x-icon" href="images/favicon/favicon-1.png">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <!-- hero section -->
    <section id="hero">

        <?php include 'assets/navbar.php' ?>

        <div class="hero-content">
            <div>
                <h1 id="vds">VDS</h1>
                <p id="hero-para"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum suscipit qui, est
                    quisquam maxime
                </p>
            </div>
            <img class="hero-image" src="images/images/Mobile -1.svg" alt="">
        </div>
        <div class="wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="heroBefore"></div>
        <div class="heroAfter"></div>
    </section>

    <!-- hero section -->
    <!-- Swiper -->
    <!-- Slider main container -->
    <section id="about-section">

        <div class="about-container" data-aos="slide-left">
            <div class="about-cover">
                <span> ABOUT US </span>
            </div>
            <h2>About us <div class="border"></div>
            </h2>
            <p class="about-text">
                We welcome dance you to celebrate the power of dance.
                Voyage Dance Studio is home to all dancers
                to explore The best in them no matter what their age and experience is We believe in providing best dance education which enables our Students to become performers of global. standards.
            </p>
            <a href="about.php" class="about-button"> Know More</a>
        </div>
    </section>

    <!-- Swiper -->

    <!-- classes tabs -->

    <section class="class-section" id="particles-js" data-aos="slide-right">
        <div class="classes-wrapper" data-aos="slide-right" data-aos-delay="250">
            <h2 id="classes-header"> Register for demo class</h2>
            <input type="radio" name="slider" checked id="class-1">
            <input type="radio" name="slider" id="class-2">
            <input type="radio" name="slider" id="class-3">
            <nav>
                <label for="class-1" class="class-1">Class-1</label>
                <label for="class-2" class="class-2">Class-2</label>
                <label for="class-3" class="class-3">Class-3</label>
                <div class="slider"></div>
            </nav>
            <section id="cards">
                <div class="instructor-card card-1">
                    <div class="card-content">
                        <h2 class="instructor-name">SAGAR</h2>
                        <p class="card-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet eos
                            possimus
                        </p>
                        <div class="register">REGISTER</div>
                    </div>
                </div>
                <div class="instructor-card card-2">
                    <div class="card-content">
                        <h2 class="instructor-name">SURAJ</h2>
                        <p class="card-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet eos
                            possimus
                            vero quam minima
                            harum?</p>
                        <div class="register">REGISTER</div>
                    </div>
                </div>
                <div class="instructor-card card-3">
                    <div class="card-content">
                        <h2 class="instructor-name">SAGAR</h2>
                        <p class="card-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet eos
                            possimus
                            vero quam minima
                            harum?</p>
                        <div class="register">REGISTER</div>
                    </div>
                </div>
                <form action="" method="POST" id="booking">
                    <div class="form-control">
                        <input id="booking-name" type="name" name="name" placeholder="Name">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="form-control">
                        <input id="booking-email" type="email" name="email" placeholder="Email">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="form-control">
                        <input id="booking-phone" type="number" name="phone" minlength="10" maxlength="10" placeholder="Phone Number">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="form-control">
                        <input id="booking-date" type="date" name="date" data-placeholder="Date of class :" required>
                        <small>Error Message</small>
                    </div>
                    <select name="classes" id="classes-option" required>
                        <option>SELECT CLASS</option>
                        <option value="Class1">CLASS 1</option>
                        <option value="Class2">CLASS 2</option>
                        <option value="Class3">CLASS 3</option>
                    </select>
                    <input type="submit" name="submit" value="SUBMIT">
                </form>
            </section>
        </div>
    </section>

    <section id="testimonials" data-aos="slide-left">
        <h2 data-aos="slide-left" data-aos-delay="250">TESTIMONIALS</h2>
        <span><i class="fas fa-chevron-left"></i></span>
        <div class="testimonial">
            <div class="testimonial-content">
                I was there for a dance party and I had a blast. I will keep going and learn more dances, lot’s of awesome people there. Staff is kind too. If you have not been, I would definitely encourage you to check it out.

                <br>
                <img src="images/user.png" alt=""><span><i> ~Shikha Rajput </i></span>
            </div>
        </div>
        <div class="testimonial">
            <div class="testimonial-content">
                My fiancee and myself didn’t like to dance but we wanted to do something special for our wedding. The instruction we received from Shubham Singhal sir was top-notch and we are very confident in our routine. It was a great experience for self-conscious beginners like us. Their team is very kind and awesome. Thanks for doing our event more beautiful.
                <br>
                <img src="images/user.png" alt=""><span><i> ~Shreya Jain </i></span>
            </div>
        </div>
        <div class="testimonial">
            <div class="testimonial-content">
                I’ve been at multiple dance studios, but this one has the nicest staff, most beautiful and relaxing environment, Would definitely recommend the classes.
                <br>
                <img src="images/user.png" alt=""><span><i> ~Mansi </i></span>
            </div>
        </div>
        <div class="testimonial">
            <div class="testimonial-content">
                It was great working with you. Shubham and team was very supportive during whole programme. They have taken care of all the prop usage and focused on each and every performance. They have created a memory for life which we have enjoyed a lot also. We will look forward to work more together in family functions.
                <br>
                <img src="images/user.png" alt=""><span><i> ~Pooja Aggarwal </i></span>
            </div>
        </div>
        <div class="testimonial" data-aos="slide-left" data-aos-delay="250">
            <div class="testimonial-content">
                It's been great working with you all. We have enjoyed a lot and we showed up best performances in my brother's engagement. Shubham being very cooperative in every matter whether it is of time or place, he pulled up by many troubles but always stood by his commitments. His team members are also talented and supportive. You can give a try to them, one will not get a chance to complain.
                We'll look forward for more bookings with him.😊
                Thanks for your time and support.
                <br><img src="images/user.png" alt=""><span><i> ~Kashish Aggarwal </i></span>
            </div>
        </div>
        <span><i class="fas fa-chevron-right"></i></span>

    </section>

    <script src="Javascript/index.js"></script>
    <script src="Javascript/particles.js-master/particles.js-master/particles.js"></script>
    <script src="Javascript/particles.js-master/particles.js-master/demo/js/app.js"></script>
    <script src="Javascript/index.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="Javascript/formValidation.js"></script>
    <script>
        formListener("booking");
    </script>
    <?php include 'assets/footer.php' ?>

</body>

</html>