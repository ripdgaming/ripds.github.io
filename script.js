
//_______________________Slideshow__________________________//
var myIndex = 0;                       
carousel();

function carousel() 

{
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) 
{
    x[i].style.display = "none";  
}
  myIndex++;
  if (myIndex > x.length) 
{myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 5 seconds
}



//___________________FILTER_____________________//

function myFunction() 
{
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true)
{
    text.style.display = "block";
} else 
{
    text.style.display = "none";
}
}


//_________________top scroll___________________//


var mybutton = document.getElementById("myBtn");
    
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() 
{scrollFunction()};

function scrollFunction() 
{
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) 
{
    mybutton.style.display = "block";
} else 
{
    mybutton.style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() 

{
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



//________________LOGIN FORM______________//

const toggleForm = () => 
{
  const container = document.querySelector(".card");
  container.classList.toggle("active");
};


//________________GO TO BACK AS CLOSE______________//

function goBack() 
{
  window.history.back();
}




(function() {
  let windowHeight = window.innerHeight;
  const els = [...document.querySelectorAll(".block")];

  window.addEventListener("scroll", scrollTrigger);

  function scrollTrigger() {

    for (let i = 0; i < els.length; i++) {
      let position = els[i].getBoundingClientRect().top;
      if (position - windowHeight <= -200) {
        els[i].classList.add("animated");
        els[i].classList.add("fadeIn");
      }
    }
  }
})();






  
