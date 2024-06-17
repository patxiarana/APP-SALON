let paso = 1;
let pasoInicial = 1 ; 
let pasoFinal = 3 ; 
document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
});

function iniciarApp() {
    mostrarSeccion()// Muestra y oculta las secciones 
    tabs(); // Cambia la seccciones cuando se precionen los tabs 
    botonesPaginador() ; //Agrega o quita los botones del paginador 
    paginaSiguiente() ; 
    paginaAnterior() ;

    consultarApi(); //Consulta la Api en el backend de php
}
function mostrarSeccion() {
//Ocultar la seccion que tenga la clase de mostrar 
const seccionAnterior = document.querySelector('.mostrar') ; 
if(seccionAnterior) {
seccionAnterior.classList.remove('mostrar')
}

    //Seleccionar la seccion con el paso..
    const seccion = document.querySelector(`#paso-${paso}`) 
    seccion.classList.add('mostrar')
   //quita la clase del tab actual al anterior 
   const tabAnterior = document.querySelector('.actual'); 
   if(tabAnterior) {
    tabAnterior.classList.remove('actual'); 
   }


    //Resalta el tab actual 
    const tab = document.querySelector(`[data-paso="${paso}"]`)
 tab.classList.add('actual')


}
function tabs() { 
    const botones = document.querySelectorAll('.tabs button') ;
  
    botones.forEach(function(boton) { 
    boton.addEventListener('click',function(e){
     paso = parseInt(e.target.dataset.paso)

     mostrarSeccion()
     botonesPaginador() ;
    }) ; 
    });
}

function botonesPaginador() {
    const paginaAnterior = document.querySelector('#anterior') ;
    const paginaSiguiente = document.querySelector('#siguiente') ; 
    
    if(paso === 1) {
        paginaAnterior.classList.add('ocultar');
        paginaSiguiente.classList.remove('ocultar'); 
    } else if (paso ===3) {
        paginaAnterior.classList.remove('ocultar'); 
        paginaSiguiente.classList.add('ocultar');
    } else {
        paginaAnterior.classList.remove('ocultar'); 
        paginaSiguiente.classList.remove('ocultar');
    }
    mostrarSeccion();
}    

function paginaAnterior() { 
const paginaAnterior = document.querySelector('#anterior')
paginaAnterior.addEventListener('click',function() {
 
 if(paso <= pasoInicial) return ; 
    paso-- ; 
 botonesPaginador(); 
}) 
}

function paginaSiguiente() { 
    const paginaSiguiente = document.querySelector('#siguiente')
    paginaSiguiente.addEventListener('click',function() {
     
     if(paso >= pasoFinal) return ; 
        paso++ ; 
     botonesPaginador(); 
    }) 
}


async function consultarApi() {
try {
    const url = 'http://localhost:3000/api/servicios' ; 
    const resultado = await fetch(url) ; 
    const servicios = await resultado.json() ; 
    console.log(servicios) ; 
} catch (error) {
    console.log(error) ; 
}
}