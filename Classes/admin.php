<?php
namespace admin;

/**
 * [Admin class contains all the model functions needed to connect to the database which either require fetching or storing of data]
 */
class Admin
{

  /**
   * [add_data function is used to connect to database and add detail in the table]
   */
  public function add_data()
  {
    include 'db.php'; // includes the database connection file
    $name = $_POST['name']; // gets the name from the form data
    $runs = $_POST['runs']; // gets the runs from the form data
    $balls = $_POST['balls']; // gets the balls from the form data
    $strike_rate = ($runs / $balls) * 100; // calculates the strike rate
    echo "$strike_rate"; // displays the strike rate
    $sql = "INSERT INTO details (name, runs, balls, strike_rate) VALUES ('$name', $runs, $balls, $strike_rate)"; // SQL query to insert data into the details table
    $connect->query($sql); // executes the query
    echo "data added successfully"; // displays a success message
    echo "<script> location.href='display.php' </script>"; // redirects to the display.php page after adding data
  }

  /**
   * [login function redirects to add-player.php page]
   */
  function login()
  {
    echo "<script> location.href='add-player.php' </script>"; // redirects to add-player.php page
  }

  /**
   * [display function gets all the records from the details table and returns them as an array]
   */
  function display()
  {
    include 'db.php'; // includes the database connection file
    $table = "select * from details"; // SQL query to select all the records from the details table
    $result = $connect->query($table); // executes the query
    if ($result->num_rows > 0) { // checks if there are any records
      $arr = [];
      while ($row = $result->fetch_assoc()) { // fetches each record as an associative array
        $arr[] = $row; // adds the record to the array
      }
    }
    return $arr; // returns the array of records
  }

  /**
   * [valuable_player function gets the ID of the player with the highest strike rate]
   */
  public function valuable_player()
  {
    include 'db.php'; // includes the database connection file
    $res = "SELECT id FROM details WHERE salary = (SELECT MAX(strike_rate) FROM details)"; // SQL query to select the ID of the player with the highest strike rate
    $result = $connect > query($res); // executes the query
    return $result; // returns the ID of the player with the highest strike rate
  }

  /**
   * [editPlayer function updates the data of a player in the details table]
   */
  function editPlayer($id, $name, $runs, $balls)
  {
    $sql = "UPDATE details SET id='$id', runs='$runs', balls='$balls' WHERE name='$name'"; // SQL query to update the data of a player
    if ($this->conn->query($sql) === TRUE) { // executes the query and checks if it was successful
      return true;
    } else {
      return false;
    }
  }

  /**
   * [deletePlayer function deletes a player from the details table]
   */
  function deletePlayer($name)
  {
    $sql = "DELETE FROM details WHERE name='$name'";

    if ($this->conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }
}
?>