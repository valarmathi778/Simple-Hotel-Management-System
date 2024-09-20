<?php
require('connect.php');

if (isset($_POST['country_id'])) {
    $country_id = $_POST['country_id'];
    $query = "SELECT stat_id, sname FROM states WHERE country_id = ?";
    $stmt = $con->prepare($query);

    if ($stmt) {
        $stmt->bind_param("i", $country_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo '<option value="">Select State</option>';
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . htmlspecialchars($row['stat_id']) . '">' . htmlspecialchars($row['sname']) . '</option>';
            }
        } else {
            echo '<option value="">No states available</option>';
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }

    $con->close();
}
?>
