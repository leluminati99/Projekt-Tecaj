const validation = new window.JustValidate(document.querySelector('#prijava'));

validation
.addField("#email", [
  {
    rule: "required",
    errorMessage: "Mail je obavezan",   
  },
  {
    rule: "email",
    errorMessage: "Neispravan format",
  },
  
])
.addField("#password", [
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
  document.getElementById('prijava').submit();
});