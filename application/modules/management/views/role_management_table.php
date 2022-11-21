<table id="db_management" class="display nowrap" width="100%">
    <thead>
        <tr>
            <th title="#">#</th>
            <th title="roleName">Role Name</th>
            <th title="menuList">Menu List</th>
            <th title="assign">Assign Lead</th>
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
                "adminrights"                   =>"Admin Management",
                "itineraries/viewItineraries"   =>"Itineraries",
                "itinerariesexpert"             =>"Itineraries Expert",
                "package/listpackage"           =>"Lead Management",
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
                    <td><?= date('d/m/Y', strtotime($value->created_at)); ?></td>
                    <td style="position: relative;">
                        <div class="edit-btndv">
                            <div class="edit-btns"><span></span><span></span><span></span></div> 
                            <div class="dropdown-menu1" style="display: none;">
                                <ul>  
                                <li>
                                    <a href="javascript:void(0);" class="edit dropdown-item" data-id='<?= $value->id; ?>' data-name='<?= $value->name; ?>' data-assign_leads='<?= $value->assign_leads; ?>' data-module='<?= $value->module; ?>' ><i class="la la-edit"></i> Edit </a>
                                </li>
                                <li>
                                    <a href='javascript:void(0)' class="delete dropdown-item"  data-id='<?= $value->id; ?>' ><i class="la la-close"></i> Delete </a>
                                </li>

                                <!-- <li><a data-toggle="modal" data-target="#m_modal_6" class="dropdown-item" href="javascript:void(0);"><i class="la la-edit"></i> Edit </a></li>
                                <li><a data-toggle="modal" data-target="#myModal1" class="dropdown-item" href="javascript:void(0);"><i class="la la-close"></i> Delete </a></li>                                                 -->
                                </ul>                                                                                                                                
                            </div>
                        </div>                                                        
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
        $('#db_management').DataTable({
             "scrollX": true,
             fixedColumns:   {          
               right: 1
        }
         });
        $('#db_management_filter.dataTables_filter').append('<a href="#" tooltip="Download CSV" flow="left"><i class="icons excel-icon"></i></a>');                  
         
    });

    $('.delete').click(function() {
        $('#role-delete').val($(this).attr("data-id"));
        $('#role-delete-modal').modal('show');
    });

    $('.edit').click(function() {
        $('#edit_id').val($(this).attr("data-id"));
        $('#edit_role_name').val($(this).attr("data-name"));
        $("input[name=edit_assign_leads][value=" + $(this).attr("data-assign_leads") + "]").prop('checked', true);
        modules = jQuery.parseJSON($(this).attr("data-module"));
        $.each(modules, function(index, value) {
            $("#edit_modules option[value='" + value + "']").prop("selected", true);
        });
        $('#edit-role-modal').modal('show');
    });
</script>

<script>
           
           $(document).click(function(e) {
          var target = e.target;
          if (!$(target).is('.edit-btns') && !$(target).parents().is('.edit-btns')) {
              $('.dropdown-menu1').hide();
              $('.context-menu1').removeClass('active-menu');
          }
          });      
          $(".edit-btns").click(function(){
              $(".dropdown-menu1").hide();
              //$(this).next('.context-menu').toggle();
              if($(this).next('.dropdown-menu1').hasClass("active-menu")){
                $(this).next('.dropdown-menu1').hide().removeClass('active-menu');
              }else{
                $('.context-menu').removeClass('active-menu');
                $(this).next('.dropdown-menu1').show().addClass('active-menu');
              }
              $(this).parents('.nav-item').addClass('active');
          });      
       </script>
