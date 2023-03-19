<!DOCTYPE html>
<html>

<head>
    <title>My Web Application</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about.php">About</a></li>
            <li><a href="/contact.php">Contact</a></li>
        </ul>
    </nav>

    <main>
        <h1>Welcome to my website!</h1>

        <?php
			// Example PHP code
			$name = "John";
			echo "<p>Hello, $name!</p>";
		?>
    </main>

    <script src="script.js"></script>
</body>

</html>