<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_name = $_POST['employee_name'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $date_of_joining = $_POST['date_of_joining'];

    // Prepare the SQL statement
    $sql = "INSERT INTO employees (employee_name, position, department, salary, date_of_joining)
            VALUES (:employee_name, :position, :department, :salary, :date_of_joining)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':employee_name', $employee_name);
    $stmt->bindParam(':position', $position);
    $stmt->bindParam(':department', $department);
    $stmt->bindParam(':salary', $salary);
    $stmt->bindParam(':date_of_joining', $date_of_joining);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->errorInfo();
    }
}
?>
