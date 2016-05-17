    </div><!-- /.container -->
    <footer class="site-footer bg-symbion">
        <div class="container">
            <div class="col-md-3">

                <h3>Symbion A/S</h3>
                <p>Fruebjergvej 3<br>
                2100 København Ø</p>

                <a href="tel:+4539179999">+45 3917 9999</a><br>
                <a href="mailto:info@symbion.dk">info@symbion.dk</a>
                
            </div>
            <div class="col-md-3">

                <h3>Hurtige links</h3>
                <ul class="link-list">
                    <li><a href="#">Helpdesk</a></li>
                    <li><a href="#">Reception</a></li>
                </ul>
                
            </div>
            <div class="col-md-3">
                <!-- Empty col -->
            </div>
            <div class="col-md-3">
                <!-- Empty col -->

            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/searchfield/classie.js"></script>
    <script src="js/searchfield/uisearch.js"></script>
    <script src="js/select2/select2.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/readmore/readmore.min.js"></script>
    <script>
        new UISearch( document.getElementById( 'sb-search' ) );
        

    // Only on messageboard page

    $('.post-body').readmore({
        moreLink: '<a href="#">Vis mere</a>',
        lessLink: '<a href="#">Vis mindre</a>'
    });

    $(document).ready(function() {
        $(".selecttags").select2({
             placeholder: 'Vælg kategori'
        });
    });

      $(function() {
        $( "#datepicker" ).datepicker({
            
            dayNamesMin: [ "Sø", "Ma", "Ti", "On", "To", "Fr", "Lø" ],
            monthNames: [ "Januar", "Februar", "Marts", "April", "Maj", "Juni", "Juli", "August", "September", "Oktober", "November", "December" ],
            firstDay: 1, 
            minDate: 0, 
            maxDate: "+1M",
            dateFormat: 'dd-mm-yy' 
        });
      });
        
    </script>
  </body>
</html>