document.getElementById('loginForm').addEventListener('submit', function(event) {
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();

    
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!email || !emailRegex.test(email)) {
      alert('Por favor, insira um email válido.');
      event.preventDefault();
      return;
    }

    if (!password || password.length < 6) {
      alert('A senha deve ter pelo menos 6 caracteres.');
      event.preventDefault();
      return;
    }

  });
