$(function () {
  'use strict';
  $(window).scroll(function () {
    var navbar = $('.navbar');
    $(window).scrollTop() >= navbar.height() ? navbar.addClass('scrolled') : navbar.removeClass('scrolled');
  });
  // Deal With Tabs
  $('.tab-switch li').click(function () {
    // Add Selected Class To Active Link
    $(this).addClass('selected').siblings().removeClass('selected');
    // Hide All Divs
    $('.tabs-section .tabs-content > div').hide();
    // Show Div Connected With This Link
    $($(this).data('class')).show();
  });

// active color  links navbar
$('.link li a').click(function () {

  $(this).addClass('active').siblings().removeClass('active');
});

$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else
    $('#message').html('Not Matching').css('color', 'red');
});


// script for tab steps
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  
          var href = $(e.target).attr('href');
          var $curr = $(".process-model  a[href='" + href + "']").parent();
  
          $('.process-model li').removeClass();
  
          $curr.addClass("active");
          $curr.prevAll().addClass("visited");
      });
  // end  script for tab steps





});

