<?php
/* Smarty version 3.1.33, created on 2019-09-03 18:15:57
  from '/var/www/html/bot1/answers/profile.msg' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6e83ad426357_30076130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e42617202a78454c3122b8895a067d8c653ffe86' => 
    array (
      0 => '/var/www/html/bot1/answers/profile.msg',
      1 => 1567478379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6e83ad426357_30076130 (Smarty_Internal_Template $_smarty_tpl) {
?>[RAIDRP]: Ваш профиль:

▹ Ваше имя: *id<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
)
▹ Лицензия: <?php echo $_smarty_tpl->tpl_vars['license']->value;?>

<?php }
}
