<?php  include(__DIR__ .'/../layout/header.php') ?>
<div id="content">
                <!-- topbar -->

                <!-- dashboard inner -->
                <div class="midde_cont">
                    
                    <div class="container-fluid">
                    <div class="button_block d-flex justify-content-end mb-3"> <a href="<?php  echo get_base_url('/stores/add')   ?>"><button type="button" class="btn cur-p btn-success">Add New Store <i class="fa fa-plus-square-o"></i> </button></a></div>
                        <div class="row column_title"></div>
                        <!--- start all orders table -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2><i class="fa fa-desktop"></i>  Stores</h2>
                                        </div>
                                    </div>

                                    <div class="table_section padding_infor_info">
                                        <div class="buttons">


                                        </div>
                                        <div class="table-responsive-sm" style="overflow:auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Store Name </th>
                                                        <th>Store url</th>
                                                        <th>Store Status</th>
                                                        <th>sore Platform</th>
                                                       
                                                        <th></th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>order_01</td>
                                                        <td>Hassan maachou</td>
                                                        <td>completed</td>
                                                        <td>22-12-1212</td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn cur-p btn-warning">Warning</button>
                                                            <button type="button" class="btn cur-p btn-warning">Warning</button>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>order_01</td>
                                                        <td>Hassan maachou</td>
                                                        <td>completed</td>
                                                        <td>22-12-1212</td>
                                                       
                                                        <td>
                                                            <button type="button" class="btn cur-p btn-warning">Warning</button>
                                                            <button type="button" class="btn cur-p btn-warning">Warning</button>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>order_01</td>
                                                        <td>Hassan maachou</td>
                                                        <td>completed</td>
                                                        <td>22-12-1212</td>
                                                      
                                                        <td>
                                                            <button type="button" class="btn cur-p btn-warning">Warning</button>
                                                            <button type="button" class="btn cur-p btn-warning">Warning</button>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>order_01</td>
                                                        <td>Hassan maachou</td>
                                                        <td>completed</td>
                                                        <td>22-12-1212</td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn cur-p btn-warning">Warning</button>
                                                            <button type="button" class="btn cur-p btn-warning">Warning</button>
                                                        </td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--- end all orders table -->
                    </div>

                </div>

            </div>
            <?php  include(__DIR__ .'/../layout/footer.php') ?>