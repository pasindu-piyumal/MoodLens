document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form from reloading the page

    let formData = new FormData(this);
    fetch("result.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById("result").innerHTML = data.message;
        
        // Increase form height after getting the result
        let formBox = document.querySelector(".box");
        formBox.style.height = "770px"; // Adjust height as needed
    })
    .catch(error => {
        console.error("Error:", error);
        document.getElementById("result").innerHTML = "An error occurred. Please try again.";
    });
});

// Function to update range slider values dynamically
function updateValue(value, id) {
    document.getElementById(id).textContent = value;
}