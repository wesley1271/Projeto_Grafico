/* Botões */

const btnAdd = document.getElementById('btn-add');
const btnFechar = document.getElementById('btnFechar');
const btnFechar_edit = document.getElementById('btnFechar-edit');
const btnsEdit = document.querySelectorAll('.btn-edit');


/* Elementos do form */
const overlay = document.getElementById('overlay');
const overlay_edit = document.getElementById('overlay-edit');
const formCreate = document.getElementById('form-create');
const formEdit = document.getElementById('form-edit');
const titulo = document.getElementById('titulo');
const titulo_edit = document.getElementById('titulo-edit');
const descricao = document.getElementById('descricao');
const descricao_edit = document.getElementById('descricao-edit');
const link_edit = document.getElementById('link-edit');


const toast = document.getElementById('toast');
const toastDEL = document.getElementById('toastDEL')


/* ---------------- Erros  ------------ */
const erroTitulo = document.getElementById('erro-title');
const erroDesc = document.getElementById('erro-desc');
const erroLink = document.getElementById('erro-link');



/* Funcao que valida utilizando blur */
function validacaoForm() {
  titulo.addEventListener('blur', () => {
    const valorTitulo = titulo.value.trim();

    erroTitulo.textContent = '';
    titulo.style.border = '';

    if (valorTitulo === '') {
      erroTitulo.textContent = 'Titulo é obrigatório.'
      titulo.style.border = '2px solid #dc3545 '

    }


  });

  link.addEventListener('blur', () => {
    const valorLink = link.value.trim()

    erroLink.textContent = ''
    link.style.border = '';

    if (valorLink === '') {
      erroLink.textContent = 'Link é obrigatório.'
      link.style.border = '2px solid #dc3545 '
    }

  });


}

validacaoForm();

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



/* Modal de edição */

btnsEdit.forEach((btn) => {
  btn.addEventListener('click', () => {
    overlay_edit.style.display = 'flex';
    titulo_edit.focus();
  });
});

btnFechar_edit.addEventListener('click', () => {
  formEdit.reset();
  overlay_edit.style.display = 'none';
});

overlay_edit.addEventListener('click', (e) => {
  if (e.target === overlay_edit) {
    formEdit.reset();
    overlay_edit.style.display = 'none';
  }
});