<?php
if (isset($_POST['user_input'])) {
    $user_input = $_POST['user_input'];

    // Display user input
    echo "<h1>Here is your message:</h1>";
    echo "<p>" . htmlspecialchars($user_input) . "</p>";  // Display user input safely

    // Check for any <script> tag in the user input
    if (preg_match('/<script\b[^>]*>(.*?)<\/script>/is', $user_input)) {
        // Define the new flag
        $flag = "flag{congrats_you_solved_it}";

        // Encode the flag using Base64
        $encoded_flag = base64_encode($flag);

        // Display the encoded flag
        echo "<p class='message'>Encoded Flag: " . $encoded_flag . "</p>";
    }
}
?>
