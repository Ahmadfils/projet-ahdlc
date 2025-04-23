
const toggleButtons = document.querySelectorAll('.toggle-btn');
const loginForm = document.querySelector('.login-form');
const registerForm = document.querySelector('.register-form');

toggleButtons.forEach(button => {
    button.addEventListener('click', () => {
        toggleButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        if (button.dataset.toggle === 'login') {
            loginForm.classList.add('active');
            registerForm.classList.remove('active');
        } else {
            registerForm.classList.add('active');
            loginForm.classList.remove('active');
        }
    });
});