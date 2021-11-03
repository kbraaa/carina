$(document).ready(function() {


  $('.owl1').owlCarousel({

    loop:true,
    nav:true,
    dots:false,
    items:3,
    margin:10,
    nav:true,
    responsiveClass:true,
    stagePadding: 200,
    autoplay:true,
    autoplayTimeout:3000,
    navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],

    responsive:{
        0:{
            items:1,
            nav:true,
        },

        750:{
            items:2,
            nav:true,
            stagePadding: 200,

        },

        1281:{
            items:3,
            nav:true,

        },

    },

});


});