<?php
/*
 * Implementation of hook_form().
 */
function trojan_contact_branch_form($form_state, $node = array()) {
  $form = array();

  $contacts = array();
	foreach($node->field_branch_contact_name as $contact) {      
		$value = $contact['value'];
		$contacts[$value] = $value;
	}

  $form['contact'] = array(
    '#type' => 'select', 
    '#title' => t('Contact'), 
    '#options' => $contacts,
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
  $form['#theme'] = 'trojan_contact_branch_form';

  return $form;
}

/*
 * Implementation of hook_form_submit().
 */
function trojan_contact_branch_form_submit($form, $form_state) {
  global $user;
  $site_mail = variable_get('site_mail', '');
  $values = $form_state['values'];
  db_query("INSERT INTO {trojan_contacts} (type, branch, name, subject, email, message) VALUES ('contact_branch', '%s', '%s', '%s', '%s', '%s')", $values['branch'], $values['name'], $values['subject'], $values['email'], $values['message']);
  drupal_mail('trojan_contact', 'contact_branch', $site_mail, user_preferred_language($user), $values);
  drupal_set_message('Message has been sent');
}