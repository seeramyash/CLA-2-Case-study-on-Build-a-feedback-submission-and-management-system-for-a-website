<?php
session_start();
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    if ($result && password_verify($password, $result['password'])) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
    } else {
        $error = "Invalid login";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="container my-5">
  <div class="container form-container">
    <h2>Admin Login</h2>
    <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <form method="POST">
      <input class="form-control" type="text" name="username" placeholder="Username" required><br>
      <input class="form-control" type="password" name="password" placeholder="Password" required><br>
      <button class="btn btn-primary" type="submit">Login</button>
    </form>
  </div>
</body>
</html>
