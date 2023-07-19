<?php

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Perform any necessary processing or validation

    // Display a success message
    $message = "Thank you, $name! Your email ($email) has been submitted successfully.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sample Form</title>
</head>
<body>
    <h1>Sample Form</h1>

    <?php if (isset($message)): ?>
        <p><?php echo $message; ?></p>
    <?php else: ?>
        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <button type="submit">Submit</button>
        </form>
    <?php endif; ?>
</body>
</html>
