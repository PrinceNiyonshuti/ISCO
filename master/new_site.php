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
                                    <h6 class="m-0 font-weight-bold text-primary">New Site</h6>
                                </div>
                                <div class="card-body">
                                    <form action="#/" onsubmit="register_site();return false;" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                           
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <img class="align-self-center  mr-3" src="../assets/img/tap.jpg" alt="Blog Cover" id="blah" alt="Card image cap" width="100%" height="100%">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">Name</label>
                                                    <input id="site_name" name="site_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                </div>

                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">Contact</label>
                                                    <input id="site_tel" name="site_tel" type="number" class="form-control" aria-required="true" aria-invalid="false" >
                                                </div>

                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">E-mail</label>
                                                    <input id="site_mail" name="site_mail" type="email" class="form-control" aria-required="true" aria-invalid="false" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">Address</label>
                                                    <textarea id="site_addrs" name="site_addrs" rows="4" class="form-control" aria-required="true" aria-invalid="false" required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                <i class="fa fa-building fa-lg"></i>&nbsp;
                                                <span id="payment-button-amount">Save New Site</span>
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