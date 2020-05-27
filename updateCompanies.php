<?php
include("includes/header.php");
?>
                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <!-- <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">Annex</a></li>
                                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                                <li class="breadcrumb-item active">Form Elements</li>
                                            </ol>
                                        </div> -->
                                        <h4 class="page-title">Add User</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Textual inputs</h4>
                                            <!-- <p class="text-muted m-b-30 font-14">Here are examples of <code
                                                    class="highlighter-rouge">.form-control</code> applied to each
                                                textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                                        class="highlighter-rouge">type</code>.</p> -->


                                                        <?php
                                                    include("includes/db.php");

                                                    if(isset($_POST['submit'])){
                                                        $name = $_POST['name'];
                                                        $email = $_POST['email'];
                                                        $gender = $_POST['gender'];
                                                        $password = $_POST['password'];
                                                        $date = $_POST['date'];
                                                        $country = $_POST['country'];
                                                        
                                                        $data = [
                                                            'Name' => $name,
                                                            'Email' => $email,
                                                            'Gender' => $gender,
                                                            'password' => $password,
                                                            'date' => $date,
                                                            'Country' => $country
                                                        ];
                                                        
                                                        $updateData = $database->getReference("Users/".$_GET['update'])->update($data);
                                                        // header("Location:users.php");
                                                        if($updateData){
                                                            echo '<script>window.location="users.php"</script>';
                                                        }

                                                    }
                                                    

                                                    // $ref = "Users";
                                                    if(isset($_GET['update'])){                                                    
                                                        $data1 = $database->getReference("Users/".$_GET['update'])->getvalue();

                                                    }
                                                    // foreach($data as $key => $data1){
                                                    ?>
                                                    
                                            <form method="post">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label for="example-text-input" class=" col-form-label">Name</label>
                                                        <input name="name" class="form-control" type="text" value="<?php echo $data1['Name'] ?>" id="example-text-input">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="example-text-input" class=" col-form-label">Email</label>
                                                        <input name="email" class="form-control" type="email" value="<?php echo $data1['Email'] ?>" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label class="col-form-label">Gender</label>
                                                        <select name="gender" class="form-control">
                                                            <option value="<?php echo $data1['Gender'] ?>"><?php echo $data1['Gender'] ?></option>
                                                           
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="example-text-input" class=" col-form-label">Password</label>
                                                        <input name="password" class="form-control" type="password" value="<?php echo $data1['password'] ?>" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label for="example-text-input" class=" col-form-label">Date</label>
                                                        <input name="date" value="<?php echo $data1['Date'] ?>" class="form-control" type="date"  id="example-text-input">
                                                    </div>
                                                </div>
                                                <?php
                                                    // }
                                                ?>
                                                <div class="row">
                                                    <div class="form-group col-sm-12 text-center">
                                                        <input class="btn btn-primary" name="submit" value=
                                                        
                                                        'Update Data' type="submit"  id="example-text-input">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2020 All Rights Reserved By RedXSofts.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>