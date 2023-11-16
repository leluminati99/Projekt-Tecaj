const validation = new window.JustValidate(document.querySelector('#registracija'));



validation
.addField("#korisnicko-ime", [
  {
    rule: "required",
    errorMessage: "Korisničko ime je obavezno",
    
    
  },
  {
    rule: 'minLength',
    value: 6,
    errorMessage: "Korisničko ime mora imati najmanje 6 znakova",
  },
  {
    rule: 'maxLength',
    value: 20,
    errorMessage: "Korisničko ime može imati najviše 20 znakova",
  },
  {
    validator: (value) => () => {
    return  fetch("potvrda-imena.php?username=" + encodeURIComponent(value))
      .then(function(response) {
        return response.json();
      })
      .then(function(json) {
        return json.available;
      });
    },
    errorMessage: "Korisničko ime je zauzeto"
  }
])
.addField("#email", [
  {
    rule: "required",
    errorMessage: "Mail je obavezan",   
  },
  {
    rule: "email",
    errorMessage: "Neispravan format",
  },
  {
    validator: (value) => () => {
     return fetch("potvrda-maila.php?email=" + encodeURIComponent(value))
      .then(function(response) {
        return response.json();
      })
      .then(function(json) {
        return json.available;
      });
    },
    errorMessage: "Mail zauzet"
  }
])

.addField("#lozinka-registracija", [
  {
    rule:"required",
    errorMessage: "Lozinka je obavezna"
  },
  {
    rule:"password",
    errorMessage: "Lozinka mora sadržavati barem jedno malo slovo i jedan broj"
  },
  {
    rule: "minLength",
    value: 8,
    errorMessage: "Lozinka mora imati najmanje 8 znakova",
  },
  {
    validator: (value) => () => {

      const hasLowerCase = /[a-z]/.test(value);
      const hasNumber = /[0-9]/.test(value);
      const isValid =  hasLowerCase && hasNumber;
      return Promise.resolve({
        valid: isValid,
        message: "Lozinka mora sadržavati barem jedno malo slovo i jedan broj."
      });
    }
  },
])

.onSuccess((event) => {
  document.getElementById('registracija').submit();
});



// .onSuccess((event)) => {
//   document.getElementById("")
// }
// ;