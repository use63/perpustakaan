<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="/public/css/style.css">
  <link rel="stylesheet" href="/public/css/login.css">
</head>
<body>

<div class="container-fluid login">
  <div class="form">
    <?php
    session_start();
    if (isset($_SESSION['error_message'])) {
      echo "<div style='padding: 1em; margin: 1em 0; background-color: red; border-radius: 8px; color: white;'>" . $_SESSION['error_message'] . "</div>";
      unset($_SESSION['error_message']); // Hapus pesan kesalahan setelah ditampilkan
    }
    ?>

    <form action="auth" method="post">
      <div class="form-item">
        <label class="label" for="email">Email</label>
        <input type="text" id="email" name="email">
      </div>
      <div class="form-item">
        <label class="label" for="password">Password</label>
        <input type="password" id="password" name="password">
      </div>
      <div class="form-item">
        <button>Login</button>
        <a href="/">Home</a>
      </div>
    </form>
  </div>
</div>

</body>
</html>
