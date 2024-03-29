<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
<div class="container mx-auto m-5 p-5">
    <div class="row p-5">
        <div class="col-sm-12 col-md-12 p-5">
            <form method="post" action="<?php echo site_url('userController/update'); ?>" class="row gy-2 gx-3 align-items-center bg-dark p-5">
                <div class="col-12">
                    <p class="text-light text-center fs-1">User Edit/Update form</p>
                </div>
                <input type="hidden" name="id" value="<?php echo $edit_data['id']; ?>">
                <div class="col-6">
                    <label class="visually-hidden" for="autoSizingInputGroup">Name</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
                        <input type="text" class="form-control" id="autoSizingInputGroup" name="name" value="<?php echo $edit_data['name']; ?>">
                    </div>
                </div>
                <div class="col-6">
                    <label class="visually-hidden" for="autoSizingInputGroup">Email</label>
                    <div class="input-group">
                        <div class="input-group-text">@</div>
                        <input type="text" class="form-control" id="autoSizingInputGroup" name="email" value="<?php echo $edit_data['email']; ?>">
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary mt-3" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>