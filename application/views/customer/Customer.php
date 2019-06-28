
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= site_url('Customer_ctrl')?>">Customer</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Customer</li>
            </ol>
        </nav>

        <!-- Page Content Begins From Here -->
        <?php echo $error;?>
                    
      <?php echo form_open_multipart('Customer_ctrl/submit');?>

      <div class="row pl-3 pl-sm-2 pr-3 ml-lg-1 mx-auto" style="">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mx-auto" style="">

              <div class="form-row">
                <div class="form-group col-md-6">
                <label for="fname">First Name</label>
                <input type="text" class="form-control"  name="fName"  placeholder="First Name" required>
                </div>
                <div class="form-group col-md-6">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lName" name="lName"  placeholder="Last Name" required >
                </div>

              </div>
              <div class="form-group" required>
                  <label>Gender</label>
                  <select class="form-control" name="gender" >
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  </select>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email"  placeholder="Email" required>
                </div>
               <div class="form-group">
                <label for="contactNum">Mobile</label>
                <input type="text" class="form-control" id="contactNum"  name="contactNum"  placeholder="Mobile" required>
               </div>
               <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password"  name="password"  placeholder="Password" required>
               </div>
               <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="password2"  name="password2"  placeholder="confirm password" required>
               </div>
                
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mx-lg-4" style="">
              <div class="choose-img form-group">
                    <label for="userimage">Select Profile Picture</label>
                    <input class="form-control" onchange="readURL(this);" type="file" name="userimage" size="20 " value="<?php echo set_value('userimg'); ?>" required>
                  </div>
                
            </div>
            
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 " style="">
                <div class="mx-auto " style="border: 1px solid black; border-radius: 5px; width: 155px; height: 180px; display: block;">
                        
                    <img id="userimg" src="<?php echo base_url(); ?>Images_Icons/user.png" alt="Profile Pic" class="rounded-circle mx-auto d-block my-3 p-2" style="width: 150px; height: 150px;">
                    
                    <div>
                      <input class="btn btn-primary btn-lg btn-block my-5" type="submit" value="Save">

                      <!-- <a href="<?php echo base_url('index.php/Customer_ctrl/submit');  ?>" style="text-decoration: none;"><button class="btn btn-primary btn-lg btn-block my-5">Save</button></a> -->
                    </div>
                </div>
            </div>
          </<!-- form -->>
        </div>

    </div>
    <!-- /.container-fluid -->

<!-- End of Main Content -->

      

