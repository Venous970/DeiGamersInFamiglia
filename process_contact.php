<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'nicholasbeghetto991@gmail.com';  // Inserisci l'email del destinatario
    $subject = 'Messaggio dal sito DeiGamersInFamiglia';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Hai ricevuto un nuovo messaggio dal modulo di contatto del tuo sito web.\n\n";
    $body .= "Nome: $name\n";
    $body .= "Email: $email\n";
    $body .= "Messaggio:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Messaggio inviato con successo!";
    } else {
        echo "Errore nell'invio del messaggio. Riprova più tardi.";
    }
} else {
    echo "Metodo di richiesta non valido.";
}
?>
