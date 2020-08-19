<?php 

                $sec_id=$_GET['sec_id'];

                    $sql1="SELECT * FROM security WHERE sec_id='$sec_id' ";
                    $result1=$conn->query($sql1);
                    while ($row1 = $result1->fetch_assoc()) {
                        $sec_id=$row1['sec_id'];
                        $sec_names=$row1['sec_names'];
                        $sec_tel=$row1['sec_tel'];
                        $shift_id=$row1['shift_id'];
                    }

                    $sql_2=" SELECT * FROM tbl_shift WHERE shift_id='$shift_id' ";
                    $result_2=$conn->query($sql_2);
                    while ($row_2 = $result_2->fetch_assoc()) {
                        $shift_id=$row_2['shift_id'];
                        $shift_name=$row_2['shift_name'];
                        $shift_desc=$row_2['shift_desc'];
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
                                            <h3 class="text-center title-2"><b> Update <?php echo $site_name ?> Shift Assignment</b></h3>
                                        </div>
                                        <hr>
                                        <form action="#/" onsubmit="update_security_shift();return false;"  method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <img class="align-self-center  mr-3" src="../assets/img/tap.jpg"  width="70%" height="100%">
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="x_card_code" class="control-label mb-1"> Name </label>
                                                    <div class="input-group">
                                                        <label class="form-control cc-cvc"><?php echo $sec_names; ?></label>
                                                        <input id="sec_id" name="sec_id" type="text" class="form-control cc-cvc" value="<?php echo $sec_id ?>" style="display: none;" >
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1"> Contact </label>
                                                    <div class="input-group">
                                                        <label class="form-control cc-cvc"><?php echo $sec_tel; ?></label>
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Shifts</label>
                                                    <div class="input-group">
                                                        <select id="shift_id" name="shift_id" class="form-control cc-cvc">
                                                            <option value="<?php echo $shift_id; ?>"> <?php echo $shift_name; ?> : <?php echo $shift_desc; ?> </option>
                                                            <?php

                                                                $sql2=" SELECT * FROM tbl_shift ";
                                                                $result2=$conn->query($sql2);

                                                                while ($row2 = $result2->fetch_assoc()) {
                                                                ?>
                                                                    <option value="<?php echo $row2['shift_id'] ?>"> <?php echo $row2['shift_name'] ?> : <?php echo $row2['shift_desc'] ?> </option>
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
                                                    <span id="payment-button-amount">Update Changes</span>
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