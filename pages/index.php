<!DOCTYPE html>
<html>
<head>
  <title>Repair Services</title>
</head>
<body>
  <h1>Repair Services</h1>

  <?php
  // Define repair services array
  $repairServices = array(
    array("service" => "Laptop Repair", "price" => 100),
    array("service" => "Phone Repair", "price" => 50),
    array("service" => "Tablet Repair", "price" => 70),
    array("service" => "Printer Repair", "price" => 80)
  );

  // Display repair services
  echo "<h2>Available Services:</h2>";
  echo "<ul>";
  foreach ($repairServices as $service) {
    echo "<li>" . $service['service'] . " - $" . $service['price'] . "</li>";
  }
  echo "</ul>";

  // Simulate a form submission for repair service request
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedService = $_POST['service'];
    $selectedPrice = 0;

    // Find the selected service and its price
    foreach ($repairServices as $service) {
      if ($service['service'] == $selectedService) {
        $selectedPrice = $service['price'];
        break;
      }
    }

    // Display the selected service and price
    echo "<h3>Selected Service:</h3>";
    echo "<p>Service: " . $selectedService . "</p>";
    echo "<p>Price: $" . $selectedPrice . "</p>";
  }
  ?>

  <!-- Repair service request form -->
  <h2>Request Repair Service:</h2>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="service">Select Service:</label>
    <select name="service" id="service">
      <?php
      // Populate the service options
      foreach ($repairServices as $service) {
        echo "<option value='" . $service['service'] . "'>" . $service['service'] . "</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
