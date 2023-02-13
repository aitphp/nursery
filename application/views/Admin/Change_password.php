<?php
$this->load->view('Admin/layout/header');
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Change Password
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            	<?php
                                	foreach ($admin as $admn) 
                                		
                                	?>
                                <form role="form" method="post" action="<?php echo base_url('index.php/Admincontroller/change_pass/'.$admn->id)?>">
                                	
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" readonly="" value="<?php echo  $admn->email?>" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" readonly="" value="<?php echo  $admn->password?>" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">New Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="newpass" required="">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="con_pass" required="">
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>
<?php
$this->load->view('Admin/layout/footer');
?>

