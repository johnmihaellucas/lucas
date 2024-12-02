<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $employee_name = $_POST['employee_name'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $date_of_joining = $_POST['date_of_joining'];

    // Prepare the SQL statement
    $sql = "UPDATE employees SET employee_name = :employee_name, position = :position, department = :department,
            salary = :salary, date_of_joining = :date_of_joining WHERE id = :id";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':employee_name', $employee_name);
    $stmt->bindParam(':position', $position);
    $stmt->bindParam(':department', $department);
    $stmt->bindParam(':salary', $salary);
    $stmt->bindParam(':date_of_joining', $date_of_joining);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->errorInfo();
    }
}
?>
