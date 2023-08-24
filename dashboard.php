<?php
session_start(); // Start or resume the session

// Check if the user is authenticated
if (!isset($_SESSION['username'])) {
    header('Location: login.html'); // Redirect to the login page if not authenticated
    exit;
}

// If the user is authenticated, welcome them
$loggedInUser = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $loggedInUser; ?>!</h2>
    <p>This is your dashboard. You can put any content here that is relevant to the logged-in user.</p>
    
    <!-- Add a logout button to end the session -->
    <form action="logout.php" method="POST">
        <input type="submit" value="Logout">
    </form>

    <canvas id="myChart"></canvas>
    <script>
   // Get the canvas element
   var ctx = document.getElementById('myChart').getContext('2d');

   // Sample data for the chart
   var data = {
      labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5'],
      datasets: [{
         label: 'Sample Data',
         data: [12, 19, 3, 5, 2],
         backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)'
         ],
         borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)'
         ],
         borderWidth: 1
      }]
   };

   // Create the chart
   var myChart = new Chart(ctx, {
      type: 'bar',
      data: data,
      options: {
         scales: {
            y: {
               beginAtZero: true
            }
         }
      }
   });
</script>

</body>
</html>
