let hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector("#menu-primary");
const links = document.querySelectorAll(".menu-item");

hamburger.addEventListener('click', () => {

//Animate Links
   
    navLinks.classList.toggle("open");
    links.forEach(link => {
     link.classList.toggle("fade");
     });
     
    //Hamburger Animation
    hamburger.classList.toggle("toggle");
     });

     
console.log("egegeg")
document.addEventListener('DOMContentLoaded', function() {
    // Get each of the elements
    document.querySelectorAll('.cat-item a').forEach((link) => {
    
      // Bind the click handler
      newLink = link.href + '#projects'
      link.href = newLink
      
      console.log(newLink)
      })
    });