<!-- This is an HTML code for a form to add player details to the database -->

<!DOCTYPE html>
<html>

<head>
    <title>Edit</title>
</head>

<body>
    <!-- Form to collect user input and send it to the server using the POST method -->
    <form method="POST" action="../Handlin/edit-action.php">
        <!-- Label for the player name input field -->
        <label for="name">Player Name:</label>
        <!-- Input field for the player name -->
        <input type="text" id="name" name="name" required>
        <br>
        <!-- Label for the runs scored input field -->
        <label for="runs">Runs Scored:</label>
        <!-- Input field for the runs scored -->
        <input type="number" id="runs" name="runs" required>
        <br>
        <!-- Label for the balls faced input field -->
        <label for="balls">Balls Faced:</label>
        <!-- Input field for the balls faced -->
        <input type="number" id="balls" name="balls" required>
        <br>
        <!-- Submit button to send the user input to the server -->
        <button type="submit">Submit</button>
    </form>
</body>

</html>