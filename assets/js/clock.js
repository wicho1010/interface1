//invokes functions as soon as window loads
window.onload = function(){
	time();
	ampm();
  clock();
	setInterval(function(){
		time();
		ampm();
    clock();
	}, 1000);
};


//gets current time and changes html to reflect it
function time(){
	var date = new Date(),
		hours = date.getHours(),
		minutes = date.getMinutes(),
		seconds = date.getSeconds();

	//make clock a 12 hour clock instead of 24 hour clock
	hours = (hours > 12) ? (hours - 12) : hours;

	//invokes function to make sure number has at least two digits
	hours = addZero(hours);
	minutes = addZero(minutes);
	seconds = addZero(seconds);

	//changes the html to match results
	document.getElementsByClassName('hours')[0].innerHTML = hours;
	document.getElementsByClassName('minutes')[0].innerHTML = minutes;
	document.getElementsByClassName('seconds')[0].innerHTML = seconds;

}

//turns single digit numbers to two digit numbers by placing a zero in front
function addZero (val){
	return (val <= 9) ? ("0" + val) : val;
}

//lights up either am or pm on clock
function ampm(){
	var date = new Date(),
		hours = date.getHours(),
		am = document.getElementsByClassName("am")[0].classList,
		pm = document.getElementsByClassName("pm")[0].classList;


	(hours >= 12) ? pm.remove("light-on") : am.remove("light-on");
	(hours >= 12) ? am.add("light-on") : pm.add("light-on");
}

function clock()
{
var d = new Date();

var date = d.getDate();

var month = d.getMonth();
var montharr =["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
month=montharr[month];

var year = d.getFullYear();

var day = d.getDay();
var dayarr =["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];
day=dayarr[day];

var hour =d.getHours();
var min = d.getMinutes();
var sec = d.getSeconds();

document.getElementById("fecha").innerHTML=day+",  de "+date+" "+month+" de "+year;
}

function deg2rad(d) {
  return (2 * d / 360) * Math.PI;
}

let H = 0;
let M = 0;
let S = 0;
setInterval(() => {
  let minute = document.getElementById("minute");
  let hour = document.getElementById("hour");
  let second = document.getElementById("second");

  S = new Date().getSeconds() * 6 - 90;
  M = new Date().getMinutes() * 6 - 90;
  H = new Date().getHours() * 30 - 90;

  second.style.transform = 'rotate(' + S + 'deg)';
  minute.style.transform = 'rotate(' + M + 'deg)';
  hour.style.transform = 'rotate(' + H + 'deg)';

}, 10);

function vec2ang(x, y) {
  angleInRadians = Math.atan2(y, x);
  angleInDegrees = (angleInRadians / Math.PI) * 180.0;
  return angleInDegrees;
}

function ang2vec(angle) {
  var radians = angle * (Math.PI / 180.0);
  var x = Math.cos(radians);
  var y = Math.sin(radians);
  var a = new Segment(0, 0, x, y);
  var u = a.normal().unit();
  return [u.vecx, u.vecy];
}

let nc = document.getElementById("notch-container");
let angle = 0;
let rotate_x = 120;
let rotate_y = 0;

for (let i = 0; i < 60; i++) {
  let thin = document.createElement("div");
  let x = rotate_x * Math.cos(angle) - rotate_y * Math.cos(angle);
  let y = rotate_y * Math.cos(angle) + rotate_x * Math.sin(angle);
  let r = vec2ang(x, y);
  thin.className = "thin";
  thin.style.left = 122 + x + "px";
  thin.style.top = 127 + y + "px";
  thin.style.transform = "rotate(" + r + "deg)";
  nc.appendChild(thin);
  angle += (Math.PI / 300) * 10;
}

// reset
angle = 0;
rotate_x = 120;
rotate_y = 0;

for (let i = 0; i < 12; i++) {
  let notch = document.createElement("div");
  let x = rotate_x * Math.cos(angle) - rotate_y * Math.cos(angle);
  let y = rotate_y * Math.cos(angle) + rotate_x * Math.sin(angle);
  let r = vec2ang(x, y);
  notch.className = "notch";
  notch.style.left = 122 + x + "px";
  notch.style.top = 127 + y + "px";
  notch.style.transform = "rotate(" + r + "deg)";
  nc.appendChild(notch);
  angle += (Math.PI / 60) * 10;
}
