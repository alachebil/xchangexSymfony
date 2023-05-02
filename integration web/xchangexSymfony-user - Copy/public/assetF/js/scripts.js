window.onload = () => {
    // On va chercher toutes les étoiles
    const stars = document.querySelectorAll(".la-star");
  
    // On va chercher l'input
    const note = document.querySelector("#note");
  
    // On boucle sur les étoiles pour ajouter des écouteurs d'évènements
    for (const star of stars) {
      // On écoute le survol
      star.addEventListener("mouseover", function () {
        resetStars();
        this.style.color = "red";
        this.classList.add("las");
        this.classList.remove("lar");
        // L'élément précédent dans le DOM (de même niveau, balise soeur)
        let previousStar = this.previousElementSibling;
  
        while (previousStar) {
          // On passe l'étoile qui précède en rouge
          previousStar.style.color = "red";
          previousStar.classList.add("las");
          previousStar.classList.remove("lar");
          // On récupère l'étoile qui la précède
          previousStar = previousStar.previousElementSibling;
        }
      });
  
      // On écoute le clic
      star.addEventListener("click", function () {
        note.value = this.dataset.value;
      });
  
      star.addEventListener("mouseout", function () {
        resetStars(note.value);
      });
    }
  
    document.querySelector('button[type="submit"]').addEventListener('click', function (event) {
      event.preventDefault();
      const noteInput = document.getElementById('note');
      const selectedStar = document.querySelector('.las');
      if (selectedStar !== null) {
        noteInput.value = selectedStar.getAttribute('data-value');
        event.target.closest('form').submit();
      } else {
        alert('Merci de sélectionner une note.');
      }
    });
  
    /**
     * Reset des étoiles en vérifiant la note dans l'input caché
     * @param {number} note
     */
    function resetStars(note = 0) {
      for (const star of stars) {
        if (star.dataset.value > note) {
          star.style.color = "black";
          star.classList.add("lar");
          star.classList.remove("las");
        } else {
          star.style.color = "red";
          star.classList.add("las");
          star.classList.remove("lar");
        }
      }
    }
  }
  