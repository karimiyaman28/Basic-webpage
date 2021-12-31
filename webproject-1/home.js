const navbars = document.querySelector("#navbars");
let topNav = navbars.offsetTop;

function fixedNav() {
	if (window.scrollY >= topNav) {
		navbars.classList.add("fixed");
	} else{
		navbars.classList.remove("fixed");
	}
}

window.addEventListener('scroll', fixedNav);



var openbar = document.getElementById("openbar");
var navbar = document.getElementById("navbar");
var sidebar = false;


function Togglemenu() {
	if (sidebar == false) {
		navbar.style.left = "0px";
		sidebar = true;
	}
	else if (sidebar == true) {
		navbar.style.left = "-300px";
		sidebar = false;
	}
}

openbar.onclick = Togglemenu;

