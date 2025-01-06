<?php
include 'config.php'; // File koneksi database

// Proses Tambah Tugas
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $deadline = $_POST['deadline'];

    $sql = "INSERT INTO tasks (title, description, priority, deadline)
            VALUES ('$title', '$description', '$priority', '$deadline')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Tugas berhasil ditambahkan!');</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemen Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Jadwalku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Daftar Tugas</a>
                    </li>
                </ul>
            </div>
            <button id="themeToggle" class="btn btn-outline-secondary">Dark Mode</button>
        </div>
    </nav>
    <script src="script.js"></script>
    <div class="container my-4">
        <h1 class="text-left mb-4">Tambah Tugas</h1>

        <!-- Form Tambah Tugas -->
        <form method="POST" action="" class="mb-4">
            <div class="mb-3">
                <label for="title" class="form-label">Judul Tugas</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="priority" class="form-label">Prioritas</label>
                <select class="form-select" id="priority" name="priority" required>
                    <option value="low">Rendah</option>
                    <option value="medium">Sedang</option>
                    <option value="high">Tinggi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="deadline" class="form-label">Deadline</label>
                <input type="date" class="form-control" id="deadline" name="deadline" required>
            </div>
            <button type="submit" name="add_task" class="btn btn-primary">Tambah Tugas</button>
        </form>
