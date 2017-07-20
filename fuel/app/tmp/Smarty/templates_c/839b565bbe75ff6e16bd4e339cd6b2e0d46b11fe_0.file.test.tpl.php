<?php
/* Smarty version 3.1.31, created on 2017-01-06 15:06:02
  from "/usr/local/apache2/htdocs/sunseer/lilu/fuelphp/fuel/app/views/test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_586f41da579ff6_81514274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '839b565bbe75ff6e16bd4e339cd6b2e0d46b11fe' => 
    array (
      0 => '/usr/local/apache2/htdocs/sunseer/lilu/fuelphp/fuel/app/views/test.tpl',
      1 => 1483683524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_586f41da579ff6_81514274 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>  
<head>  
 
</head> 
<body>
<h1> hello <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 </h1>
<?php echo $_smarty_tpl->tpl_vars['data']->value['example_data'][0]->name;?>

<?php echo $_smarty_tpl->tpl_vars['data']->value['example_data'][0]->user_id;?>

<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['data']->value["pagination"], ENT_QUOTES);?>


</body>
</html> 

<?php }
}
