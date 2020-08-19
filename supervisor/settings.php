
 

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
                                            <h3 class="text-center title-2"><b>Profile Settings</b></h3>
                                        </div>
                                        <hr>
                                        <form action="#/" onsubmit="master_profile_update();return false;"  method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <?php

                                                            if (empty($m_profile)) {
                                                                $fileName = "user-avatar.jpg";
                                                            } else {
                                                                $fileName = "$m_profile";
                                                            }

                                                            $m_pass = openssl_decrypt($m_pass, "AES-128-ECB", DONE);

                                                        ?>
                                                        <img class="align-self-center  mr-3" src="supervisor_profile/<?php echo $fileName ?>" id="blah" alt="<?php echo $m_username ?>" width="100%" height="270px">
                                                        <br><br>
                                                        <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                                    </div>
                                                    <input id="m_id" name="m_id" type="text" class="form-control cc-cvc" value="<?php echo $m_id ?>" style="display: none;" >
                                                </div>
                                                <div class="col-lg-8">

                                                    <label for="x_card_code" class="control-label mb-1">Username</label>
                                                    <div class="input-group">
                                                        <label  class="form-control cc-cvc"> <?php echo $m_username ?></label>
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">E-mail</label>
                                                    <div class="input-group">
                                                        <input id="m_mail" name="m_mail" type="text" class="form-control cc-cvc" value="<?php echo $m_mail ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Telephone</label>
                                                    <div class="input-group">
                                                        <input id="m_tel" name="m_tel" type="text" class="form-control cc-cvc" value="<?php echo $m_tel ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Password</label>
                                                    <div class="input-group">
                                                        <input id="m_pass" name="m_pass" type="text" class="form-control cc-cvc" value="<?php echo $m_pass ?>" data-val="true">
                                                    </div>
                                                        <br>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="zmdi zmdi-settings fa-lg"></i>&nbsp;
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