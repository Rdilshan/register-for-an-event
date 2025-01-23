<?php
require_once("./header.php");
require_once("./php/connection.php");

$onceinstence = Database::Instance();
$connection = $onceinstence->getconnection();
$query = "SELECT * FROM event_data";
$result = $connection->query($query);
?>

<body>

    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-10 col-lg-8 col-md-9 col-11 text-center">
                <h3>All Registrations Data</h3>
                <div class="card">
                    <div class="d-flex flex-row-reverse  mb-4">
                        <a href="./Addnew.php" class="btn btn-primary mt-2">Add New </a>
                    </div>
                    <table id="myTable" class="table table-bordered ">
                        <thead>
                            <tr class="table-light">
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Event Name</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody class="table-group-divider">


                            <?php
                            if ($result) {
                                if ($result->num_rows > 0) {
                                    $rowNumber = 1; 
                                    while ($row = $result->fetch_assoc()) { ?>


                                        <tr>
                                            <td><?php echo $rowNumber; ?></td>
                                            <td><?php echo $row['full_name'] ?></td>
                                            <td><?php echo $row['email_address'] ?></td>
                                            <td><?php echo $row['phone_number'] ?></td>
                                            <td><?php echo $row['event_name'] ?></td>
                                            <td>
                                                <button class="btn btn-primary"
                                                onclick="window.location.href='./Show.php?id=<?php echo $row['id']; ?>'">
                                                <i class="fa fa-eye"></i></button>
                                            </td>
                                        </tr>

                                    <?php
                                     $rowNumber++;
                                }
                                } 
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        let table = new DataTable('#myTable', {});
    </script>
</body>

</html>