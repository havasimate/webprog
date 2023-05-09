
const form = document.querySelector('form');
const emailInput = document.querySelector('#email');
const messageInput = document.querySelector('#message');


form.addEventListener('submit', function(event) {

  event.preventDefault();



  const emailValue = emailInput.value.trim();
  if (!emailValue.match(/^\S+@\S+\.\S+$/)) {
    alert('Az email mező nem érvényes!');
    emailInput.focus();
    return;
  }


  const messageValue = messageInput.value.trim();
  if (messageValue.length > 300) {
    alert('Az üzenet mező nem lehet hosszabb, mint 300 karakter!');
    messageInput.focus();
    return;
  }


  form.submit();
});
