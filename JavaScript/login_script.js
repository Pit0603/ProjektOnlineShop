function saveUsernameToLocalStorage(username) {
    localStorage.setItem('savedUsername', username);
}

function loadUsernameFromLocalStorage() {
    return localStorage.getItem('savedUsername') || '';
}

function setText(username) {
    document.getElementById('usernameText').innerText = `${username}`;
}

function login() {
    const usernameInput = document.getElementById('username').value;
    const passwordInput = document.getElementById('password').value;

    if (usernameInput && passwordInput) {
        saveUsernameToLocalStorage(usernameInput);

        // Update the text of the "Anmelden"-button
        document.getElementById('loginButton').innerText = `Anmelden als ${usernameInput}`;

        // Call the setText function if it's defined
        if (typeof setText === 'function') {
            setText(usernameInput);
        }

        console.log(`User ${usernameInput} logged in with Password: ${passwordInput}`);
        // Hier kannst du weitere Aktionen für den erfolgreichen Login durchführen
    } else {
        console.error("Please provide both username and password.");
    }
}

// Lade den Benutzernamen beim Seitenladen
document.addEventListener('DOMContentLoaded', function() {
    const savedUsername = loadUsernameFromLocalStorage();
    if (savedUsername && document.getElementById('usernameText')) {
        setText(savedUsername);
    }
});