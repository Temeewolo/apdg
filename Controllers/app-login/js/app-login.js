document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('formlogin');

    form.addEventListener('submit', async e => {
        e.preventDefault();

        let formData = new FormData(form);
        try {
            const response = await fetch(
                './Controllers/app-login/php/app-login.php',
                {
                    method: 'POST',
                    body: formData
                }
            );

            const data = await response.json();
            if (response.ok) {
                if (data.status == "success") {
                      window.location.href = "./list.php";
                }
                if (data.status == "error") {
                    alert(data.message);
                }
            }
        } catch (error) {
            alert("Erreur lors de l'envoi : " + error.message);
        }
    });
})

