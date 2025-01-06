<?php
include 'config.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='task-card card priority-" . $row['priority'] . "'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>" . $row['title'] . "</h5>";
        echo "<p class='card-text'>" . $row['description'] . "</p>";
        echo "<p class='text-danger'>Deadline: " . $row['deadline'] . "</p>";
        echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Hapus</a>";
        echo "</div></div>";
    }
} else {
    echo "<p>Tidak ada tugas.</p>";
}
$conn->close();
?>
