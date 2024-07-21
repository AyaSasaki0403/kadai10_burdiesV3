document.addEventListener('DOMContentLoaded', function() {
    const errorMessage = sessionStorage.getItem('error');
    if (errorMessage) {
        document.getElementById('error-message').textContent = errorMessage;
        sessionStorage.removeItem('error');
    }
});