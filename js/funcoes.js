function mostrarConteudoPasta(id_folder, elemento_clicado) {
    folder = document.getElementById(id_folder);
    icon = document.getElementById(elemento_clicado.id);

    if (folder.style.display !== 'block') {
        icon.src = './img/arrow_down.svg';
        folder.style.display = 'block';
    } else {
        icon.src = './img/arrow_right.svg';
        folder.style.display = 'none';
    }

}