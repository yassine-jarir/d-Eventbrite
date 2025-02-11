const addBtn = document.getElementById("addBtn");
const addPopup = document.getElementById("addPopup");

console.log(addBtn);


addBtn.addEventListener("click", openPopup());

function openPopup() {
    addPopup.classList.toggle("open");
    console.log("tesssst");
}