
var swiper = new Swiper(".mySwiper", {
    centeredSlides: true,
    
    
  });

document.addEventListener('DOMContentLoaded', () => {
	const imgLightBox = document.querySelectorAll('.materialboxed');
    
	M.Materialbox.init(imgLightBox, {
		
	});
});