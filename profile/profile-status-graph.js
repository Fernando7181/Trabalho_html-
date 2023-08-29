const assistindo = parseInt(document.querySelector('.bolaStatusVerde + p').textContent);
const dropado = parseInt(document.querySelector('.bolaStatusVermelho + p').textContent);
const completado = parseInt(document.querySelector('.bolaStatusAzul + p').textContent);
const planejado = parseInt(document.querySelector('.bolaStatusAmarelo + p').textContent);

const total = assistindo + dropado + completado + planejado;

const assistindoPorcentagem = (assistindo / total) * 100;
const dropadoPorcentagem = (dropado / total) * 100;
const completadoPorcentagem = (completado / total) * 100;
const planejadoPorcentagem = (planejado / total) * 100;

document.getElementById('Assistindo').style.width = `${assistindoPorcentagem}%`;
document.getElementById('Dropado').style.width = `${dropadoPorcentagem}%`;
document.getElementById('Completado').style.width = `${completadoPorcentagem}%`;
document.getElementById('Planejado').style.width = `${planejadoPorcentagem}%`;