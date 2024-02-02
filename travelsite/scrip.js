 
  <script type="text/javascript">

function myFunction(x) {
  x.classList.toggle("change");
}

    function container(){
   window.scrollTo(0,10);
    }
	function HOME(){
   window.scrollTo(0,100);
    }
	function Contact(){
   window.scrollTo(0,100);
    }
	
	var subjectObject = {
  "1": { }, "2": { },"3":{ },"4": { },"5": { }
    				}
window.onload = function() {
  var subjectSel = document.getElementById("subject");
 for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x,x,x,x,x);
  }
  subjectSel.onchange = function() {
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y,y,y,y,y);
    }
  }
  
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
