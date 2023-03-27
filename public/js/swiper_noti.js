


  document.addEventListener('DOMContentLoaded', () => {
	const imgLightBox = document.querySelectorAll('.materialboxed');
    
	M.Materialbox.init(imgLightBox, {
		
	});
});



const myCustomSlider = document.querySelectorAll('.swiper-container');
for( i=0; i< myCustomSlider.length; i++ ) {
  
  myCustomSlider[i].classList.add('swiper-container-' + i);

  const slider = new Swiper('.swiper-container-' + i, {
    enteredSlides: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
  });

}