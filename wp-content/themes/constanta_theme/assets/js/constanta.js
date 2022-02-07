$(function () {

  var lingua = sessionStorage.getItem('linguagem');
  if(lingua != ""){
    if(lingua == "en"){
      $(".portugues").hide();
      $(".ingles").show();
    }
    if(lingua == "br"){
      $(".portugues").show();
      $(".ingles").hide();      
    }
  }

  $(".flagen").click(function () {
    sessionStorage.setItem('linguagem', 'en');
    $(".portugues").hide();
    $(".ingles").show();
  });

  $(".flagbr").click(function () {
    sessionStorage.setItem('linguagem', 'br');
    $(".portugues").show();
    $(".ingles").hide();
  });

});