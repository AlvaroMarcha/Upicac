//JavaScript Document

//Funciones para el header - Menu responsive Mobile
//Variable para guardar el estado 
var open=document.getElementById("btnMenu").value;

//Funcion para abrir el menu Open
function openMenu(){
    var menu=document.getElementById("nav-links");
    var btnMenu=document.getElementById("btnMenu");
    menu.style.top="120px";
    btnMenu.style.top="-100%";

    var ancho=screen.width;
    console.log(ancho);

    

}

//Funcion para cerrar el menu Close
function closeMenu(){
    var menu=document.getElementById("nav-links");
    var btnMenu=document.getElementById("btnMenu");
    menu.style.top="-1350px";
    btnMenu.style.top="22px";
    

}




//Funcion para abrir una ventana emergente para acceder a la zona privada
function privatePopUpOpen(){
    var popBackground=document.getElementsByClassName("background-pop")[0].style.display="block";
    var popContent=document.getElementsByClassName("private-popup")[0].style.display="block";


}

//Funcion para cerrar una ventana emergente para acceder a la zona privada
function privatePopUpClose(){
    var popBackground=document.getElementsByClassName("background-pop")[0].style.display="none";
    var popContent=document.getElementsByClassName("private-popup")[0].style.display="none";
    

}