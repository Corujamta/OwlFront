function orcamento(){
    window.location.href = 'formulario.php';
}

  const detailsElements = document.querySelectorAll('details');

  detailsElements.forEach(details => {
      details.addEventListener('toggle', () => {
          if (details.open) {
              detailsElements.forEach(otherDetails => {
                  if (otherDetails !== details) {
                      otherDetails.open = false;
                  }
              });
          }
      });
  });
  // function toggleMenu1() {
  //   var menu = document.getElementById("menu1");
  //   var body = document.body;
  
  //   menu.classList.toggle("active");
  
  //   body.classList.toggle("menu-open");
  // }
  // Seleciona os elementos do formulário e do pop-up
const formulario = document.getElementById('meuFormulario');
const popup = document.getElementById('popup');

// Função para exibir o pop-up de sucesso
function mostrarPopup() {
    popup.style.display = 'flex';  // Exibe o pop-up
}

// Função para fechar o pop-up
function fecharPopup() {
    popup.style.display = 'none';  // Esconde o pop-up
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 1000);
}
