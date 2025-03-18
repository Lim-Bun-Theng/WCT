<?php
$file = "data.json";

// Save form data to JSON file
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = ["name" => $_POST['name'], "gender" => $_POST['gender'], "age" => $_POST['age'],  "course" => $_POST['course'], "email" => $_POST['email']];
    file_put_contents($file, json_encode($data));
}

// Load data from JSON file
$data = file_exists($file) ? json_decode(file_get_contents($file), true) : ["name" => "", "gender" => "", "age" => "", "course" => "", "email" => ""];
?>

<form method="post">
    Name  : <input type="text"  name="name" value="<?php echo $data['name']; ?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $data['gender']; ?>"><br>
    Age   : <input type="number" name="age" value="<?php echo $data['age']; ?>"><br>
    Course: <input type="text" name="course" value="<?php echo $data['course']; ?>"><br>
    Email : <input type="email" name="email" value="<?php echo $data['email']; ?>"><br>
    <input type="submit" value="Update">
</form>

<!-- Display the stored data -->
<?php
if (!empty($data['name']) && !empty($data['gender']) && !empty($data['age']) && !empty($data['course']) &&  !empty($data['email'])) {
    echo "<h3>Stored Data:</h3>";
    echo "Name: " . $data['name'] . "<br>";
    echo "Gender: " . $data['gender'] . "<br>";
    echo "Age: " . $data['age'] . "<br>";
    echo "Course: " . $data['course'] . "<br>";
    echo "Email: " . $data['email'] . "<br>";
}
?>
