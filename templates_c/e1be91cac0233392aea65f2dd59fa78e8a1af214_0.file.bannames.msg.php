<?php
/* Smarty version 3.1.33, created on 2022-04-07 10:33:06
  from '/var/www/aurhostr/data/www/aurhost.ru/botzx1/answers/bannames.msg' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_624e93b2684681_55650799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1be91cac0233392aea65f2dd59fa78e8a1af214' => 
    array (
      0 => '/var/www/aurhostr/data/www/aurhost.ru/botzx1/answers/bannames.msg',
      1 => 1648993235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624e93b2684681_55650799 (Smarty_Internal_Template $_smarty_tpl) {
?>[RAIDRP]: Баны найдены! Результат:

▹ Ник забаневшего: <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>

▹ Кто забанил: <?php echo $_smarty_tpl->tpl_vars['BanAdmin']->value;?>

▹ Причина: <?php echo $_smarty_tpl->tpl_vars['BanReason']->value;?>

▹ Истечения бана: <?php echo $_smarty_tpl->tpl_vars['BanSeconds']->value;?>
 сек
▹ Дата бана: <?php echo $_smarty_tpl->tpl_vars['BanDate']->value;
}
}
