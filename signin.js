const loginForm = document.getElementById('login-form');
if(loginForm){
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        if(!email || !password) 
            return alert('Please fill in all fields.');
        alert('Login successful!');
        window.location.href = 'Cineluxe.html';
}