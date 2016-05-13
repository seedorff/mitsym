    </div><!-- /.container -->
    <footer class="site-footer bg-symbion">
        <div class="container">
            <div class="col-md-3">

                <p>Symbion A/S<br>
                Fruebjergvej 3<br>
                2100 København Ø</p>

                <a href="tel:+4539179999">+45 3917 9999</a><br>
                <a href="mailto:info@symbion.dk">info@symbion.dk</a>
                
            </div>
            <div class="col-md-3">
                <p>Hurtige links</p>
                <p><a href="#">Helpdesk</a></p>
                <p><a href="#">Reception</a></p>
            
                
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
    <script>
        new UISearch( document.getElementById( 'sb-search' ) );
        

    // Only on messageboard page
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
            weekHeader: "Uge", 
            showWeek: true, 
            minDate: 0, 
            maxDate: "+12M",
            dateFormat: 'yy-mm-dd',
            altField: "#actualDate",
            altFormat: "RFC_1036" 
        });
      });
        
    </script>
  </body>
</html>