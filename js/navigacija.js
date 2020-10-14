let turiniai = document.querySelectorAll('main > section');
let meniuElementai = document.querySelectorAll('header nav > a');
// let defaultElem = document.querySelector('nav a:first-child');
let defaultElem = document.getElementsByClassName('active')[0];

function pakesitiPuslapi (meniuElem, pslId) {
    for (let i = 0; turiniai.length > i; i++) {
        turiniai[i].style.display ='none';
        meniuElementai[i].classList.remove('active');
    }
    meniuElem.classList.add('active');
    document.getElementById(pslId).style.display = 'block';
}
// Default puslapis kuris bus matomas uzkrovus tinklalapi
pakesitiPuslapi(defaultElem, 'about');