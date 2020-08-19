 
        <!-- Begin Page Content -->
        <div class="container-fluid">
        
            <?php
                $query1=$conn->query("SELECT * FROM admin ");
                if($query1->num_rows <= 0   ){

            ?>

                <div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
                    <span class="badge badge-pill badge-info">Infoming</span>
                    Sorry <b><?php echo $m_username ?></b> Doen't Have Any Other Admins.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>

            <?php
                }else{
            ?>
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Admin List</h1>
                <p class="mb-4">Admin List Details and Data </p>
                <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Admin List</h6>
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

		                    $sql1="SELECT * FROM admin ORDER BY user_id DESC";
		                    $result1=$conn->query($sql1);

		                    $a=1;

		                    while ($row1 = $result1->fetch_assoc()) {
		                    $comp_id=$row1['user_id'];
		                    $comp_username=$row1['username'];
		                    $comp_names=$row1['names'];
		                    $comp_tel=$row1['tel'];
		                    $comp_mail=$row1['mail'];                   
		                    $comp_profile=$row1['profile'];

		                    $id1="Mine".$a;
		                    $id2="Mine1".$a;

		                    if (empty($comp_profile)) {
						        $fileName = "user-avatar.jpg";
						    } else {
						        $fileName = "$comp_profile";
						    }

		                ?>                                        
		                <tbody>
		                    <tr>
		                        <td><?php echo $a ?></td>
		                        <td>
			                        <img class="img-profile rounded" src="../master/master_profile/<?php echo $fileName ?>" alt="<?php echo $comp_names ?>" style="width: 60px;height: 40px;">
		                        </td>
		                        <td><?php echo $comp_username ?></td>
		                        <td><?php echo $comp_names ?></td>
		                        <td><?php echo $comp_mail ?></td>
		                        <td><?php echo $comp_tel ?></td>
		                    </tr>                                            
		                </tbody>
		                <?php $a++; }  ?>
		                </table>
		              </div>
		            </div>
              </div>

            </div>
            <!-- /.container-fluid -->
            <?php
                }
            ?>
              