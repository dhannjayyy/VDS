//For navbar

const burger = document.getElementById('hamburger');
const navSlide = () =>{

    const mobile_nav = document.getElementById("mobile-nav");
    const navigation = document.querySelector('.navigation');
    const mobile_nav_items = document.querySelectorAll(".mobile");
    const delay = 0.1;
    const logo = document.getElementById("logo");

    burger.addEventListener('click',()=>{
        mobile_nav.classList.toggle('mobile-nav-active');  
        mobile_nav_items.forEach((element,index) => {
            element.classList.toggle('mobile-nav-item');
            element.style.transitionDelay = `${index*delay}s`;
        });
        //hamburger animation
        burger.classList.toggle('hamburger-toggle');
    });
        if (window.innerWidth < 930) {
        document.addEventListener('scroll', () => {
            if (scrollY > 90) {
                navigation.style.position = "fixed";
                navigation.style.backgroundColor = "#3D0000";
                navigation.style.marginTop = "0";
                navigation.style.width = "100%";
                navigation.style.paddingBottom = "0%";
                navigation.style.paddingTop = "3%";
                burger.style.position = "fixed";
                burger.style.right = "2%";
                logo.src = "images/VDS logo mobile.svg"
                for (var i = 0; i < burger.childElementCount; i++) {
                    burger.children[i].style.display = "list-item";
                    burger.children[i].style.listStyleType = "none";
                    burger.children[i].style.height = "2px";
                    burger.children[i].style.backgroundColor = "white";
                }
            }
            if (scrollY <= 90) {
                for (var i = 0; i < burger.childElementCount; i++) {
                    burger.children[i].style.display = "";
                }
                navigation.style.position = "";
            }
        })
    }
}

navSlide();


//navbar animations
const animation = () =>{
    const navigation = document.querySelector('.navigation');
    window.addEventListener('load',()=>{
        navigation.style.transform = "translateY(0%)"
    })
}

animation();

//for changing navlinks 

const changeLinks = () =>{
    const currentLocation = window.location.href;
    const navLinkUL = document.getElementById("nav-ul");
    const navLinkULMobile = document.getElementById("nav-ul-mobile");
    
    if(currentLocation === "http://localhost/voyagedancestudio/events.php" || currentLocation === "http://localhost/voyagedancestudio/about.php"){
        navLinkUL.children[1].children[0].setAttribute("href","index.php#particles-js");
        console.log(navLinkUL.children[1].children[0]);
        navLinkUL.children[3].children[0].setAttribute("href","index.php#testimonials");
        navLinkULMobile.children[1].children[0].setAttribute("href","index.php#particles-js");
        navLinkULMobile.children[3].children[0].setAttribute("href","index.php#testimonials");
    }
}

changeLinks();



