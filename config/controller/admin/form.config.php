<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'controller_url' => 'admin/noviusos_form/form',
    'model' => 'Nos\Form\Model_Form',
    'tab' => array(
        'labels' => array(
            'insert' => __('Add a form'),
        ),
    ),
    'require_js' => array(
        'static/apps/noviusos_form/js/admin/insert_update.js',
    ),
    'layout' => array(
        'standard' => array(
            'view' => 'nos::form/layout_standard',
            'params' => array(
                'title' => 'form_name',
                'subtitle' => array('form_virtual_name'),
                'medias' => array(),
                'large' => true,
                'content' => array(
                    'fields' => array(
                        'view' => 'noviusos_form::admin/layout_fields',
                        'params' => array(),
                    ),
                ),
                'menu' => array(),
                'save' => 'save',
            ),
        ),
    ),
    'fields' => array(
        'form_name' => array (
            'label' => __('Title'),
            'form' => array(
                'type' => 'text',
            ),
            'validation' => array(
                'required',
                'min_length' => array(2),
            ),
        ),
        'form_virtual_name' => array (
            'label' => __('Virtual name:'),
            'form' => array(
                'type' => 'text',
            ),
            'expert' => true,
        ),
        'form_layout' => array (
            'form' => array(
                'type' => 'hidden',
            ),
        ),
        'form_captcha' => array (
            'label' => __('Captcha protected'),
            'form' => array(
                'type' => 'checkbox',
                'value' => '1',
                'empty' => '0',
                'checked',
            ),
        ),
        'form_submit_label' => array (
            'label' => __("Submit button’s label:"),
            'form' => array(
                'type' => 'text',
                'value' => __("I’m the submit button, click to edit me"),
            ),
        ),
        'form_submit_email' => array (
            'label' => __("For every new answer, an email notification is sent to:"),
            'form' => array(
                'type' => 'textarea',
            ),
        ),
        'save' => array(
            'label' => '',
            'form' => array(
                'type' => 'submit',
                'tag' => 'button',
                'value' => __('Save'),
                'class' => 'primary',
                'data-icon' => 'check',
            ),
        ),
    ),
    'fields_meta' => array(
        'default' => array(
            'definition' => array(
                'layout' => "firstname=2,lastname=2\nemail=4",
                'fields_list' => array(
                    'firstname' => array(
                        'field_type' => 'text',
                        'field_label' => __('Firstname:'),
                    ),
                    'lastname' => array(
                        'field_type' => 'text',
                        'field_label' => __('Lastname:'),
                    ),
                    'email' => array(
                        'field_type' => 'email',
                        'field_label' => __('Email address:'),
                    ),
                ),
            ),
        ),
        'standard' => array(
            'single_line_text' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/text.png',
                'title' => __('Single line text'),
                'definition' => array(
                    'layout' => 'text=4',
                    'fields_list' => array(
                        'text' => array(
                            'field_type' => 'text',
                        ),
                    ),
                ),
            ),
            'paragraph_text' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/textarea.png',
                'title' => __('Paragraph text'),
                'definition' => array(
                    'layout' => 'textarea=4',
                    'fields_list' => array(
                        'textarea' => array(
                            'field_type' => 'textarea',
                        ),
                    ),
                ),
            ),
            'checkboxes' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/checkbox.png',
                'title' => __('Multiple choice (checkboxes)'),
                'definition' => array(
                    'layout' => 'checkbox=4',
                    'fields_list' => array(
                        'checkbox' => array(
                            'field_type' => 'checkbox',
                            'field_choices' => __("First option\nSecond option"),
                        ),
                    ),
                ),
            ),
            'dropdown' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/dropdown.png',
                'title' => __('Unique choice (drop-down list)'),
                'definition' => array(
                    'layout' => 'select=4',
                    'fields_list' => array(
                        'select' => array(
                            'field_type' => 'select',
                            'field_choices' => __("First option\nSecond option"),
                        ),
                    ),
                ),
            ),
            'unique_choice' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/radio.png',
                'title' => __('Unique choice (radio buttons)'),
                'definition' => array(
                    'layout' => 'radio=4',
                    'fields_list' => array(
                        'radio' => array(
                            'field_type' => 'radio',
                            'field_choices' => __("First choice\nSecond choice"),
                        ),
                    ),
                ),
            ),
            'file' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/file.png',
                'title' => __('File'),
                'definition' => array(
                    'layout' => 'file=4',
                    'fields_list' => array(
                        'file' => array(
                            'field_type' => 'file',
                            'field_label' => __('I’m the label of a file input, click to edit me:'),
                        ),
                    ),
                ),
            ),
        ),
        'special' => array(
            'email' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/email.png',
                'title' => __('Email address'),
                'definition' => array(
                    'layout' => 'email=4',
                    'fields_list' => array(
                        'email' => array(
                            'field_type' => 'email',
                            'field_label' => __('Your email address:'),
                        ),
                    ),
                ),
            ),
            'number' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/number.png',
                'title' => __('Number'),
                'definition' => array(
                    'layout' => 'number=4',
                    'fields_list' => array(
                        'textarea' => array(
                            'field_type' => 'number',
                            'field_label' => __('Enter a number:'),
                        ),
                    ),
                ),
            ),
            'date' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/date.png',
                'title' => __('Date'),
                'definition' => array(
                    'layout' => 'date=4',
                    'fields_list' => array(
                        'textarea' => array(
                            'field_type' => 'date',
                            'field_label' => __('Pick a date:'),
                        ),
                    ),
                ),
            ),
            'fullname' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/fullname.png',
                'title' => __('Full name'),
                'definition' => array(
                    'layout' => 'gender=1,firstname=1,name=2',
                    'fields_list' => array(
                        'gender' => array(
                            'field_type' => 'select',
                            'field_label' => __('Title:'),
                            'field_choices' => __("Ms\nMr"),
                        ),
                        'firstname' => array(
                            'field_type' => 'text',
                            'field_label' => __('Firstname:'),
                        ),
                        'name' => array(
                            'field_type' => 'text',
                            'field_label' => __('Name:'),
                        ),
                    ),
                ),
            ),
            'address' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/address.png',
                'title' => __('Address'),
                'definition' => array(
                    'layout' => "line_1=4\nline_2=4\npostal=1,city=3",
                    'fields_list' => array(
                        'line_1' => array(
                            'field_type' => 'text',
                            'field_label' => __('First address line:'),
                        ),
                        'line_2' => array(
                            'field_type' => 'text',
                            'field_label' => __('Second address line:'),
                        ),
                        'postal' => array(
                            'field_type' => 'text',
                            'field_label' => __('Postal code:'),
                        ),
                        'city' => array(
                            'field_type' => 'text',
                            'field_label' => __('City:'),
                        ),
                    ),
                ),
            ),
            'message' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/message.png',
                'title' => __('Message'),
                'definition' => array(
                    'layout' => 'message=4',
                    'fields_list' => array(
                        'message' => array(
                            'field_type' => 'message',
                            'field_label' => __('Message:'),
                        ),
                    ),
                ),
            ),
            'separator' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/separator.png',
                'title' => __('Separator'),
                'definition' => array(
                    'layout' => 'separator=4',
                    'fields_list' => array(
                        'separator' => array(
                            'field_label' => __('Separator'),
                            'field_type' => 'separator',
                        ),
                    ),
                ),
            ),
            'hidden' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/hidden.png',
                'title' => __('Hidden'),
                'expert' => true,
                'definition' => array(
                    'layout' => 'hidden=4',
                    'fields_list' => array(
                        'hidden' => array(
                            'field_type' => 'hidden',
                            'field_label' => __('I’m the label for internal use only as I won’t be shown to users:'),
                        ),
                   ),
                ),
            ),
            'variable' => array(
                'icon' => 'static/apps/noviusos_form/img/fields/variable.png',
                'title' => __('Variable'),
                'expert' => true,
                'definition' => array(
                    'layout' => 'variable=4',
                    'fields_list' => array(
                        'variable' => array(
                            'field_type' => 'variable',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'fields_layout' => array(
        'standard' => array(
            'view' => 'nos::form/accordion',
            'params' => array(
                //'classes' => 'notransform',
                'accordions' => array(
                    'main' => array(
                        'title' => __('Required information'),
                        'fields' => array(
                            'field[label][]',
                            'field[type][]',
                            'field[choices][]',
                            'field[style][]',
                            'field[message][]',
                            //'field[name][]',
                            'field[origin][]',
                            'field[origin_var][]',
                        ),
                    ),
                    'optional' => array(
                        'title' => __('Further options'),
                        'fields' => array(
                            'field[mandatory][]',
                            'field[default_value][]',
                            'field[details][]',
                            'field[width][]',
                            'field[height][]',
                            'field[limited_to][]',
                        ),
                    ),
                    'technical' => array(
                        'title' => __('Technical options'),
                        'fields' => array(
                            'field[virtual_name][]',
                            'field[technical_id][]',
                            'field[technical_css][]',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'fields_config' => array(
        'field[id][]' => array(
            'form' => array(
                'type' => 'hidden',
                'value' => '0',
            ),
            'populate' => function($item) {
                return $item->field_id;
            },
        ),
        'field[type][]' => array(
            'label' => __('Type:'),
            'form' => array(
                'type' => 'select',
                'options' => array(
                    'text' => __('Single line text'),
                    'textarea' => __('Paragraph text'),
                    'checkbox' => __('Checkboxes'),
                    'select' => __('Dropdown'),
                    'radio' => __('Multiple choices'),
                    'file' => __('File'),
                    'email' => __('Email'),
                    'number' => __('Number'),
                    'date' => __('Date'),
                    'message' => __('Message'),
                    'hidden' => __('Hidden'),
                    'separator' => __('Separator'),
                    'variable' => __('Variable'),
                ),
                'value' => 'text',
            ),
            'populate' => function($item) {
                return $item->field_type;
            },
        ),
        'field[label][]' => array(
            'label' => __('Label:'),
            'form' => array(
                'type' => 'text',
                'value' => __('I’m the label, click to edit me:'),
            ),
            'populate' => function($item) {
                return $item->field_label;
            },
        ),
        'field[message][]' => array(
            'label' => __('Message:'),
            'form' => array(
                'type' => 'textarea',
                'rows' => '3',
                'value' => __('I’m a message, click to edit me.'),
            ),
            'populate' => function($item) {
                return $item->field_message;
            },
        ),
        'field[style][]' => array(
            'label' => __('Style:'),
            'form' => array(
                'type' => 'select',
                'options' => array(
                    'p' => __('Standard'),
                    'h1' => __('Heading 1'),
                    'h2' => __('Heading 2'),
                    'h3' => __('Heading 3'),
                ),
                'value' => 'p',
            ),
            'populate' => function($item) {
                return $item->field_style;
            },
        ),
        'field[choices][]' => array(
            'label' => __('Answers:'),
            'form' => array(
                'type' => 'textarea',
                'rows' => '5',
                'value' => '',
            ),
            'populate' => function($item) {
                return $item->field_choices;
            },
        ),
        'field[mandatory][]' => array(
            'label' => __('Mandatory'),
            'form' => array(
                'type' => 'checkbox',
                'value' => '1',
                'empty' => '0',
            ),
            'populate' => function($item) {
                return $item->field_mandatory;
            },
        ),
        'field[default_value][]' => array(
            'label' => __('Default value:'),
            'form' => array(
                'type' => 'text',
            ),
            'populate' => function($item) {
                return $item->field_default_value;
            },
        ),
        /*'field[name][]' => array(
            'label' => __('Name:'),
            'form' => array(
                'type' => 'text',
            ),
            'dont_save' => true,
            'populate' => function($item) {
                return $item->field_name;
            },
        ),*/
        'field[details][]' => array(
            'label' => __('Instructions for the user:'),
            'form' => array(
                'type' => 'textarea',
                'rows' => '3',
             ),
            'populate' => function($item) {
                return $item->field_details;
            },
        ),
        'field[width][]' => array(
            'label' => __('Width:'),
            'template' => str_replace('{{count}}', '{field} {required}', __('Width: {{count}} characters')),
            'form' => array(
                'type' => 'text',
                'value' => '',
                'size' => '3',
            ),
            'populate' => function($item) {
                return empty($item->field_width) ? '' : $item->field_width;
            },
        ),
        'field[height][]' => array(
            'label' => '',
            'template' => str_replace('{{count}}', '{field} {required}', __('Height: {{count}} lines')),
            'form' => array(
                'type' => 'text',
                'size' => '3',
                'value' => '3',
            ),
            'populate' => function($item) {
                return empty($item->field_height) ? '' : $item->field_height;
            },
        ),
        'field[limited_to][]' => array(
            'label' => '',
            'template' => str_replace('{{count}}', '{field} {required}', __('Limited to {{count}} characters')),
            'form' => array(
                'type' => 'text',
                'size' => '3',
            ),
            'populate' => function($item) {
                return empty($item->field_limited_to) ? '' : $item->field_limited_to;
            },
        ),
        'field[origin][]' => array(
            'label' => 'Origin',
            'form' => array(
                'type' => 'select',
                'options' => array(
                    'get' => 'Get', // No translation here: it's a feature
                    'post' => 'Post',
                    'request' => 'Request',
                    'global' => 'Global',
                    'session' => 'Session',
                ),
            ),
            'populate' => function($item) {
                return $item->field_origin;
            },
        ),
        'field[origin_var][]' => array(
            'label' => 'Variable name',
            'form' => array(
                'type' => 'text',
                'value' => '',
            ),
            'populate' => function($item) {
                return $item->field_origin_var;
            },
        ),
        'field[virtual_name][]' => array(
            'label' => __('Virtual field name:'),
            'form' => array(
                'type' => 'text',
                'value' => '',
            ),
            'populate' => function($item) {
                return $item->field_virtual_name;
            },
            'expert' => true,
        ),
        'field[technical_id][]' => array(
            'label' => __('ID:'),
            'form' => array(
                'type' => 'text',
            ),
            'populate' => function($item) {
                return $item->field_technical_id;
            },
            'expert' => true,
        ),
        'field[technical_css][]' => array(
            'label' => __('CSS classes:'),
            'form' => array(
                'type' => 'text',
            ),
            'populate' => function($item) {
                return $item->field_technical_css;
            },
            'expert' => true,
        ),
    ),
);
