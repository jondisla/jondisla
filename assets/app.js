$(document).ready(function () {
    console.log('ready')

    //Click functions to scroll to section

    $('.brand-logo').click(function () {
        console.log('hello')
    })

    $('#about').click(function (e) {
        e.preventDefault()
        $('html, body').animate({
            scrollTop: $(".aboutSec").offset().top
        }, 2000);
    });

    // $('#apps').click(function (e) {
    //     e.preventDefault()
    //     $('html, body').animate({
    //         scrollTop: $("#cardFour").offset().top
    //     }, 2000);
    // });


    $('#portfolio').click(function (e) {
        e.preventDefault()
        $('html, body').animate({
            scrollTop: $(".portfolioSec").offset().top
        }, 2000);
    });

    $('#contact').click(function (e) {
        e.preventDefault()
        $('html, body').animate({
            scrollTop: $("#cardContact").offset().top
        }, 2000);
    });

    //Open links in new tab


    $('.liri').click(function () {
        window.open('https://github.com/jondisla/liri-node-app');
    });

    //show/hide videos

    $('.closeApps').click(function () {
        $('#cardFour').show('blind');
        $('#allJsApps, #allNodeApps, #allHtmlCss').hide('blind');

    });

    //html
    $('#htmlSec').click(() => {
        $('#cardFour').hide('blind');
        $('#allHtmlCss').show('blind');
    });

    //js

    $('#jsSec').click(function () {
        $('#cardFour').hide('blind');
        $('#allJsApps').show('blind');
    });

    //Node

    //Entire section
    $('#nodeSec').click(function () {
        $('#cardFour').hide('blind');
        $('#allNodeApps').toggle('blind');
        $('#liriVid').hide();
        $('#bamazonVid').hide();
        $('#liriTitle').hide();
    });

    $('#bamazon').click(function () {
        $('.closeApps').hide();
        $('#bamazonVid').toggle('blind');
        $('#liri').toggle();
        $('.nodeTitle').toggle();
        $('#bamazon').hide();
        $('#bamazonTitle').show();

    });

    $('#backNode').click(function () {
        $('.closeApps').show();
        $('#bamazonVid').hide('blind');
        $('#liri').toggle('blind');
        $('#bamazon').show();
        $('#bamazonTitle').hide();
        $('.nodeTitle').toggle();
    });

    $('#liri').click(function () {
        $('#liriVid').toggle('bind');
        $('#bamazon').toggle();
        $('.liriTitle').toggle();
        $('#liri').hide();
        $('#liriTitle').show();

    });

    //portfolio
    // $('#portArrow').click(()=>{
    //     $('#portfolio').toggle();
    // });








    //contact
    // $('#form').submit((e) => {
    //     $('.contactTxt').hide();
    //     $('#form').hide();
    //     $('#thanks').show();
    //     $.ajax({
    //         url: "https://formspree.io/contact@jondisla.com",
    //         method: "POST",
    //         data: {
    //             email: $('#email').val(),
    //             message: $('#message').val()
    //         },
    //         dataType: "json"
    //     });
    // });

    // $('#thanks').append('Thank You for your submission!');


    $('.modal').modal();

});