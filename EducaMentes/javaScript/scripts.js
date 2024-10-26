// scripts.js

function showSection(sectionId) {
    // Esconde todas as seções de formulários
    const sections = document.querySelectorAll('.form-section');
    sections.forEach(section => {
        section.style.display = 'none'; // Oculta as seções
    });

    // Mostra a seção clicada
    const activeSection = document.getElementById(sectionId);
    if (activeSection) {
        activeSection.style.display = 'block'; // Mostra a seção
    }
}
     