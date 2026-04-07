async function add(id) {
    const formdata = new FormData();
    formdata.append("id",id);
    try {
        const response = await fetch(
            './Controllers/product-list/php/add-choice.php', {
            method: "POST",
            body: formdata
        });

        const data = await response.json();
        if (response.ok) {
            if (data.status == "success") {
                let badge = document.getElementById('product'+id);
                badge.textContent = data.number;
            }
        }
    } catch (error) {
        alert("Erreur lors de l'envoi : " + error.message);
    }
}