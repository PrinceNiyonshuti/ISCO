<?php 

                $gate_id=$_GET['gate_id'];

                    $sql1="SELECT * FROM gate WHERE gate_id='$gate_id' ";
                    $result1=$conn->query($sql1);
                    while ($row1 = $result1->fetch_assoc()) {
                    $gate_id=$row1['gate_id'];
                    $gate_name=$row1['gate_name'];
                }

        if(ISSET($_GET['sec_id'])){

            $sec_id=$_GET['sec_id'];

            $sql_1="UPDATE security set gate_id=NULL where sec_id='$sec_id'";

                if ($conn->query($sql_1)===TRUE) 
                {
                    echo '<script language="javascript">
                      alert(" Security Successfully Discarded ");
                      window.location.href = "index.php?gate-assignment&gate_id='.$gate_id.'";
                    </script>';

                }else
                {
                    echo '<script language="javascript">
                      alert(" Something Went Wrong ");
                      window.location.href = "index.php?gate-assignment&gate_id='.$gate_id.'";
                    </script>';
                }
        }
?>
 

                <div class="container-fluid">
                    <div class="row" id="loader_general_admin2">
                        <div class="col-lg-12">
                                <!-- DATA TABLE -->
                            <div class="table-responsive table-responsive-data">
                                <div id="Message2" >                                  
                                </div>
                                <br>
                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"><b><?php echo $site_name ?> Gate Assignment</b></h3>
                                        </div>
                                        <hr>
                                        <form action="#/" onsubmit="assign_gate_security();return false;"  method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <img class="align-self-center  mr-3" src="../assets/img/tap.jpg"  width="50%" height="100%">
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="x_card_code" class="control-label mb-1"> Name </label>
                                                    <div class="input-group">
                                                        <label class="form-control cc-cvc"><?php echo $gate_name; ?></label>
                                                        <input id="gate_id" name="gate_id" type="text" class="form-control cc-cvc" value="<?php echo $gate_id ?>" style="display: none;" >
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Security</label>
                                                    <div class="input-group">
                                                        <select id="sec_id" name="sec_id" class="form-control cc-cvc">
                                                            <option value="0"> -- Select Security -- </option>
                                                            <?php

                                                                $sql2=" SELECT * FROM security WHERE site_id='$site_id' AND gate_id IS NUll  ";
                                                                $result2=$conn->query($sql2);

                                                                while ($row2 = $result2->fetch_assoc()) {
                                                                ?>
                                                                    <option value="<?php echo $row2['sec_id'] ?>"> <?php echo $row2['sec_names'] ?> </option>
                                                                <?php
                                                                }
                                                             ?>
                                                        </select>
                                                    </div>

                                                        <br>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fas fa-fw fa-tape"></i>&nbsp;
                                                    <span id="payment-button-amount">Save Changes</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <!-- END DATA TABLE -->
                    </div>


                </div>

                <!-- Begin Page Content -->
        <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">&nbsp;</h1>
                <p class="mb-4"> &nbsp; </p>
                <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="text-center title-2"><b><?php echo $site_name ?> <?php echo $gate_name ?> Assigned Security </b></h4>
                        </div>
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                                <th>#</th>
                                <th>Avatar</th>
                                <th>Security Code</th>
                                <th>Full Names</th>
                                <th>Gender</th>
                                <th>E-mail</th>
                                <th>Tel</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <?php

                            $sql1="SELECT * FROM security WHERE site_id='$site_id' AND gate_id='$gate_id' ORDER BY sec_id DESC";
                            $result1=$conn->query($sql1);

                            $no=0;

                            while ($row1 = $result1->fetch_assoc()) {
                            $sec_id=$row1['sec_id'];
                            $gate_id=$row1['gate_id'];
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
                                <td><?php echo $row1['sec_email'];?></td>
                                <td><?php echo $row1['sec_tel'];?></td>
                                <td>
                                    <a href="index.php?gate-assignment&gate_id=<?php echo $gate_id ?>&sec_id=<?php echo $row1['sec_id']; ?>" class="btn btn-danger btn-icon-split btn-sm" >
                                        <span class="icon text-white-50">
                                               <i class="fas fa-cancel"></i>
                                        </span>
                                            <span class="text">Discard Security</span>
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