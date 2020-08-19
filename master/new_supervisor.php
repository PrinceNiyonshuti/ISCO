
 

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
                                            <h3 class="text-center title-2"><b>Supervisor</b></h3>
                                        </div>
                                        <hr>
                                        <form action="#/" onsubmit="register_supervisor();return false;"  method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <img class="align-self-center  mr-3" src="master_profile/user-avatar.jpg" id="blah" alt="<?php echo $comp_username ?>" width="100%" height="270px">
                                                        <br><br>
                                                        <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">

                                                    <label for="x_card_code" class="control-label mb-1">Names</label>
                                                    <div class="input-group">
                                                        <input id="sup_name" name="sup_name" type="text" class="form-control cc-cvc"  data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">E-mail</label>
                                                    <div class="input-group">
                                                        <input id="sup_mail" name="sup_mail" type="email" class="form-control cc-cvc"  data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Telephone</label>
                                                    <div class="input-group">
                                                        <input id="sup_tel" name="sup_tel" type="text" class="form-control cc-cvc"  data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Gender</label>
                                                    <div class="input-group">
                                                        <select id="sup_gender" name="sup_gender" class="form-control cc-cvc"  data-val="true">
                                                            <option value="0">-- Select Gender --</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                        <br>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fas fa-fw fa-user-tie"></i>&nbsp;
                                                    <span id="payment-button-amount">Save Supervisor</span>
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