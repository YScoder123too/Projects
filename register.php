<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Secure Registration</title>
  <style>

     *{
        background-color:lightcyan;
     }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .registration-container {
      width: 300px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .registration-container label {
      display: block;
      margin-bottom: 8px;
    }

    .registration-container input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    .registration-container button {
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="registration-container">
    <h2>Registration</h2>
    <form id="registrationForm">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required>

      <button type="button" onclick="registerUser()">Register</button>
    </form>
  </div>

  <script>
    function registerUser() {
      // Implement secure registration logic here
      // For demonstration purposes, you can validate inputs on the client side
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;
      var email = document.getElementById('email').value;
      var phone = document.getElementById('phone').value;

      // Perform input validation (customize based on your requirements)
      if (!username || !password || !email || !phone) {
        alert('Please fill in all fields.');
        return;
      }

      // You may want to send the data to a secure server for further processing and storage
      // Example: Send data using Fetch API or XMLHttpRequest to a secure backend endpoint
      // fetch('https://your-secure-backend.com/register', {
      //   method: 'POST',
      //   headers: {
      //     'Content-Type': 'application/json',
      //   },
      //   body: JSON.stringify({ username, password, email, phone }),
      // })
      // .then(response => response.json())
      // .then(data => {
      //   console.log('Success:', data);
      // })
      // .catch((error) => {
      //   console.error('Error:', error);
      // });
    }
  </script>
</body>
</html>
