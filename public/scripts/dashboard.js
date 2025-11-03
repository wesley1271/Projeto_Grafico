const btnAdd = document.getElementById('btn-add');
const btnFechar = document.getElementById('btnFechar');
const overlay = document.getElementById('overlay');
const formCreate = document.getElementById('form-create');
const titulo = document.getElementById('titulo');
const descricao = document.getElementById('descricao');
const link = document.getElementById('link');
const toast = document.getElementById('toast');
const toastDEL = document.getElementById('toastDEL')

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

if (window.location.search.includes('success=1')) {
  toast.classList.add('show');
  setTimeout(() => toast.classList.remove('show'), 2000);

  const url = new URL(window.location);
  url.searchParams.delete('success');
  window.history.replaceState({}, document.title, url);
}

if (window.location.search.includes('success=2')) {
  toastDEL.classList.add('show');
  setTimeout(() => toastDEL.classList.remove('show'), 2000);

  const url = new URL(window.location);
  url.searchParams.delete('success');
  window.history.replaceState({}, document.title, url);
}
