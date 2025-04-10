document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('gameButton');
    const gameArea = document.getElementById('gameArea');
    const status = document.getElementById('status');
    
    let level = 1;
    let clicks = 0;
    let timeout = 500;


    function getRandomPosition() {
        const maxX = gameArea.clientWidth - button.offsetWidth;
        const maxY = gameArea.clientHeight - button.offsetHeight;
        const randomX = Math.floor(Math.random() * maxX);
        const randomY = Math.floor(Math.random() * maxY);
        return { x: randomX, y: randomY };
    }


    function moveButton() {
        const pos = getRandomPosition();
        button.style.marginLeft = pos.x + 'px'; 
        button.style.marginTop = pos.y + 'px';   
    }

   
    function updateStatus() {
        status.textContent = `Level: ${level} | Clicks: ${clicks}/3`;
    }

    
    button.addEventListener('mouseover', function() {
        if (timeout > 0) {
            setTimeout(moveButton, timeout);
        } else {
            moveButton();
        }
    });

    button.addEventListener('click', function() {
        clicks++;
        updateStatus();
        
        if (clicks === 3) {
            if (level === 6) {
                alert('Congratulations! You won the game!');
                level = 1;
                timeout = 500;
            } else {
                alert(`Level ${level} completed! Moving to the next level.`);
                level++;
                timeout = Math.max(0, 500 - (level-1) * 100);
            }
            clicks = 0;
            updateStatus();
        }
    });

    moveButton();
    updateStatus();
});