<?php
/* Smarty version 3.1.30, created on 2017-12-02 17:39:18
  from "/home/wwwroot/default/OAM/views/admin/indexc/main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2274c60e3ab3_57093061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0943a42791d0b20ebd30acbb2058031903d7566' => 
    array (
      0 => '/home/wwwroot/default/OAM/views/admin/indexc/main.html',
      1 => 1511409926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2274c60e3ab3_57093061 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Insert title here</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body width="100%">
<center>

    <br>
    <br>
    <h3>本站已开源，源码地址：
    </h3>
    <br>
    <br>
    <h3>系统信息</h3>
    <table width="70%" class="table  table-bordered table-hover">
        <tr>
            <th>操作系统</th>
            <td><?php echo PHP_OS;?>
</td>
        </tr>
        <tr>
            <th>PHP版本</th>
            <td><?php echo PHP_VERSION;?>
</td>
        </tr>
        <tr>
            <th>运行方式</th>
            <td><?php echo PHP_SAPI;?>
</td>
        </tr>
    </table>
</center>

<?php echo '<script'; ?>
 src="<?php echo JS;?>
admin/jquery-1.8.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
