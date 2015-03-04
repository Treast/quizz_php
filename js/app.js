$(document).ready(function(){

  $(".nom").each(function(){
    $(this).css({
      'color': $(this).attr("color")
    })
  });

  $(".get_answer").click(function(){
    $(".response").toggle();
  });

  $(".close").click(function(){
    $(".lightbox").hide();
    $(".response").hide();
    $(this).parent().toggle();
  });

  $(".box").click(function(){
    $(this).text('');
    $(".color").css({
      "background-color": $(this).parent().find(".color").attr("color")
    });
    $(".lightbox").show();
    $(".answer-"+$(this).attr("box-id")).show();

  });

  $(".up").click(function(){
    $(this).parent().find("span").html(parseInt($(this).parent().find("span").html(), 10)+1);
  });

   $(".down").click(function(){
    $(this).parent().find("span").html(parseInt($(this).parent().find("span").html(), 10)-1);
  });

  $(".lightbox").click(function(){
    $(".answer").hide();
    $(".response").hide();
    $(".lightbox").hide();
  });

  $(".get_colors").click(function(){
    
    $(".box").each(function(){
      $(this).css({
        "background-color": $(this).parent().find(".color").attr("color")
      })
    });
    window.setTimeout(function(){
      $(".box").css({
        "background-color": "#2c3e50"
      });
    }, 2000);    
  });

  $(".leeroy").click(function(){
    var audio = document.getElementsByTagName("audio")[0];
    audio.play();
  });



});