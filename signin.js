const loginForm = document.getElementById('loginForm');
if(loginForm){
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        if(!email || !password) 
            return alert('Please fill in all fields.');
        alert('Login successful!');
        window.location.href = 'Cineluxe.html';
});
}
const registerForm = document.getElementById('registerForm');
if(registerForm){
    registerForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const username = document.getElementById('username').value;
        const email = document.getElementById('regEmail').value;
        const password = document.getElementById('regPassword').value;
        const confirm=document.getElementById('confirmPassword').value;
        if(!username || !email || !password || !confirm) return alert('Please fill in all fields.');
        if(password !== confirm) return alert('Passwords do not match.');
        alert('Registration successful!');
        window.location.href = 'loginform.html';
    });
}