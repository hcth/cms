<table id="db_management" width="100%">
    <thead>
        <tr>
            <th title="#">#</th>
            <th title="DataSet">Data Set</th>
            <th title="VariableName">Variable Name</th>
            <th width="80">Action</th> 
        </tr>
    </thead>
    <tbody>
        <?php 
        $counter = 1; 
        if(isset($db_data) && is_Array($db_data)) :
            foreach ($db_data as $value) { ?>
                <tr>
                    <td><?php echo $counter; ?></td>
                    <td style='text-transform: capitalize'><?php echo $db_type; ?></td>
                    <td><?php echo $value->name; ?></td>
                    <td>
                        <a href="#" 
                        class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill edit_data" 
                        data-name='<?php echo $value->name; ?>'
                        data-id='<?php echo $value->id; ?>'
                        title="Edit"
                        >
                            <i class="la la-edit"></i>
                        </a>
                        
                        <a href="#" 
                        class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only delete_data m-btn--pill"                         
                        data-id='<?php echo $value->id; ?>'
                        title="Delete"
                        >
                            <i class="la la-trash"></i>
                        </a>
                    
                    </td>
                </tr>
                <?php
                $counter++;
            } 
        else : ?>
            <tr>No Record found!</tr>
            <?php 
        endif; ?>
    </tbody>
</table>

<script>
$(document).ready(function() {
   $('#db_management').DataTable({
  "scrollX": true
});
});

$('.delete_data').click(function() {
   
    if(confirm('Are you sure you want to delete')){

        $.ajax({
            url : base_url + 'package/delete_data',
            dataType : 'text',
            type : "post",
            data : {
                db_id:$(this).attr("data-id"),
                table:$('#db_type').val(),
            },		
            beforeSend : function() {
                // $(".loader").show();
            },
            success : function(data) {
                // $(".loader").hide();
                // console.log(data);
                alert(data);
                get_db_data();
            },
        });
    }
    $('#edit_id').val($(this).attr("data-id"));

});

$('.edit_data').click(function(){
    $('#db_id').val($(this).attr("data-id"));
    $('#db_value').val($(this).attr("data-name"));
    $('#add').hide();
    $('#edit').show();
});
</script>
