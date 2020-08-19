
        <!-- Begin Page Content -->
        <div class="container-fluid">
        
            <?php
                $query1=$conn->query("SELECT * FROM supervisor ");
                if($query1->num_rows <= 0   ){

            ?>

                <div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
                    <span class="badge badge-pill badge-info">Infoming</span>
                    Sorry You Don't Have Any Supervisor.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>

            <?php
                }else{
            ?>
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Supervisor List</h1>
                <p class="mb-4">Supervisor List Details and Data </p>
                <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Supervisor List</h6>
                </div>
                    <div class="card-body">
		              <div class="table-responsive">
		                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		                  <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>Avatar</th>
		                        <th>Username</th>
		                        <th>Full Names</th>
		                        <th>E-mail</th>
		                        <th>Tel</th>
		                    </tr>
		                  </thead>
		                  <?php

		                    $sql1="SELECT * FROM supervisor ORDER BY supervisor_id DESC";
		                    $result1=$conn->query($sql1);

		                    $no=0;

		                    while ($row1 = $result1->fetch_assoc()) {
		                    $cl_id=$row1['supervisor_id'];
		                    $sup_profile=$row1['profile'];

		                    $no+=1;

		                    if (empty($sup_profile)) {
						        $fileName = "../master/user-avatar.jpg";
						    } else {
						        $fileName = "$sup_profile";
						    }

		                ?>                                        
		                <tbody>
		                    <tr>
		                        <td><?php echo $no; ?></td>
		                        <td>
			                        <img class="img-profile rounded" src="../supervisor/supervisor_profile/<?php echo $fileName ?>" alt="<?php echo $sup_profile ?>" style="width: 60px;height: 40px;">
		                        </td>
		                        <td><?php echo $row1['username'];?></td>
		                        <td><?php echo $row1['supervisor_name'];?></td>
		                        <td><?php echo $row1['mail'];?></td>
		                        <td><?php echo $row1['tel'];?></td>
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
              