const abrirPerfil = document.getElementById("abrirPerfil");
const fecharPerfil = document.getElementById("fecharPerfil");
const modalPerfil = document.getElementById("modalPerfil");

abrirPerfil.addEventListener("click", () => {
    modalPerfil.classList.add("ativo");
});

fecharPerfil.addEventListener("click", () => {
    modalPerfil.classList.remove("ativo");
});

modalPerfil.addEventListener("click", (event) => {
    if (event.target === modalPerfil) {
        modalPerfil.classList.remove("ativo");
    }
});