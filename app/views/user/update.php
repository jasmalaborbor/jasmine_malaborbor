<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User/Update</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #cfe9db, #e6f4ea); /* soft green gradient */
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form-container {
      background: #ffffff;
      border-radius: 20px;
      padding: 40px 35px;
      width: 100%;
      max-width: 420px;
      box-shadow: 0 10px 30px rgba(0, 50, 30, 0.1);
      animation: fadeIn 0.7s ease-in-out;
    }

    .form-container h1 {
      text-align: center;
      margin-bottom: 25px;
      font-size: 26px;
      font-weight: 600;
      color: #2c5c45; /* dark forest green */
    }

    label {
      display: block;
      margin-top: 18px;
      margin-bottom: 6px;
      color: #3b6f5a;
      font-size: 14px;
      font-weight: 500;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 12px 14px;
      border: 2px solid #cfe9db;
      border-radius: 10px;
      font-size: 15px;
      color: #2c3e50;
      background: #f9fdfa;
      transition: border 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      border-color: #47a386;
      outline: none;
      background-color: #ffffff;
    }

    input[type="submit"] {
      margin-top: 30px;
      width: 100%;
      padding: 14px;
      background: linear-gradient(to right, #2e8b57, #47a386);
      color: white;
      font-size: 16px;
      font-weight: 600;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    input[type="submit"]:hover {
      background: linear-gradient(to right, #47a386, #2e8b57);
      transform: translateY(-2px);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
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
    <h1>Update User</h1>
    <form method="post" action="<?= site_url('user/update/'.$user['id']) ?>">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" value="<?= html_escape($user['username']) ?>" required>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="<?= html_escape($user['email']) ?>" required>

      <input type="submit" value="Update User">
    </form>
  </div>
</body>
</html>
