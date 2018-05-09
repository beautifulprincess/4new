$(document).ready(function() {
  var y1 = 400000, y2 = 820000, y3 = 1640000, y4 = 3075000, y5 = 6150000, iv = 50000;
  function val2view(v) {
    var sv = v.toString();
    var s = sv.substring(sv.length - 3, sv.length);
    sv = sv.substring(0, sv.length - 3);
    while(sv.length > 0) {
      s = sv.substring(sv.length - 3, sv.length) + "," + s;
      sv = sv.substring(0, sv.length - 3);
    };

    return "$" + s;
  }
  function updageRange() {
    var range = $('#calc-range-val').val();
    var v1 = y1 * range / 200;
    var v2 = y2 * range / 200;
    var v3 = y3 * range / 200;
    var v4 = y4 * range / 200;
    var v5 = y5 * range / 200;
    $(".calc-val-year1").text(val2view(v1));
    $(".calc-val-year2").text(val2view(v2));
    $(".calc-val-year3").text(val2view(v3));
    $(".calc-val-year4").text(val2view(v4));
    $(".calc-val-year5").text(val2view(v5));
    $("#calc-graph-year1").css({height: 450 * v1 / y5});
    $("#calc-graph-year2").css({height: 450 * v2 / y5});
    $("#calc-graph-year3").css({height: 450 * v3 / y5});
    $("#calc-graph-year4").css({height: 450 * v4 / y5});
    $("#calc-graph-year5").css({height: 450 * v5 / y5});
    $(".calc-graph-val.calc-val-year1").css({bottom: 450 * v1 / y5});
    $(".calc-graph-val.calc-val-year2").css({bottom: 450 * v2 / y5});
    $(".calc-graph-val.calc-val-year3").css({bottom: 450 * v3 / y5});
    $(".calc-graph-val.calc-val-year4").css({bottom: 450 * v4 / y5});
    $(".calc-graph-val.calc-val-year5").css({bottom: 450 * v5 / y5});
    $(".calc-val-invest").text(val2view(iv * range / 200));
  }
  $('#calc-range-val').on("input", updageRange);
  updageRange();

  var endDateStr = "2018-06-01";
  function updateCountdown() {
    var dt = parseInt(new Date(endDateStr).getTime() / 1000) - parseInt(new Date().getTime() / 1000);
    $('#countdown-seconds').text(dt % 60);
    dt = (dt - dt % 60) / 60;
    $('#countdown-minutes').text(dt % 60);
    dt = (dt - dt % 60) / 60;
    $('#countdown-hours').text(dt % 24);
    dt = (dt - dt % 24) / 24;
    $('#countdown-days').text(dt);
    setTimeout(updateCountdown, 1000);
  }
  updateCountdown();

  function resizeCalc() {
    var calch = $('#calc-invest').height() + 100;
    var winw = $(window).width() + 10;
    if (winw < 768) {
      $('#calc-graph').css("height", 700 + "px");
    } else {
      $('#calc-graph').css("height", calch + "px");
    }
  }
  resizeCalc();
  $(window).resize(resizeCalc);
  $(".btn-whitepaper").click(function() {
    window.open("https://4new.io/wp-content/uploads/2018/04/4New-WhitePaper_.pdf", "_blank");
  });
  $(".btn-onepager").click(function() {
    window.open("https://4new.io/wp-content/uploads/2018/04/4New_1.pdf", "_blank");
  });
});