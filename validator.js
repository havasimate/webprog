
const form = document.querySelector('form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');
const messageInput = document.querySelector('#message');


form.addEventListener('submit', function(event) {

  event.preventDefault();


  const nameValue = nameInput.value.trim();
  if (nameValue.length < 2 || nameValue.length > 50) {
    alert('A név mezőnek legalább 2 és legfeljebb 50 karakter hosszúnak kell lennie!');
    nameInput.focus();
    return;
  }


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
