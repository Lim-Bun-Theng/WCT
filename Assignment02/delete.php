<?php
session_start(); // Start the session

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['course'] = $_POST['course'];
        $_SESSION['email'] = $_POST['email'];
    } elseif (isset($_POST['delete'])) {
        session_unset(); // Remove all session data
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Form Data</title>
</head>
<body>

    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $_SESSION['name'] ?? ''; ?>" required><br>

        <label>Gender:</label>
        <input type="text" name="gender" value="<?php echo $_SESSION['gender'] ?? ''; ?>" required><br>

        <label>Age:</label>
        <input type="number" name="age" value="<?php echo $_SESSION['age'] ?? ''; ?>" required><br>

        <label>Course:</label>
        <input type="text" name="course" value="<?php echo $_SESSION['course'] ?? ''; ?>" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $_SESSION['email'] ?? ''; ?>" required><br>

        <input type="submit" name="submit" value="Save">
        <input type="submit" name="delete" value="Delete">
    </form>

</body>
</html>
