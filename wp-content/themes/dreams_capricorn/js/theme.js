/* CLIENTS SLIDER */



jQuery(document).ready(function() {

  var owl = jQuery('.client-carousel');

  owl.owlCarousel({

	loop: true,

	margin: 15,

	autoplay: true,

	dots:false,

	nav:true,

	navContainer:[".client-carousel-nav"],

    navText:["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],

	responsiveClass:true,

    responsive:{

        0:{

            items:2,

        },

        600:{

            items:4,

        },

        1000:{

            items:5,

        }

    }

  });

})





jQuery(document).ready(function() {

  var owl = jQuery('.exclusive-products-carousel');

  owl.owlCarousel({

	loop: true,

	margin: 30,

	autoplay: false, 

	dots:false,

	nav:true,

    navContainer:[".exclusive-products-nav"],

    navText:["<i class='la la-long-arrow-alt-left'></i>","<i class='la la-long-arrow-alt-right'></i>"],

	responsive:{

        0:{

            items:1,

        },

        600:{

            items:2,

        },

        1000:{

            items:4,

        }

    }

  });

});

jQuery(document).ready(function() {

  var owl = jQuery('.features-products-carousel');

  owl.owlCarousel({

	loop: true,

	margin: 30,

	autoplay: true, 

	dots:false,

	nav:true,

    navContainer:[".features-products-nav"],

    navText:["<i class='la la-long-arrow-alt-left'></i>","<i class='la la-long-arrow-alt-right'></i>"],

	responsive:{

        0:{

            items:1,

        },

        600:{

            items:2,

        },

        1000:{

            items:4,

        }

    }

  });

});

