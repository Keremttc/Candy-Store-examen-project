  // Registreer Modal
var modal = document.getElementById('myModal');
var btn = document.getElementById('openModal');
var span = document.getElementById('closeModal');

btn.onclick = function() {
  modal.style.display = 'block';
}

span.onclick = function() {
  modal.style.display = 'none';
}

window.onclick = function(event) {
  if (event.target === modal) {
    modal.style.display = 'none';
  }
}


// <!-- Zoekbalk functie (Recep) -->

  /* <!-- User Story 6 --> */
  const searchInput = document.getElementById('search');

  searchInput.addEventListener('change', function() {
    const searchValue = this.value.trim().toLowerCase(); 

    if (searchValue === 'snoep') {
      window.location.href = '/Candy-Store-examen-project/snoep.php';
    } else if (searchValue === 'chips') {
      window.location.href = '/Candy-Store-examen-project/chips.php';
    } else if (searchValue === 'drinken') {
      window.location.href = '/Candy-Store-examen-project/softdrink.php';
    } else if (searchValue === 'softdrink') {
      window.location.href = '/Candy-Store-examen-project/softdrink.php';
    } else if (searchValue === 'contact') {
      window.location.href = '/Candy-Store-examen-project/contact.php';
    } else {
      // Pagina bestaat niet alert
      alert('Kon pagina niet vinden, probeer nogmaals.');
    }
  });


