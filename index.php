<!DOCTYPE html>
<html>
<head>
    <title>My Static Website</title>
</head>
<body>
    <header>
        <h1>Welcome to My Static Website</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about.php">About</a></li>
            <li><a href="/contact.php">Contact</a></li>
        </ul>
    </nav>

    <main>
        <h2>Home</h2>
        <p>This is the homepage of my static website.</p>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> My Static Website. All rights reserved.</p>
    </footer>
</body>
</html>
