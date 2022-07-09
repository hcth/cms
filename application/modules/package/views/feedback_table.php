<table id="feedbacks_table" width="100%">
    <thead>
        <tr>
            <th width="20">
                #
            </th>
            <th title="Date" width="75">
                Date
            </th>
            <th width="50">
                Time
            </th>
            <th width="100">
                Name
            </th>
            <th>
                Email
            </th>
            <th width="150">
                Subject
            </th>
            <th width="250">
                Details
            </th>                                                             
        </tr>
    </thead>
    <tbody>
        <?php
        $i=0;
        foreach($feedback_data as $val){
            $i++;
            $date = explode(' ',$val->createdate)[0];
            $time = explode(' ',$val->createdate)[1];
            echo "
                <tr>
                    <td>$i</td>
                    <td>" . $date . "</td>
                    <td>" . $time . "</td>
                    <td>" . $val->name . "</td>
                    <td>" . $val->email . "</td>
                    <td>" . $val->subject . "</td>
                    <td>
                        <div class='addReadMore showlesscontent'>
                            ". $val->description ."
                        </div>
                    </td> 
                </tr>";                
        }
        ?>
    </tbody>
</table>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
   $('#feedbacks_table').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'csv',
            filename: 'Feedback',
        }
    ]
   });
});
</script>