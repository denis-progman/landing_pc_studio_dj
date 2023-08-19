function startTimer(htmlContainer, timeStamp) {
    const day = 86400
    const hour = 3600
    const min = 60

    let seconds, minutes, hours, days

    setInterval(function () {
        seconds = timeStamp
        days = Math.floor(seconds / day)
        seconds = seconds % day
        hours = Math.floor(seconds / hour)
        seconds = seconds % hour
        minutes = Math.floor(seconds / min)
        seconds = seconds % min
        htmlContainer.innerHTML = `<span>${days}</span>days <span>${hours}</span>hours <span>${minutes}</span>:<span>${seconds}</span>`
        timeStamp --
    }, 1000)
}

window.onload = function () {
    const htmlContainer = document.querySelector('.timer h6')
    startTimer(htmlContainer, htmlContainer.dataset.current)

    document.querySelector(".bottom_notice button")
        .addEventListener("click", (event) => {
            event.target.parentElement.style.display = "none"
        })

    const subButton = document.querySelector(".application > form button[type='submit']")
    document.querySelector(".application > form input[name='agreement']")
        .addEventListener('input', (event) => {
            subButton.disabled = !event.target.checked
        })

    document.querySelector(".application > form button[type='submit']")
        .addEventListener("click", (event) => {
            event.target.parentElement.style.display = "none"
        })
}