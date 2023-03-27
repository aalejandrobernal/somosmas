const myCustomSlider = document.querySelectorAll('.swiper-container');
for( i=0; i< myCustomSlider.length; i++ ) {
  
  myCustomSlider[i].classList.add('swiper-container-' + i);
  var slider = new Swiper('.swiper-container-' + i, {
    effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
    
      breakpoints: {
    
          640: {
              slidesPerView: 1.8,
          },
          768: {
              slidesPerView: 1.8,
          },
          1080: {
              slidesPerView: 1.8,
          },
          1280: {
              slidesPerView: 1.8,
          },
      },
  });

}

document.addEventListener('DOMContentLoaded', () => {
	const imgLightBox = document.querySelectorAll('.materialboxed');
    
	M.Materialbox.init(imgLightBox, {
		
	});
});