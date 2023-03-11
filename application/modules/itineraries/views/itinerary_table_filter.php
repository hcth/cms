                        <!--begin: Datatable -->
                        <div class="m-form m-form--label-align-right">

                        </div>
                        <div class="table-responsive">
                        <table  id="itinerariesTables" width="100%">
                            <thead>
                                <tr>
                                    <th title="#">
                                        #
                                    </th>
                                    <!--<th title="departure">
                                        Departure
                                    </th>-->
                                    <th title="destination">
                                        Destination
                                    </th>
                                    <th title="Stay Days">
                                        Days
                                    </th>
                                    <!--<th title="Mode of Transport">
                                        Transport
                                    </th>-->
                                    <th title="Budget">
                                        Budget
                                    </th>
                                    <th title="Best time to Visit">
                                     time to Visit
                                    </th>
                                    <th title="Suitable">
                                        Suitable
                                    </th>
                                    <th title="Theme">
                                        Theme
                                    </th>
                                   <!-- <th title="View Count">
                                        View
                                    </th>-->
                                    <th title="Actions">
                                        Actions
                                    </th>
                                     <th title="Actions">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1;
                                if(isset($itinerariesAllRecord) && is_Array($itinerariesAllRecord)) :
                              foreach ($itinerariesAllRecord as $value) { ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url();?>itinerary/<?php echo $value->url;?>" target="_blank"><?php echo $counter; ?></a>
                                        </td>
                                        <!--<td>
                                            <?php echo modules::run('itineraries/getCityName',$value->departure); ?>
                                        </td>-->
                                        <td>
                                             <?php
                                             // echo modules::run('itineraries/getCityName',$value->destination);
                                             echo @$value->destination;

                                             ?>
                                        </td>
                                        <td>
                                            <?php echo $value->trip_days; ?>
                                        </td>
                                        <!--<td>
                                            <?php echo $value->mode_of_transport; ?>
                                        </td>-->
                                        <td>
                                            <?php echo $value->budget; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->month_to_visit; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->category; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->type; ?>
                                        </td>
                                        <!--<td>
                                            <?php echo $value->views; ?>
                                        </td>-->
                                        <td>
                                            <a href="<?php echo base_url('itineraries/view_itineraries_details/' . $value->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit Itinerary Details"><i class="la la-edit"></i></a>
                                            <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m_sweetalert_demo_8"  data-itinerary_id="<?php echo $value->id; ?>" id="a_<?php echo $value->id; ?>"><i class="la la-trash"></i></a>
                                        </td>


                                        <?php
                                            $isAdmin = $this->session->userdata('istraveler');
                                            if($isAdmin == 1): ?>
                                              <td>
                                                   <?php if($value->status == '0'){
                                                    $color = "#f4516c";
                                                    $text = "Unpublished";
                                                } elseif($value->status == '1'){
                                                     $color = "#f79706";
                                                     $text = "Waiting for Admin Approval";
                                                }else {
                                                     $color = "#218838";
                                                     $text = "Published";
                                                } ?>
                                                <strong style="color:<?php echo $color;?>"><?php echo $text;?></strong>

                                              </td>
                                        <?php  else: ?>
                                             <td>

                                            <?php
                                                if($value->status == '0'){
                                                    $color = "#f4516c";
                                                } elseif($value->status == '1'){
                                                     $color = "#f79706";
                                                }else {
                                                     $color = "#218838";
                                                }

                                            ?>



                                            <select name="statuspublished" id="<?php echo $value->id;?>"style="background:<?php echo $color;?>" class="profilestatus">
                                                <option value="0"  <?php if($value->status == '0'): echo "selected"; endif;?>>Unpublished</option>
                                                <option value="1" <?php if($value->status == '1'): echo "selected"; endif;?> >Waiting for Admin Approval</option>
                                                <option value="2"  <?php if($value->status == '2'): echo "selected"; endif;?>>Published</option>
                                            </select>
                                        </td>
                                        <?php endif; ?>
                                    </tr>
                                    <?php
                                    $counter++;
                                }
                            else : ?>
                            <tr>No Record found!</tr>
                            <?php endif; ?>
                            </tbody>
                              <tfoot>
                                  <tr>
                                      <th title="#">
                                          #
                                      </th>
                                      <!--<th title="departure">
                                          Departure
                                      </th>-->
                                      <th title="destination">
                                          Destination
                                      </th>
                                      <th title="Stay Days">
                                          Days
                                      </th>
                                      <!--<th title="Mode of Transport">
                                          Transport
                                      </th>-->
                                      <th title="Budget">
                                          Budget
                                      </th>
                                      <th title="Best time to Visit">
                                       time to Visit
                                      </th>
                                      <th title="Suitable">
                                          Suitable
                                      </th>
                                      <th title="Theme">
                                          Theme
                                      </th>
                                     <!-- <th title="View Count">
                                          View
                                      </th>-->
                                      <th title="Actions">
                                          Actions
                                      </th>
                                       <th title="Actions">
                                          Status
                                      </th>
                                  </tr>
                              </tfoot>
                        </table>
                        </div>
                        <!--end: Datatable -->
