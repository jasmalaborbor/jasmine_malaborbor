<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Create User</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form-container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(12px);
      border-radius: 20px;
      padding: 40px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.25);
      animation: fadeIn 0.8s ease-in-out;
    }

    .form-container h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #ffffff;
      font-weight: 600;
      font-size: 26px;
    }

    label {
      display: block;
      color: #e0e0e0;
      margin-bottom: 6px;
      font-size: 14px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 12px 15px;
      margin-bottom: 20px;
      border: none;
      border-radius: 10px;
      background-color: rgba(255, 255, 255, 0.2);
      color: #fff;
      font-size: 15px;
      transition: background 0.3s ease;
    }

    input::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }

    input:focus {
      background-color: rgba(255, 255, 255, 0.3);
      outline: none;
      box-shadow: 0 0 0 2px #00c6ff;
    }

    input[type="submit"] {
      width: 100%;
      padding: 14px;
      background: linear-gradient(to right, #00c6ff, #0072ff);
      color: white;
      font-weight: bold;
      font-size: 16px;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    input[type="submit"]:hover {
      background: linear-gradient(to right, #0072ff, #00c6ff);
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0, 198, 255, 0.5);
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(-15px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 480px) {
      .form-container {
        padding: 30px 20px;
        width: 90%;
      }
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Create New User</h1>
    <form method="post" action="">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter username" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter email" required>

      <input type="submit" value="Create User">
    </form>
  </div>
</body>
</html>
