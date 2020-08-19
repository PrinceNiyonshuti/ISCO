 
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
                <h1 class="h3 mb-2 text-gray-800">Site List</h1>
                <p class="mb-4">Site List Details and Data </p>
                <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Site List</h6>
                </div>
                    <div class="card-body">
		              <div class="table-responsive">
		                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		                  <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>Name</th>
		                        <th>Contact</th>
		                        <th>E-mail</th>
		                        <th>Address</th>
		                        <th>Date</th>
		                    </tr>
		                  </thead>
		                  <?php

		                  	$no=0;
		                    $sql1="SELECT * FROM site ORDER BY site_id DESC";
		                    $result1=$conn->query($sql1);

		                    while ($row1 = $result1->fetch_assoc()) {
		                    	$no+=1;
		                ?>                                        
		                <tbody>
		                    <tr>
		                        <td><?php echo $no; ?></td>
		                        <td><?php echo $row1['site_name'];?></td>
		                        <td><?php echo $row1['site_tel'];?></td>
		                        <td><?php echo $row1['site_email'];?></td>
		                        <td><?php echo $row1['site_address'];?></td>
		                        <td><?php echo $row1['site_date'];?></td>
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
              