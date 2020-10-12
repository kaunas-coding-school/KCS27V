let ats_elem = document.getElementById('ats');
let ats_elem2 = document.getElementById('ats2');
let ats_elem3 = document.getElementById('ats3');

let i = h = 1;

while (i < 10){
    ats_elem.innerHTML += '<br>' + i;
    i++;
}

for (let j = 0; j < 10; ++j) {
    ats_elem2.innerHTML += '<br>' + j;
}

do {
    ats_elem3.innerHTML += '<br>' + h;
    h++;
} while (h < 10)