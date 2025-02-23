<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pomodoro Timer</title>
    <link rel="stylesheet" href="assets/css/pomodoro.css">
</head>
<body>
    <div class="container">
        <h1>Pomodoro Timer</h1>
        <div id="timer">
            <span id="time">25:00</span>
        </div>
        <div>
            <label for="break">Select Break Duration:</label>
            <select id="breakTime">
                <option value="5">5 minutes</option>
                <option value="10">10 minutes</option>
                <option value="15">15 minutes</option>
            </select>
        </div>
        <div class="controls">
            <button id="startBtn">Start</button>
            <button id="pauseBtn">Pause</button>
            <button id="resetBtn">Reset</button>
        </div>
        <div id="status">Focus to Your Studies</div>
    </div>
    <script src="assets/js/pomodoro.js"></script>
</body>