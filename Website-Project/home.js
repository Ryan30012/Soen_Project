 var slidenum = 1;
 var timer;
 var gallerynum = 1;

 showGallery(gallerynum);
 showSlide(slidenum);

function slide(i) {
  showSlide(slidenum = i);

}

function navSlides(i) {
  showSlide(slidenum += i);

}

function showSlide( i) {

  var n;
  var slide = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("dots");

  if (i > slide.length)
    slidenum = 1;

  if (i < 1)
    slidenum = slide.length;

  for (n = 0; n < slide.length; n++)
    slide[n].style.display = "none";

  for (n = 0; n < dots.length; n++)
    dots[n].className = dots[n].className.replace("active", "");

  slide[slidenum - 1].style.display = 'flex';
  dots[slidenum - 1].className += ' active';

   timer = setTimeout(navSlides, 6000,1);
}


function gallery(i) {
  showGallery(gallerynum = i);

}

function navGallery(i) {
  showGallery(gallerynum += i);

}

function showGallery(i) {

  var n;
  var gallery = document.getElementsByClassName("gallery");
  var radio = document.getElementsByClassName("radio");

  if (i > gallery.length)
    gallerynum = 1;

  if (i < 1)
    gallerynum = gallery.length;

  for (n = 0; n < gallery.length; n++)
    gallery[n].style.display = "none";

  for (n = 0; n < radio.length; n++)
    radio[n].className = radio[n].className.replace("active", "");

  gallery[gallerynum - 1].style.display = 'flex';
  radio[gallerynum - 1].className += ' active';

  timer = setTimeout(navGallery, 6000,1);

}

function popup(i) {


  var span = document.getElementsByClassName("close")[i];

  var n;
  var popup = document.getElementsByClassName("popup-content");
  var mainpopup = document.getElementById("popup");



  for (n = 0; n < popup.length; n++)
    popup[n].style.display = "none";


  popup[i].style.display = 'block';
  mainpopup.style.display = 'block'

  span.onclick = function() {
    mainpopup.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == mainpopup) {
      mainpopup.style.display = "none";
    }
  }

}
