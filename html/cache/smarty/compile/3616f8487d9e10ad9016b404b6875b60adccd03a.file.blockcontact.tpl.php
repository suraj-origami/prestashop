<?php /* Smarty version Smarty-3.1.8, created on 2013-02-04 18:00:09
         compiled from "/home/oborja/public_html/gitSHEWEB/prestashopweb/html/themes/default/modules/blockcontact/blockcontact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97414855051103d7919f4a0-24686541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3616f8487d9e10ad9016b404b6875b60adccd03a' => 
    array (
      0 => '/home/oborja/public_html/gitSHEWEB/prestashopweb/html/themes/default/modules/blockcontact/blockcontact.tpl',
      1 => 1356985156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97414855051103d7919f4a0-24686541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'telnumber' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51103d791c2439_11961928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51103d791c2439_11961928')) {function content_51103d791c2439_11961928($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/oborja/public_html/gitSHEWEB/prestashopweb/html/tools/smarty/plugins/modifier.escape.php';
?>

<div id="contact_block" class="block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</p>
	<div class="block_content clearfix">
			<p><?php echo smartyTranslate(array('s'=>'Our hotline is available 24/7','mod'=>'blockcontact'),$_smarty_tpl);?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['telnumber']->value!=''){?><p class="tel"><span class="label"><?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'blockcontact'),$_smarty_tpl);?>
</span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['telnumber']->value, 'htmlall', 'UTF-8');?>
</p><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['email']->value!=''){?><a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'htmlall', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact our hotline','mod'=>'blockcontact'),$_smarty_tpl);?>
</a><?php }?>
	</div>
</div>
<?php }} ?>