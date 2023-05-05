const copiarBotao = document.querySelector('.copiar');
const resultadoInput = document.querySelector('.resultado');

copiarBotao.addEventListener('click', () => {
  resultadoInput.select();
  resultadoInput.setSelectionRange(0, 99999);
  document.execCommand('copy');
  alert('Copiado com sucesso!');
});




