<?php
include('session.php');
include('header.php');

echo "<h1>Advanced Attendance Statistics</h1>";

// Use a chart library like Chart.js for graphs
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<canvas id="attendanceChart"></canvas>

<script>
var ctx = document.getElementById('attendanceChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
        datasets: [{
            label: 'Attendance',
            data: [12, 19, 3, 5, 2],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

<?php include('footer.php'); ?>
