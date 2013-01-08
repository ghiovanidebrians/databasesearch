     <hr>
        <footer>
        <p>©  <?php echo TITLE_FOOTER." ".date('Y'); ?></p>
      </footer>
     </div> <!-- /container -->
    <script src="<?php echo JAVASCRIPT; ?>jquery.js"></script>
    <script src="<?php echo JAVASCRIPT; ?>tooltips.js"></script>
    <script src="<?php echo JAVASCRIPT; ?>bootstrap-transition.js"></script>
    <script src="<?php echo JAVASCRIPT; ?>bootstrap-alert.js"></script>
    <script src="<?php echo JAVASCRIPT; ?>bootstrap-modal.js"></script>
    <script src="<?php echo JAVASCRIPT; ?>bootstrap-dropdown.js"></script>
    <script src="<?php echo JAVASCRIPT; ?>bootstrap-scrollspy.js"></script>
    <script src="<?php echo JAVASCRIPT; ?>bootstrap-tab.js"></script>
    <script src="<?php echo JAVASCRIPT; ?>bootstrap-tooltip.js"></script>
    <script src="<?php echo JAVASCRIPT; ?>bootstrap-popover.js"></script>
    <script src="<?php echo JAVASCRIPT; ?>bootstrap-button.js"></script>
    <script src="<?php echo JAVASCRIPT; ?>bootstrap-collapse.js"></script>
    <script src="<?php echo JAVASCRIPT; ?>bootstrap-carousel.js"></script>
    <script src="<?php echo JAVASCRIPT; ?>bootstrap-typeahead.js"></script>
    
    <!--Toggle-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#button-search').load(function(){
                $(this).hide(); 
                $('#search').css({display : 'inline-block'});
            });
            
            $('#button-search').click(function(){
                $('#search').slideToggle('fast');
            });
        });
    </script>
    
    <!--Highlight-->
    <script src='<?php echo JAVASCRIPT; ?>SearchHighlight.js'></script>
    <script type='text/javascript'>
        var opzioni = {exact:"whole",style_name_suffix:false};
        jQuery(function(){
            var options = {exact:"exact"}
            jQuery(document).SearchHighlight(options);
        });
    </script>
  </body>
</html>
