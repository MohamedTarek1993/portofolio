
//loader
let loader = document.getElementById('preloader');
window.addEventListener('load', function () {
    loader.style.display = 'none';
});
//loader


// animated hamburger icon
$(document).ready($(function () {
    let navBtn = $('.navbar-toggler');
    $(navBtn).click(function () {
        $(navBtn).toggleClass('active-hamburger');
    });
}))


//  scroll-up 
var btn = $('#button');
// var image = $('.navbar-light .navbar-brand img');
// var link = $('.navbar-light .nav-item .nav-link');
$(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
        btn.addClass('show');
        // image.css('width', '50%');
        // link.addClass('change');
    } else {
        btn.removeClass('show');
        // image.css('width', '70%');
        // link.removeClass('change');
    }
});
btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
});
//    scroll-up 


// counter


const counters = document.querySelectorAll('.counter');
counters.forEach(counter => {
    counter.innerText = "0";

    const updateCounter = () => {
        const target = counter.getAttribute('data-target');
        const x = +counter.innerText;
        const increment = target / 90000000000000;
        if (x < target) {
            counter.innerText = `${Math.ceil(x + increment)}`;
            setTimeout(updateCounter, 1)
        } else {
            counter.innerText = target
        }
    }
    updateCounter();
});

//skills section


//Bothelp.io widget 
!function () { var e = { "buttons": [{ "type": "whatsapp", "token": "01093140277" }], "color": "#F0645A", "position": "right", "bottomSpacing": "30", "callToActionMessage": "Message Us", "displayOn": "everywhere", "lang": "en" }, t = document.location.protocol + "//bothelp.io", o = document.createElement("script"); o.type = "text/javascript", o.async = !0, o.src = t + "/widget-folder/widget-page.js", o.onload = function () { new BhWidgetPage.init(e) }; var n = document.getElementsByTagName("script")[0]; n.parentNode.insertBefore(o, n) }();
///Bothelp.io widget
