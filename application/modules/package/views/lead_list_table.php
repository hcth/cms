<table id="adminrights" width="100%" class="display data-table-custom display nowrap">
    <!-- id="lead_managment_datatable" -->
    <thead>
        <tr>
            <th title="#">
                #
            </th>

            <th title="Assign">
                Assign
            </th>

            <th title="TravellerCode">
                Traveller Code
            </th>

            <th title="AssignedTo">
                Assigned To
            </th>

            <th title="Name">
                Name
            </th>

            <th title="Email">
                Email ID
            </th>

            <th title="Mobile">
                Mobile Number
            </th>

            <th title="LeadDate">
                Lead Date
            </th>

            <th title="LeadTime">
                Lead Time
            </th>

            <th title="Platform">
                Platform
            </th>

            <th title="CampaignType">
                Campaign Type
            </th>

            <th title="Destination">
                Destination
            </th>

            <th title="Adgroup">
                Ad Group
            </th>

            <th title="Package">
                Package Selected
            </th>

            <th title="Dispositions">
                Dispositions
            </th>

            <th title="SalesStatus">
                Sales Status
            </th>

            <th title=" CallNotes">
                Call Notes
            </th>

        </tr>
    </thead>
    <tbody>
        <?php
        $counter = 1;
        if (isset($package_detail) && is_Array($package_detail)) :
            foreach ($package_detail as $value) { ?>
                <tr>
                    <td>
                        <?php echo $counter; ?>
                    </td>

                    <td>
                        <?php
                        if ($_SESSION['is_admin'] == 1) {
                        ?>
                            <input type="checkbox" name="lead_id" value="<?= $value->id ?>">
                        <?php
                        } elseif ($value->assigned_to == 0) {
                        ?>
                            <a href="javascript:void(0)" onclick="assignLeadToMe('<?= $value->id ?>'); return false;">Assigned To Me</a>
                        <?php
                        } else {
                        ?>
                            Assigned
                        <?php
                        }
                        ?>
                    </td>

                    <td>
                        <a href="javascript:void(0)" class="m--font-danger editdata" data-toggle="modal" data-id='<?php echo $value->id; ?>' data-name='<?php echo $value->name; ?>' data-email='<?php echo $value->email; ?>' data-phone='<?php echo $value->phone; ?>' data-platform='<?php echo $value->platform; ?>' data-campaigntype='<?php echo $value->campaigntype; ?>' data-destination='<?php echo $value->destination; ?>' data-adgroup='<?php echo $value->adgroup; ?>' data-package='<?php echo $value->package; ?>' data-disposition='<?php echo $value->disposition; ?>' data-sales_status='<?php echo $value->sales_status; ?>' data-call_notes='<?php echo $value->call_notes; ?>' data-assigned_to='<?php echo $value->assigned_to; ?>'>
                            <?php echo $value->traveller_code; ?>
                        </a>
                    </td>

                    <td>
                        <?php echo $value->assigned_to_name; ?>
                    </td>

                    <td>
                        <?php echo $value->name; ?>
                    </td>

                    <td>
                        <?php echo $value->email; ?>
                    </td>

                    <td>
                        <?php echo $value->phone; ?>
                    </td>

                    <td>
                        <?php echo explode(' ', $value->updated_date)[0]; ?>
                    </td>

                    <td>
                        <?php echo explode(' ', $value->updated_date)[1]; ?>
                    </td>

                    <td>
                        <?php echo $value->platform; ?>
                    </td>

                    <td>
                        <?php echo $value->campaigntype; ?>
                    </td>

                    <td>
                        <?php echo $value->destination; ?>
                    </td>

                    <td>
                        <?php echo $value->adgroup; ?>
                    </td>

                    <td>
                        <?php echo $value->package; ?>
                    </td>

                    <td>
                        <?php echo $value->disposition; ?>
                    </td>

                    <td>
                        <?php echo $value->sales_status; ?>
                    </td>

                    <td>
                        <a href="javascript:void(0)" class="m--font-danger editdata" data-toggle="modal" data-id='<?php echo $value->id; ?>' data-name='<?php echo $value->name; ?>' data-email='<?php echo $value->email; ?>' data-phone='<?php echo $value->phone; ?>' data-platform='<?php echo $value->platform; ?>' data-campaigntype='<?php echo $value->campaigntype; ?>' data-destination='<?php echo $value->destination; ?>' data-adgroup='<?php echo $value->adgroup; ?>' data-package='<?php echo $value->package; ?>' data-disposition='<?php echo $value->disposition; ?>' data-sales_status='<?php echo $value->sales_status; ?>' data-call_notes='<?php echo $value->call_notes; ?>' data-assigned_to='<?php echo $value->assigned_to; ?>'>
                            Notes
                        </a>
                    </td>
                </tr>
            <?php
                $counter++;
            }
        else : ?>
            <tr>No Record found!</tr>
        <?php endif; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#adminrights').DataTable({
  "scrollX": true
});
    });

    $('.editdata').click(function() {
        $('#edit_id').val($(this).attr("data-id"));
        $('#edit_name').val($(this).attr("data-name"));
        $('#edit_mobile').val($(this).attr("data-phone"));
        $('#edit_email').val($(this).attr("data-email"));
        $('#edit_package').val($(this).attr("data-package"));
        $('#edit_destination').val($(this).attr("data-destination"));
        $('#edit_platform').val($(this).attr("data-platform"));
        $('#edit_camp_type').val($(this).attr("data-campaigntype"));

        $('#edit_disposition').val($(this).attr("data-disposition"));
        $('#edit_sales_status').val($(this).attr("data-sales_status"));
        $('#edit_assigned_to').val($(this).attr("data-assigned_to"));
        var a = '';
        if ($(this).attr("data-call_notes") != '') {
            $.each(JSON.parse($(this).attr("data-call_notes")), function(key, value) {
                a = a + '[' + value.date_created + "] Note : " + value.note + '<br>';
            });
        }
        if ((current_user_id == $(this).attr("data-assigned_to")) || is_admin == 1) {
            $('#edit_client').show();
        } else {
            $('#edit_client').hide();
        }
        $('#all_notes').html(a);

        $('#editleadmodal').modal('show');

    });
</script>