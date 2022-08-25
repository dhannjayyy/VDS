
//NAVBAR 

const burger = document.getElementById('hamburger');
const navSlide = () => {

    const mobile_nav = document.getElementById("mobile-nav");
    const mobile_nav_items = document.querySelectorAll(".mobile");
    const navigation = document.querySelector('.navigation');
    const delay = 0.1;

    burger.addEventListener('click', () => {
        mobile_nav.classList.toggle('mobile-nav-active');
        mobile_nav_items.forEach((element, index) => {
            element.classList.toggle('mobile-nav-item');
            element.style.transitionDelay = `${index * delay}s`;
        });
        //hamburger animation
        burger.classList.toggle('hamburger-toggle');
    });
 if (window.innerWidth < 930) {
        document.addEventListener('scroll', () => {
            if (scrollY > 610) {
                navigation.style.position = "fixed";
                navigation.style.backgroundColor = "#3D0000";
                navigation.style.marginTop = "0";
                navigation.style.width = "100%";
                navigation.style.paddingBottom = "0%";
                navigation.style.paddingTop = "3%";
                burger.style.position = "fixed";
                burger.style.right = "2%";
                for (var i = 0; i < burger.childElementCount; i++) {
                    burger.children[i].style.display = "list-item";
                    burger.children[i].style.listStyleType = "none";
                    burger.children[i].style.height = "2px";
                }
            }
            if(mobile_nav.className == "mobile-nav-active"){
                burger.children[2].style.display = "none";
            }
            if (scrollY <= 610) {
                for (var i = 0; i < burger.childElementCount; i++) {
                    burger.children[i].style.display = "";
                }
                navigation.style.backgroundColor = "transparent";
                navigation.style.position = "";
            }
        })
    }
}


//for hero section animations 
const animation = () => {
    const hero = document.getElementById('hero');
    const navigation = document.querySelector('.navigation');
    const vds = document.getElementById('vds');
    const heroPara = document.querySelector("#hero-para");
    const heroBefore = document.querySelector('.heroBefore');
    const heroAfter = hero.querySelector('.heroAfter');
    window.addEventListener("load", () => {
        hero.style.opacity = "1",
            heroBefore.style.height = "0",
            heroAfter.style.height = "0",
            navigation.style.transform = "translateY(0%)",
            navigation.style.transform = "translateY(0%)",
            vds.style.transform = "translateX(0%)",
            heroPara.style.transform = "translateX(0%)",
            setTimeout(() => {
                heroAfter.style.display = "none";
                heroBefore.style.display = "none";
            }, 2100);
    })
}



//for registration
const registration = () => {
    const register = document.querySelectorAll(".register");
    const cards = document.querySelectorAll(".instructor-card")
    const form = document.getElementById("booking");
    const closeButton = document.querySelector(".demo-form-close-button");
    
    register.forEach((element) => {
        element.addEventListener("click", () => {
            form.classList.add("booking-active");
            cards.forEach((element) => {
                element.style.transform = "rotateY(180deg)";
                element.style.WebkitTransform = "rotateY(180deg)";
            })
        });
    })
    closeButton.addEventListener("click",()=>{
        console.log("closeButton")
        form.classList.remove("booking-active");
        cards.forEach((element) => {
            element.style.transform = "rotateY(0deg)";
            element.style.WebkitTransform = "rotateY(0deg)";
        })
    })
}


// TESTIMONIALS CAROUSEL

const changeTestimonial = () => {
    const width = document.querySelector(".testimonial").clientWidth;
    const leftButton = document.querySelector(".fa-chevron-left");
    const rightButton = document.getElementById("testimonials").lastElementChild;
    const carouselSection = document.getElementById("testimonials");

    rightButton.addEventListener("click", () => {
        carouselSection.scrollBy(width, 0);
    })
    leftButton.addEventListener("click", () => {
        carouselSection.scrollBy(-width, 0);
    });
}


// FOR CHANGING LOGO COLOR

const logoColor = () => {
    const screenWidth = window.innerWidth;
    const logo = document.getElementById("logo");

    if (screenWidth <= 768) {
        logo.src = "images/VDS logo mobile.svg"
    }
}


//function to execute all other functions
const app = () => {
    animation();
    logoColor();
    changeTestimonial();
    registration();
    navSlide();
}

app();
