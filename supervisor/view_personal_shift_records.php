
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php
                $sec_code=$_GET['sec_code'];

                $sql1="SELECT * FROM security WHERE sec_code='$sec_code' ";
		            $result1=$conn->query($sql1);
		            while ($row1 = $result1->fetch_assoc()) {
			            $sec_id=$row1['sec_id'];
			            $sec_name=$row1['sec_names'];
			        }
            ?>
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800"> <?php echo $sec_name; ?> Security Personal Attendance </h1>
                <p class="mb-4"><?php echo $site_name; ?> Security Attendance Details and Data </p>
                <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Security Attendance</h6>
                </div>
                    <div class="card-body">
		              <div class="table-responsive">
		                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		                  <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>Avatar</th>
		                        <th>Security Code</th>
		                        <th>Full Names</th>
		                        <th>Tel</th>
		                        <th>Shift</th>
		                        <th>Arrived</th>
		                        <th>Finished</th>
		                        <th>Date</th>
		                    </tr>
		                  </thead>
		                  <?php

		                    $sql1=" SELECT * FROM shifts_record,security,tbl_shift WHERE shifts_record.sec_code=security.sec_code AND security.shift_id=tbl_shift.shift_id AND security.site_id='$site_id' AND shifts_record.sec_code='$sec_code' ";
		                    $result1=$conn->query($sql1);

		                    $no=0;

		                    while ($row1 = $result1->fetch_assoc()) {
		                    $sec_id=$row1['sec_id'];
		                    $sec_profile=$row1['profile'];
		                    $shift_id=$row1['shift_id'];

		                    $no+=1;

		                    if (empty($sec_profile)) {
						        $fileName = "../master/user-avatar.jpg";
						    } else {
						        $fileName = "$sec_profile";
						    }
						    

		                ?>                                        
		                <tbody>
		                    <tr>
		                        <td><?php echo $no; ?></td>
		                        <td>
			                        <img class="img-profile rounded" src="../security/security_profile/<?php echo $fileName ?>" alt="<?php echo $sec_profile ?>" style="width: 60px;height: 40px;">
		                        </td>
		                        <td><?php echo $row1['sec_code'];?></td>
		                        <td><?php echo $row1['sec_names'];?></td>
		                        <td><?php echo $row1['sec_tel'];?></td>
		                        <td>
		                        	<?php 
		                        		if ($shift_id=='1') {
									       ?>
									       		<span style="color: blue;"><?php echo $row1['shift_name'];?></span>
									       <?php
									    } else {
									        ?>
									        	<span style="color: green;"><?php echo $row1['shift_name'];?></span>
									       <?php
									    }
		                        	?>		                        	
		                        </td>
		                        <td><?php echo $row1['start_time'];?></td>
		                        <td><?php echo $row1['end_time'];?></td>
		                        <td><?php echo $row1['shift_date'];?></td>
		                    </tr>                                            
		                </tbody>
		                <?php }  ?>
		                </table>
		              </div>
		            </div>
              </div>

            </div>
              