<!-- This is an HTML form for inputting player details and submitting the form data -->

<form method="POST" action="process-form.php">
  <label for="name">Player Name:</label>
  <input type="text" id="name" name="name" required>
  <!-- A label and input field for the player's name, with the "required" attribute set to ensure it's not left blank -->

  <br>

  <label for="runs">Runs Scored:</label>
  <input type="number" id="runs" name="runs" required>
  <!-- A label and input field for the player's runs scored, with the "required" attribute set to ensure it's not left blank -->

  <br>

  <label for="balls">Balls Faced:</label>
  <input type="number" id="balls" name="balls" required>
  <!-- A label and input field for the player's balls faced, with the "required" attribute set to ensure it's not left blank -->

  <br>

  <button type="submit">Submit</button>
  <!-- A submit button to submit the form data to the "process-form.php" file -->
</form>
<a href="edit.php">edit</a>
<a href="delete.php">delete</a>