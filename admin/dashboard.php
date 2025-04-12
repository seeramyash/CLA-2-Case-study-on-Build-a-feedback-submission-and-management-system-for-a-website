<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include '../db.php';
$results = $conn->query("SELECT * FROM feedback ORDER BY submitted_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="container my-5">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Feedback Dashboard</h2>
    <div>
      <button onclick="toggleDarkMode()" class="btn btn-dark btn-sm">🌙 Dark Mode</button>
      <a href="logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-bordered">
      <thead class="table-dark">
        <tr>
          <th>Name</th><th>Email</th><th>Rating</th><th>Message</th><th>Time</th><th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $results->fetch_assoc()): ?>
        <tr>
          <td><?= htmlspecialchars($row['name']) ?></td>
          <td><?= htmlspecialchars($row['email']) ?></td>
          <td><?= $row['rating'] ?></td>
          <td><?= htmlspecialchars($row['message']) ?></td>
          <td><?= $row['submitted_at'] ?></td>
          <td><a class="btn btn-sm btn-danger" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this feedback?')">Delete</a></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

  <script>
    function toggleDarkMode() {
      document.body.classList.toggle("dark");
    }
  </script>
</body>
</html>
