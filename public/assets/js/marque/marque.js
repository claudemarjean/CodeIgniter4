let addMarque = document.getElementById("addMarque");
let modalMarque = new bootstrap.Modal(document.getElementById('modalAddMarque'));

addMarque.addEventListener("click",()=>{
    modalMarque.show();
})