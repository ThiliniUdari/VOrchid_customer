
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
				<li class="breadcrumb-item"><a href="<?=site_url('Customer_ctrl/viewAll/'.$blog['Id'])?>">My Account</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>

        <!-- Page Content Begins From Here -->
        <div class="row pl-3 pl-sm-2 pr-3 ml-lg-1 mx-auto" style="">

			<div class="col-12 col-sm-12 col-md-12 col-lg-4 mx-auto" style="">

				<div class="form-row">
					<div class="form-group col-md-6">
					<label for="fname">First Name</label>
            		<input type="text" class="form-control" value="<?= $blog['fName']; ?>" name="fName"  placeholder="First Name" readonly>
				</div>
					<div class="form-group col-md-6">
					<label for="lname">Last Name</label>
            		<input type="text" class="form-control" id="lName" name="lName" value="<?= $blog['lName'];?>" placeholder="Last Name" readonly>
					</div>
				</div>
				<!-- <div class="form-group">
					<label for="dob">Date of Birth</label>
					<input type="date" class="form-control" id="dob" name="dob" value="<?= $admin['dob'];?>" readonly>
				</div> -->
				<!-- <div class="form-group">
					<label for="nic">NIC Number</label>
					<input type="text" class="form-control" id="nic" name="nic" value="<?= $admin['nic'];?>" readonly>
				</div> -->
				<div class="form-group">
					<label for="gender">Gender</label>
            		<input class="form-control" name="gender" value="<?= $blog['gender']; ?>"  readonly>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
            		<input type="email" class="form-control" id="email" name="email" value="<?= $blog['email']; ?>" placeholder="Email" readonly >
				</div>
				<div class="form-group">
					<label for="contactNum">Mobile</label>
           			<input type="text" class="form-control" id="contactNum"  name="contactNum" value="<?= $blog['contactNum']; ?>" placeholder="Mobile" readonly>
				</div>
					
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 mx-lg-4" style="">
					
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-3 " style="">
				<div class="mx-auto " style="border: 1px solid black; border-radius: 5px; width: 155px; height: 180px; display: block;">
					<img id="userimg" src="<?= base_url() . $blog['imageurl']; ?>" style="width: 150px; height: 150px;" class="rounded-circle mx-auto d-block my-3 p-2">			
					<!-- <img id="userimg" src="<?= base_url() .$blog['imageurl']; ?>"  alt="Profile Pic" class="rounded-circle mx-auto d-block my-3 p-2" style="width: 150px; height: 150px;"> -->
					<div>
					<a href="<?php echo base_url('index.php/Customer_ctrl/update/' .$blog['Id']);  ?>" style="text-decoration: none;"><button class="btn btn-primary btn-lg btn-block my-5">Edit</button></a>
					</div>
				</div>
						
			</div>
				
		
      
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

      