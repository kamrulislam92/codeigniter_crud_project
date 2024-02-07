
        <div class="container mt-3 bg-info p-5">
           <div style="display:grid; grid-template-columns:50% 50%;" > 
               <h3>Create User</h3> 
                <h3  class="text-end" ><a href="<?php echo base_url('/'); ?>" class="text-uppercase text-end">Back to home</a></h3>
            </div>
            <hr>
            <form method="post" name="createUser" action="<?php echo base_url('userController/create');?>" class=" bg-info p-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" value="<?php echo set_value('name'); ?>" class="form-control">
                            <?php echo form_error('name'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" id=""  value="<?php echo set_value('email'); ?>" class="form-control">
                            <?php echo form_error('email'); ?>
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-primary">Create</button>
                            <button class="btn btn-danger">Cancel</button> 
                        </div>
                    </div>
                </div>
            </form>
        </div>

<style>
.bg-info {
    background-color: #0dcaf0!important;
    margin-left: 250px;
    width: 76%;
}
</style>