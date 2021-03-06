<footer>
        <div id="contact" class="container">
            <!-- Contact -->

            <div class="row">
                <div class="col-sm-12">
                    <h3>Contact Us</h3><hr>
                </div>
            </div>

            <div  class="row">
                <div class="col-sm-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Huis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <br>
                    <p><strong>Address: </strong>Winthrop-University Hospital <br>
                        259 First Street <br>
                        Mineola NY 11501
                    </p>
                    <p><strong>Phone: </strong><a href="#">516-663-1756</a></p>
                    <p><strong>Email: </strong><a href="#">vmo@winthrop.org</a></p>
                </div>

                <div class="col-sm-4">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name-input" placeholder="Your Name *">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email-input" placeholder="Email *">
                        </div>

                        <div class="form-group">
                            <select id="reason"class="form-control">
                              <option>I want to join</option>
                              <option>I have a question</option>
                              <option>I have a concern</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="comments" placeholder="Comment" rows="3"></textarea>
                        </div>


                          <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <br>
                    <br>
                </div>
            </div>
            <hr>
            <p class="pull-left">&copy; Winthrop-University Hospital 2015</p>
            <p class="pull-right" style="text-decoration: underline;"> Privacy Policy</p>
        </div>
    </footer>

    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.fc-day-grid-event').attr('data-toggle', 'modal');
            $('.fc-day-grid-event').attr('data-target', '.event-modal-lg');
        });

        $(window).resize(function(){
            if ($(window).width() <= 767){
                $('#events-calendar').removeClass('active');
                $('#events-list').addClass('active');
            }
        });

        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });

    </script>

    </body>
</html>
