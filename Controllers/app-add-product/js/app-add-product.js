document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('formproduct');
  form.addEventListener('submit', async e => {
    e.preventDefault();

    let formData = new FormData(form);
    try {
      const response = await fetch(
        './Controllers/app-add-product/php/app-add-product.php',
        {
          method: 'POST',
          body: formData
        }
      );

      const data = await response.json();      
      if (response.ok) {   
        if(data.status == "success"){
          window.location.href = "./list.php"
        }
      }
    } catch (error) {
      alert("Erreur lors de l'envoi : " + error.message);
    }
  });
})

