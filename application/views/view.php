

    <table class="table table-dark table-striped">
        
        <thead class="table-dark">
        <!-- <tr><h3  class="text-end" ><a href="<?php //echo base_url('userController/create'); ?>" class="text-uppercase text-end">Back to create user</a></h3></tr> -->
        <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($view_users as $users): ?>
                <tr>
                    <td><?php echo $users->id; ?></td>
                    <td><?php echo $users->name; ?></td>
                    <td><?php echo $users->email; ?></td>
                    <td><?php echo $users->created_at; ?></td>
                    <td>
                        <a href="<?php echo base_url('userController/edit/'.$users->id); ?>" class="btn btn-info text-white"><i class="fa fa-eye"></i></a>
                        <a href="<?php echo base_url('userController/delete/'.$users->id); ?>" class="btn btn-danger text-white"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <style>
        .table-dark {
    --bs-table-bg: #212529;
    --bs-table-striped-bg: #2c3034;
    --bs-table-striped-color: #fff;
    --bs-table-active-bg: #373b3e;
    --bs-table-active-color: #fff;
    --bs-table-hover-bg: #323539;
    --bs-table-hover-color: #fff;
    color: #fff;
    border-color: #373b3e;
    margin-left: 250px;
    width: 80%;
}
    </style>