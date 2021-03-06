<?php if ( ! defined( 'ABSPATH' ) ) exit;

return apply_filters( 'ninja_forms_action_email_settings', array(

    /*
     * To
     */

    'fields_save_toggle' => array(
        'name' => 'fields-save-toggle',
        'type' => 'button-toggle',
        'width' => 'full',
        'options' => array(
            array( 'label' => __( 'Save All', 'ninja-forms' ), 'value' => 'save_all' ),
            array( 'label' => __( 'Save None', 'ninja-forms' ), 'value' => 'save_none' )
        ),
        'group' => 'primary',
        'label' => __( 'Fields', 'ninja-forms' ),
        'value' => 'save_all',
    ),
	/*
    |--------------------------------------------------------------------------
    | Exception Field
    |--------------------------------------------------------------------------
    */

    'exception_fields' => array(
	    'name'      => 'exception_fields',
	    'type'      => 'option-repeater',
	    'label'     => __( 'Except', 'ninja-forms' ) . ' <a href="#" class="nf-add-new">' .
	                   __( 'Add New', 'ninja-forms' ) . '</a>',
	    'width'     => 'full',
	    'group'     => 'primary',
	    'tmpl_row'  => 'nf-tmpl-save-field-repeater-row',
	    'value'     => array(),
	    'columns'   => array(
		    'form_field' => array(
			    'header' => __( 'Form Field', 'ninja-forms' ),
			    'default' => '',
			    'options' => array(),
		    ),
	    ),
    ),
));

