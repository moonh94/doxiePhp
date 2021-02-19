
$(window).on("scroll", function () {
    if ($(window).scrollTop()) {
      $("nav").addClass("black");
    } else {
      $("nav").removeClass("black");
    }
  })
  
  $(document).on('click', 'a[href^="#"]', function (e) {
    var id = $(this).attr('href');
  
    var $id = $(id);
    if ($id.length === 0) {
      return;
    }
  
    e.preventDefault();
  
    var pos = $id.offset().top -100;
  
    $('body, html').animate({ scrollTop: pos }, 950);
  });
  
  
  $(document).ready(function() {
    resize_all_parallax();
  });
  
  $(window).on('resize', function(){
    resize_all_parallax();
  });
  
  $('.card').click(function(){
    $(this).toggleClass('flipped');
  });
  
  
  function navSearch() {
    $(".nav-item").on("click", function () {
      $(this).toggleClass("active");
  
    });
  }
  
  function smallNavSearch() {
    $(".nav-item-small").on("click", function () {
      $(this).toggleClass("active");
  
    });
  }
  function carousel () {
    $('.carousel').carousel({
      interval: 300
    })
  };
  
  function resize_all_parallax() {
    var div_class = 'parallaxBody'; /* the ID of the div that you're resizing */
    var img_w = 1000; /* the width of your image, in pixels */
    var img_h = 864; /* the height of your image, in pixels */
    resize_parallax(div_class,img_w,img_h);
  }
  function resize_parallax(div_id,img_w,img_h) {
    var div = $('#' + div_id);
    var divwidth = div.width();
    if (divwidth < 769) { var pct = (img_h/img_w) * 105; } /* show full image, plus a little padding, if on static mobile view */
    else { var pct = 60; } /* this is the HEIGHT as percentage of the current div WIDTH. you can change it to show more (or less) of your image */
    var newheight = Math.round(divwidth * (pct/100));
    newheight = newheight  + 'px';
    div.height(newheight);
  }


  function sendEmail(){
    var name = $("#name");
    var email = $("#email");
    var subject = $("#subject");
    var message = $("#message");

    if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(message)) {
      $ajax({
        url: 'sendEmail.php',
        method: 'POST',
        dataType: 'json',
        data:{
          name: name.val(),
          email: email.val(),
          subject: subject.val(),
          message: message.val(),

        }, succsess: function(response){
          $('#contactFormEmail')[0].reset();
          $('.sent-notification').text("Message sent successfully.");
        }
        
      })
    }
   
  }