/*
Theme Name: CJRTEC
Text Domain: CJRTEC theme
Version: 1.0
Description: CJRTEC wp scripts
Tags: cjrtec script, functions
Author: Jade Concepcion
Author URI : https://www.linkedin.com/in/jade-concepcion-16b9b0186/
*/




window.onscroll = function() {
	myFunction()
	myFunctionTop();
  scrollFunction();
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

var top_content = document.getElementById('content_top_fixed');

//for sticky navbar on top
function myFunctionTop() {
  if (window.pageYOffset >= sticky) {
    top_content.classList.add("sticky");
  } else {
    top_content.classList.remove("sticky");
  }
}

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

//for back to top btn
  var mybutton = document.getElementById("myBtn");
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  $(document.body).animate({scrollTop: 0}, 800);
  $(document.documentElement).animate({scrollTop: 0}, 800);
}

$(document).ready(function(){

  //for jquery animations
  AOS.init({
    duration: 1200,
  });

  //content to popup on load
  $('.div-content-image').css('display', 'none').fadeIn(3000);  

  // $(window).on('beforeunload', function() {
  //   $(window).scrollTop(0);
  // });

  //for zooming image
  $(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $("#js-hero img").css({
    // width: (100 + scroll/10) +"%"
    
    width: (100 + scroll/10) +"%",
    height: (100 + scroll/10) +"%"
  });

  // $(".zoom-wrap img").css({
  //   width: (100 + scroll/90) +"%"

  // });

  });



  $(window).scroll(testScroll);
var viewed = false;

function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function testScroll() {
  if (isScrolledIntoView($(".Count")) && !viewed) {
      viewed = true;
      $('.Count').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 4000,
          easing: 'swing',
          step: function (now) {
              $(this).text(Math.ceil(now));
          }
      });
    });
  }
}
  




});




