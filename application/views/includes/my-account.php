<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-4 my-account-link">
                <a class="" href="<?php echo base_url() . "my_account" ?>">My Account</a>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>
            </div>
        </div>
    </div>

</div>

<div class="container">

    <form action="<?php echo base_url() . "my_account/update_my_account" ?>" method="POSt">
        <div class="row">
            <div class="col-md-6 personal-details-left">
                <div class="row">
                    <div class="col-md-12">
                        <h2>My Account Details</h2>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="labelForFirstName">First Name</label>
                        <input type="text" name="first_name" placeholder="First Name" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="labelForLastName">Last Name</label>
                        <input type="text" name="last_name" placeholder="Last Name" class="form-control">
                    </div>

                </div>

                <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Email Address" />
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                </div>



                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="">Date of Birth</label>
                        <input type="date" name="date" class="form-control" placeholder="Date of Birth" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="labelForLastName">Last Name</label>
                        <input type="number" name="phone" placeholder="Phone Number" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <div class="form-group pull-right">
                            <button type="submit" name="update-account" class="btn btn-primary">Update Account</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="row personal-details-right pull-right">
                    <div class="col-md-12">
                        <h2>Change Password</h2>
                    </div>

                    <div class="form-group">
                        <label for="">Old Password</label>
                        <input type="password" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="">New Password</label>
                        <input type="password" name="new_password" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" />
                    </div>

                    <div class="form-group pull-right">
                        <button type="submit" name="update-password" class="btn btn-primary">Update Password</button>
                    </div>
                </div>
            </div>


        </div>
    </form>
</div>