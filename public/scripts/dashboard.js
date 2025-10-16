const forms = document.querySelectorAll('.form-group');
const btnAdd = document.getElementById('btn-add');
const btnFechar = document.getElementById('btnFechar');
const overlay = document.getElementById('overlay');
const formCreate = document.getElementById('form-create');

btnAdd.addEventListener('click', () => {
  overlay.style.display = 'flex';
  forms.forEach(form => {
    form.style.display = 'flex';
  });
});


const titulo = document.getElementById('titulo')
const descricao = document.getElementById('descricao')
const link = document.getElementById('link')



formCreate.addEventListener('submit', (e) => {
  e.preventDefault();
  const card = document.createElement('div');
  card.classList.add('card');

  const projects = document.getElementById('projects');
  projects.appendChild(card);

  card.innerHTML = `
  <h3>${titulo.value.trim()}</h3>
  <p>${descricao.value.trim()}</p>
  <a href="${link.value.trim()}"target="_blank">${link.value.trim()}</a>
  `;
  formCreate.reset();
  overlay.style.display = 'none';
  formCreate.style.display = 'none';

});

btnFechar.addEventListener('click', () => {
   
 formCreate.reset();
  overlay.style.display = 'none';
  formCreate.style.display = 'none';

})