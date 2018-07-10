alert('yo');

$('.enlarge').mouseOver(function) {
  $(this).css("cursor", "pointer")
  $(this).animate({
    width: 20%,
    height: 10%;
  })
};
