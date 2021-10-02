
let myNav = document.querySelector ("nav");
let myList = document.querySelector ("ul");
let myMenu = document.querySelector(".hamburger");

myMenu.addEventListener("click", function() {
 myList.classList.toggle ("show");
 myMenu.classList.toggle("exit");
});
