const contactBarNode = document.querySelector("#contact-bar");

function contactBarToWhite() {
    const rect = contactBarNode.getBoundingClientRect;
    console.log(rect.top, rect.left);
}

window.addEventListener("keydown", (event) => {
    if(event.key==="a") contactBarToWhite();
})


// Script opcional para manejar la respuesta sin recargar la página
document.getElementById('contact-form').addEventListener('submit', async function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    const response = await fetch(this.action, {
        method: 'POST',
        body: new URLSearchParams(formData)
    });
    const result = await response.json();
    document.getElementById('response').textContent = result.result === 'success' ? 'Formulario enviado con éxito!' : 'Hubo un error. Inténtalo de nuevo.';
});