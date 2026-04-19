document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.querySelector('form');

    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            // Simple validation check
            const name = document.querySelector('input[name="name"]').value;
            if (name.length < 2) {
                alert("Please enter a valid name.");
                e.preventDefault(); // Stops the form from sending
            } else {
                console.log("Form is valid, sending data...");
            }
        });
    }
});