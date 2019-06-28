 <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb px-xs-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url('/')?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?=site_url('Customer_ctrl') ?>">Index</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Acount</li>
            </ol>
        </nav>

        <!-- Page Content Begins From Here -->
        <hr >
        <h3>My Account</h3>
        <hr>
        <!-- Visit profile -->
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4" style="width: 18rem; display:inline-block; height: 300px;  margin: 50px 100px;">
                <div class="card" style="width: 18rem; height: 300px; ">
                    <img src="<?= base_url() . $blog['imageurl']?>" class="card-img-top rounded-circle mx-auto d-block my-3" alt="Customer Profile Picture" style="width: 100px; height: 100px;">
                    
                    <div class="card-body">
                      <h4 class="card-text text-center"><?= $blog['fName'] . " " .$blog['lName'] ;?></h4>
                      <p>Edit your profile and change your subscription details</p>
                        <hr class="sidebar-divider">
						<a href="<?php echo site_url('Customer_ctrl/view/'.$blog['Id']); ?>" class="btn btn-primary mr-0"><i class="fas fa-angle-double-right"></i></a>
						<!-- <div class="" style="display: inline-block; width: 20px; background-color: blue;"></div> -->
						<!-- <div class="" style="display: inline-block; width: 54%;">
							<a href="<?php echo site_url('Customer_ctrl/delete/'.$blog['Id']); ?>" onclick="return confirm('Are Your Sure?')" class="justify-content-end" style="margin-left: 105px;"><span class="my-auto py-auto ml-0" style="font-size: 20px; color: red;"><i class="fas fa-trash-alt fa-lg fa-fw mr-2"></i></span></a>

						</div> -->

                    </div>
                </div>
        </div>

		<!-- view orders -->
		<div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4" style="width: 18rem;display:inline-block; height: 300px; margin-right: 100px">
                <div class="card" style="width: 18rem; height: 300px;">
                    <img src="<?= site_url('../uploads/ordersIcon.jpg');?>" class="card-img-top rounded-circle mx-auto d-block my-3" alt="Customer Profile Picture" style="width: 100px; height: 100px;">
                    
                    <div class="card-body">
                        <h4 class="card-text text-center">Place Your Order</h4>
                        <p>View open order status and order history</p>
                        <hr class="sidebar-divider">
						<a href="#" class="btn btn-primary mr-0"><i class="fas fa-angle-double-right"></i></a>
						<div class="" style="display: inline-block; width: 20px; background-color: blue;"></div>
						<div class="" style="display: inline-block; width: 54%;">
							<!-- <a href="<?php echo site_url('Customer_ctrl/delete/'.$blog['Id']); ?>" onclick="return confirm('Are Your Sure?')" class="justify-content-end" style="margin-left: 105px;"><span class="my-auto py-auto ml-0" style="font-size: 20px; color: red;"><i class="fas fa-trash-alt fa-lg fa-fw mr-2"></i></span></a> -->

						</div>

                    </div>
                </div>
           </div>

           <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4" style="width: 18rem;display:inline-block; height: 300px; margin-right: 20px" >
                <div class="card" style="width: 18rem; height: 300px;">
                    <img src="<?= site_url('../uploads/email.jpg');?>" class="card-img-top rounded-circle mx-auto d-block my-3" alt="Customer Profile Picture" style="width: 100px; height: 100px;">
                    
                    <div class="card-body">
                        <h4 class="card-text text-center">####</h4>
                        <p>*****************<br>*******</p>
                        <hr class="sidebar-divider">
						<a href="#" class="btn btn-primary mr-0"><i class="fas fa-angle-double-right"></i></a>
						<div class="" style="display: inline-block; width: 20px; background-color: blue;"></div>
						<div class="" style="display: inline-block; width: 54%;">
							<!-- <a href="<?php echo site_url('Customer_ctrl/delete/'.$blog['Id']); ?>" onclick="return confirm('Are Your Sure?')" class="justify-content-end" style="margin-left: 105px;"><span class="my-auto py-auto ml-0" style="font-size: 20px; color: red;"><i class="fas fa-trash-alt fa-lg fa-fw mr-2"></i></span></a> -->

						</div>

                    </div>
                </div>
           </div>
	
	
