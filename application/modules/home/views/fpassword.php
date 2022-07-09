
        
        
         <section class="ptb-lg-70 background-grey-1">
            <div class="container">
                <form id="changepasswordss" class="row background-white ptb-lg-70">
                <div class="col-lg-12"> 
                    <div class="row"> 
                    <div class="margin-bottom-20px section-title section-title-center col-lg-12">
                        <h3 class="title h4">
                         <span> Change Password </span></h3>
                         
                    </div> 
                    
                    <div class="col-md-12 col-sm-12 margin-bottom-10px">
                        <input type="password" class="form-control" placeholder="Enter Password*" name="pass">
                    </div>
                     <div class="col-md-12 col-sm-12 margin-bottom-10px">
                        <input type="password" class="form-control" placeholder="Confirm Password*" name="cpass">
                    </div>
                    
                    <input type="hidden" name="custid" value="<?php echo $id;?>">
                    <div class="col-sm-12 text-center">
                        <button type="button" class="btn btn-primary btn-block h6" id="changepasswords">Submit</button>
                    </div> 
                    <div class="col-sm-12">
                        <div class="alert alert-danger margin-top-10px footertravelerror" style="display:none">
                            <strong>Failure!</strong> Please enter valid details.
                        </div>
                        <div class="alert alert-success margin-top-10px footertravelsuccess" style="display:none">
                             <strong>Success!</strong> Thank you, we will review your profile and get back to you soon.

                         </div>
                    </div> 
                    </div><!-- // row--> 
                </div><!--/.col--> 
                </div><!-- // row-->
                </form>
            </div>
        </section> 