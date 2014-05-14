var host = window.location.hostname; 
 function slideImgHeight() {
  var height = $("#slider div img").height();
  $("#slider div img").css("min-height",height);
};

slideImgHeight();

$('#homeBtn').click(function(){
    document.location.href = 'index.php';
});

$('#servicesBtn').click(function(){
    document.location.href = 'services.php';
});

$('#skinCareBtn').click(function(){
    document.location.href = 'aboutUs.php';
});

$('#aboutUsBtn').click(function(){
    document.location.href = 'aboutUs.php';
});

$('#contactBtn').click(function(){
    document.location.href = 'aboutUs.php';
});

function checkServices(data){
	/*
	$('.sliderClass').animate({
        width: 'toggle'
    }, "slow",function(){
    });*/
}
  $('#nav > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('#nav li ul').slideUp();
      $(this).next().slideToggle();
      $('#nav li a').removeClass('mainLiClassActive');
      $(this).addClass('mainLiClassActive');
    }
  });



