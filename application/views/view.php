<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div style="overflow-x: auto;">
    <table class="table">
        <thead class="table-dark">
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
                    <td><a href="<?php echo base_url('userController/edit/'.$users->id); ?>">Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>