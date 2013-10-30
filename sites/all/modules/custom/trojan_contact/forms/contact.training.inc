<?php
/*
 * Implementation of hook_form().
 */
function trojan_contact_training_form() {
  $form = array();

  $courses = array(
    'Transportaion Edorsement',
    'Petroleum Safety Training/CTS Optoional',
    'Confined Space Entry',
    'Confined Space Rescue',
    'Workplace Hazardous Materials Informaiont System (WHMIS)',
    'Transportation of Dangerous Goods (TDG)',
    'Ground Disturbance Level 1',
    'Handheld Fire Extinguisher Training',
  );

  $form['course'] = array(
    '#type' => 'select', 
    '#title' => t('Course'), 
    '#options' => $courses,
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
  $form['#theme'] = 'trojan_contact_training_form';

  return $form;
}

/*
 * Implementation of hook_form_submit().
 */
function trojan_contact_training_form_submit($form, $form_state) {
  global $user;
  $site_mail = variable_get('site_mail', '');
  $values = $form_state['values'];

  db_query("INSERT INTO {trojan_contacts} (type, branch, name, subject, email, message) VALUES ('contact_training', '%s', '%s', '%s', '%s', '%s')", $values['course'], $values['name'], $values['subject'], $values['email'], $values['message']);
  drupal_mail('trojan_contact', 'contact_training', $site_mail, user_preferred_language($user), $values);
  drupal_set_message('Message has been sent');
}