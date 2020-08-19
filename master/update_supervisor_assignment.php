<?php 

                $site_id=$_GET['site_id'];

                    $sql1="SELECT * FROM site WHERE site_id='$site_id' ";
                    $result1=$conn->query($sql1);
                    while ($row1 = $result1->fetch_assoc()) {
                        $site_id=$row1['site_id'];
                        $site_name=$row1['site_name'];
                        $site_address=$row1['site_address'];
                        $superv_id=$row1['supervisor_id'];
                    }

                    $sql_2=" SELECT * FROM supervisor WHERE supervisor_id='$superv_id'  ";
                    $result_2=$conn->query($sql_2);
                    while ($row_2 = $result_2->fetch_assoc()) {
                        $superv_id=$row_2['supervisor_id'];
                        $superv_name=$row_2['supervisor_name'];
                    }


?>
 

                <div class="container-fluid">
                    <div class="row" id="loader_general_admin2">
                            <div class="col-lg-12">
                                <!-- DATA TABLE -->
                            <div class="table-responsive table-responsive-data">
                                    <div id="Message2" ></div>
                                    <br>
                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"><b> Update <?php echo $site_name ?> Supervisor</b></h3>
                                        </div>
                                        <hr>
                                        <form action="#/" onsubmit="update_site_supervisor();return false;"  method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <img class="align-self-center  mr-3" src="../assets/img/tap.jpg"  width="100%" height="150px">
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="x_card_code" class="control-label mb-1"> Name </label>
                                                    <div class="input-group">
                                                        <label class="form-control cc-cvc"><?php echo $site_name; ?></label>
                                                        <input id="site_id" name="site_id" type="text" class="form-control cc-cvc" value="<?php echo $site_id ?>" style="display: none;" >
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1"> Address </label>
                                                    <div class="input-group">
                                                        <label class="form-control cc-cvc"><?php echo $site_address; ?></label>
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Supervisor</label>
                                                    <div class="input-group">
                                                        <select id="sup_id" name="sup_id" class="form-control cc-cvc">
                                                            <option value="<?php echo $superv_id; ?>"> <?php echo $superv_name; ?> </option>
                                                            <?php

                                                                $sql2=" SELECT * FROM supervisor WHERE site_id IS NUll  ";
                                                                $result2=$conn->query($sql2);

                                                                while ($row2 = $result2->fetch_assoc()) {
                                                                ?>
                                                                    <option value="<?php echo $row2['supervisor_id'] ?>"> <?php echo $row2['supervisor_name'] ?> </option>
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
            </div>