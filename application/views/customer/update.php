
    <!-- Begin Page Content -->
<div class="container-fluid">

        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= site_url('Customer_ctrl/viewAll/'.$blog['Id'])?>">My Account</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Customer Detail</li>
            </ol>
        </nav>
        <!-- Page Content Begins From Here -->
    <div class="row pl-3 pl-sm-2 pr-3 ml-lg-1 mx-auto" style="">
      <div class="col-12 col-sm-12 col-md-12 col-lg-4 mx-auto" style="">
<!-- <form action="<?php echo base_url('index.php/Customer_ctrl/update/'.$blog['Id'])?>" method="post">
 -->         
          <?php echo form_open_multipart('Customer_ctrl/edit/'.$blog['Id']);?>
          
          <div class="form-group ">
             <label for="Id">Id</label>
              <input type="text" class="form-control"  name="Id"   value="<?= $blog['Id']; ?>" readonly>
          </div>
          <div class="form-row">
              <div class="form-group col-md-6">
                 <label for="fname">First Name</label>
                  <input type="text" class="form-control"  name="fName"  placeholder="First Name"  value="<?= $blog['fName']; ?>" >
              </div>
              
              <div class="form-group col-md-6">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lName" name="lName"  placeholder="Last Name" value="<?=$blog['lName']; ?>" >
              </div>
          </div>
                 
          <div class="form-group">
              <label>Gender</label>
              <select class="form-control" name="gender" value="<?= $blog['gender']; ?>" >
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
          </div>
          
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email"  placeholder="Email" value="<?= $blog['email']; ?>" >
          </div>
         
          <div class="form-group">
            <label for="contactNum">Mobile</label>
            <input type="text" class="form-control" id="contactNum"  name="contactNum"  placeholder="Mobile" value="<?= $blog['contactNum']; ?>" >
          </div>
        
      </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 mx-lg-4" style="">
          <div class="choose-img form-group">
              <label for="userimage">Select Profile Picture</label>
              <input class="form-control" onchange="readURL(this);" type="file" name="userimage" size="20 " value="<?php echo set_value('userimg'); ?>" >
          </div>   
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-3 " style="">
          <div class="mx-auto " style="border: 1px solid black; border-radius: 5px; width: 155px; height: 180px; display: block;">
                  
            <img id="userimg" src="<?= base_url() . $blog['imageurl']; ?>" alt="Profile Pic" class="rounded-circle mx-auto d-block my-3 p-2" style="width: 150px; height: 150px;">
            <div>
                  <input class="btn btn-primary btn-lg btn-block my-5" type="submit" value="Save Changes">

              <!--   <a href="<?php echo base_url('index.php/Customer_ctrl/edit/'.$blog['Id']);  ?>" style="text-decoration: none;"><button class="btn btn-primary btn-lg btn-block my-5">Update</button></a>
             -->          
           </div>
          </div>
            
         </div>
  
    </div>
     <!-- /.container-fluid --> 
</div>
 <!-- End of Main Content -->

      

