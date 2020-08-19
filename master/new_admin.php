
 

                <div class="container-fluid">
                    <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                            <div class="table-responsive table-responsive-data">
                                    <div id="Message2" ></div>
                                    <br>
                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"><b>New Admin Data</b></h3>
                                        </div>
                                        <hr>
                                        <form action="#/" onsubmit="register_system_admin();return false;"  method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <img class="align-self-center  mr-3" src="master_profile/user-avatar.jpg" id="blah"  width="100%" height="270px">
                                                        <br><br>
                                                        <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">

                                                    <label for="x_card_code" class="control-label mb-1">Admin Username</label>
                                                    <div class="input-group">
                                                        <input id="admin_Uname" name="admin_Uname" type="text" class="form-control cc-cvc"  data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Admin Names</label>
                                                    <div class="input-group">
                                                        <input id="admin_name" name="admin_name" type="text" class="form-control cc-cvc"  data-val="true">
                                                    </div>

                                                    <?php

                                                        $sql5="SELECT * from user_type where u_type_name='admin'";
                                                        $result5=$conn->query($sql5);

                                                        while ($row5 = $result5->fetch_assoc()) {
                                                        $type_id=$row5['u_type_id'];
                                                        $type_name=$row5['u_type_name'];

                                                        }
                                                    ?>
                                                    <div class="input-group" style="display: none;">
                                                        <input id="admin_type" name="admin_type" type="text" class="form-control cc-cvc" value="<?php echo $type_id ?>"  >
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">E-mail</label>
                                                    <div class="input-group">
                                                        <input id="admin_mail" name="admin_mail" type="email" class="form-control cc-cvc"  data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Telephone</label>
                                                    <div class="input-group">
                                                        <input id="admin_tel" name="admin_tel" type="text" class="form-control cc-cvc"  data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Password</label>
                                                    <div class="input-group">
                                                        <input id="admin_pass" name="admin_pass" type="text" class="form-control cc-cvc"  data-val="true">
                                                    </div>
                                                        <br>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fas fa-fw fa-user-tie"></i>&nbsp;
                                                    <span id="payment-button-amount">Create Admin</span>
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
                                        <script>

                                                 function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    $('#blah')
                                                        .attr('src', e.target.result)
                                                        .width('100%')
                                                        .height(270);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                            }
                                                }
                                            
                                        </script>