<?php
if(isset($_POST['encrypted_text'])) {
   $encrypted_text = $_POST['encrypted_text'];
   $decrypted_text = base64_decode($encrypted_text);
   echo "Decrypted Text: " . $decrypted_text;
}
?>



<?php
if(isset($_POST['text'])) {
    $text = $_POST['text1'];
    $encrypted_text = base64_encode($text);
    echo "Encrypted Text: " . $encrypted_text;
}
?>
