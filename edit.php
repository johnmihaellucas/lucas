<?php
include 'db.php';

$id = $_GET['id'];

// Fetch the record to edit
$sql = "SELECT * FROM employees WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <div class="container">
        <h2 class="title is-3">Edit Employee Record</h2>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="field">
                <label class="label">Employee Name:</label>
                <div class="control">
                    <input class="input" type="text" name="employee_name" value="<?php echo htmlspecialchars($row['employee_name']); ?>" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Position:</label>
                <div class="control">
                    <input class="input" type="text" name="position" value="<?php echo htmlspecialchars($row['position']); ?>" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Department:</label>
                <div class="control">
                    <input class="input" type="text" name="department" value="<?php echo htmlspecialchars($row['department']); ?>" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Salary:</label>
                <div class="control">
                    <input class="input" type="number" name="salary" value="<?php echo htmlspecialchars($row['salary']); ?>" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Date of Joining:</label>
                <div class="control">
                    <input class="input" type="date" name="date_of_joining" value="<?php echo htmlspecialchars($row['date_of_joining']); ?>" required>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-primary" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
