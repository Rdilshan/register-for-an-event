<?php
require_once("../header.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once 'connection.php';
    $onceinstence = Database::Instance();
    $connection = $onceinstence->getconnection();


    $full_name = $connection->real_escape_string($_POST['fname']);
    $email = $connection->real_escape_string($_POST['email']);
    $phone = $connection->real_escape_string($_POST['phone']);
    $event_name = $connection->real_escape_string($_POST['ename']);
    $nic_number = $connection->real_escape_string($_POST['nicnumber']);


    $nic_attachment = $_FILES['nicattachment']['name'];
    $target_directory = "../uploads/";
    $target_file = $target_directory . basename($nic_attachment);


    if (move_uploaded_file($_FILES['nicattachment']['tmp_name'], $target_file)) {
        $query = "INSERT INTO event_data (full_name, email_address, phone_number, event_name, nic_number, nic_attachment)
                  VALUES ('$full_name', '$email', '$phone', '$event_name', '$nic_number', '$target_file')";

        if ($connection->query($query)) {
            ?>

            <body>
                <script>
                    Swal.fire({
                        title: "Good job!",
                        text: "Event added successfully",
                        icon: "success"
                    }).then(() => {
                        window.location.href = "../index.php";
                    });
                </script>

            </body>

            <?php
        } else {
            ?>
            <body>
                <script>
                    Swal.fire({
                        title: "Something went wrong",
                        text: "Please fill out the form again.",
                        icon: "error"
                    }).then(() => {
                        window.location.href = "../Addnew.php";
                    });
                </script>
            </body>
            <?php
        }
    } else {
        echo "Error uploading the NIC attachment.";
    }

    $connection->close();
} else {
    echo "Invalid request.";
}
?>