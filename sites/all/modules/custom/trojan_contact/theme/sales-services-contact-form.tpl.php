  <h2>Contact Sales & Services</h2>
  <p>You can put whatever information you can think you should have here</p>
  <div id="contactbranch-left">
    <?php print drupal_render($form['name']); ?>
    <?php print drupal_render($form['email']); ?>
    <?php print drupal_render($form['subject']); ?>
  </div>
  <div id="contactbranch-right">
    <?php print drupal_render($form['message']); ?>
    <?php print drupal_render($form['captcha']); ?>
  </div>
  <?php print drupal_render($form); ?>