<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
    <!-- Include Bootstrap CSS for basic styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>User Information Form</h2>
                <form action="save_user.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Gender:</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="gender" value="Male" required>Male
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="gender" value="Female" required>Female
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <select class="form-control" name="city" required>
                            <option value="Nagpur">Nagpur</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Pune">Pune</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Shimla">Shimla</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>