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
      padding: 40px 20px;
      background: #fafafa;
      color: #333;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    h1 {
      text-align: center;
      margin-bottom: 40px;
      font-weight: 600;
      font-size: 28px;
      color: #222;
    }

    .create-btn {
      display: inline-block;
      background: transparent;
      color: #1a73e8;
      border: 2px solid #1a73e8;
      padding: 10px 24px;
      border-radius: 25px;
      font-size: 15px;
      font-weight: 600;
      text-decoration: none;
      transition: background-color 0.3s ease, color 0.3s ease;
      box-shadow: none;
    }

    .create-btn:hover {
      background-color: #1a73e8;
      color: #fff;
      box-shadow: none;
      transform: translateY(-2px);
    }

    .table-wrapper {
      width: 100%;
      max-width: 900px;
      margin: 0 auto;
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      min-width: 600px;
      background: #fff;
      box-shadow: 0 0 0 1px #ddd;
      border-radius: 8px;
      overflow: hidden;
    }

    thead tr {
      background: #f5f5f5;
      font-weight: 600;
      text-transform: uppercase;
      font-size: 13px;
      color: #555;
    }

    th, td {
      padding: 14px 20px;
      text-align: left;
      border-bottom: 1px solid #eee;
      font-size: 15px;
    }

    tbody tr:last-child td {
      border-bottom: none;
    }

    tr:hover {
      background-color: #f9f9f9;
      transition: background-color 0.2s ease;
    }

    .action-btn {
      font-size: 14px;
      font-weight: 600;
      padding: 6px 14px;
      border-radius: 20px;
      text-decoration: none;
      display: inline-block;
      border: 1.5px solid transparent;
      transition: all 0.3s ease;
      cursor: pointer;
      user-select: none;
    }

    .edit-btn {
      background-color: transparent;
      color: #1a73e8;
      border-color: #1a73e8;
      margin-right: 8px;
    }

    .edit-btn:hover {
      background-color: #1a73e8;
      color: #fff;
      border-color: #1a73e8;
    }

    .delete-btn {
      background-color: transparent;
      color: #d93025;
      border-color: #d93025;
    }

    .delete-btn:hover {
      background-color: #d93025;
      color: #fff;
      border-color: #d93025;
    }

    @media (max-width: 768px) {
      body {
        padding: 30px 10px;
      }

      .create-btn {
        width: 100%;
        text-align: center;
        display: block;
        margin-bottom: 25px;
      }

      table {
        min-width: 100%;
      }
    }
  </style>
</head>
<body>

  <h1>Welcome to User List</h1>

  <div style="width: 100%; max-width: 900px; margin: 0 auto 30px auto; text-align: right;">
    <a href="<?= site_url('user/create'); ?>" class="create-btn">+ Create New User</a>
  </div>

  <div class="table-wrapper">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
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
      </tbody>
    </table>
  </div>

</body>
</html>
