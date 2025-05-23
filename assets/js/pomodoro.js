let studyTime = 25 * 60; 
let breakTime = 5 * 60; 
let timeLeft = studyTime; 
let timerInterval;
let isWorkTime = true;

const timerDisplay = document.getElementById("time");
const startButton = document.getElementById("startBtn");
const pauseButton = document.getElementById("pauseBtn");
const resetButton = document.getElementById("resetBtn");
const statusDisplay = document.getElementById("status");
const breakTimeSelect = document.getElementById("breakTime");

if ("Notification" in window) {
    Notification.requestPermission().then(permission => {
        if (permission === "granted") {
            console.log("Notifications enabled.");
        }
    });
}

breakTimeSelect.addEventListener("change", () => {
    breakTime = parseInt(breakTimeSelect.value) * 60; 
});

function sendNotification(message) {
    if ("Notification" in window && Notification.permission === "granted") {
        new Notification("Pomodoro Timer", {
            body: message,
            icon: "https://cdn-icons-png.flaticon.com/512/1069/1069181.png", 
        });
    }
}

function startTimer() {
    timerInterval = setInterval(() => {
        if (timeLeft <= 0) {
            clearInterval(timerInterval);
            if (isWorkTime) {
                statusDisplay.textContent = "Break Time";
                timeLeft = breakTime;
                sendNotification("Time to take a break! 🎉");
            } else {
                statusDisplay.textContent = "Focus Mode";
                timeLeft = studyTime;
                sendNotification("Back to work! 💼");
            }
            isWorkTime = !isWorkTime;
            startTimer();
        } else {
            timeLeft--;
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            timerDisplay.textContent = `${minutes < 10 ? "0" : ""}${minutes}:${seconds < 10 ? "0" : ""}${seconds}`;
        }
    }, 1000);
}

startButton.addEventListener("click", () => {
    startButton.disabled = true;
    pauseButton.disabled = false;
    startTimer();
});

pauseButton.addEventListener("click", () => {
    clearInterval(timerInterval);
    startButton.disabled = false;
    pauseButton.disabled = true;
});

resetButton.addEventListener("click", () => {
    clearInterval(timerInterval);
    timeLeft = studyTime;
    isWorkTime = true;
    timerDisplay.textContent = "25:00";
    statusDisplay.textContent = "Focus Mode";
    startButton.disabled = false;
    pauseButton.disabled = true;
});
