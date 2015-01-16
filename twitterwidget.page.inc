<?php
function form_settings_twitterw ($form, &$form_state) {
	$api_key 	 = default_values_form('api_key');
	$api_secret  = default_values_form('api_secret');
	$owener		 = default_values_form('owener');
	$owner_id    = default_values_form('owner_id');
	$token		 = default_values_form('token');
	$token_secret= default_values_form('token_secret');
	
    $form['api_key'] = array(
        '#type' => 'textfield',
        '#title' => t('Api key'),
        '#maxlength' => 25, 
        '#required' => TRUE,
        '#default_value' => $api_key,
        '#size' => 80,
        '#prefix' => "<div class='content_api_key'>",
        '#suffix' => '</div>',
        );

    $form['api_secret'] = array(
    		'#type' => 'textfield',
    		'#title' => t('Api Secret'),
    		'#maxlength' => 50,
    		'#required' => TRUE,
    		'#default_value' => $api_secret,
    		'#size' => 80,
    		'#prefix' => "<div class='content_api_secret'>",
    		'#suffix' => '</div>',
    );
    $form['owener'] = array(
    		'#type' => 'textfield',
    		'#title' => t('Owener'),
    		'#maxlength' => 25,
    		'#required' => TRUE,
    		'#default_value' => $owener,
    		'#size' => 80,
    		'#prefix' => "<div class='content_owener'>",
    		'#suffix' => '</div>',
    );
    $form['owner_id'] = array(
    		'#type' => 'textfield',
    		'#title' => t('Owener ID'),
    		'#maxlength' => 25,
    		'#required' => TRUE,
    		'#default_value' => $owner_id,
    		'#size' => 80,
    		'#prefix' => "<div class='content_owener_id'>",
    		'#suffix' => '</div>',
    );
    $form['token'] = array(
    		'#type' => 'textfield',
    		'#title' => t('Token Access'),
    		'#maxlength' => 51,
    		'#required' => TRUE,
    		'#default_value' => $token,
    		'#size' => 80,
    		'#prefix' => "<div class='content_token'>",
    		'#suffix' => '</div>',
    );
    $form['token_secret'] = array(
    		'#type' => 'textfield',
    		'#title' => t('Token Secret'),
    		'#maxlength' => 45,
    		'#required' => TRUE,
    		'#default_value' => $token_secret,
    		'#size' => 80,
    		'#prefix' => "<div class='content_token_secret'>",
    		'#suffix' => '</div>',
    );
    
    $form['buttons']['submit'] = array(
        '#type' => 'submit',
        '#value' => t('Save'),
        );
    return $form;
}

/**
 * insert form data validation twitter
 * @param type $form
 * @param type $form_state
 */
function form_settings_twitterw_submit($form, &$form_state) { 
	$value_table = array();
	$value_table['twid'] 		= 1;
	$value_table['api_key'] 	= $form_state['values']['api_key'];
	$value_table['api_secret'] 	= $form_state['values']['api_secret'];
	$value_table['owener'] 		= $form_state['values']['owener'];
	$value_table['owner_id'] 	= $form_state['values']['owner_id'];
	$value_table['token'] 		= $form_state['values']['token'];
	$value_table['token_secret']= $form_state['values']['token_secret'];
	$key_t = _key_twiter_($value_table['twid']);
	if($key_t == "0") {
		$res = db_insert('twitter_widget',array('twid'))->fields($value_table)->execute();
	} else {
		$res = db_update('twitter_widget',array('twid'))->fields($value_table)->condition('twid', $value_table['twid'], '=')->execute();
	}
	if ($res==0 || $res== $value_table['twid'] ) {
		drupal_set_message(t('The data have been properly stored. Thank you!' ));
	} else {
		drupal_set_message(t('The data is not stored properly.' ), 'error');
	}
}

?>
