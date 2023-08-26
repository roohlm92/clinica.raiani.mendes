document.addEventListener("DOMContentLoaded", function () {
    const text = "Raiani Mendes";
    const typingText = document.querySelector(".banner_text h1");
    let charIndex = 0;

    function type() {
        if (charIndex < text.length) {
            typingText.textContent += text.charAt(charIndex);
            charIndex++;
            setTimeout(type, 100); // Ajuste o tempo para controlar a velocidade da digitação
        }
    }

    type();
});
