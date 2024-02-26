// scrollPosition.js
window.onbeforeunload = function() {
    localStorage.setItem("scrollPosition", window.scrollY);
  };
  
  window.onload = function() {
    if (localStorage.getItem("scrollPosition")) {
      window.scrollTo(0, localStorage.getItem("scrollPosition"));
      localStorage.removeItem("scrollPosition"); // Opcional: limpar após o uso
    }
  };
  