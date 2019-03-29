

// method #1
// var someObject = {};

// method #2

var oSlideShow = function()
{

  var slideShow = this;
  slideShow.width = 600;
  slideShow.currentSlide = 1;

  var slidesInSlideShow = document.getElementsByClassName("img"); // gives an array
  slideShow.numberOfSlides = slidesInSlideShow.length; // tells me number of itesm in array

  slideShow.slideHandle = document.getElementById("slideHandle");
  slideShow.slideHandle.style.width = (slideShow.numberOfSlides*slideShow.width)+"px"; // dyanmically sets the width of the slide strip

  slideShow.nextBtn = document.getElementById("next");
  slideShow.prevBtn = document.getElementById("prev");

  var arrDots = document.getElementsByClassName("dot");

  // arrDots IS AN ARRAY.... 
  for(var i=0; i<arrDots.length; i++)
  {
      var currentDot = i+1;

      var dot = document.getElementById("dot"+currentDot);
      
      // this, is the dot i clicked on
      dot.addEventListener("click", function(){
        slideShow.gotoSlideNum(this.getAttribute("data-num"));
      });
  }

  slideShow.gotoSlideNum = function(whichSlideNumber)
  {
    slideShow.stopInterval();
    slideShow.currentSlide=whichSlideNumber-1;
    slideShow.nextSlide();
    slideShow.startInterval();
  }

  slideShow.nextBtn.addEventListener("click", function(){
    slideShow.stopInterval();
    slideShow.nextSlide();
    slideShow.startInterval();
  });

  slideShow.prevBtn.addEventListener("click", function(){
    slideShow.stopInterval();
    slideShow.prevSlide();
    slideShow.startInterval();
  });

  // on mouseover of the image, then stop timer
  slideHandle.addEventListener("mouseover", function(){
    slideShow.stopInterval();
  });

  slideHandle.addEventListener("mouseout", function(){
    slideShow.startInterval();
  });

  slideShow.init = function()
  {
    slideShow.startInterval();
  }

  slideShow.startInterval = function()
  {
    slideShow.slideInterval = setInterval(slideShow.nextSlide, 3000);
  }

  slideShow.stopInterval = function()
  {
    clearInterval(slideShow.slideInterval);
  }


  slideShow.nextSlide = function()
  {

    if (slideShow.currentSlide == slideShow.numberOfSlides)
    {
      slideShow.currentSlide = 0; // this sends us back to the beginning
    }

    // move the slider.... to the left, the width of a single slide
    

    // current left position????
    slideShow.slideHandle.style.left = -1*(slideShow.currentSlide*slideShow.width)+"px"; 

    slideShow.currentSlide++; // add 1 to the slide we are looking at so we are looking not at slide... 2?, 3?

  }

  slideShow.prevSlide = function()
  {

    // 600 x (2-1) = 600
    console.log("here");

    if (slideShow.currentSlide==1)
    {
      slideShow.currentSlide = slideShow.numberOfSlides+1;
    }
    slideShow.slideHandle.style.left = (-1*(slideShow.width*(slideShow.currentSlide-1)-slideShow.width))+"px";
    console.log(slideShow.slideHandle.style.left);
    slideShow.currentSlide = slideShow.currentSlide-1;

    /*console.log("here");
    console.log(slideShow.currentSlide);
    if (slideShow.currentSlide == 1) // first slide
    {
      slideShow.currentSlide = slideShow.numberOfSlides; // this sends us back to the beginning
    }

    // move the slider.... to the left, the width of a single slide
    

    // current left position????
    slideShow.slideHandle.style.left = -1*((slideShow.currentSlide*slideShow.width)-slideShow.width)+"px"; 
    console.log(slideShow.slideHandle.style.left);
    slideShow.currentSlide = slideShow.currentSlide-1; // add 1 to the slide we are looking at so we are looking not at slide... 2?, 3?
*/
  }

  return slideShow;

}

var slideShow = new oSlideShow(); // creating an instance of an object
slideShow.init();

// this will run every 3s calling slideShow.nextSlide
// var slideInterval = setInterval(slideShow.nextSlide, 3000);
