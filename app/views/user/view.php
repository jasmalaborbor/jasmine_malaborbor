<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User View</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 20px;
      background: linear-gradient(to right, #d0ecd8, #e6f4ea);
      color: #2c3e50;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
      font-weight: 600;
      color: #1e3d2f;
    }

    .create-btn {
      display: inline-block;
      background: linear-gradient(to right, #1e3d2f, #3b7b59);
      color: white;
      padding: 12px 24px;
      border-radius: 30px;
      font-size: 15px;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s ease;
      box-shadow: 0 4px 14px rgba(30, 61, 47, 0.3);
    }

    .create-btn:hover {
      background: #2e5c46;
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(30, 61, 47, 0.45);
    }

    .table-wrapper {
      width: 100%;
      max-width: 1000px;
      margin: 0 auto;
      overflow-x: auto;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      animation: fadeIn 0.6s ease-in-out;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      min-width: 600px;
    }

    th, td {
      padding: 16px 20px;
      text-align: center;
      font-size: 15px;
    }

    th {
      background: #1e3d2f;
      color: #ffffff;
      text-transform: uppercase;
      font-size: 13px;
      letter-spacing: 0.5px;
    }

    tr:nth-child(even) {
      background: #f7fdf9;
    }

    tr:nth-child(odd) {
      background: #ffffff;
    }

    tr:hover {
      background: #e0f5e8;
      transition: background 0.3s ease;
    }

    .action-btn {
      padding: 8px 16px;
      border-radius: 25px;
      font-size: 13px;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s;
      display: inline-block;
    }

    .edit-btn {
      background: #28a745;
      color: #fff;
      margin-right: 8px;
      box-shadow: 0 2px 6px rgba(40, 167, 69, 0.4);
    }

    .edit-btn:hover {
      background: #218838;
    }

    .delete-btn {
      background: #dc3545;
      color: #fff;
      box-shadow: 0 2px 6px rgba(220, 53, 69, 0.4);
    }

    .delete-btn:hover {
      background: #b21f2d;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
      th, td {
        padding: 12px 10px;
        font-size: 14px;
      }

      .create-btn {
        width: 100%;
        text-align: center;
        display: block;
        margin: 0 auto 20px auto;
      }
    }
  </style>
</head>
<body>

  <h1>Welcome to User List</h1>

  <div style="width: 100%; max-width: 1000px; margin: 0 auto 25px auto; text-align: right;">
    <a href="<?= site_url('user/create'); ?>" class="create-btn">+ Create New User</a>
  </div>

  <div class="table-wrapper">
    <table>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Action</th>
      </tr>

      <?php foreach ($users as $user): ?>
        <tr>
          <td><?= $user['id']; ?></td>
          <td><?= $user['username']; ?></td>
          <td><?= $user['email']; ?></td>
          <td>
            <a href="<?= site_url('user/update/'.$user['id']); ?>" class="action-btn edit-btn">Edit</a>
            <a href="<?= site_url('user/delete/'.$user['id']); ?>" class="action-btn delete-btn"
               onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

</body>
</html>
