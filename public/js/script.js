//hamburger
const tombol = document.querySelector("#toogle");
tombol.addEventListener("click", () => {
    const navRespon = document.querySelector("nav ul");
    navRespon.classList.toggle("datang");
});
