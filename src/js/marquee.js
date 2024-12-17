$(document).ready(function () {
  $(".marquee-left").marquee({
    allowCss3Support: true,
    css3easing: "linear",
    direction: "left",
    duplicated: true,
    duration: 8000,
    gap: 100,
    startVisible: true,
  });
  
  $(".marquee-right").marquee({
    allowCss3Support: true,
    css3easing: "linear",
    direction: "right",
    duplicated: true,
    duration: 12000,
    gap: 100,
    startVisible: true,
  });
});