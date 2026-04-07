document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('formregister');

  form.addEventListener('submit', async e => {
    e.preventDefault();

    let formData = new FormData(form);
    try {
      const response = await fetch(
        './Controllers/app-register/php/app-register.php',
        {
          method: 'POST',
          body: formData
        }
      );

      const data = await response.json();      
      if (response.ok) {    
        if(data.status == "success"){
          window.location.href = "./login.php"
        }
      }
    } catch (error) {
      alert("Erreur lors de l'envoi : " + error.message);
    }
  });
})

