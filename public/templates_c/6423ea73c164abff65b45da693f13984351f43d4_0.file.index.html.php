<?php
/* Smarty version 3.1.33, created on 2018-10-16 12:14:35
  from 'E:\path\compile\PHP\phpStudy\PHPTutorial\WWW\mycmf\app\view\Index\Index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc565abe71f84_47662983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6423ea73c164abff65b45da693f13984351f43d4' => 
    array (
      0 => 'E:\\path\\compile\\PHP\\phpStudy\\PHPTutorial\\WWW\\mycmf\\app\\view\\Index\\Index\\index.html',
      1 => 1539663273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc565abe71f84_47662983 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	网页测试
	<?php echo $_smarty_tpl->tpl_vars['test']->value;?>
<br/>
	<?php echo $_smarty_tpl->tpl_vars['hello']->value;?>
<br/>
	
	<table>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst']->value, 'v', false, 'K');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['K']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
		<tr>	
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['age'];?>
</td>
		
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</body>
</html><?php }
}
