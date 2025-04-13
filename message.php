<?php
$conn = mysqli_connect("127.0.0.1", "u382864138_vchat", "m:0xgB?AjTB", "u382864138_vchat") or die("Database Error");

// obteniendo el mensaje del usuario a través de ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//comprobando la consulta del usuario a la consulta de la base de datos
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

if (mysqli_num_rows($run_query) > 0) {
    $fetch_data = mysqli_fetch_assoc($run_query);
    //almacenando la respuesta a una variable que enviaremos a ajax
    $replay = $fetch_data['replies'];
    echo $replay;
} else {
    echo "Para mas informacion comunicate con la administradora mediante el siguiente enlace:
    </br><a href='https://api.whatsapp.com/send/?phone=51990445454&text=Gracias+por+la+invitacion+&type=phone_number&app_absent=0'>Graciela Padilla - WhatsApp</a>";
}
