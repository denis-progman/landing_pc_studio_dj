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

async function serverRequest(requestURL, data) {
    try {
        let response = await fetch(requestURL, {
            method: 'POST',
            body: data,
        });
        return await response.json()
    } catch (error) {
        console.error('Error:', error)
        const popAlert = document.querySelector(".pop-alert");
        showAlert(popAlert, "Error", "An unexpected error! Sorry!", "OK")
        return false
    }
}

function showAlert(popElement, title, text, button = null) {
    popElement.querySelector("strong").innerHTML = title
    popElement.querySelector("p").innerHTML = text
    popElement.querySelector("button").innerHTML = button ?? "OK"
    popElement.parentElement.style.display = 'block';
}

window.onload = function () {
    const htmlContainer = document.querySelector('.timer h6')
    startTimer(htmlContainer, htmlContainer.dataset.current)

    document.querySelector(".bottom_notice button")
        .addEventListener("click", (event) => {
            event.target.parentElement.style.display = "none"
        })

    const subButton = document.querySelector(".application > form button[type='submit']")
    const appForm = document.querySelector(".application > form")
    const popAlert = document.querySelector(".pop-alert");

    document.querySelector(".application > form input[name='agreement']")
        .addEventListener('input', (event) => {
            subButton.disabled = !event.target.checked
        })

    appForm.addEventListener("submit", (event) => {
        event.preventDefault()
        serverRequest("/ajax_controller.php", new FormData(event.target)).then((result) => {
            showAlert(popAlert, result.title, result.text)
            if (result.status === "ok") {
                event.target.reset()
            }
        })
        return false
    })

    popAlert.querySelector(".pop-closer").addEventListener("click", () => {
        popAlert.parentElement.style.display = 'none'
    })
    popAlert.querySelector("button").addEventListener("click", () => {
        popAlert.parentElement.style.display = 'none'
    })
}