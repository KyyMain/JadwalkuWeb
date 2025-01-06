document.getElementById('themeToggle').addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
});

fetch('fetch_tasks.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('tasks').innerHTML = data;
    });
