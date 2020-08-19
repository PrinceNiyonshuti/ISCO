        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Supervisor (s) </div>

                      <?php

                        $sql1=" SELECT COUNT(*) AS no_supervisor FROM `supervisor` ";
                        $result1=$conn->query($sql1);

                        while ($row1 = $result1->fetch_assoc()) {
                        $total_no_supervisor=$row1['no_supervisor'];

                        }
                      ?>

                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_no_supervisor; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Securities </div>

                      <?php

                        $sql1=" SELECT COUNT(*) AS no_security FROM `security` ";
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

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Sites </div>

                      <?php

                        $sql1=" SELECT COUNT(*) AS no_site FROM `site` ";
                        $result1=$conn->query($sql1);

                        while ($row1 = $result1->fetch_assoc()) {
                        $total_no_site=$row1['no_site'];

                        }
                      ?>

                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_no_site; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->