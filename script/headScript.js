'use strict';

const logoHeadlineDiv = document.querySelector('.logo-headline');
const headline = document.querySelector('.headline');

const logoPicture = document.querySelector('.logo-picture');
const logoPicture2 = document.querySelector('.logo-picture-2');

const logoPictureMouseOver = function() {
  
  headline.style.color = 'white';
  headline.style.transition = 'color 1s';
}

const logoPictureMouseOut =  function() {
  headline.style.color = 'rgb(19, 16, 16)';
  headline.style.transition = 'color 1s';
}

logoPicture.addEventListener('mouseover', logoPictureMouseOver);
logoPicture.addEventListener('mouseout', logoPictureMouseOut);

const logoPicture2MouseOver = function() {
  
  headline.style.color = 'white';
  headline.style.transition = 'color 1s';
}

const logoPicture2MouseOut =  function() {

  headline.style.color = 'rgb(19, 16, 16)';
  headline.style.transition = 'color 1s';
}

logoPicture2.addEventListener('mouseover', logoPicture2MouseOver);
logoPicture2.addEventListener('mouseout', logoPicture2MouseOut);

// Promjena backgrounda i fonta u crno/bijelu
const mouseOverChangeColor = function() {
  headline.style.color = 'white';
  headline.style.transition = 'color 1s';
  
}

// Promjena backgrounda i fonta u bijelo/crnu
const mouseOutChangeColor = function() {

  headline.style.color = 'rgb(19, 16, 16)';
  headline.style.transition = 'color 1s';

}


headline.addEventListener('mouseover', mouseOverChangeColor);

headline.addEventListener('mouseout', mouseOutChangeColor);

// Dropdown meni Zanimanja

const dropdownZanimanja = document.querySelector('.dropdown-zanimanja');

const zanimanja = document.querySelector('.zanimanja');

const zanimanjaContent = document.querySelector('.zanimanja-content');

const displayZanimanjaContent = function() {
  dropdownZanimanja.style.display = 'block';
  zanimanjaContent.style.width = '285px';
 
 
}



dropdownZanimanja.addEventListener('mouseenter', displayZanimanjaContent);




// dropdownZanimanja.addEventListener('mouseleave', displayNoneZanimanjaContent);