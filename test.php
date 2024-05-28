<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic PHP Features</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <div class="container">
        <?php
        // Dynamic greeting based on time of day
        date_default_timezone_set('UTC');
        $hour = date('H');

        if ($hour >= 5 && $hour < 12) {
            $greeting = "Good Morning!";
        } elseif ($hour >= 12 && $hour < 18) {
            $greeting = "Good Afternoon!";
        } elseif ($hour >= 18 && $hour < 22) {
            $greeting = "Good Evening!";
        } else {
            $greeting = "Good Evening";
        }

        echo "<div class='greeting'>$greeting</div>";

        // Display a list of items
        $items = ["Rolls Royce", "Toyota", "Subaru", "Volkswagen", "Aston Martin"];

        echo "<div class='item-list'><h2>Vehicle List</h2><ul>";
        foreach ($items as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul></div>";

        // Handle contact form submission
      /*  if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $message = htmlspecialchars($_POST['message']);
            
            echo "<div class='form-response'>";
            echo "<h2>Thank you, $name!</h2>";
            echo "<p>Your message: $message</p>";
            echo "</div>";
        }
        */
        ?>
        

        <!-- Contact Form -->
        <div class="form-container">
            <h2>Contact Us</h2>
            <form method="POST" action="registration.php">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="text" name="email" placeholder="Your email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <input type="submit" name="submitForm" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
