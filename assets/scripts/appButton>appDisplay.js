/************************
* Importação de Módulos
************************/
// Módulos do Node.js (para aplicativos no lado do servidor)
    // const fs = require('fs');
    // const http = require('http');
// Adicione outras importações de módulos conforme necessário

// Módulos do navegador (para aplicativos no lado do cliente)
// Exemplo: <script src="caminho_do_arquivo.js"></script>

/************************
* PROGRAME AQUI
************************/

window.onload = function () {
    const buttons = document.querySelectorAll('.app');
    const iframe = document.getElementById('appViewer');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            iframe.src = this.value;
        });
    });
};