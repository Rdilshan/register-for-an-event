<?php
require_once("./header.php");
?>
<body>

    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>New register for an event</h3>

                <div class="card">
                    <h5 class="text-center mb-4">Form for New Registation</h5>
                    <form class="form-card" method="POST" action="./php/savedata.php" enctype="multipart/form-data">

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Full Name
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="fname" name="fname" placeholder="Enter yourFull Name" required>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Email Address
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="email" id="email" name="email" placeholder="Enter your Email Address" required>
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Phone Number
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="phone" name="phone" placeholder="" required>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Event Name
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="ename" name="ename" placeholder="" required>
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">NIC Number
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="nicnumber" name="nicnumber" placeholder="" required>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">NIC Attachment
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="file" id="nicattachment" name="nicattachment"  required>
                            </div>
                        </div>


                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit"
                                    class="btn-block btn-primary">Register</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>