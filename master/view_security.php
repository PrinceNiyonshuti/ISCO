
        <!-- Begin Page Content -->
        <div class="container-fluid">
        
            <?php
                $query1=$conn->query("SELECT * FROM security ");
                if($query1->num_rows <= 0   ){

            ?>

                <div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
                    <span class="badge badge-pill badge-info">Infoming</span>
                    Sorry You Don't Have Any Security.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>

            <?php
                }else{
            ?>
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Security List</h1>
                <p class="mb-4">Security List Details and Data </p>
                <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Security List</h6>
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
		                        <th>Gender</th>
		                        <th>DOB</th>
		                        <th>E-mail</th>
		                        <th>Tel</th>
		                        <th>Site</th>
		                        <th>Date</th>
		                    </tr>
		                  </thead>
		                  <?php

		                    $sql1="SELECT * FROM security ORDER BY sec_id DESC";
		                    $result1=$conn->query($sql1);

		                    $no=0;

		                    while ($row1 = $result1->fetch_assoc()) {
		                    $sec_id=$row1['sec_id'];
		                    $sec_profile=$row1['profile'];

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
		                        <td><?php echo $row1['sec_gender'];?></td>
		                        <td><?php echo $row1['sec_dob'];?></td>
		                        <td><?php echo $row1['sec_email'];?></td>
		                        <td><?php echo $row1['sec_tel'];?></td>
		                        <td><?php echo $row1['site_id'];?></td>
		                        <td><?php echo $row1['reg_date'];?></td>
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
              