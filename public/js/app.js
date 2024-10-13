function toggleForm(e){ // Função para mostrar form login ou cadastro conforme navegação
    var form = e.target.getAttribute('href');
    
    // Adicionando Classe ao elemento clicado e removendo dos demais
    var element = document.querySelector('.toggleForm.active');
    element.classList.remove('active');

    e.target.classList.add('active');

    var formElement = document.getElementById(form);

    formElement.scrollIntoView({behavior: "smooth"})
}