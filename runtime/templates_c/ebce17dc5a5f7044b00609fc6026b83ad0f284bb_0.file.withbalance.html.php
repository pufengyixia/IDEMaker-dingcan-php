<?php
/* Smarty version 3.1.30, created on 2017-11-29 17:00:03
  from "D:\phpStudy\WWW\OAM\views\admin\shopc\withbalance.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e7713cd1ae9_23402242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebce17dc5a5f7044b00609fc6026b83ad0f284bb' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\admin\\shopc\\withbalance.html',
      1 => 1511181053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e7713cd1ae9_23402242 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel=stylesheet href="<?php echo CSS;?>
adminmer/reset.css">
    <link rel=stylesheet href="<?php echo CSS;?>
adminmer/bootstrap-admin.css">
    <link rel="stylesheet" href="<?php echo CSS;?>
adminmer/backstage.css">
    <link rel="stylesheet" href="<?php echo CSS;?>
public/page.css">
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>pageurl="?m=admin&c=Shopc&a=withBalance";<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/page.js"><?php echo '</script'; ?>
>
</head>
<body>
<span class="main-title">提现申请</span>
<div class="details_operation clearfix">

    <div class="fl">
    </div>

    <div class="fr">
        <div class="text">

                <span>
                                <input type="text" value="" placeholder="搜索商户账户/店铺id" class="search form-control" name="search">
                                </span>
            <span>
                    <input type="button" value="搜索" id="search" class="btn btn-primary">
                </span>
        </div>
    </div>
</div>
<div id="show">
<table  class="table  table-hover" cellspacing="0" cellpadding="0">
    <thead>
    <tr>
        <th width="10%">提现账户</th>
        <th width="10%">提现商户</th>
        <th width="10%">店铺ID</th>
        <th width="10%">提现金额</th>
        <th width="10%">提现后余额</th>
        <th width="10%">提现状态</th>
        <th width="10%">提现时间</th>
        <th width="10%">操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if ($_smarty_tpl->tpl_vars['data']->value != 0) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
    <tr align="center">
        <td style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['withAccount'];?>
</td>
        <td style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['adminName'];?>
</td>
        <td style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['shopId'];?>
</td>
        <td> <b><font color="red" style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['balance'];?>
</font></b></td>
        <td><b><font color="red" style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['withBalance'];?>
</font></b></td>
        <?php if ($_smarty_tpl->tpl_vars['val']->value['status'] == 1) {?>
        <td>已审核</td>
        <?php } else { ?>
        <td>待审核</td>
        <?php }?>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['createTime'];?>
</td>
        <td><a href="javascript:;" onclick="yesco(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['balance'];?>
)">审核</a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </tbody>

</table>
    <p align="center">
        <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

    </p>
    <p align="center">
        共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条数据
    </p>
    <?php }?>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    function yesco(id,balance)
    {
          $.ajax({
              type:"post",
              data:{
                  id:id,
                  balance:balance
              },
              url:"?m=admin&c=Shopc&a=withBalance",
              success:function(res){
                if(res==0)
                {
                    alert("该账户余额参数错误");
                }else{
                    window.location.href='?m=admin&c=Shopc&a=withBalance';
                }
              }
          })
    }
<?php echo '</script'; ?>
><?php }
}
