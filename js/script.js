
document.addEventListener('DOMContentLoaded', () => {
  
  const contactForm = document.querySelector('.form-contact');
  if (contactForm) {
    const email = contactForm.querySelector('#email');
    const messageContainer = document.getElementById('message-container');
    const messageComplet = document.getElementById('message-complet');
      let submitBtn = contactForm.querySelector('button[type="submit"]');


      function validateContactForm() {
        const submit = submitBtn || contactForm.querySelector('button[type="submit"], input[type="submit"]');
        const ok = contactForm.checkValidity();
        if (submit) submit.disabled = !ok;
      }

    if (messageContainer && messageComplet) {
      const updateMessageVisibility = () => {
        const hasEmail = email && email.value.trim() !== '';
        if (hasEmail) {
          messageContainer.style.display = '';
          messageComplet.required = false;
        } else {
          messageContainer.style.display = 'none';
          messageComplet.required = false;
        }
      };

      updateMessageVisibility();

      if (email) email.addEventListener('input', () => { updateMessageVisibility(); validateContactForm(); });
    }


    contactForm.querySelectorAll('input, textarea, select').forEach(el => {
      el.addEventListener('input', validateContactForm);
      el.addEventListener('change', validateContactForm);
    });

    validateContactForm();

    contactForm.addEventListener('submit', (e) => {
      if (!contactForm.checkValidity()) {
        e.preventDefault();
        showFieldErrors(contactForm);
      }
    });
  }

  const abonneForm = document.querySelector('.form-abonnez');
  if (abonneForm) {
    const clearErrors = (form) => {
      form.querySelectorAll('.error-message').forEach(n => n.remove());
    };

    const showFieldErrors = (form) => {
      clearErrors(form);
      const fields = Array.from(form.querySelectorAll('input, textarea, select'));
      fields.forEach(field => {
        if (!field.willValidate) return; 
        if (!field.checkValidity()) {
          const msg = getValidationMessage(field);
          const err = document.createElement('div');
          err.className = 'error-message';
          err.textContent = msg;
          field.insertAdjacentElement('afterend', err);
        }
      });
    };

    const getValidationMessage = (field) => {
      if (field.validity.valueMissing) return 'Ce champ est obligatoire.';
      if (field.validity.typeMismatch) return 'Le format est incorrect.';
      if (field.validity.patternMismatch) return 'La valeur ne correspond pas au format attendu.';
      if (field.validity.rangeUnderflow) return 'La valeur est trop petite.';
      if (field.validity.rangeOverflow) return 'La valeur est trop grande.';
      if (field.validity.tooShort) return 'La valeur est trop courte.';
      if (field.validity.tooLong) return 'La valeur est trop longue.';
      return 'Valeur invalide.';
    };

    abonneForm.addEventListener('submit', (e) => {
      clearErrors(abonneForm);
      if (!abonneForm.checkValidity()) {
        e.preventDefault();
        showFieldErrors(abonneForm);
        const firstInvalid = abonneForm.querySelector(':invalid');
        if (firstInvalid) firstInvalid.focus();
      }
    });

    abonneForm.addEventListener('input', (e) => {
      const target = e.target;
      if (!target) return;
      const next = target.nextElementSibling;
      if (next && next.classList && next.classList.contains('error-message')) {
        if (target.checkValidity()) next.remove();
      }
    });
  }

  function showFieldErrors(form) {
    form.querySelectorAll('.error-message').forEach(n => n.remove());
    const fields = Array.from(form.querySelectorAll('input, textarea, select'));
    fields.forEach(field => {
      if (!field.willValidate) return;
      if (!field.checkValidity()) {
        const msg = (function() {
          if (field.validity.valueMissing) return 'Ce champ est obligatoire.';
          if (field.validity.typeMismatch) return 'Le format est incorrect.';
          if (field.validity.patternMismatch) return 'La valeur ne correspond pas au format attendu.';
          return 'Valeur invalide.';
        })();
        const err = document.createElement('div');
        err.className = 'error-message';
        err.textContent = msg;
        field.insertAdjacentElement('afterend', err);
      }
    });
    const firstInvalid = form.querySelector(':invalid');
    if (firstInvalid) firstInvalid.focus();
  }

});
