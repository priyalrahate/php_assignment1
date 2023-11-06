
<!DOCTYPE html>
<html>
<head>
    <title>Save User Data</title>
    <!-- Include Bootstrap CSS for basic styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Save User Data</h2>
        <?php
        require 'form.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Database connection
            try {
                $pdo = new PDO("mysql:host=localhost;dbname=user_information_db", "root", "");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }

            $name = $_POST["name"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            $city = $_POST["city"];

            // Insert data into the database
            $stmt = $pdo->prepare("INSERT INTO user_information (name, email, gender, city) VALUES (:name, :email, :gender, :city)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':city', $city);
            $stmt->execute();

            echo '<div class="alert alert-success" role="alert">User data saved successfully!</div>';
        } 
        ?>
    </div>
</body>
</html>