<!-- Define the document type -->
<!DOCTYPE html>

<!-- Define the HTML language as English -->
<html lang="en">

<head>
    <!-- Set the character encoding for the page -->
    <meta charset="UTF-8">

    <!-- Set the viewport for the page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Set the title of the page -->
    <title>MY Entry</title>

    <!-- Include the CSS file for styling -->
    <link rel="stylesheet" href="../../../Public/css/display/style.css">

    <!-- Include the JavaScript file for asynchronous requests -->
    <script defer src="/Public/js/addNote.js"></script>
</head>

<body>
    <!-- Create a table to display data -->
    <table>
        <thead>
            <!-- Define the table header columns -->
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Runs</th>
                <th>Balls</th>
                <th>Strike Rate</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include the PHP file that handles retrieving data from the database
            include '../Handling/display-admin.php';

            // Loop through the data and display it in the table rows
            foreach ($data as $row) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['runs'] . '</td>';
                echo '<td>' . $row['balls'] . '</td>';
                echo '<td>' . $row['strike_rate'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    <!-- Add links to delete or edit a player's data -->
    <a href="delete.php">delete player</a>
    <a href="edit.php">edit player</a>
</body>

</html>