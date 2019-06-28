
    <div class="container">
    	<?php
    		if ($this ->session->flashdata('success_msg')) {
    	?>
	    	<div class="alert alert-success">
	    		<?php echo $this -> session-> flashdata('success_msg');?>
	    	</div>

    	<?php
    		}
    	?>

    	<?php
    		if ($this ->session->flashdata('error_msg')) {
    	?>
	    	<div class="alert alert-success">
	    		<?php echo $this -> session-> flashdata('error_msg');?>
	    	</div>

    	<?php
    		}
    	?>

      <br><br>
      <a href="<?php echo base_url('index.php/Customer_ctrl/register');  ?>" class="btn btn-primary" >Register</a>
      <br>
      <table class="table table-bordered table-responsive">
      	<thead>
      		<tr><b>
      			<td>Id</td>
      			<td>First Name</td>
       			<td>Last Name</td>
      			<td>Gender</td>
      			<td>Email</td>
      			<td>Mobile</td>
            <td>status</td>
            <td>Action</td>
      		<b></tr>
      	</thead>
      	<tbody>
      		<?php
      			if ($blog) {
      				foreach($blog as $blog){
      		  ?>
      		<tr>
      			<td><?php echo $blog->Id ;?></td>
      			<td><?php echo $blog->fName; ?></td>
      			<td><?php echo $blog->lName; ?></td>
      			<td><?php echo $blog->gender; ?></td>
      			<td><?php echo $blog->email; ?></td>
      			<td><?php echo $blog->contactNum; ?></td>
            <td><?php echo $blog->status; ?></td>

      			<td>
             <a href="<?php echo base_url('index.php/Customer_ctrl/viewAll/' .$blog->Id);  ?>" class="btn btn-primary" >View</a>
 				     <a href="<?php echo base_url('index.php/Customer_ctrl/update/' .$blog->Id);  ?>" class="btn btn-primary" >Edit</a>
      				<a href="<?php echo base_url('index.php/Customer_ctrl/delete/' .$blog->Id);  ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete?')">DELETE</a>
      			</td>
      		</tr>
      		<?php
      				}
      			}
      		?>
      	</tbody>
      </table>
   

  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
  </body>
</html> 