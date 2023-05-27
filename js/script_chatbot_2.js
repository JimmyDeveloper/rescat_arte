// Mensajes predefinidos del chatbot
const chatbotMessages = [
    "Hola, ¿en qué puedo ayudarte?",
    "¿Cómo estás?",
    "¿En qué ciudad te encuentras?",
    "Gracias por tu consulta. Te responderemos lo antes posible."
];

// Obtener elementos del DOM
const chatDisplay = document.getElementById("chat-display");
const userInput = document.getElementById("user-input");

// Función para mostrar un mensaje en el chat
function displayMessage(message, sender) {
    const messageElement = document.createElement("div");
    messageElement.classList.add("message");
    messageElement.textContent = `${sender}: ${message}`;
    chatDisplay.appendChild(messageElement);
}

// Función para generar una respuesta del chatbot
function generateResponse() {
    const randomIndex = Math.floor(Math.random() * chatbotMessages.length);
    const message = chatbotMessages[randomIndex];
    return message;
}

// Función para manejar el evento de enviar un mensaje
function handleUserInput(event) {
    if (event.key === "Enter") {
        const userMessage = userInput.value;
        displayMessage(userMessage, "Tú");
        userInput.value = "";

        // Simular tiempo de respuesta del chatbot
        setTimeout(() => {
            const chatbotResponse = generateResponse();
            displayMessage(chatbotResponse, "Chatbot");
        }, 500);

        // Evitar que el formulario se envíe
        event.preventDefault();
    }
}

// Asignar el evento al campo de entrada del usuario
userInput.addEventListener("keydown", handleUserInput);