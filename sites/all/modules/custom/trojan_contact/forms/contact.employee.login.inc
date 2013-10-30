<?php
/*
 * Implementation of hook_form().
 */
function trojan_contact_employee_login_form() {
  $form = array();

  $branches = array();
  $result = db_query("SELECT nid, title FROM {node} WHERE type = 'branch'");
  while($row = db_fetch_object($result)) {
    $branches[$row->nid] = $row->title;
  }

  $form['branch'] = array(
    '#type' => 'select', 
    '#title' => t('Branch'), 
    '#options' => $branches,
  );

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
  $form['#theme'] = 'trojan_contact_employee_login_form';

  return $form;
}

/*
 * Implementation of hook_form_submit().
 */
function trojan_contact_employee_login_form_submit($form, $form_state) {
  global $user;
  $site_mail = variable_get('site_mail', '');
  $values = $form_state['values'];

  db_query("INSERT INTO {trojan_contacts} (type, branch, name, subject, email, message) VALUES ('contact_employee_login', '%s', '%s', '%s', '%s', '%s')", $values['branch'], $values['name'], $values['subject'], $values['email'], $values['message']);
  drupal_mail('trojan_contact', 'contact_employee_login', $site_mail, user_preferred_language($user), $values);
  drupal_set_message('Message has been sent');
}