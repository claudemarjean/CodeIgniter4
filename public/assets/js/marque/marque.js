const addMarque = document.getElementById("addMarque");
const modalMarque = new bootstrap.Modal(document.getElementById('modalAddMarque'));
let boutonAjoutOrModif = document.getElementsByClassName('submit-modal');
let editMarque = document.getElementsByClassName('editMarque');
const buttonAddMarque = document.getElementById('buttonAddMarque');
const buttonModifMarque = document.getElementById('buttonModifMarque');
const nomMarque = document.getElementById('nomMarque');

addMarque.addEventListener("click",()=>{
    buttonModifMarque.hidden = true;
    modalMarque.show();
})

buttonAddMarque.addEventListener("click", () => {
    const url = "/addMarque";
    const data = { nomMarque: nomMarque.value };
    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        console.log('Réponse du serveur:', data);
    })
    .catch(error => {
        console.error("Erreur du serveur:", error);
    });
});

