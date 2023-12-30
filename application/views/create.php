<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CODEIGNITER CRUD PROJECT</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    </head>
    <body>
        <div class="navbar navbar-dark bg-dark">
            <div class="container text-center">
                <a href="#" class="navbar-brand ">CODEIGNITER CRUD PROJECT</a>
            </div>
        </div>
        <div class="container mt-3 bg-info p-5">
            <h3>Create User</h3>
            <hr>
            <form method="post" name="createUser" action="<?php echo base_url('userController/create');?>">
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

    </body>
</html>