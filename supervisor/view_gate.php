 
        <!-- Begin Page Content -->
        <div class="container-fluid">
        
            <?php
                $query1=$conn->query("SELECT * FROM gate WHERE site_id='$site_id' ");
                if($query1->num_rows <= 0   ){

            ?>

                <div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
                    <span class="badge badge-pill badge-info">Infoming</span>
                    Sorry <b><?php echo $m_username ?></b> Doen't Have Any Gate on This Site.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>

            <?php
                }else{
            ?>
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800"><?php echo $site_name; ?> Gate List</h1>
                <p class="mb-4">Gate List Details and Data </p>
                <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Gate List</h6>
                </div>
                    <div class="card-body">
		              <div class="table-responsive">
		                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		                  <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>Name</th>
		                        <th>Securities</th>
		                        <th>Action</th>
		                    </tr>
		                  </thead>
		                  <?php

		                  	$no=0;
		                    $sql1="SELECT * FROM gate ORDER BY gate_id DESC";
		                    $result1=$conn->query($sql1);

		                    while ($row1 = $result1->fetch_assoc()) {
		                    	$no+=1;
		                    	$gate_id=$row1['gate_id'];

		                   	$sql_3=" SELECT COUNT(gate_id) AS no_security FROM `security` WHERE gate_id='$gate_id' ";
		                    $result_3=$conn->query($sql_3);

		                    while ($row_3 = $result_3->fetch_assoc()) {
		                    $tot_sec =$row_3['no_security'];
		                	}

		                ?>                                        
		                <tbody>
		                    <tr>
		                        <td><?php echo $no; ?></td>
		                        <td><?php echo $row1['gate_name'];?></td>
		                        <td><?php echo $tot_sec;?></td>
		                        <td>
		                            <a href="index.php?gate-assignment&gate_id=<?php echo $gate_id ?>" class="btn btn-primary btn-icon-split btn-sm" >
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
              