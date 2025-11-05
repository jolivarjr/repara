// Adicione este código no seu arquivo JavaScript do tema
document.addEventListener('DOMContentLoaded', function() {
    const imagens = document.querySelectorAll('.port_foto');

    // Criar modal
    const modal = document.createElement('div');
    modal.className = 'lightbox-modal';
    modal.innerHTML = `
        <span class="lightbox-close">&times;</span>
        <span class="lightbox-prev">&#10094;</span>
        <span class="lightbox-next">&#10095;</span>
        <img class="lightbox-content" src="" alt="">
        <div class="lightbox-caption"></div>
    `;
    document.body.appendChild(modal);

    let currentIndex = 0;

    // Abrir modal ao clicar na imagem
    imagens.forEach((img, index) => {
        img.addEventListener('click', function() {
            currentIndex = index;
            mostrarImagem(this.src);
        });
    });

    function mostrarImagem(src) {
        modal.style.display = 'flex';
        modal.querySelector('.lightbox-content').src = src;
        document.body.style.overflow = 'hidden';
    }

    // Fechar modal
    modal.querySelector('.lightbox-close').addEventListener('click', fecharModal);
    modal.addEventListener('click', function(e) {
        if (e.target === modal) fecharModal();
    });

    function fecharModal() {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Navegação
    modal.querySelector('.lightbox-prev').addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + imagens.length) % imagens.length;
        mostrarImagem(imagens[currentIndex].src);
    });

    modal.querySelector('.lightbox-next').addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % imagens.length;
        mostrarImagem(imagens[currentIndex].src);
    });

    // Teclas do teclado
    document.addEventListener('keydown', function(e) {
        if (modal.style.display === 'flex') {
            if (e.key === 'Escape') fecharModal();
            if (e.key === 'ArrowLeft') modal.querySelector('.lightbox-prev').click();
            if (e.key === 'ArrowRight') modal.querySelector('.lightbox-next').click();
        }
    });
});