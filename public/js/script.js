const splash = document.getElementById('splash');
    let splashHidden = false;

    function hideSplash() {
      if (!splashHidden) {
        splash.classList.add('hide');
        splashHidden = true;
        setTimeout(() => {
          splash.style.display = 'none';
        }, 800); // sesuai durasi animasi
      }
    }

    // Auto hilang saat scroll pertama kali
    window.addEventListener('scroll', () => {
      if (!splashHidden) {
        hideSplash();
      }
    });