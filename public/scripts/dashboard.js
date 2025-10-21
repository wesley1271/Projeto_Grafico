const btnAdd = document.getElementById('btn-add');
const btnFechar = document.getElementById('btnFechar');
const overlay = document.getElementById('overlay');
const formCreate = document.getElementById('form-create');
const titulo = document.getElementById('titulo');
const descricao = document.getElementById('descricao');
const link = document.getElementById('link');
const projects = document.getElementById('projects');
const toast = document.getElementById('toast');


btnAdd.addEventListener('click', () => {
  overlay.style.display = 'flex';
  titulo.focus();
});

btnFechar.addEventListener('click', () => {
  formCreate.reset();
  overlay.style.display = 'none';
});

overlay.addEventListener('click', (e) => {
  if (e.target === overlay) {
    formCreate.reset();
    overlay.style.display = 'none';
  }
});

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    formCreate.reset();
    overlay.style.display = 'none';
  }
});


formCreate.addEventListener('submit', (e) => {
  e.preventDefault();
  const card = document.createElement('div');
  card.classList.add('card');
  card.innerHTML = `
        <h3>${titulo.value.trim()}</h3>
        <p>${descricao.value.trim()}</p>
        <a href="${link.value.trim()}" target="_blank">${link.value.trim()}</a>
        <div class="btns-card">
          <button class="btn-editar"><i class="fa-solid fa-pen-to-square"></i></button>
          <button class="btn-apagar"><i class="fa-solid fa-trash"></i></button>
        </div>
      `;
  projects.appendChild(card);
  formCreate.reset();
  overlay.style.display = 'none';

  toast.classList.add('show');
  setTimeout(() => toast.classList.remove('show'), 2000);
});