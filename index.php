<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VDS</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
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
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
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
            <div class="about-cover" data-aos="slide-right" data-aos-delay="250">
                <span> ABOUT US </span>
            </div>
            <h2>About us <div class="border"></div>
            </h2>
            <p class="about-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, natus! Lorem ipsum dolor sit, amet
                consectetur adipisicing elit. Quas nostrum, amet doloremque nemo dolor reprehenderit. Quod modi totam
                expedita inventore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, quas!
            </p>
            <button class="about-button"> Know More</button>
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
                <form action="#" method="post" id="booking">
                    <input type="name" name="name" placeholder="Name" required>
                    <input type="email" naem="email" placeholder="Email" required>
                    <input type="tel" name="phone" minlength="10" maxlength="10" placeholder="Phone Number" required>
                    <input type="date" name="date" data-placeholder="Date of class :" required>
                    <select name="classes" id="classes-option" required>
                        <option>SELECT CLASS</option>
                        <option value="Class1">CLASS 1</option>
                        <option value="Class2">CLASS 2</option>
                        <option value="Class3">CLASS 3</option>
                    </select>
                    <input type="submit" value="SUBMIT">
                </form>
            </section>
        </div>
    </section>

    <section id="testimonials" data-aos="slide-left">
        <h2 data-aos="slide-left" data-aos-delay="250">TESTIMONIALS</h2>
        <span><i class="fas fa-chevron-left"></i></span>
        <div class="testimonial" data-aos="slide-left" data-aos-delay="250">
            <div class="testimonial-content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus quis atque ut repudiandae
                officia tempore Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                <br>
                <img src="images/lady-img.jpg" alt=""><span><i> Reviewer </i></span>
            </div>
        </div>
        <div class="testimonial">
            <div class="testimonial-content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus quis atque ut repudiandae
                officia tempore Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                <br>
                <img src="images/dog-img.jpg" alt=""><span><i> Reviewer </i></span>
            </div>
        </div>
        <div class="testimonial">
            <div class="testimonial-content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus quis atque ut repudiandae
                officia tempore Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                <br>
                <img src="images/lady-img.jpg" alt=""><span><i> Reviewer </i></span>
            </div>
        </div>
        <span><i class="fas fa-chevron-right"></i></span>

    </section>

<?php include 'assets/footer.php' ?>
    
</body>
</html>