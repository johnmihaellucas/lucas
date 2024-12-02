<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employees</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <div class="container">
        <h2 class="title is-3">All Employee Records</h2>
        <a class="button is-link mb-3" href="create.php">Add New Employee</a>
        <table class="table is-striped is-fullwidth">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee Name</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Salary</th>
                    <th>Date of Joining</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $sql = "SELECT * FROM employees";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    if ($results) {
                        foreach ($results as $row) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["employee_name"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["position"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["department"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["salary"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["date_of_joining"]) . "</td>";
                            echo "<td>
                                <a class='button is-small is-warning' href='edit.php?id=" . htmlspecialchars($row["id"]) . "'>Edit</a>
                                <a class='button is-small is-danger' href='delete.php?id=" . htmlspecialchars($row["id"]) . "'>Delete</a>
                            </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7' class='has-text-centered'>No records found</td></tr>";
                    }
                } catch (PDOException $e) {
                    echo "<tr><td colspan='7' class='has-text-danger'>Error fetching records: " . $e->getMessage() . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
