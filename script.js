let text = document.getElementById("text")
let warning = document.getElementById("warning")
let ww = document.getElementById("ww")
let msg = document.getElementById("msg")
let wrap = document.getElementById("wrap")
let tw = document.getElementById("tw")

function updateSize() {
    if (window.innerWidth < 640) {
        warning.innerHTML = "WARNING!"
        msg.innerHTML = "Ukuran Layar Ini Tidak Support"
        wrap.style.display = "none"
        ww.style.display = "block"
        tw.style.display = "none"
    } else {
        text.textContent = "Ukuran tampilan: " + window.innerWidth + "px X " + window.innerHeight + "px";
        warning.innerHTML = ""
        msg.innerHTML = ""
        wrap.style.display = "block"
        ww.style.display = "none"
        tw.style.display = "block"
    }
}

window.addEventListener("resize", updateSize);
updateSize(); // Jalankan saat halaman dimuat