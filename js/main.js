const swiper = new Swiper('.swiper', {
    centeredSlides: true,
    setWrapperSize: true,
    spaceBetween: 10,
  
    pagination: {
      el: '.projects-pagination',
      bulletClass: 'projects-bullet',
      bulletActiveClass: 'projects-bullet-active',
      clickable: true,
    },
  });