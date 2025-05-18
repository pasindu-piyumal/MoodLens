document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault(); 

    let formData = new FormData(this);
    fetch("result.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById("result").innerHTML = data.message;
        
        let formBox = document.querySelector(".box");
        formBox.style.height = "770px"; 
    })
    .catch(error => {
        console.error("Error:", error);
        document.getElementById("result").innerHTML = "An error occurred. Please try again.";
    });
});

function updateValue(value, id) {
    document.getElementById(id).textContent = value;
}