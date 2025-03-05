<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

$userEmail = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Center Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #e7f3fe;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .dashboard-container {
            background: #fff;
            width: 700px;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .dashboard-container h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 1rem;
        }
        .dashboard-container p {
            font-size: 1.2rem;
            color: #34495e;
            margin-bottom: 2rem;
        }
        .dashboard-container .logout-btn {
            background-color: #2980b9;
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .dashboard-container .logout-btn:hover {
            background-color: #1a5276;
        }
        .motivational-quote {
            font-size: 1.1rem;
            color: #555;
            margin: 1.5rem 0;
            font-style: italic;
        }
        .fitness-classes {
            text-align: left;
            margin: 1rem 0;
        }
        .fitness-classes h2 {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }
        .fitness-classes ul {
            list-style-type: none;
            padding: 0;
        }
        .fitness-classes li {
            background: #d5e8f6;
            margin: 0.5rem 0;
            padding: 0.5rem;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .fitness-classes li .class-time {
            font-weight: bold;
            color: #2980b9;
        }
        .workout-tracking {
            margin-top: 2rem;
            text-align: left;
            background: #f9f9f9;
            padding: 1rem;
            border-radius: 5px;
        }
        .workout-tracking h3 {
            font-size: 1.5rem;
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome to Your Fitness Dashboard</h1>
        <p>Hello, <?php echo htmlspecialchars($userEmail); ?>!</p>
        <p class="motivational-quote">"Push yourself because no one else is going to do it for you!"</p>
        
        <div class="fitness-classes">
            <h2>Available Fitness Classes</h2>
            <ul>
                <li>Yoga <span class="class-time">Mondays & Wednesdays, 6 PM</span></li>
                <li>HIIT <span class="class-time">Tuesdays & Thursdays, 7 PM</span></li>
                <li>Pilates <span class="class-time">Fridays, 5 PM</span></li>
                <li>Spin Class <span class="class-time">Saturdays, 8 AM</span></li>
            </ul>
        </div>

        <div class="workout-tracking">
            <h3>Your Workout Progress</h3>
            <p>Keep track of your workouts and stay motivated!</p>
            <ul>
                <li>Monday: 30 mins Cardio</li>
                <li>Wednesday: 1 hour Strength Training</li>
                <li>Friday: 45 mins Yoga</li>
            </ul>
        </div>

        <button class="logout-btn" onclick="window.location.href='logout.php'">Logout</button>
    </div>
</body>
</html>