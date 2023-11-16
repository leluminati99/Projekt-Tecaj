'use strict';
// Elektrotehničar
const elektrotehnicarNaziv = document.querySelector('.naziv-el');
const elektrotehnicarDiv = document.querySelector('.elektrotehnicar');
const slikaElektrotehnicar = document.querySelector('.slika-elektrotehnicar');



// Tehničar za računala
const tehnicarZaRacunalstvoNaziv = document.querySelector('.naziv-rac');
const tehnicarZaRacunalstvoDiv = document.querySelector('.tehnicar-za-racunalstvo');
const slikaRacunalstvo = document.querySelector('.slika-racunalstvo');


// Tehničar za mehatroniku
const tehnicarZaMehatronikuNaziv = document.querySelector('.naziv-meh');
const tehnicarZaMehatronikuDiv = document.querySelector('.teh-za-mehatroniku');
const slikaMehatronika = document.querySelector('.slika-mehatronika');



// Tehničar za elektroniku
const tehnicarZaElektronikuNaziv = document.querySelector('.naziv-elek');
const tehnicarZaElektronikuDiv = document.querySelector('.tehnicar-za-elektroniku');
const slikaElektronika = document.querySelector('.slika-elektronika');



// Tehničar cestovnog prometa
const tehnicarCestovnogPrometaNaziv = document.querySelector('.naziv-ces');
const tehnicarCestovnogPrometaDiv = document.querySelector('.teh-cestovnog-prometa');
const slikaCestovnogPrometa = document.querySelector('.slika-cestovni-promet');



// Vozač motornih vozila
const vozacMotornihVozilaNaziv = document.querySelector('.naziv-vozac');
const vozacMotornihVozilaDiv = document.querySelector('.vozac-motornih-vozila');
const slikaKamion = document.querySelector('.slika-kamion');


// Elektrotehničar
elektrotehnicarNaziv.addEventListener('mouseover', function(){

  elektrotehnicarNaziv.style.color = 'white';
  elektrotehnicarNaziv.style.transition = 'color 1s';
});

elektrotehnicarNaziv.addEventListener('mouseout', function(){

  elektrotehnicarNaziv.style.color = 'rgb(19, 16, 16)';
  elektrotehnicarNaziv.style.transition = 'color 1s';
});

slikaElektrotehnicar.addEventListener('mouseover', function(){
  elektrotehnicarNaziv.style.color = 'white';
  elektrotehnicarNaziv.style.transition = 'color 1s';
});

slikaElektrotehnicar.addEventListener('mouseout', function() {
  elektrotehnicarNaziv.style.color = 'rgb(19, 16, 16)';
  elektrotehnicarNaziv.style.transition = 'color 1s';
});




// Tehničar za računala
tehnicarZaRacunalstvoNaziv.addEventListener('mouseover', function(){

tehnicarZaRacunalstvoNaziv.style.color = 'white';
tehnicarZaRacunalstvoNaziv.style.transition = 'color 1s';
});

tehnicarZaRacunalstvoNaziv.addEventListener('mouseout', function(){
  
  tehnicarZaRacunalstvoNaziv.style.color = ' rgb(19, 16, 16)';
  tehnicarZaRacunalstvoNaziv.style.transition = 'color 1s';
});

slikaRacunalstvo.addEventListener('mouseover', function() {
  tehnicarZaRacunalstvoNaziv.style.color = 'white';
  tehnicarZaRacunalstvoNaziv.style.transition = 'color 1s';
});

slikaRacunalstvo.addEventListener('mouseout', function() {
  tehnicarZaRacunalstvoNaziv.style.color = ' rgb(19, 16, 16)';
  tehnicarZaRacunalstvoNaziv.style.transition = 'color 1s';
});



// Tehničar za mehatroniku

tehnicarZaMehatronikuNaziv.addEventListener('mouseover', function() {

  tehnicarZaMehatronikuNaziv.style.color = 'white';
  tehnicarZaMehatronikuNaziv.style.transition = 'color 1s';
});

tehnicarZaMehatronikuNaziv.addEventListener('mouseout', function(){
  tehnicarZaMehatronikuNaziv.style.color = ' rgb(19, 16, 16)';
  tehnicarZaMehatronikuNaziv.style.transition = 'color 1s';
});

slikaMehatronika.addEventListener('mouseover', function() {
  tehnicarZaMehatronikuNaziv.style.color = 'white';
  tehnicarZaMehatronikuNaziv.style.transition = 'color 1s';
});

slikaMehatronika.addEventListener('mouseout', function() {
  tehnicarZaMehatronikuNaziv.style.color = ' rgb(19, 16, 16)';
  tehnicarZaMehatronikuNaziv.style.transition = 'color 1s';
});



// Tehničar za elektroniku

tehnicarZaElektronikuNaziv.addEventListener('mouseover', function() {
  tehnicarZaElektronikuNaziv.style.color = 'white';
  tehnicarZaElektronikuNaziv.style.transition = 'color 1s';
});

tehnicarZaElektronikuNaziv.addEventListener('mouseout', function() {

  tehnicarZaElektronikuNaziv.style.color = ' rgb(19, 16, 16)';
  tehnicarZaElektronikuNaziv.style.transition = 'color 1s';
});

slikaElektronika.addEventListener('mouseover', function() {
  tehnicarZaElektronikuNaziv.style.color = 'white';
  tehnicarZaElektronikuNaziv.style.transition = 'color 1s';
});

slikaElektronika.addEventListener('mouseout', function() {
  tehnicarZaElektronikuNaziv.style.color = ' rgb(19, 16, 16)';
  tehnicarZaElektronikuNaziv.style.transition = 'color 1s';
});



// Tehničar cestovnog prometa

tehnicarCestovnogPrometaNaziv.addEventListener('mouseover', function() {
  tehnicarCestovnogPrometaNaziv.style.color = 'white';
  tehnicarCestovnogPrometaNaziv.style.transition = 'color 1s';
});

tehnicarCestovnogPrometaNaziv.addEventListener('mouseout', function() {
  

 tehnicarCestovnogPrometaNaziv.style.color = ' rgb(19, 16, 16)';
 tehnicarCestovnogPrometaNaziv.style.transition = 'color 1s';
})

slikaCestovnogPrometa.addEventListener('mouseover', function() {
  tehnicarCestovnogPrometaNaziv.style.color = 'white';
  tehnicarCestovnogPrometaNaziv.style.transition = 'color 1s';
});

slikaCestovnogPrometa.addEventListener('mouseout', function() {
  tehnicarCestovnogPrometaNaziv.style.color = ' rgb(19, 16, 16)';
 tehnicarCestovnogPrometaNaziv.style.transition = 'color 1s';
})



// Vozač motornih vozila
vozacMotornihVozilaNaziv.addEventListener('mouseover', function() {
  vozacMotornihVozilaNaziv.style.color = 'white';
  vozacMotornihVozilaNaziv.style.transition = 'color 1s';
});

vozacMotornihVozilaNaziv.addEventListener('mouseout', function() {
  vozacMotornihVozilaNaziv.style.color = ' rgb(19, 16, 16)';
  vozacMotornihVozilaNaziv.style.transition = 'color 1s';
});

slikaKamion.addEventListener('mouseover', function() {
  vozacMotornihVozilaNaziv.style.color = 'white';
  vozacMotornihVozilaNaziv.style.transition = 'color 1s';
})

slikaKamion.addEventListener('mouseout', function() {
  vozacMotornihVozilaNaziv.style.color = ' rgb(19, 16, 16)';
  vozacMotornihVozilaNaziv.style.transition = 'color 1s';
});