        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row" id="loader_general_admin2">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <div id="Message2" ></div>
                    <br>
                                
                    <div class="table-responsive table-responsive-data">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header ">
                                    <h6 class="m-0 font-weight-bold text-primary"><?php echo $site_name; ?> New Gate</h6>
                                </div>
                                <div class="card-body">
                                    <form action="#/" onsubmit="register_new_gate();return false;" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                           
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <img class="align-self-center  mr-3" src="../assets/img/tap.jpg" alt="Blog Cover" id="blah" alt="Card image cap" width="20%" height="100%">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">Gate Name</label>
                                                    <input id="site_id" name="site_id" type="text" class="form-control cc-cvc" value="<?php echo $site_id ?>" style="display: none;" >
                                                    <input id="gate_name" name="gate_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                <i class="fa fa-building fa-lg"></i>&nbsp;
                                                <span id="payment-button-amount">Save Gate</span>
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