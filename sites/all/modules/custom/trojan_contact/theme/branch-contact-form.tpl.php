  <h2>Contact Our Branch</h2>  <p>You can put whatever information you think you should have here</p>
  <div id="contactbranch-left">
    <?php print drupal_render($form['name']); ?>
    <?php print drupal_render($form['email']); ?>
    <?php print drupal_render($form['contact']); ?>
  </div>
  <div id="contactbranch-right">
    <?php print drupal_render($form['subject']); ?>
    <?php print drupal_render($form['message']); ?>
  </div>
  <?php print drupal_render($form); ?>