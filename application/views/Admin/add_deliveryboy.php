<?php
$this->load->view('Admin/layout/header');
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           ADD Delivery Boy
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="<?php echo base_url('index.php/Admincontroller/add_deliveryboy_insert')?>" role="form" method="post" enctype="multipart/form-data">
                                	<div class="form-group">
                                    
                                    <select class="form-control" id="exampleInputEmail1" name="nursery">
                                    	<option>Choose Nursery</option>
                                    	<?php
                                    	foreach($nursery as $nsry)
                                    	{
                                    		?>
                                    	
                                    	<option value="<?php echo $nsry->email?>"><?php echo $nsry->name?></option>
                                    	<?php
                                    }
                                    	?>
                                    	
                                    </select>
                                </div>
                                	<div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input name="name"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input name="email"  type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
