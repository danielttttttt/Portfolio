<?php 
    include('../include/config.php'); 

    if (isset($_POST['delete_btn_set'])) {
        // Properly reference 'delete_id'
        $del_id = $_POST['delete_id'];

        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("DELETE FROM `contactus` WHERE id = ?");
        $stmt->bind_param("i", $del_id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Message deleted successfully.";
        } else {
            echo "Error deleting the message.";
        }

        $stmt->close();
    }
?>
