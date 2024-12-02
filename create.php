<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <div class="container">
        <h2 class="title is-3">Create New Employee</h2>
        <form action="insert.php" method="post">
            <div class="field">
                <label class="label">Employee Name:</label>
                <div class="control">
                    <input class="input" type="text" name="employee_name" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Position:</label>
                <div class="control">
                    <input class="input" type="text" name="position" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Department:</label>
                <div class="control">
                    <input class="input" type="text" name="department" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Salary:</label>
                <div class="control">
                    <input class="input" type="number" name="salary" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Date of Joining:</label>
                <div class="control">
                    <input class="input" type="date" name="date_of_joining" required>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
