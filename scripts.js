//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

  //Use the onload event so that we can make sure the DOM is at 
//least mostly loaded before trying to get elements
window.onload = function() {
  //Get the DOM element that represents the <button> element.
  //And set the onclick event
  document.getElementById("adminicon").onclick = function(){
     //Set a variable to contain the DOM element of the overly
     var overlay = document.getElementById("overlay");
     //Set a variable to contain the DOM element of the popup
     var popup = document.getElementById("popup");
     
     //Changing the display css style from none to block will make it visible
     overlay.style.display = "block";
     //Same goes for the popup
     popup.style.display = "block";
  };
};