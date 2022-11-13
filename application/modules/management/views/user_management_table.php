<table id="db_management" width="100%">
    <thead>
        <tr>
            <th title="#">#</th>
            <th title="userName">User Name</th>
            <th title="email">Email</th>
            <th title="RoleName">Role Name</th>
            <th width="80">Date Created</th>
            <th width="80">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $counter = 1;
        if (isset($all_roles) && is_Array($all_roles)) {
            foreach ($all_roles as $value) { ?>
                <tr>
                    <td><?= $counter; ?></td>
                    <td><?= $value->name; ?></td>
                    <td><?= $value->email; ?></td>
                    <td><?= $value->role_name; ?></td>
                    <td><?= date('d/m/Y', strtotime($value->created_at)); ?></td>
                    <td>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" class="edit dropdown-item" data-id='<?= $value->id; ?>' data-name='<?= $value->name; ?>' data-email='<?= $value->email; ?>' data-mobile='<?= $value->mobile; ?>' data-password='<?= $value->password; ?>'  ><i class="la la-edit"></i> Edit </a>
                            </li>
                            <li>
                                <a href='javascript:void(0)' class="delete dropdown-item"  data-id='<?= $value->id; ?>' ><i class="la la-close"></i> Delete </a>
                            </li>
                        </ul>
                    </td>
                </tr>
            <?php
                $counter++;
            }
        } else { ?>
            <tr>No Record found!</tr>
        <?php
        } ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#db_management').DataTable();
    });

    $('.delete').click(function() {
        $('#user-delete').val($(this).attr("data-id"));
        $('#user-delete-modal').modal('show');
    });

    $('.edit').click(function() {
        var role = $(this).attr("data-id");
        console.log(role);
        $('#edit_id').val($(this).attr("data-id"));
        $('#edit_name').val($(this).attr("data-name"));
        $('#edit_email').val($(this).attr("data-email"));
        $('#edit_mobile').val($(this).attr("data-mobile"));
        // $('#edit_password').val($(this).attr("data-password"));
        $("#edit_role option[value='" + role + "']").prop("selected", true);
        $('#edit-user-modal').modal('show');
    });
</script>