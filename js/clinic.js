var host = window.location.hostname; 
 function slideImgHeight() {
  var height = $("#slider div img").height();
  $("#slider div img").css("min-height",height);
};

slideImgHeight();

$('#homeBtn').click(function(){
    document.location.href = 'index';
});

$('#servicesBtn').click(function(){
    document.location.href = 'services';
});

$('#skinCareBtn').click(function(){
    document.location.href = 'aboutUs';
});

$('#aboutUsBtn').click(function(){
    document.location.href = 'aboutUs';
});

$('#contactBtn').click(function(){
    document.location.href = 'contact';
});

  $('#nav > li > a').click(function(){
    if ($(this).attr('class') != 'mainLiClassActive'){
      $('#nav li ul').slideUp();
      $(this).next().slideToggle();
      $('#nav li a').removeClass('mainLiClassActive');
      $(this).addClass('mainLiClassActive');
    }else
    {
        $('#nav li ul').slideUp();
        $(this).removeClass('mainLiClassActive');
        
    }
  });

$('.aboutUsMainLiClass').hover(function(){
        $(this).find('div:first').css('visibility','visible');
    }, function(){
        $(this).find('div:first').css('visibility','hidden');
    }
);




