
    
      <!-- ______________________ FOOTER _______________________ -->

      <?php if(!empty($footer_message) || !empty($footer_block)): ?>
        <div id="footer">
          <?php print $footer_message; ?>
          <?php print $footer_block; ?>
         
        </div> <!-- /footer -->
      <?php endif; ?>

    </div> <!-- /general OR /page -->
    <?php print $closure; ?>
  </body>
</html>