$(document).ready(function () {
    // Mostrar/ocultar el chatbot al hacer clic en el botón
    $("#chatbot").on("click", function (event) {
        event.preventDefault(); // Prevenir la acción predeterminada del enlace
        $(".wrapper").toggle(); // Alterna la visibilidad del chatbot
    });

    // Cerrar el chatbot al presionar el botón "X"
    $(".close-btn").on("click", function () {
        $(".wrapper").hide(); // Oculta el cuadro del chatbot
    });

    // Enviar mensaje
    $("#send-btn").on("click", function () {
        var $value = $("#data").val();
        var $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
        $(".form").append($msg);
        $("#data").val(''); // Limpiar el campo de texto

        // Enviar el mensaje al servidor (ajax)
        $.ajax({
            url: 'message.php',
            type: 'POST',
            data: { text: $value },
            success: function (result) {
                var $reply = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                $(".form").append($reply);
                // Hacer scroll al final del chat
                $(".form").scrollTop($(".form")[0].scrollHeight);
            }
        });
    });

    // Reiniciar la conversación al presionar el botón de actualizar
    $(".refresh-btn").on("click", function () {
        // Limpiar el chat
        $(".form").html('');

        // Opcional: Agregar un mensaje inicial del chatbot
        var initialMessage = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>¡Hola! ¿En qué puedo ayudarte hoy?</p></div></div>';
        $(".form").append(initialMessage);

        // Hacer scroll al final del chat
        $(".form").scrollTop($(".form")[0].scrollHeight);
    });
});
