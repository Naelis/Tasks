"use strict";
/*
// Valitaan elementti
const test = document.querySelector('#testi');
//console.log(testi);

//Lisätään html -koodia tilalle
test.innerHTML = '<p>Tämä oli testi!</p><br><a href="http://oma.metropolia.fi/">Koulun sivuille tästä...</a>';

//Elementin attribuuttien muutos mikä -> mitä sille tehdään


//Valitaan useat kappaleet
const esimKappaleet = document.querySelectorAll('.esim');
//console.log(esimKappaleet);

esimKappaleet[0].innerHTML = '<p> Eka rivi korvattiin tällä!</p>';
esimKappaleet[1].innerHTML = '<p> Toka rivi korvattiin tällä!</p>';

// Funktio elementin piilottamiseen klikatessa
const hideElement = (evt) => {
  evt.target.setAttribute('class', 'hidden');
};

test.addEventListener('click', hideElement);
*/

//Teht B
let lomakeOK = '';

const checkAttribute = (attr, elements, func) => {
  elements.forEach((el) => {
    if (el.hasAttribute(attr)) {
      func(el);
    }
  });
};

//Is the box empty?
const checkEmpty = (el) => {
  //console.log(el.value);
  //Jos tyhjä
  if(el.value === '') {
    // el.style = 'border: 1px solid red';
    el.setAttribute('style', 'border: 1px solid red');
    lomakeOK += '0';
  } else {
    el.setAttribute('style', '');
    lomakeOK += '1';
  }
};

//Pattern validation
const checkPattern = (el) => {
  const pat = el.getAttribute('pattern');
  const lauseke = new RegExp(pat, 'i');

  if(!lauseke.exec(el.value)){
    el.setAttribute('style', 'border: 1px solid yellow');
    lomakeOK += '0';
  } else {
    el.setAttribute('style', '');
    lomakeOK += '1';
  }
};

const inputElementit = document.querySelectorAll('input');


const lomake = document.querySelector('form');

lomake.addEventListener('submit', (evt) => {
  evt.preventDefault();
  lomakeOK = '';
  checkAttribute('required', inputElementit, checkEmpty);
  checkAttribute('pattern', inputElementit, checkPattern);
  // tarkastetaan onko nollia
  const lauseke = new RegExp('0');
  if (!lauseke.exec(lomakeOK)){
    lomake.submit();
  }
});