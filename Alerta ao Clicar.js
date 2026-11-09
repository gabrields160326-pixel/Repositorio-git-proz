let meuBotao = document.createElement('button');


meuBotao.innerText = 'Clique em mim';


meuBotao.addEventListener('click', function() {
    alert('Você clicou no botão!');
});


document.body.appendChild(meuBotao);

