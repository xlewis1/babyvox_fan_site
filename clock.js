function updateClock() {
    const clockEl = document.getElementById("site-clock");
    if (!clockEl) return;

    const now = new Date();

    // Use local time of the visitor
    const hours = String(now.getHours()).padStart(2, "0");
    const minutes = String(now.getMinutes()).padStart(2, "0");
    const seconds = String(now.getSeconds()).padStart(2, "0");

    clockEl.textContent = `${hours}:${minutes}:${seconds}`;
}

// Initial call
updateClock();

// Update every second
setInterval(updateClock, 1000);
