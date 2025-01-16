document.addEventListener('DOMContentLoaded', () => {
    const timerElement = document.getElementById('timer');
    const codeForm = document.getElementById('code-form');
    const gameOverModal = document.getElementById('game-over-modal');
    let timeLeft = 30;

    const timerInterval = setInterval(() => {
        timeLeft--;
        timerElement.textContent = timeLeft;

        if (timeLeft <= 10) {
            timerElement.classList.add('warning');
        }

        if (timeLeft <= 0) {
            clearInterval(timerInterval);
            codeForm.querySelector('input[type="text"]').disabled = true;
            codeForm.querySelector('button').disabled = true;
            gameOverModal.style.display = 'flex';
        }
    }, 1000);
});
