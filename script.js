function login() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Create an object with the data
    const data = {
        email: email,
        password: password
    };

    // Send data to the server using Fetch API
    fetch('send_email.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        alert('Login data sent!');
        console.log('Success:', data);
    })
    .catch((error) => {
        alert('Error sending data');
        console.error('Error:', error);
    });
}