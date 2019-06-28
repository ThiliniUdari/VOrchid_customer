
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= site_url('Customer_ctrl')?>">Customer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Change password</li>
            </ol>
        </nav>

        <!-- Page Content Begins From Here -->
       <hr>
         <h3>CHANGE PASSWORD</h3>  
         <hr>         
      <?php echo form_open_multipart('Customer_ctrl/submit');?>

      <div class="row pl-3 pl-sm-2 pr-3 ml-lg-1 mx-auto" style="">
            <div class="col-lg-5 col-md-12 col-sm-12" style="">

                <div class="form-group ">
                <label for="fname">Current Password</label>
                <input type="password" class="form-control"  name="curr_password"  placeholder="" required>
                </div>
               
                <div class="form-group ">
                <label for="lname">New Password</label>
                <input type="password" class="form-control" id="new_password" name="new_password"  placeholder="" required >
                </div>
               
                <div class="form-group">
                <label for="email">Confirm Password</label>
                <input type="password" class="form-control" id="Password" name="Password"  placeholder="" required>
                </div>
             </div>  
            <div class="col-lg-5 col-md-12 col-sm-12" style="">
                <div class="mx-auto " style="border: 1px solid black; border-radius: 5px; width: 155px; height: 180px; display: block;">
                          
                    <img id="userimg" src="<?= base_url() . $blog['imageurl']; ?>" alt="Profile Pic" class="rounded-circle mx-auto d-block my-3 p-2" style="width: 150px; height: 150px;">
                    <div>
                    <input class="btn btn-primary btn-lg btn-block my-5" type="submit" value="Save Changes">
                    </div>
                </div>
            </div>
           
            
     </div>
          <!-- form -->
</div>

  
    <!-- /.container-fluid -->

<!-- End of Main Content -->

      

