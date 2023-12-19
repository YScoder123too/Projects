<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Page</title>
    <style>
    
    /* .logout-container{
    width:100%;
    min-height:100vh;
     /* background-image:linear-gradient(rgba(192, 219, 255, 0.5),
    rgba(0, 66, 199, 0.5),
    rgba(10, 0, 49, 0.5)),url(poki.jpg); 
    background-color: #5595e2;


    background-image:linear-gradient(rgba(110,84,255,0.5),
    rgba(0,0,0, 0.5),
    rgba(40, 49, 0, 0.5)),url(another.jpeg);
    background-size: cover; 
    background-position: center;
     padding:10px 8%; 
}
 */







        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color:#cae7ff; 
        }

        .logout-container {
            text-align: center;
        }

        .logout-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4285f4;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #0055a5;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <h2>Logout Page</h2>
        <button class="logout-button" onclick="logout()">Logout</button>
    </div>

    <script>
        function logout() {
            // Add logout functionality here
            alert('Logout successful!');
            // Redirect to login page or perform any other logout actions
        }
    </script>
</body>
</html>
