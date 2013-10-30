<?php
/*
 * Implementation of hook_form().
 */
function trojan_contact_sales_services_form() {
  $form = array();
  $form['name'] = array(
    '#type' => 'textfield', 
    '#title' => t('Name'), 
    '#size' => 60, 
    '#maxlength' => 128, 
    '#required' => TRUE,
  );

  $form['subject'] = array(
    '#type' => 'textfield', 
    '#title' => t('Subject'), 
    '#size' => 60, 
    '#maxlength' => 128, 
    '#required' => TRUE,
  );

  $form['email'] = array(
    '#type' => 'textfield', 
    '#title' => t('Email'), 
    '#size' => 60, 
    '#maxlength' => 128, 
    '#required' => TRUE,
  );

  $form['message'] = array(
    '#type' => 'textarea',
    '#title' => t('Message'),
    '#required' => TRUE
  );
  
  $form['submit'] = array('#type' => 'submit', '#value' => t('Contact Us'));
  $form['#theme'] = 'trojan_contact_sales_services_form';

  return $form;
}

/*
 * Implementation of hook_form_submit().
 */
function trojan_contact_sales_services_form_submit($form, $form_state) {
  global $user;
  $site_mail = variable_get('site_mail', '');
  $values = $form_state['values'];
  db_query("INSERT INTO {trojan_contacts} (type, name, subject, email, message) VALUES ('contact_sales_services', '%s', '%s', '%s', '%s')", $values['name'], $values['subject'], $values['email'], $values['message']);
  drupal_mail('trojan_contact', 'contact_sales_services', $site_mail, user_preferred_language($user), $values);
  drupal_set_message('Message has been sent');
}