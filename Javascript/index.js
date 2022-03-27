
//NAVBAR 

const burger = document.getElementById('hamburger');
const navSlide = () =>{

    const mobile_nav = document.getElementById("mobile-nav");
    const mobile_nav_items = document.querySelectorAll(".mobile");
    const delay = 0.1;

    burger.addEventListener('click',()=>{
        mobile_nav.classList.toggle('mobile-nav-active');  
        mobile_nav_items.forEach((element,index) => {
            element.classList.toggle('mobile-nav-item');
            element.style.transitionDelay = `${index*delay}s`;
        });
        //hamburger animation
        burger.classList.toggle('hamburger-toggle');
        console.log(burger.classList);

    });
}


//for hero section animations 
const animation = () =>{
    const hero = document.getElementById('hero');
    const navigation = document.querySelector('.navigation');
    const vds = document.getElementById('vds');
    const heroPara = document.querySelector("#hero-para");
    const heroBefore = document.querySelector('.heroBefore');
    const heroAfter = hero.querySelector('.heroAfter');
    window.addEventListener("load",()=>{
        hero.style.opacity = "1",
        heroBefore.style.height = "0",
        heroAfter.style.height = "0",
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
const registration = () =>{
    const register = document.querySelectorAll(".register");
    const cards = document.querySelectorAll(".instructor-card")
    const form = document.getElementById("booking");

    register.forEach((element)=>{
            element.addEventListener("click",()=>{
            form.classList.add("booking-active");
            cards.forEach((element)=>{
                element.style.transform = "rotateY(180deg)";
            })
        });
    })
}


// TESTIMONIALS CAROUSEL

const changeTestimonial = () =>{
    const width = document.querySelector(".testimonial").clientWidth;
    const leftButton = document.querySelector(".fa-chevron-left");
    const rightButton = document.getElementById("testimonials").lastElementChild;
    const carouselSection = document.getElementById("testimonials");
    
    rightButton.addEventListener("click",()=>{
        carouselSection.scrollBy(width,0);
    })
    leftButton.addEventListener("click",()=>{
        carouselSection.scrollBy(-width,0);
    });
}


// FOR CHANGING LOGO COLOR

const logoColor = ()=>{
    const screenWidth = window.innerWidth;
    const logo = document.getElementById("logo");

    if(screenWidth <= 768){
        logo.src = "images/VDS logo mobile.svg"
    }
}


//function to execute all other functions
const app = () =>{
    animation();
    logoColor();
    changeTestimonial();
    registration();
    navSlide();
}

app();