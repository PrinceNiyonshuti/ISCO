 
        <!-- Begin Page Content -->
        <div class="container-fluid">
        
            <?php
                $query1=$conn->query("SELECT * FROM site ");
                if($query1->num_rows <= 0   ){

            ?>

                <div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
                    <span class="badge badge-pill badge-info">Infoming</span>
                    Sorry <b><?php echo $m_username ?></b> Doen't Have Any Site.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>

            <?php
                }else{
            ?>
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Site And Security Assignment</h1>
                <p class="mb-4">Assignment Details and Data </p>
                <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
	                <div class="card-header py-3">
	                  <h6 class="m-0 font-weight-bold text-primary">Site Assignment List</h6>
	                </div>
                    <div class="card-body">
		              <div class="table-responsive">
		                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		                  <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>Name</th>
		                        <th>Contact</th>
		                        <th>Address</th>
		                        <th>Supervisor</th>
		                        <th>Securities</th>
		                        <th>Action</th>
		                    </tr>
		                  </thead>
		                  <?php

		                  	$no=0;
		                    $sql1="SELECT * FROM site ORDER BY site_id DESC";
		                    $result1=$conn->query($sql1);

		                    while ($row1 = $result1->fetch_assoc()) {
		                    	$no+=1;
		                    	$site_id=$row1['site_id'];
		                    	$sup_id=$row1['supervisor_id'];

		                    $sql2="SELECT * FROM supervisor WHERE supervisor_id='$sup_id'";
		                    $result2=$conn->query($sql2);

		                    while ($row2 = $result2->fetch_assoc()) {
		                    $sup_names=$row2['supervisor_name'];
		                	}

		                	$sql_3=" SELECT COUNT(site_id) AS no_security FROM `assignment_security` WHERE site_id='$site_id' ";
		                    $result_3=$conn->query($sql_3);

		                    while ($row_3 = $result_3->fetch_assoc()) {
		                    $tot_sec =$row_3['no_security'];
		                	}
		                ?>                                        
		                <tbody>
		                    <tr>
		                        <td><?php echo $no; ?></td>
		                        <td><?php echo $row1['site_name'];?></td>
		                        <td><?php echo $row1['site_tel'];?></td>
		                        <td><?php echo $row1['site_address'];?></td>
		                        <td>
		                        	<?php
			                            if (empty($sup_id)) {
			                                ?>
			                                	<span style="color: red;" >Not Assigned</span>
			                                <?php
			                            } else {
			                                ?>
			                                	<?php echo $sup_names ?>
			                                <?php
			                            }
			                        ?>
		                        </td>
		                        <td><?php echo $tot_sec ?></td>
		                        <td>
		                            <a href="index.php?security-assignment&&site_id=<?php echo $site_id ?>" class="btn btn-primary btn-icon-split btn-sm" >
		                                <span class="icon text-white-50">
		                                       <i class="fas fa-plus-square"></i>
		                                </span>
		                                    <span class="text">Assign Security</span>
		                            </a>
		                            
		                        </td>                        
		                    </tr>                                            
		                </tbody>
		                <?php }  ?>
		                </table>
		              </div>
		            </div>
                </div>

        </div>
            <!-- /.container-fluid -->
            <?php
                }
            ?>
              