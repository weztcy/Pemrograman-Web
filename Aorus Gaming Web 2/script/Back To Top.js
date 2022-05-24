var mybutton = document.getElementById("backtotop");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250){
  mybutton.style.display = "block";
} 
else{
  mybutton.style.display = "none";
}
}
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}