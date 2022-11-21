<table id="db_management" width="100%">
    <thead>
        <tr>
            <th title="#">#</th>
            <th title="roleName">Role Name</th>
            <th title="menuList">Menu List</th>
            <th title="assign">Assign Lead</th>
            <th title="assign">Is Admin</th>
            <th width="80">Date Created</th>
            <th width="80">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $counter = 1;
        if (isset($all_roles) && is_Array($all_roles)) {
            $arr_modules = [
                "admin/dashboard"               =>"Admin Dashboard",
                "itineraries/viewItineraries"   =>"Itineraries",
                "package/lead_management"       =>"Lead Management",
                "package/db_management"         =>"DB Management",
                "package/feedback"              =>"Feedback Management",
                "management/role_management"    =>"Role Management",
                "management/user_management"    =>"User Management",
            ];
            
            foreach ($all_roles as $value) { 
                $modules = json_decode($value->module);
                ?>
                <tr>
                    <td><?= $counter; ?></td>
                    <td><?= $value->name; ?></td>
                    <td>
                        <?php 
                        foreach($modules as $module){
                            echo $arr_modules[$module] . '<br>';
                        } ?>
                    </td>
                    <td><?= ($value->assign_leads == 1) ? 'Yes' : 'No'; ?></td>
                    <td><?= ($value->is_admin == 1) ? 'Yes' : 'No'; ?></td>
                    <td><?= date('d/m/Y', strtotime($value->created_at)); ?></td>
                    <td>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" class="edit dropdown-item" data-id='<?= $value->id; ?>' data-name='<?= $value->name; ?>' data-assign_leads='<?= $value->assign_leads; ?>' data-is_admin='<?= $value->is_admin; ?>' data-module='<?= $value->module; ?>' ><i class="la la-edit"></i> Edit </a>
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
        $('#role-delete').val($(this).attr("data-id"));
        $('#role-delete-modal').modal('show');
    });

    $('.edit').click(function() {
        $('#edit_id').val($(this).attr("data-id"));
        $('#edit_role_name').val($(this).attr("data-name"));
        $("input[name=edit_assign_leads][value=" + $(this).attr("data-assign_leads") + "]").prop('checked', true);
        $("input[name=edit_is_admin][value=" + $(this).attr("data-is_admin") + "]").prop('checked', true);
        modules = jQuery.parseJSON($(this).attr("data-module"));
        $.each(modules, function(index, value) {
            $("#edit_modules option[value='" + value + "']").prop("selected", true);
        });
        $('#edit-role-modal').modal('show');
    });
</script>