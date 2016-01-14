<?php
    include("includes/header.php");
?>

    <div id="contain" class="container">

        <div class="page-header">
            <h2>Events</h2>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#events-calendar" aria-controls="events-calendar" role="tab" data-toggle="tab">All Events Calendar</a></li>
                    <li role="presentation"><a href="#events-list" aria-controls="events-list" role="tab" data-toggle="tab">All Events List</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="events-calendar">
                        <!-- Calendar -->
                        <div class="well well-calendar">
                            <div id="calendar"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="events-list">
                        <div class="row">
                            <div class="col-md-9">
                                <h4>Upcoming Events</h4>
                                <div class="event">
                                    <a href="#" class="event-modal" data-toggle="modal" data-target=".event-modal-lg">
                                        <span class="date">04<br>DEC</span>
                                        <span class="title">Holiday Fundraising</span><br>
                                        <span class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ... </span>
                                    </a>
                                </div>
                  
                                <div class="event">
                                    <a href="#" class="event-modal" data-toggle="modal" data-target=".event-modal-lg">
                                        <span class="date">10<br>DEC</span>
                                        <span class="title">Annual MedStaff Data</span><br>
                                        <span class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ... </span>
                                    </a>
                                </div>
                     
                                <div class="event">
                                    <a href="#" class="event-modal" data-toggle="modal" data-target=".event-modal-lg">
                                        <span class="date">22<br>DEC</span>
                                        <span class="title">Christmas Party</span><br>
                                        <span class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ... </span>
                                    </a>
                                </div>
             
                                <div class="event">
                                    <a href="#" class="event-modal" data-toggle="modal" data-target=".event-modal-lg">
                                        <span class="date">01<br>JAN</span>
                                        <span class="title">Bring-In-The-New-Year Celebration</span><br>
                                        <span class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, labore et dolore magna aliqua ... </span>
                                    </a>
                                </div>
                                <!-- Pagination -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <nav>
                                          <ul class="pagination">
                                            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                          </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 sidebar">
                                <h4>Past Events</h4>
                                <div class="past event">
                                    <a href="#" class="event-modal" data-toggle="modal" data-target=".event-modal-lg">
                                        <span class="date">24<br>NOV</span>
                                        <span class="title">Thanksgiving Party</span>
                                    </a>
                                    </div>
                                <div class="past event">
                                    <a href="#" class="event-modal" data-toggle="modal" data-target=".event-modal-lg">
                                        <span class="date">30<br>NOV</span>
                                        <span class="title">Departmental Meeting(s)</span>
                                    </a>
                                </div>
                                <div class="past event">
                                    <a href="#" class="event-modal" data-toggle="modal" data-target=".event-modal-lg">
                                        <span class="date">1<br>DEC</span>
                                        <span class="title">Last Day Christmas Special</span>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    <!-- Modal -->
        <div class="modal fade event-modal-lg" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Holiday Fundraising</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="single-event"> 
                            <span class="date">04<br>DEC</span>
                            <div class="event">
                                <span class="title">Holiday Fundraising</span><br><br>
                                <span class="location">1000 Franklin Ave, Garden City, New York</span>
                            </div>
                        </div>   
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="content">
                            <p><img src="http://placehold.it/250x100" class="pull-right" style="margin-left: 15px;">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                            
                        </div>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-header">
                            <h4>Contact</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"><p><strong>Jane Doe</strong></p></div>
                    <div class="col-md-4"><p>Phone: <a href="#">516-663-1756</a></p></div>
                    <div class="col-md-4"><p>Email: <a href="#">jdelossantos@winthrop.org</a></p></div>
                </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div><!-- /.modal-content -->
    
          </div>
        </div>
    </div> <!-- /container -->

<?php
  include("includes/footer.php");
?>