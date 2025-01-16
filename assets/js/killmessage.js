document.addEventListener("DOMContentLoaded", () => {
    const killContainer = document.querySelector(".kill-message");
    const numKills = 100; // Number of "kills"
    
    // Function to generate a random color
    const randomColor = () => {
        return Math.random() > 0.5 ? "white" : "black"; // Randomly choose black or white
    };

    // Function to create kills dynamically
    const createKills = () => {
        for (let i = 0; i < numKills; i++) {
            const span = document.createElement("span");
            span.textContent = "Kill";
            span.style.setProperty("--color", randomColor());
            span.style.top = `${Math.random() * 100}vh`;
            span.style.left = `${Math.random() * 100}vw`;
            killContainer.appendChild(span);
        }
    };

    // Update positions of kills randomly
    const updateKillPositions = () => {
        const kills = document.querySelectorAll(".kill-message span");
        kills.forEach(kill => {
            kill.style.top = `${Math.random() * 100}vh`;
            kill.style.left = `${Math.random() * 100}vw`;
        });
    };

    // Create kills on page load
    createKills();

    // Update positions every 2 seconds
    setInterval(updateKillPositions, 2000);
});
