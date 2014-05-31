

var host = window.location.hostname;

function slideImgHeight() {
  var height = $("#slider div img").height();
  $("#slider div img").css("min-height",height);
};

function basicBtnClick(ID,value){
    $('#'+ ID).click(function(){
        document.location.href = value;
    });
}

function basicBtnHover(ID,target,firstLevel,secondLevel){
    $('#'+ID).mouseenter(function(){
        $('.'+target).stop().animate({
            width: 'show',
        }, "slow", triggerMenu(firstLevel,secondLevel));
    });
    $('#'+ID).mouseleave(function(){
        $('.'+target).stop().animate({
            width: 'hide',
        }, "slow");
    });
}

function triggerMenu(firstLevel,secondLevel){
    $first = $('#'+firstLevel);
    $second = $('#'+secondLevel);
    if($first.attr('class') != 'mainLiClassActive' || $second.attr('class') != 'subUlClassActive')
    {
        $('#nav li ul').slideUp();
        $('#nav li div').removeClass('mainLiClassActive');
        $('#nav li ul li div').removeClass('subUlClassActive');
        $('#nav li ul li ul li div').removeClass('sub2UlClassActive');
        $first.addClass('mainLiClassActive');
        $second.addClass('subUlClassActive');
        $first.next().slideToggle();
        $second.next().slideToggle();
    }
}

function jax_send(url,val,post,callback){
    $.ajax({url:"../class/requestClinic.php",
            data: {'action': 'switchLang'},
            datatype: "html",
            type: "POST",
            success:function(result){
                // if(result == "success")
                // {
                    alert(result);
                    //window.location.href = "http://clinic.local";
                // }
    }});
}


//document built
slideImgHeight();
//button navigation
basicBtnClick('homeBtn','/index');
basicBtnClick('servicesBtn','/services');
basicBtnClick('skinCareBtn','/aboutUs');
basicBtnClick('aboutUsBtn','/aboutUs');
basicBtnClick('contactBtn','/contact');
basicBtnClick('drKavinDiv','/doctor/kavin');
basicBtnClick('drLyndaDiv','/doctor/lynda');
basicBtnClick('aboutDoctorDiv','/aboutUs');
basicBtnClick('aboutTeamDiv','/aboutTeam');
basicBtnClick('aboutClinicDiv','/aboutClinic');
//Div Hovering
basicBtnHover('molePlusDiv','moleClass','faceDiv','moleDiv');
basicBtnHover('porePlusDiv', 'poreClass', 'faceDiv','poreDiv');
basicBtnHover('acnePlusDiv','acneClass','faceDiv','acneDiv');
basicBtnHover('saggingSkinPlusDiv','saggingSkinClass','neckDiv','saggingSkinDiv');


$(function(){
    $('#headerDiv').data('size','big');
});

$(window).scroll(function(){
    if($(document).scrollTop() > 100)
    {
        if($('#headerDiv').data('size') == 'big')
        {
            $('#headerDiv').data('size','small');
            $('#headerDiv').stop().animate({
                top:'-90px'
            },600);
            $('#logoDiv').stop().animate({
                top:'-90px'
            },600);
            $('#headerFlowerDiv').stop().animate({
                top:'-90px'
            },600);
            $('#facebookDiv').stop().animate({
                top:'-90px'
            },600);
            $('#twitterDiv').stop().animate({
                top:'-90px'
            },600);
            $('#instagramDiv').stop().animate({
                top:'-90px'
            },600);
            $('#langBtn').stop().animate({
                top:'-90px'
            },600);

        }
    }
    else
    {
        if($('#headerDiv').data('size') == 'small')
        {
            $('#headerDiv').data('size','big');
            $('#headerDiv').stop().animate({
                top:'0px'
            },600);
            $('#logoDiv').stop().animate({
                top:'0px'
            },600);
            $('#headerFlowerDiv').stop().animate({
                top:'0px'
            },600);
            $('#facebookDiv').stop().animate({
                top:'22px'
            },600);
            $('#twitterDiv').stop().animate({
                top:'22px'
            },600);
            $('#instagramDiv').stop().animate({
                top:'22px'
            },600);
            $('#langBtn').stop().animate({
                top:'33px'
            },600);

        }  
    }
});

  $('#nav > li > div').click(function(){
    if ($(this).attr('class') != 'mainLiClassActive'){
        $('#nav li ul').slideUp();
        $(this).next().slideToggle();
        $('#nav li div').removeClass('mainLiClassActive');
        $('#nav li ul li div').removeClass('subUlClassActive');
        $('#nav li ul li ul li div').removeClass('sub2UlClassActive');
        $(this).addClass('mainLiClassActive');
    }else
    {
        $('#nav li ul').slideUp();
        $(this).removeClass('mainLiClassActive');
        $('#nav li ul li div').removeClass('subUlClassActive');
        $('#nav li ul li ul li div').removeClass('sub2UlClassActive');
    }
  });

    $('#nav > li > ul > li > div').click(function(){
    if ($(this).attr('class') != 'subUlClassActive'){
      $('#nav li ul li ul').slideUp();
      $(this).next().slideToggle();
      $('#nav li ul li div').removeClass('subUlClassActive');
      $('#nav li ul li ul li div').removeClass('sub2UlClassActive');
      $(this).addClass('subUlClassActive');
    }else
    {
        $('#nav li ul li ul').slideUp();
        $(this).removeClass('subUlClassActive');
        $('#nav li ul li ul li div').removeClass('sub2UlClassActive');
    }
  });

    $('#nav > li > ul > li > ul > li > div').click(function(){
    if ($(this).attr('class') != 'sub2UlClassActive'){
      $('#nav li ul li ul li ul').slideUp();
      $(this).next().slideToggle();
      $('#nav li ul li ul li div').removeClass('sub2UlClassActive');
      $(this).addClass('sub2UlClassActive');
    }else
    {
        $('#nav li ul li ul li ul').slideUp();
        $(this).removeClass('sub2UlClassActive');
    }
  });


$('.aboutUsMainLiClass').hover(function(){
    if($(this).find('div:first').attr('class') != 'tempoClickClass')
    {
        $(this).find('div:first').css('visibility','visible');
    }
    }, function(){
        if($(this).find('div:first').attr('class') != 'tempoClickClass')
        {
            $(this).find('div:first').css('visibility','hidden');
        }
    }
);

$('.aboutUsMainLiClass').click(function(){
    if($(this).find('div:first').attr('class') != 'tempoClickClass'){
        $('.aboutUsMainLiClass').find('div:first').removeClass('tempoClickClass');
        $('.aboutUsMainLiClass').find('div:first').addClass('tempoHoverClass');
        $('.aboutUsMainLiClass').find('div:first').css('visibility','hidden');
        $(this).find('div:first').removeClass('tempoHoverClass');
        $(this).find('div:first').addClass('tempoClickClass');
        $(this).find('div:first').css('visibility','visible');
    }else{
        $(this).find('div:first').removeClass('tempoClickClass');
        $(this).find('div:first').addClass('tempoHoverClass');
    }
});


