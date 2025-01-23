<?php
require_once("./header.php");
require_once("./php/connection.php");


$onceinstence = Database::Instance();
$connection = $onceinstence->getconnection();
$id = $_GET['id'];
$query = "SELECT * FROM event_data WHERE id = $id";
$result = $connection->query($query);

?>

<body>

    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>show register for an event</h3>
                <!-- <p class="blue-text">Filling all field in this form</p> -->
                <div class="card">
                    <h5 class="text-center mb-4">Registation Form data</h5>

                    <?php

                    if ($result) {
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) { ?>

                                <form class="form-card">

                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label px-3">Full Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" id="fname" name="fname" placeholder="Enter yourFull Name"  value="<?php echo $row['full_name'] ?>" disabled>
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label px-3">Email Address
                                                <span class="text-danger"> *</span>
                                            </label>
                                            <input type="text" id="email" name="email" placeholder="Enter your Email Address" value="<?php echo $row['email_address'] ?>" disabled>
                                        </div>
                                    </div>

                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label px-3">Phone Number
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" id="phone" name="phone" placeholder="" value="<?php echo $row['phone_number'] ?>" disabled>
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label px-3">Event Name
                                                <span class="text-danger"> *</span>
                                            </label>
                                            <input type="text" id="ename" name="ename" placeholder="" value="<?php echo $row['event_name'] ?>" disabled>
                                        </div>
                                    </div>

                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label px-3">NIC Number
                                                <span class="text-danger"> *</span>
                                            </label>
                                            <input type="text" id="nicnumber" name="nicnumber" placeholder="" value="<?php echo $row['nic_number'] ?>" disabled>
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label px-3 mb-2">NIC Attachment
                                                <span class="text-danger"> *</span>
                                            </label>
                                           <?php echo "<a href='./uploads/" . htmlspecialchars($row['nic_attachment']) . "'>View NIC Attachment</a><br>"; ?>
                                        </div>
                                    </div>

                                </form>

                            <?php }
                        } else {
                            echo "No record found with ID: " . htmlspecialchars($id);
                        }
                    } else {
                        echo "Error: " . $connection->error;
                    }

                    ?>



                </div>
            </div>
        </div>
    </div>


</body>

</html>