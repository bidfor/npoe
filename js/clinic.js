var host = window.location.hostname; 
 function slideImgHeight() {
  var height = $("#slider div img").height();
  $("#slider div img").css("min-height",height);
};

slideImgHeight();

$('.menuClass li').click(function(e){
    $('.menuClassClicked').removeClass('menuClassClicked');
    $(this).addClass('menuClassClicked');
});

$('#aboutUsBtn').click(function(e){
    document.location.href = '/aboutUs.php';
});
