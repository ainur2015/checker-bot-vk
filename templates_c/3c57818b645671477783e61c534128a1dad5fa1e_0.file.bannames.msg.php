<?php
/* Smarty version 3.1.33, created on 2022-04-02 10:55:16
  from '/var/www/wh2104/data/www/raidrp.ru/botzx1/answers/bannames.msg' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_624801649170a2_72496437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c57818b645671477783e61c534128a1dad5fa1e' => 
    array (
      0 => '/var/www/wh2104/data/www/raidrp.ru/botzx1/answers/bannames.msg',
      1 => 1648886008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624801649170a2_72496437 (Smarty_Internal_Template $_smarty_tpl) {
?>[RAIDRP]: Баны найдены! Результат:

▹ Ник забаневшего: <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>

▹ Кто забанил: <?php echo $_smarty_tpl->tpl_vars['BanAdmin']->value;?>

▹ Причина: <?php echo $_smarty_tpl->tpl_vars['BanReason']->value;?>

▹ Истечения бана: <?php echo $_smarty_tpl->tpl_vars['BanSeconds']->value;?>
 сек
▹ Дата бана: <?php echo $_smarty_tpl->tpl_vars['BanDate']->value;
}
}
