/*global $, window*/

$(function () {
    'use strict';
    var navH = $('.navbar').innerHeight(),
        topH = $('.top-bar').innerHeight(),
        hiHe = $('.hightheader').innerHeight(),
        winH = $(window).height();
    $('.slider, .slider .carousel-item').height(winH - (navH + hiHe + topH));
    
    //Shuffel
    $('.product ul li').on('click', function () {
        $(this).addClass('active').siblings().removeClass('active');
        if ($(this).data('class') === '.all') {
            $('.shoufel .row div').css('display', 'block');
        } else {
            $('.shoufel .row .card').parent().css('display', 'none');
            $($(this).data('class')).parent().css('display', 'block');
        }
    });
    
    //scroll
    $(window).scroll(function () {
        if ($(window).scrollTop() > 500) {
            $('nav').addClass('fixed');
        } else {
            $('nav').removeClass('fixed');
        }
    });
    
    $('.card-text').on('click', function () {
        $('.card-text').removeClass('active');
        $(this).addClass('active');
        $('.pricing-table .card-link').css('background', '#ec1c23');
        $($(this).next().next()).css('background', '#08526d');
        $('.card').removeClass('corp');
        $($(this).parent().parent()).addClass('corp');
    });

        let nCount = function (selector) {
        $(selector).each(function () {
            $(this).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: "swing",
                step: function (value) {
                    $(this).text(Math.ceil(value));
                }
            });
        });
    };

    let el = $('.stats');
    if(el){
        let a = 0;
        let m = el.offset().top;
        $(window).scroll(function () {
            if(m != ''){
                 let oTop =  - window.innerHeight;
            if (a == 0 && $(window).scrollTop() >= oTop) {
                a++;
                nCount(".col-sm-6>h5");
                }
            }
           
        });
    }

    var c = $('input[type="radio"]').parent();
    c.on('click', function(){
        console.log($(this));
       $(this).addClass('label').siblings().removeClass('label');
    })


});

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav    = document.querySelector('.navbar-nav');
    const navLinks = document.querySelectorAll('.navbar-nav li');
    // toggle nav
    burger.addEventListener('click', ()=> {
        nav.classList.toggle('nav-active');
         //animate li
        navLinks.forEach( (link, index)=>{
            if(link.style.animation){
                link.style.animation = '';
            } else {
                link.style.animation = `navfade 0.5s ease forwards ${index / 7 + .3}s`;
                link.style.textAlign  = 'center';
            }
        console.log(index / 7 + 1.3);
      });
      burger.classList.toggle('toggle');
    }); 
} 
navSlide();