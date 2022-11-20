<?php
/* Smarty version 3.1.33, created on 2019-08-22 22:08:10
  from '/var/www/html/bot/answers/profile.msg' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5ee81ad985d1_90049018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cfc8e9b3f93dbeeda203ee5b19de9a708315791' => 
    array (
      0 => '/var/www/html/bot/answers/profile.msg',
      1 => 1566500845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5ee81ad985d1_90049018 (Smarty_Internal_Template $_smarty_tpl) {
?>[RaidRP]: Ваш профиль:

▹ Ваше имя: *id<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
)
▹ Лицензия: <?php echo $_smarty_tpl->tpl_vars['license']->value;?>

<?php }
}
