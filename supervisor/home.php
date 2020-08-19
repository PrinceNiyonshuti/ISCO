        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> <?php echo $site_name; ?>  Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php echo $site_name; ?> Securities </div>

                      <?php

                        $sql1=" SELECT COUNT(site_id) AS no_security FROM `security` WHERE site_id='$site_id' ";
                        $result1=$conn->query($sql1);

                        while ($row1 = $result1->fetch_assoc()) {
                        $total_no_security=$row1['no_security'];

                        }
                      ?>

                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_no_security; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Gate (s)</div>

                        <?php

                          $sql1=" SELECT COUNT(gate_id) AS no_gate FROM `gate` WHERE site_id='$site_id' ";
                          $result1=$conn->query($sql1);

                          while ($row1 = $result1->fetch_assoc()) {
                          $total_no_gate=$row1['no_gate'];

                          }
                        ?>

                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_no_gate; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-tasks fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->