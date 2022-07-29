// click to change moon opacity
$(document).ready(function () {
  $("#logo").click(function () {
    $("#logo>img").animate({ opacity: "1" });
  });
  $("#logo").dblclick(function () {
    $("#logo>img").animate({ opacity: "0.5" });
  });
});
