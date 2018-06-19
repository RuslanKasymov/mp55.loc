<?php return array (
  '4793a1ea68eab62a2c41514b1283594e' => 
  array (
    'criteria' => 
    array (
      'name' => 'formit',
    ),
    'object' => 
    array (
      'name' => 'formit',
      'path' => '{core_path}components/formit/',
      'assets_path' => '{assets_path}components/formit/',
    ),
  ),
  '8a1653977d9d4ac82aabdcc79e444dd6' => 
  array (
    'criteria' => 
    array (
      'key' => 'formit.recaptcha_public_key',
    ),
    'object' => 
    array (
      'key' => 'formit.recaptcha_public_key',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'formit',
      'area' => 'recaptcha',
      'editedon' => NULL,
    ),
  ),
  '8b38ac33662dcb716560bd00edd225f9' => 
  array (
    'criteria' => 
    array (
      'key' => 'formit.recaptcha_private_key',
    ),
    'object' => 
    array (
      'key' => 'formit.recaptcha_private_key',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'formit',
      'area' => 'recaptcha',
      'editedon' => NULL,
    ),
  ),
  'a9d6a99f734f17913c2ce04a93375087' => 
  array (
    'criteria' => 
    array (
      'key' => 'formit.recaptcha_use_ssl',
    ),
    'object' => 
    array (
      'key' => 'formit.recaptcha_use_ssl',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'formit',
      'area' => 'recaptcha',
      'editedon' => NULL,
    ),
  ),
  'ceb452b0fbd140a3c31eaad9111abab5' => 
  array (
    'criteria' => 
    array (
      'key' => 'formit.exclude_contexts',
    ),
    'object' => 
    array (
      'key' => 'formit.exclude_contexts',
      'value' => 'mgr',
      'xtype' => 'combo-boolean',
      'namespace' => 'formit',
      'area' => 'system',
      'editedon' => NULL,
    ),
  ),
  '4a0d8b8bd2cb1b4a7f62286a0fb46b3e' => 
  array (
    'criteria' => 
    array (
      'key' => 'formit.form_encryptkey',
    ),
    'object' => 
    array (
      'key' => 'formit.form_encryptkey',
      'value' => 'modx5adc9b54a5f636.21590157',
      'xtype' => 'textfield',
      'namespace' => 'formit',
      'area' => 'system',
      'editedon' => '2018-04-22 23:35:09',
    ),
  ),
  '3aae953c54756c9d8499bb9cf14e0fce' => 
  array (
    'criteria' => 
    array (
      'key' => 'formit.attachment.mediasource',
    ),
    'object' => 
    array (
      'key' => 'formit.attachment.mediasource',
      'value' => '1',
      'xtype' => 'modx-combo-source',
      'namespace' => 'formit',
      'area' => 'system',
      'editedon' => NULL,
    ),
  ),
  '12a4facebdfdc7c6a2b19b5c23c88b44' => 
  array (
    'criteria' => 
    array (
      'key' => 'formit.attachment.path',
    ),
    'object' => 
    array (
      'key' => 'formit.attachment.path',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'formit',
      'area' => 'system',
      'editedon' => NULL,
    ),
  ),
  '8b35784ec982f64dd3126f564e545b71' => 
  array (
    'criteria' => 
    array (
      'key' => 'formit.export_csv_delimiter',
    ),
    'object' => 
    array (
      'key' => 'formit.export_csv_delimiter',
      'value' => ';',
      'xtype' => 'textfield',
      'namespace' => 'formit',
      'area' => 'system',
      'editedon' => NULL,
    ),
  ),
  'dee5749d77cbea5389752e7062bdd4d8' => 
  array (
    'criteria' => 
    array (
      'category' => 'FormIt',
    ),
    'object' => 
    array (
      'id' => 3,
      'parent' => 0,
      'category' => 'FormIt',
      'rank' => 0,
    ),
  ),
  '1b24409d5a6095d5bda0bb24e55dc26d' => 
  array (
    'criteria' => 
    array (
      'name' => 'fiDefaultEmailTpl',
    ),
    'object' => 
    array (
      'id' => 2,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'fiDefaultEmailTpl',
      'description' => 'The default chunk used for the email. Please do not edit this chunk, as this will be overwritten when updating FormIt.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '<p>[[+fields]]</p>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<p>[[+fields]]</p>',
    ),
  ),
  'd9dd90ac23196128f2d74dd8c55e2806' => 
  array (
    'criteria' => 
    array (
      'name' => 'fiDefaultFiarTpl',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'fiDefaultFiarTpl',
      'description' => 'The default chunk used for the autoresponder email. Please do not edit this chunk, as this will be overwritten when updating FormIt.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '<p>Hello [[+name]],</p>

<p>Your message has been received. We will respond as soon as possible. Thank you for contacting us.</p>

<p>NOTE: This is an automatic response; please do not respond to this message directly.</p>

<p>Here is your message:<br />
[[+message:nl2br]]</p>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<p>Hello [[+name]],</p>

<p>Your message has been received. We will respond as soon as possible. Thank you for contacting us.</p>

<p>NOTE: This is an automatic response; please do not respond to this message directly.</p>

<p>Here is your message:<br />
[[+message:nl2br]]</p>',
    ),
  ),
  'd8a615add2f1c2c1014515781fa893bf' => 
  array (
    'criteria' => 
    array (
      'name' => 'fiDefaultOptGroupTpl',
    ),
    'object' => 
    array (
      'id' => 4,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'fiDefaultOptGroupTpl',
      'description' => 'The default chunk used by the FormItCountryOptions snippet for the select optgroup. Please do not edit this chunk, as this will be overwritten when updating FormIt.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '<optgroup label="[[+text]]">
    [[+options]]
</optgroup>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<optgroup label="[[+text]]">
    [[+options]]
</optgroup>',
    ),
  ),
  'e50dfd664197f51d2ba72dd1a6dbfe39' => 
  array (
    'criteria' => 
    array (
      'name' => 'fiDefaultOptionTpl',
    ),
    'object' => 
    array (
      'id' => 5,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'fiDefaultOptionTpl',
      'description' => 'The default chunk used by the FormItCountryOptions snippet for the select option. Please do not edit this chunk, as this will be overwritten when updating FormIt.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '<option value="[[+value]]"[[+selected]]>[[+text]]</option>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<option value="[[+value]]"[[+selected]]>[[+text]]</option>',
    ),
  ),
  '340bfb07e7e2a244528493583329eb9e' => 
  array (
    'criteria' => 
    array (
      'name' => 'FormIt',
    ),
    'object' => 
    array (
      'id' => 5,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'FormIt',
      'description' => 'A dynamic form processing snippet.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package formit
 */

$modelPath = $modx->getOption(
    \'formit.core_path\',
    null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/formit/\'
) . \'model/formit/\';
$modx->loadClass(\'FormIt\', $modelPath, true, true);
$fi = new FormIt($modx, $scriptProperties);

$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
      'locked' => 0,
      'properties' => 'a:61:{s:5:"hooks";a:7:{s:4:"name";s:5:"hooks";s:4:"desc";s:22:"prop_formit.hooks_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:8:"preHooks";a:7:{s:4:"name";s:8:"preHooks";s:4:"desc";s:25:"prop_formit.prehooks_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:9:"submitVar";a:7:{s:4:"name";s:9:"submitVar";s:4:"desc";s:26:"prop_formit.submitvar_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:8:"validate";a:7:{s:4:"name";s:8:"validate";s:4:"desc";s:25:"prop_formit.validate_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:6:"errTpl";a:7:{s:4:"name";s:6:"errTpl";s:4:"desc";s:23:"prop_formit.errtpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:37:"<span class="error">[[+error]]</span>";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:22:"validationErrorMessage";a:7:{s:4:"name";s:22:"validationErrorMessage";s:4:"desc";s:39:"prop_formit.validationerrormessage_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:96:"<p class="error">A form validation error occurred. Please check the values you have entered.</p>";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:22:"validationErrorBulkTpl";a:7:{s:4:"name";s:22:"validationErrorBulkTpl";s:4:"desc";s:39:"prop_formit.validationerrorbulktpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:19:"<li>[[+error]]</li>";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:26:"trimValuesBeforeValidation";a:7:{s:4:"name";s:26:"trimValuesBeforeValidation";s:4:"desc";s:43:"prop_formit.trimvaluesdeforevalidation_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:16:"customValidators";a:7:{s:4:"name";s:16:"customValidators";s:4:"desc";s:33:"prop_formit.customvalidators_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:20:"clearFieldsOnSuccess";a:7:{s:4:"name";s:20:"clearFieldsOnSuccess";s:4:"desc";s:37:"prop_formit.clearfieldsonsuccess_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:14:"successMessage";a:7:{s:4:"name";s:14:"successMessage";s:4:"desc";s:31:"prop_formit.successmessage_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:25:"successMessagePlaceholder";a:7:{s:4:"name";s:25:"successMessagePlaceholder";s:4:"desc";s:42:"prop_formit.successmessageplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:17:"fi.successMessage";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:5:"store";a:7:{s:4:"name";s:5:"store";s:4:"desc";s:22:"prop_formit.store_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:34:"prop_formit.placeholderprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"fi.";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:9:"storeTime";a:7:{s:4:"name";s:9:"storeTime";s:4:"desc";s:26:"prop_formit.storetime_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"300";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:13:"storeLocation";a:7:{s:4:"name";s:13:"storeLocation";s:4:"desc";s:30:"prop_formit.storelocation_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:5:"cache";s:4:"text";s:16:"formit.opt_cache";}i:1;a:2:{s:5:"value";s:7:"session";s:4:"text";s:18:"formit.opt_session";}}s:5:"value";s:5:"cache";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:10:"allowFiles";a:7:{s:4:"name";s:10:"allowFiles";s:4:"desc";s:27:"prop_formit.allowfiles_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:15:"spamEmailFields";a:7:{s:4:"name";s:15:"spamEmailFields";s:4:"desc";s:32:"prop_formit.spamemailfields_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:5:"email";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:11:"spamCheckIp";a:7:{s:4:"name";s:11:"spamCheckIp";s:4:"desc";s:28:"prop_formit.spamcheckip_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:11:"recaptchaJs";a:7:{s:4:"name";s:11:"recaptchaJs";s:4:"desc";s:28:"prop_formit.recaptchajs_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:2:"{}";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:14:"recaptchaTheme";a:7:{s:4:"name";s:14:"recaptchaTheme";s:4:"desc";s:31:"prop_formit.recaptchatheme_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:3:"red";s:4:"text";s:14:"formit.opt_red";}i:1;a:2:{s:5:"value";s:5:"white";s:4:"text";s:16:"formit.opt_white";}i:2;a:2:{s:5:"value";s:5:"clean";s:4:"text";s:16:"formit.opt_clean";}i:3;a:2:{s:5:"value";s:10:"blackglass";s:4:"text";s:21:"formit.opt_blackglass";}}s:5:"value";s:5:"clean";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:10:"redirectTo";a:7:{s:4:"name";s:10:"redirectTo";s:4:"desc";s:27:"prop_formit.redirectto_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:14:"redirectParams";a:7:{s:4:"name";s:14:"redirectParams";s:4:"desc";s:31:"prop_formit.redirectparams_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:7:"emailTo";a:7:{s:4:"name";s:7:"emailTo";s:4:"desc";s:24:"prop_formit.emailto_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:11:"emailToName";a:7:{s:4:"name";s:11:"emailToName";s:4:"desc";s:28:"prop_formit.emailtoname_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:9:"emailFrom";a:7:{s:4:"name";s:9:"emailFrom";s:4:"desc";s:26:"prop_formit.emailfrom_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:13:"emailFromName";a:7:{s:4:"name";s:13:"emailFromName";s:4:"desc";s:30:"prop_formit.emailfromname_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:12:"emailReplyTo";a:7:{s:4:"name";s:12:"emailReplyTo";s:4:"desc";s:29:"prop_formit.emailreplyto_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:16:"emailReplyToName";a:7:{s:4:"name";s:16:"emailReplyToName";s:4:"desc";s:33:"prop_formit.emailreplytoname_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:7:"emailCC";a:7:{s:4:"name";s:7:"emailCC";s:4:"desc";s:24:"prop_formit.emailcc_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:11:"emailCCName";a:7:{s:4:"name";s:11:"emailCCName";s:4:"desc";s:28:"prop_formit.emailccname_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:8:"emailBCC";a:7:{s:4:"name";s:8:"emailBCC";s:4:"desc";s:25:"prop_formit.emailbcc_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:12:"emailBCCName";a:7:{s:4:"name";s:12:"emailBCCName";s:4:"desc";s:29:"prop_formit.emailbccname_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:15:"emailReturnPath";a:7:{s:4:"name";s:15:"emailReturnPath";s:4:"desc";s:32:"prop_formit.emailreturnpath_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:12:"emailSubject";a:7:{s:4:"name";s:12:"emailSubject";s:4:"desc";s:29:"prop_formit.emailsubject_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:23:"emailUseFieldForSubject";a:7:{s:4:"name";s:23:"emailUseFieldForSubject";s:4:"desc";s:40:"prop_formit.emailusefieldforsubject_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:9:"emailHtml";a:7:{s:4:"name";s:9:"emailHtml";s:4:"desc";s:26:"prop_formit.emailhtml_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:20:"emailConvertNewlines";a:7:{s:4:"name";s:20:"emailConvertNewlines";s:4:"desc";s:37:"prop_formit.emailconvertnewlines_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:17:"emailMultiWrapper";a:7:{s:4:"name";s:17:"emailMultiWrapper";s:4:"desc";s:34:"prop_formit.emailmultiwrapper_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:10:"[[+value]]";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:19:"emailMultiSeparator";a:7:{s:4:"name";s:19:"emailMultiSeparator";s:4:"desc";s:36:"prop_formit.emailmultiseparator_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:7:"fiarTpl";a:7:{s:4:"name";s:7:"fiarTpl";s:4:"desc";s:24:"prop_formit.fiartpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:11:"fiarToField";a:7:{s:4:"name";s:11:"fiarToField";s:4:"desc";s:28:"prop_formit.fiartofield_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:5:"email";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:11:"fiarSubject";a:7:{s:4:"name";s:11:"fiarSubject";s:4:"desc";s:28:"prop_formit.fiarsubject_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:30:"[[++site_name]] Auto-Responder";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:8:"fiarFrom";a:7:{s:4:"name";s:8:"fiarFrom";s:4:"desc";s:25:"prop_formit.fiarfrom_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:12:"fiarFromName";a:7:{s:4:"name";s:12:"fiarFromName";s:4:"desc";s:29:"prop_formit.fiarfromname_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:11:"fiarReplyTo";a:7:{s:4:"name";s:11:"fiarReplyTo";s:4:"desc";s:28:"prop_formit.fiarreplyto_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:15:"fiarReplyToName";a:7:{s:4:"name";s:15:"fiarReplyToName";s:4:"desc";s:32:"prop_formit.fiarreplytoname_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:6:"fiarCC";a:7:{s:4:"name";s:6:"fiarCC";s:4:"desc";s:23:"prop_formit.fiarcc_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:10:"fiarCCName";a:7:{s:4:"name";s:10:"fiarCCName";s:4:"desc";s:25:"prop_fiar.fiarccname_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:7:"fiarBCC";a:7:{s:4:"name";s:7:"fiarBCC";s:4:"desc";s:24:"prop_formit.fiarbcc_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:11:"fiarBCCName";a:7:{s:4:"name";s:11:"fiarBCCName";s:4:"desc";s:28:"prop_formit.fiarbccname_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:8:"fiarHtml";a:7:{s:4:"name";s:8:"fiarHtml";s:4:"desc";s:25:"prop_formit.fiarhtml_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:12:"mathMinRange";a:7:{s:4:"name";s:12:"mathMinRange";s:4:"desc";s:29:"prop_formit.mathminrange_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:2:"10";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:12:"mathMaxRange";a:7:{s:4:"name";s:12:"mathMaxRange";s:4:"desc";s:29:"prop_formit.mathmaxrange_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"100";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:9:"mathField";a:7:{s:4:"name";s:9:"mathField";s:4:"desc";s:26:"prop_formit.mathfield_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"math";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:12:"mathOp1Field";a:7:{s:4:"name";s:12:"mathOp1Field";s:4:"desc";s:29:"prop_formit.mathop1field_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"op1";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:12:"mathOp2Field";a:7:{s:4:"name";s:12:"mathOp2Field";s:4:"desc";s:29:"prop_formit.mathop2field_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"op2";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:17:"mathOperatorField";a:7:{s:4:"name";s:17:"mathOperatorField";s:4:"desc";s:34:"prop_formit.mathoperatorfield_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"operator";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:12:"saveTmpFiles";a:7:{s:4:"name";s:12:"saveTmpFiles";s:4:"desc";s:29:"prop_formit.savetmpfiles_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:18:"attachFilesToEmail";a:7:{s:4:"name";s:18:"attachFilesToEmail";s:4:"desc";s:28:"prop_formit.attachfiles_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:16:"storeAttachments";a:7:{s:4:"name";s:16:"storeAttachments";s:4:"desc";s:34:"prop_formit.store_attachments_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package formit
 */

$modelPath = $modx->getOption(
    \'formit.core_path\',
    null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/formit/\'
) . \'model/formit/\';
$modx->loadClass(\'FormIt\', $modelPath, true, true);
$fi = new FormIt($modx, $scriptProperties);

$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
    ),
  ),
  '9bcfd7bb7ccc5c864a281d4367a33c24' => 
  array (
    'criteria' => 
    array (
      'name' => 'FormItRetriever',
    ),
    'object' => 
    array (
      'id' => 6,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'FormItRetriever',
      'description' => 'Fetches a form submission for a user for displaying on a thank you page.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItRetriever
 *
 * Retrieves a prior form submission that was stored with the &store property
 * in a FormIt call.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package formit
 */

$modelPath = $modx->getOption(
    \'formit.core_path\',
    null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/formit/\'
) . \'model/formit/\';
$fi = $modx->getService(\'formit\', \'FormIt\', $modelPath, $scriptProperties);

/* setup properties */
$placeholderPrefix = $modx->getOption(\'placeholderPrefix\', $scriptProperties, \'fi.\');
$eraseOnLoad = $modx->getOption(\'eraseOnLoad\', $scriptProperties, false);
$redirectToOnNotFound = $modx->getOption(\'redirectToOnNotFound\', $scriptProperties, false);

/* fetch data from cache and set to placeholders */
$fi->loadRequest();
$fi->request->loadDictionary();
$data = $fi->request->dictionary->retrieve();
if (!empty($data)) {
    /* set data to placeholders */
    foreach ($data as $k => $v) {
        /*checkboxes & other multi-values are stored as arrays, must be imploded*/
        if (is_array($v)) {
            $data[$k] = implode(\',\', $v);
        }
    }
    $modx->toPlaceholders($data, $placeholderPrefix, \'\');
    
    /* if set, erase the data on load, otherwise depend on cache expiry time */
    if ($eraseOnLoad) {
        $fi->request->dictionary->erase();
    }
/* if the data\'s not found, and we want to redirect somewhere if so, do here */
} elseif (!empty($redirectToOnNotFound)) {
    $url = $modx->makeUrl($redirectToOnNotFound);
    $modx->sendRedirect($url);
}
return \'\';',
      'locked' => 0,
      'properties' => 'a:4:{s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:31:"prop_fir.placeholderprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"fi.";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:20:"redirectToOnNotFound";a:7:{s:4:"name";s:20:"redirectToOnNotFound";s:4:"desc";s:34:"prop_fir.redirecttoonnotfound_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:11:"eraseOnLoad";a:7:{s:4:"name";s:11:"eraseOnLoad";s:4:"desc";s:25:"prop_fir.eraseonload_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:13:"storeLocation";a:7:{s:4:"name";s:13:"storeLocation";s:4:"desc";s:27:"prop_fir.storelocation_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:5:"cache";s:4:"text";s:16:"formit.opt_cache";}i:1;a:2:{s:5:"value";s:7:"session";s:4:"text";s:18:"formit.opt_session";}}s:5:"value";s:5:"cache";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItRetriever
 *
 * Retrieves a prior form submission that was stored with the &store property
 * in a FormIt call.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package formit
 */

$modelPath = $modx->getOption(
    \'formit.core_path\',
    null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/formit/\'
) . \'model/formit/\';
$fi = $modx->getService(\'formit\', \'FormIt\', $modelPath, $scriptProperties);

/* setup properties */
$placeholderPrefix = $modx->getOption(\'placeholderPrefix\', $scriptProperties, \'fi.\');
$eraseOnLoad = $modx->getOption(\'eraseOnLoad\', $scriptProperties, false);
$redirectToOnNotFound = $modx->getOption(\'redirectToOnNotFound\', $scriptProperties, false);

/* fetch data from cache and set to placeholders */
$fi->loadRequest();
$fi->request->loadDictionary();
$data = $fi->request->dictionary->retrieve();
if (!empty($data)) {
    /* set data to placeholders */
    foreach ($data as $k => $v) {
        /*checkboxes & other multi-values are stored as arrays, must be imploded*/
        if (is_array($v)) {
            $data[$k] = implode(\',\', $v);
        }
    }
    $modx->toPlaceholders($data, $placeholderPrefix, \'\');
    
    /* if set, erase the data on load, otherwise depend on cache expiry time */
    if ($eraseOnLoad) {
        $fi->request->dictionary->erase();
    }
/* if the data\'s not found, and we want to redirect somewhere if so, do here */
} elseif (!empty($redirectToOnNotFound)) {
    $url = $modx->makeUrl($redirectToOnNotFound);
    $modx->sendRedirect($url);
}
return \'\';',
    ),
  ),
  '120c3a13f55354c98fcb50c64d31a330' => 
  array (
    'criteria' => 
    array (
      'name' => 'FormItIsChecked',
    ),
    'object' => 
    array (
      'id' => 7,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'FormItIsChecked',
      'description' => 'A custom output filter used with checkboxes/radios for checking checked status.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItIsChecked
 *
 * Custom output filter that returns checked="checked" if the value is set
 *
 * @var string $input
 * @var string $options
 * @var modX $modx
 *
 * @package formit
 */
$output = \' \';
if ($input == $options) {
    $output = \' checked="checked"\';
}
$input = $modx->fromJSON($input);
if (!empty($input) && is_array($input) && in_array($options,$input)) {
  $output = \' checked="checked"\';
}
return $output;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItIsChecked
 *
 * Custom output filter that returns checked="checked" if the value is set
 *
 * @var string $input
 * @var string $options
 * @var modX $modx
 *
 * @package formit
 */
$output = \' \';
if ($input == $options) {
    $output = \' checked="checked"\';
}
$input = $modx->fromJSON($input);
if (!empty($input) && is_array($input) && in_array($options,$input)) {
  $output = \' checked="checked"\';
}
return $output;',
    ),
  ),
  '6160c7c5b06589b4c33eb4f29a6beb66' => 
  array (
    'criteria' => 
    array (
      'name' => 'FormItIsSelected',
    ),
    'object' => 
    array (
      'id' => 8,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'FormItIsSelected',
      'description' => 'A custom output filter used with dropdowns for checking selected status.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItIsChecked
 *
 * Custom output filter that returns checked="checked" if the value is set
 *
 * @var string $input
 * @var string $options
 * @var modX $modx
 *
 * @package formit
 */
$output = \' \';
if ($input == $options) {
    $output = \' selected="selected"\';
}
$input = $modx->fromJSON($input);
if (!empty($input) && is_array($input) && in_array($options,$input)) {
  $output = \' selected="selected"\';
}
return $output;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItIsChecked
 *
 * Custom output filter that returns checked="checked" if the value is set
 *
 * @var string $input
 * @var string $options
 * @var modX $modx
 *
 * @package formit
 */
$output = \' \';
if ($input == $options) {
    $output = \' selected="selected"\';
}
$input = $modx->fromJSON($input);
if (!empty($input) && is_array($input) && in_array($options,$input)) {
  $output = \' selected="selected"\';
}
return $output;',
    ),
  ),
  '4e80dbc5503d0cc66906b83ca8596133' => 
  array (
    'criteria' => 
    array (
      'name' => 'FormItCountryOptions',
    ),
    'object' => 
    array (
      'id' => 9,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'FormItCountryOptions',
      'description' => 'A utility snippet for generating a dropdown list of countries.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItCountryOptions
 *
 * Automatically generates and outputs a country list for usage in forms
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package formit
 */

$modelPath = $modx->getOption(
    \'formit.core_path\',
    null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/formit/\'
) . \'model/formit/\';
$fi = $modx->getService(\'formit\', \'FormIt\', $modelPath, $scriptProperties);

/** @var fiCountryOptions $co */
$co = $fi->loadModule(\'fiCountryOptions\', \'countryOptions\', $scriptProperties);
$co->initialize();
$co->getData();
$co->loadPrioritized();
$co->iterate();
return $co->output();',
      'locked' => 0,
      'properties' => 'a:11:{s:8:"selected";a:7:{s:4:"name";s:8:"selected";s:4:"desc";s:23:"prop_fico.selected_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:18:"prop_fico.tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:18:"fiDefaultOptionTpl";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:10:"useIsoCode";a:7:{s:4:"name";s:10:"useIsoCode";s:4:"desc";s:25:"prop_fico.useisocode_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:11:"prioritized";a:7:{s:4:"name";s:11:"prioritized";s:4:"desc";s:26:"prop_fico.prioritized_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:11:"optGroupTpl";a:7:{s:4:"name";s:11:"optGroupTpl";s:4:"desc";s:26:"prop_fico.optgrouptpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:20:"fiDefaultOptGroupTpl";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:20:"prioritizedGroupText";a:7:{s:4:"name";s:20:"prioritizedGroupText";s:4:"desc";s:35:"prop_fico.prioritizedgrouptext_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:12:"allGroupText";a:7:{s:4:"name";s:12:"allGroupText";s:4:"desc";s:27:"prop_fico.allgrouptext_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:17:"selectedAttribute";a:7:{s:4:"name";s:17:"selectedAttribute";s:4:"desc";s:32:"prop_fico.selectedattribute_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:20:" selected="selected"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:28:"prop_fico.toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:7:"country";a:7:{s:4:"name";s:7:"country";s:4:"desc";s:22:"prop_fico.country_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:16:"[[++cultureKey]]";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:7:"limited";a:7:{s:4:"name";s:7:"limited";s:4:"desc";s:22:"prop_fico.limited_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItCountryOptions
 *
 * Automatically generates and outputs a country list for usage in forms
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package formit
 */

$modelPath = $modx->getOption(
    \'formit.core_path\',
    null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/formit/\'
) . \'model/formit/\';
$fi = $modx->getService(\'formit\', \'FormIt\', $modelPath, $scriptProperties);

/** @var fiCountryOptions $co */
$co = $fi->loadModule(\'fiCountryOptions\', \'countryOptions\', $scriptProperties);
$co->initialize();
$co->getData();
$co->loadPrioritized();
$co->iterate();
return $co->output();',
    ),
  ),
  'de0da52f16406a71e79c0aaf74f8433c' => 
  array (
    'criteria' => 
    array (
      'name' => 'FormItStateOptions',
    ),
    'object' => 
    array (
      'id' => 10,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'FormItStateOptions',
      'description' => 'A utility snippet for generating a dropdown list of U.S. states.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItStateOptions
 *
 * Automatically generates and outputs a U.S. state list for usage in forms
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package formit
 */

$modelPath = $modx->getOption(
    \'formit.core_path\',
    null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/formit/\'
) . \'model/formit/\';
$fi = $modx->getService(\'formit\', \'FormIt\', $modelPath, $scriptProperties);

/** @var fiStateOptions $so */
$so = $fi->loadModule(\'fiStateOptions\', \'stateOptions\', $scriptProperties);
$so->initialize();
$so->getData();
$so->iterate();
return $so->output();',
      'locked' => 0,
      'properties' => 'a:6:{s:8:"selected";a:7:{s:4:"name";s:8:"selected";s:4:"desc";s:23:"prop_fiso.selected_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:18:"prop_fiso.tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:18:"fiDefaultOptionTpl";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:7:"useAbbr";a:7:{s:4:"name";s:7:"useAbbr";s:4:"desc";s:22:"prop_fiso.useabbr_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:17:"selectedAttribute";a:7:{s:4:"name";s:17:"selectedAttribute";s:4:"desc";s:32:"prop_fiso.selectedattribute_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:20:" selected="selected"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:28:"prop_fiso.toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}s:7:"country";a:7:{s:4:"name";s:7:"country";s:4:"desc";s:22:"prop_fiso.country_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:16:"[[++cultureKey]]";s:7:"lexicon";s:17:"formit:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItStateOptions
 *
 * Automatically generates and outputs a U.S. state list for usage in forms
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package formit
 */

$modelPath = $modx->getOption(
    \'formit.core_path\',
    null,
    $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/formit/\'
) . \'model/formit/\';
$fi = $modx->getService(\'formit\', \'FormIt\', $modelPath, $scriptProperties);

/** @var fiStateOptions $so */
$so = $fi->loadModule(\'fiStateOptions\', \'stateOptions\', $scriptProperties);
$so->initialize();
$so->getData();
$so->iterate();
return $so->output();',
    ),
  ),
  'c3f826ffe0de4520a68653d197af1ae0' => 
  array (
    'criteria' => 
    array (
      'name' => 'FormItLoadSavedForm',
    ),
    'object' => 
    array (
      'id' => 11,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'FormItLoadSavedForm',
      'description' => 'Prehook to load previously saved form.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/**
 * FormIt
 *
 * Copyright 2011-12 by SCHERP Ontwikkeling <info@scherpontwikkeling.nl>
 * Copyright 2015 by Wieger Sloot <modx@sterc.nl>
 * Copyright 2016 by YJ Tso <yj@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * A custom FormIt prehook for fetching saved form data. - Based on FormItSaveForm
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var FormIt $formit
 * @var fiHooks $hook
 * 
 * @package formit
 */
/* setup default properties */
// If prehook fails do we continue?
$return = $modx->getOption(\'returnValueOnFail\', $formit->config, true);
$formEncrypt = $modx->getOption(\'formEncrypt\', $formit->config, false);
$formFields = $modx->getOption(\'formFields\', $formit->config, false);
$fieldNames = $modx->getOption(\'fieldNames\', $formit->config, false);
$updateSavedForm = $modx->getOption(\'updateSavedForm\', $formit->config, false); // true, false, \'1\', \'0\', or \'values\'
// If FormIt config says don\'t update, don\'t do it
if (!$updateSavedForm) return $return;
// In order to load form values, the user must provide the hash key somehow
// Usually with a $_GET parameter, but a property in $formit->config will override.
$formHashKeyField = $modx->getOption(\'savedFormHashKeyField\', $formit->config, \'savedFormHashKey\');
$formHashKey = \'\';
if (isset($_GET[$formHashKeyField])) $formHashKey = (string) $_GET[$formHashKeyField];
if ($hook->getValue($formHashKeyField)) $formHashKey = (string) $hook->getValue($formHashKeyField);
if (isset($formit->config[$formHashKeyField])) $formHashKey = $formit->config[$formHashKeyField];
// our hashing methods return 32 chars. if no valid hash key we\'re done here.
if (strlen($formHashKey) !== 32) return $return;

// Try to fetch the saved form
$savedForm = $modx->getObject(\'FormItForm\', array(\'hash\' => $formHashKey));
if (!$savedForm) return $return;

if ($formFields) {
    $formFields = explode(\',\', $formFields);
    foreach($formFields as $k => $v) {
        $formFields[$k] = trim($v);
    }
}

// Initialize the data array
// Handle encryption
if ($formEncrypt) {
    $data = $savedForm->decrypt();
} else {
    $data = $savedForm->get(\'values\');
}
if (is_string($data)) $data = $modx->fromJSON($data);
if (!is_array($data)) return $return;

//Change the fieldnames
if ($fieldNames) {
    $newDataArray = array();
    $fieldLabels = array();
    $formFieldNames = explode(\',\', $fieldNames);
    foreach($formFieldNames as $formFieldName){
        list($name, $label) = explode(\'==\', $formFieldName);
        // reverse order from FormItSaveForm snippet
        $fieldLabels[trim($label)] = trim($name);
    }
    foreach ($data as $key => $value) {
        if ($fieldLabels[$key]) {
            $newDataArray[$fieldLabels[$key]] = $value;
        }else{
            $newDataArray[$key] = $value;
        }
    }
    $data = $newDataArray;
}

// Always pass back in the provided hash key
$data[$formHashKeyField] = $formHashKey;
$hook->setValues($data);
return true;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * FormIt
 *
 * Copyright 2011-12 by SCHERP Ontwikkeling <info@scherpontwikkeling.nl>
 * Copyright 2015 by Wieger Sloot <modx@sterc.nl>
 * Copyright 2016 by YJ Tso <yj@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * A custom FormIt prehook for fetching saved form data. - Based on FormItSaveForm
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var FormIt $formit
 * @var fiHooks $hook
 * 
 * @package formit
 */
/* setup default properties */
// If prehook fails do we continue?
$return = $modx->getOption(\'returnValueOnFail\', $formit->config, true);
$formEncrypt = $modx->getOption(\'formEncrypt\', $formit->config, false);
$formFields = $modx->getOption(\'formFields\', $formit->config, false);
$fieldNames = $modx->getOption(\'fieldNames\', $formit->config, false);
$updateSavedForm = $modx->getOption(\'updateSavedForm\', $formit->config, false); // true, false, \'1\', \'0\', or \'values\'
// If FormIt config says don\'t update, don\'t do it
if (!$updateSavedForm) return $return;
// In order to load form values, the user must provide the hash key somehow
// Usually with a $_GET parameter, but a property in $formit->config will override.
$formHashKeyField = $modx->getOption(\'savedFormHashKeyField\', $formit->config, \'savedFormHashKey\');
$formHashKey = \'\';
if (isset($_GET[$formHashKeyField])) $formHashKey = (string) $_GET[$formHashKeyField];
if ($hook->getValue($formHashKeyField)) $formHashKey = (string) $hook->getValue($formHashKeyField);
if (isset($formit->config[$formHashKeyField])) $formHashKey = $formit->config[$formHashKeyField];
// our hashing methods return 32 chars. if no valid hash key we\'re done here.
if (strlen($formHashKey) !== 32) return $return;

// Try to fetch the saved form
$savedForm = $modx->getObject(\'FormItForm\', array(\'hash\' => $formHashKey));
if (!$savedForm) return $return;

if ($formFields) {
    $formFields = explode(\',\', $formFields);
    foreach($formFields as $k => $v) {
        $formFields[$k] = trim($v);
    }
}

// Initialize the data array
// Handle encryption
if ($formEncrypt) {
    $data = $savedForm->decrypt();
} else {
    $data = $savedForm->get(\'values\');
}
if (is_string($data)) $data = $modx->fromJSON($data);
if (!is_array($data)) return $return;

//Change the fieldnames
if ($fieldNames) {
    $newDataArray = array();
    $fieldLabels = array();
    $formFieldNames = explode(\',\', $fieldNames);
    foreach($formFieldNames as $formFieldName){
        list($name, $label) = explode(\'==\', $formFieldName);
        // reverse order from FormItSaveForm snippet
        $fieldLabels[trim($label)] = trim($name);
    }
    foreach ($data as $key => $value) {
        if ($fieldLabels[$key]) {
            $newDataArray[$fieldLabels[$key]] = $value;
        }else{
            $newDataArray[$key] = $value;
        }
    }
    $data = $newDataArray;
}

// Always pass back in the provided hash key
$data[$formHashKeyField] = $formHashKey;
$hook->setValues($data);
return true;',
    ),
  ),
  '22ef46dbec87f7cb0daf43456802ec74' => 
  array (
    'criteria' => 
    array (
      'name' => 'FormIt',
    ),
    'object' => 
    array (
      'id' => 2,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'FormIt',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'plugincode' => '/**
 * FormIt
 *
 * Copyright 2009-2017 by Sterc <modx@sterc.nl>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt plugin
 *
 * @package formit
 */

$formit = $modx->getService(
    \'formit\',
    \'FormIt\',
    $modx->getOption(\'formit.core_path\', null, $modx->getOption(\'core_path\').\'components/formit/\') .\'model/formit/\',
    array()
);

if (!($formit instanceof FormIt)) {
    return;
}

switch ($modx->event->name) {
    case \'OnManagerPageBeforeRender\':
        // If migration status is false, show migrate alert message bar in manager
        if (method_exists(\'FormIt\',\'encryptionMigrationStatus\')) {
            if (!$formit->encryptionMigrationStatus()) {
                $modx->lexicon->load(\'formit:mgr\');
                $properties = array(\'message\' => $modx->lexicon(\'formit.migrate_alert\'));
                $chunk = $formit->_getTplChunk(\'migrate/alert\');
                if ($chunk) {
                    $modx->regClientStartupHTMLBlock($chunk->process($properties));
                    $modx->regClientCSS($formit->config[\'cssUrl\'] . \'migrate.css\');
                }
            }
        }
}',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * FormIt
 *
 * Copyright 2009-2017 by Sterc <modx@sterc.nl>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt plugin
 *
 * @package formit
 */

$formit = $modx->getService(
    \'formit\',
    \'FormIt\',
    $modx->getOption(\'formit.core_path\', null, $modx->getOption(\'core_path\').\'components/formit/\') .\'model/formit/\',
    array()
);

if (!($formit instanceof FormIt)) {
    return;
}

switch ($modx->event->name) {
    case \'OnManagerPageBeforeRender\':
        // If migration status is false, show migrate alert message bar in manager
        if (method_exists(\'FormIt\',\'encryptionMigrationStatus\')) {
            if (!$formit->encryptionMigrationStatus()) {
                $modx->lexicon->load(\'formit:mgr\');
                $properties = array(\'message\' => $modx->lexicon(\'formit.migrate_alert\'));
                $chunk = $formit->_getTplChunk(\'migrate/alert\');
                if ($chunk) {
                    $modx->regClientStartupHTMLBlock($chunk->process($properties));
                    $modx->regClientCSS($formit->config[\'cssUrl\'] . \'migrate.css\');
                }
            }
        }
}',
    ),
  ),
  '38e9c05a7a5803eb662105ac0896974d' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 2,
      'event' => 'OnManagerPageBeforeRender',
    ),
    'object' => 
    array (
      'pluginid' => 2,
      'event' => 'OnManagerPageBeforeRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '44ed9866d7d90eba59d4827bc9fef3e4' => 
  array (
    'criteria' => 
    array (
      'namespace' => 'formit',
      'controller' => 'index',
    ),
    'object' => 
    array (
      'id' => 1,
      'namespace' => 'formit',
      'controller' => 'index',
      'haslayout' => 1,
      'lang_topics' => 'formit:mgr',
      'assets' => '',
      'help_url' => '',
    ),
  ),
  '7862e3ad970d42ec9ec15d1ddfe6a978' => 
  array (
    'criteria' => 
    array (
      'text' => 'formit',
    ),
    'object' => 
    array (
      'text' => 'formit',
      'parent' => 'components',
      'action' => '1',
      'description' => 'formit.menu_desc',
      'icon' => '',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
);