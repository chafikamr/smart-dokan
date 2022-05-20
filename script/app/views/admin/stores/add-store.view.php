<?php  include(__DIR__ .'/../layout/header.php') ?>
<div id="content">
                <div class="midde_cont">
                    <div class="container-fluid">  
                        <!-- start  a user profile -->
                        <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Add A New Store </h2>
                                 </div>
                              </div>
                              <div class="full progress_bar_inner">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="full">
                                          <div class="padding_infor_info">
                                            <form method="post" action="<?php echo get_base_url('/stores/add'); ?>" >
                                            <div class="form-group">
                                                    <label for="exampleInputPassword1">Store Name  </label>
                                                    <input type="text" class="form-control" id=""  name="store_name" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Store url </label>
                                                    <input type="tzxt" class="form-control" id="exampleInputEmail1" name="store_url"  >
                                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                </div>
                                                <div class="form-group">
                                                <label for="exampleInputEmail1">Status</label>
                                                <select class="custom-select" name="store_status">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">store ck </label>
                                                    <input type="password" class="form-control" name="store_ck" aria-describedby="emailHelp">
                                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Store cs</label>
                                                    <input type="text" class="form-control" name="store_cs" aria-describedby="emailHelp">
                                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                </div>
                                             
                                                <div class="d-flex justify-content-end" >
                                                        <button type="submit" class="btn btn-primary" name="submit" value="add_store">Submit</button>
                                                </div>
                                                
                                            </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <!--- end a user profile -->
                    </div>
                </div>     
</div>
<?php  include(__DIR__ .'/../layout/footer.php') ?>