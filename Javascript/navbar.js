//For navbar

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
    });
}

navSlide();


//navbar animations
const animation = () =>{
    const navigation = document.querySelector('.navigation');
    console.log(navigation);
    window.addEventListener('load',()=>{
        navigation.style.transform = "translateY(0%)"
    })
}

animation();