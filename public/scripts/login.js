const toast = document.getElementById('toast');

if (window.location.search.includes('success=1')) {
  toast.classList.add('show');
  setTimeout(() => toast.classList.remove('show'), 2000);

  const url = new URL(window.location);
  url.searchParams.delete('success');
  window.history.replaceState({}, document.title, url);
}