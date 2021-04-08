

/* Toggle sidebar with Searchbar */
window.onload=()=>{
// Create sidebar button elements
const sidebarToggleButton = document.getElementById('sidebar-button');
const sidebarToSlide = document.getElementById('secondary');
// console.log(sidebarToggleButton);

const angleLeft = document.createElement( 'span' );
angleLeft.classList.add( 'angle-left' );

const angleRight = document.createElement( 'span' );
angleRight.classList.add( 'angle-right' );
// console.log(angleRight);

// set initial menu state here, instead of CSS file, in case JavaScript is turned off in browser.

sidebarToggleButton.appendChild(angleLeft);
const animateCSS = (element, animation, prefix = 'animate__') =>
  // We create a Promise and return it
  new Promise((resolve, reject) => {
    const animationName = `${prefix}${animation}`;
    const node = document.querySelector(element);

    node.classList.add(`${prefix}animated`, animationName);

    // When the animation ends, we clean the classes and resolve the Promise
    function handleAnimationEnd(event) {
      event.stopPropagation();
      node.classList.remove(`${prefix}animated`, animationName);
      resolve('Animation ended');
    }

    node.addEventListener('animationend', handleAnimationEnd, {once: true});
  });


sidebarToggleButton.addEventListener("click", function toggleSidebar() {

	if (sidebarToSlide.classList.contains('hide')) {
				sidebarToSlide.classList.remove('hide');
				animateCSS('.widget-area' , 'fadeInRight').then((message) => {
  			// Do something after the animation
					sidebarToggleButton.removeChild(angleLeft);
					sidebarToggleButton.appendChild(angleRight);
					//console.log(sidebarToSlide);
					
				});

		}  else {
				animateCSS('.widget-area', 'fadeOutRight').then((message) => {
						sidebarToSlide.classList.add('hide');
						sidebarToggleButton.removeChild(angleRight);
						sidebarToggleButton.appendChild(angleLeft);
						//console.log(sidebarToSlide);
						
  				
				});
		}
});

};




/* Toggle search bar with button */
const searchToggleButton = document.getElementsByClassName('search-toggle')[0];
const searchContainer = document.getElementsByClassName('search-form')[0];

searchToggleButton.addEventListener( "click", function toggleSearchbar() {
					searchContainer.classList.toggle("hide");
});


