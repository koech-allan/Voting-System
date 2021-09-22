window.addEventListener("load",start);
function start(){
	//alert('finished loading');
let menu=document.getElementById('menu');
menu.addEventListener("click",displayMenu);
let close=document.getElementById("close");
close.addEventListener("click",hidemenu);
function displayMenu(){
	let navp=document.getElementById('navp');
	navp.style.display="block";
}
function hidemenu(){
	let navp=document.getElementById('navp');
	navp.style.display="none";

}


function showPassword(){
	alert('helo');
	let pw=document.getElementById('adm').value;
	pw.innerHTML=pw;
}







}