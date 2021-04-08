
// ************ close links ********************
const navToggle = document.querySelector('.main-navigation-nav-toggle');
const linksContainer = document.querySelector('.menu-primary-menu-container');
const links = document.querySelector('.navbar-nav');

navToggle.addEventListener("click", function(){
    const containerHeight = linksContainer.getBoundingClientRect().height;
    const linksHeight = links.getBoundingClientRect().height;
    // console.log(linksHeight);

    if(containerHeight === 0){
        linksContainer.style.height = `${linksHeight}px`;
        navToggle.classList.add("close");
    } else {
       linksContainer.style.height = 0; 
       navToggle.classList.remove("close");
    }

})

// ************ fixed navbar ********************
const navbar = document.getElementById('site-navigation');
const navHeader = document.getElementById('masthead');
const topLink = document.querySelector('.top-link');


window.addEventListener('scroll', function() {
    
    const scrollHeight = window.pageYOffset;
    const headerHeight = navHeader.getBoundingClientRect().height;
    const navHeight = navbar.getBoundingClientRect().height;
    if(scrollHeight > headerHeight){
        navbar.classList.add('fixed-nav');
    } else {
        navbar.classList.remove('fixed-nav'); 
    }
    
    if(scrollHeight > 500) {
         topLink.classList.add('show-link');
     }  else {
         topLink.classList.remove('show-link');
     }
})