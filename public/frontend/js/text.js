var swiper = new Swiper('.all-product', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: true,
    // init: false,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
    }
});
var swiper = new Swiper('.new-product', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: true,
    // init: false,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
    }
});
$(function() {
    $('.search').on('click', function() {
        $('.serch-input').css('right', '0%');
    });
    $('.serch-input .fa-times').on('click', function() {
        $('.serch-input').css('right', '-100%');
    });
    $('.img-container i.fa-share').on('click', function() {
        $(this).next('div').toggleClass('show');
    });
    $('.coins-btn').on('click', function() {
        $('.aff-marketing').css('left', '0%');
        $('.aff-marketing .content').css('opacity', '1');
        $('body').css('overflow', 'hidden');
    });
    $('.aff-marketing i.fa-times').on('click', function() {
        $('.aff-marketing').css('left', '-100%');
        $('.aff-marketing .content').css('opacity', '0');
        $('body').css('overflow', 'auto');
    });
    $('.product div a.btn').on('click', function() {
        $('.product-details-dropdown').css('top', '0%');
        $('.product-details-dropdown .content').css('opacity', '1');
        $('body').css('overflow', 'hidden');
    });
    $('.product-details-dropdown i.fa-times').on('click', function() {
        $('.product-details-dropdown').css('top', '-150%');
        $('.product-details-dropdown .content').css('opacity', '0');
        $('body').css('overflow', 'auto');
    });
});

var swiper = new Swiper('.prod-slider', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: true
});
var dowmbtn = document.getElementsByClassName('down');
var upbtn = document.getElementsByClassName('up');
for (var i = 0; i < upbtn.length; i++) {
    var button = upbtn[i];
    button.addEventListener('click', function(event) {
        var btnClicked = event.target;

        var input = btnClicked.parentElement.children[1];
        console.log(input);
        var inputValue = input.value;
        var newValue = parseInt(inputValue) + 1;
        if (newValue <= 20) {
            input.value = newValue;
        }
    })


}
for (var i = 0; i < dowmbtn.length; i++) {
    var button = dowmbtn[i];
    button.addEventListener('click', function(event) {
        var btnClicked = event.target;

        var input = btnClicked.parentElement.children[1];
        console.log(input);
        var inputValue = input.value;
        var newValue = parseInt(inputValue) - 1;
        if (newValue >= 0) {
            input.value = newValue;
        }
    })
}
var body = document.querySelector('body');
window.onload = function() {
    body.style.overflow = "hidden";
    var overlay = document.querySelector('.overlay');
    setTimeout(function() {
        overlay.style.display = 'none';
        body.style.overflow = "auto";
    }, 1000);
}