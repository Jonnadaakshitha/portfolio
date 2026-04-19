// 1. Password Match & Validation
const registerForm = document.getElementById('registerForm');
if (registerForm) {
    registerForm.addEventListener('submit', (e) => {
        const pass = document.getElementById('regPassword').value;
        const confirm = document.getElementById('confirmPassword').value;
        if (pass !== confirm) {
            e.preventDefault();
            alert("Passwords do not match!");
        }
    });
}

// 2. REAL AJAX/FETCH (Requirement #4)
const emailInput = document.getElementById('regEmail');
const feedback = document.getElementById('emailCheckFeedback');

if (emailInput) {
    emailInput.addEventListener('blur', function() {
        const emailValue = this.value;
        if (emailValue.length > 5) {
            feedback.innerHTML = "Searching...";
            
            // This is the AJAX call to your PHP file
            fetch(`check-user.php?email=${emailValue}`)
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'taken') {
                        feedback.innerHTML = `<span class="text-danger">${data.message}</span>`;
                        emailInput.classList.add('is-invalid');
                    } else {
                        feedback.innerHTML = `<span class="text-success">${data.message}</span>`;
                        emailInput.classList.remove('is-invalid');
                    }
                });
        }
    });
}

// 3. Show/Hide Password Toggle
document.querySelectorAll('.toggle-pass').forEach(btn => {
    btn.addEventListener('click', function() {
        const target = this.previousElementSibling;
        const type = target.type === 'password' ? 'text' : 'password';
        target.type = type;
        this.innerText = type === 'password' ? 'Show' : 'Hide';
    });
});