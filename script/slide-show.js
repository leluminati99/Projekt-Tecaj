
let i = 0;
let images = [];
const time = 3000;

images[0] = 'slike/skola.jpg';
images[1] = 'slike/izvana.jpg';
images[2] = 'slike/Elektrotehnička_i_prometna_škola_Osijek.jpg';
images[3] = 'slike/iznutra.jpg';
images[4] = 'slike/slike-ucenika.jpg'

const promjeniSliku = function() {
  document.slide.src = images[i];

  if(i < images.length - 1) {
    i++;
  }
  else {
    i = 0;
  }

  setTimeout("promjeniSliku()", time);

}

window.onload =promjeniSliku;



