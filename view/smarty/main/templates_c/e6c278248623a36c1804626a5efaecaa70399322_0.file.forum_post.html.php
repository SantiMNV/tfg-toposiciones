<?php
/* Smarty version 3.1.39, created on 2021-06-12 18:10:11
  from '/srv/http/toposiciones/view/smarty/main/templates/forum_post.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c4f883c638c8_53639227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6c278248623a36c1804626a5efaecaa70399322' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/forum_post.html',
      1 => 1623521366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c4f883c638c8_53639227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135224835260c4f883c42fd2_79864029', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_135224835260c4f883c42fd2_79864029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_135224835260c4f883c42fd2_79864029',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/http/toposiciones/view/smarty_lib/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>
<div id="forum-body">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
  <div class="col-md-12 card">
    <div class="card-body col-md-12">
      <div>
        <div><?php echo $_smarty_tpl->tpl_vars['p']->value['user_name'];?>
 | <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['p']->value['created_at'],"%e/%m/%G");?>
</div>
        <?php if ((isset($_SESSION['login_user']))) {?>
        <?php if (($_SESSION['login_access_level'] >= 8)) {?>
        <div class="float-right">
          <form action="/toposiciones/foro/post/<?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
" method="POST">
            <input type="hidden" name="remove-request" value="post">
            <input type="hidden" name="remove-post" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
">
            <button type="submit" class="btn btn-light">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </form>
        </div>
        <?php }?>
        <?php }?>
      </div>
      <h3><?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
</h3>
      <div><?php echo $_smarty_tpl->tpl_vars['p']->value['content'];?>
</div>
    </div>
  </div>
  <br>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
  <div class="col-md-12 card">
    <div class="card-body col-md-12">
      <div>
        <div><?php echo $_smarty_tpl->tpl_vars['message']->value['user_name'];?>
 | <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['message']->value['created_at'],"%e/%m/%G");?>
 </div>
        <?php if ((isset($_SESSION['login_user']))) {?>
        <?php if (($_SESSION['login_access_level'] >= 8)) {?>
        <div class="float-right">
          <form action="/toposiciones/foro/post/<?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
" method="POST">
            <input type="hidden" name="remove-request" value="message">
            <input type="hidden" name="remove-message" value="<?php echo $_smarty_tpl->tpl_vars['message']->value['messageId'];?>
">
            <button type="submit" class="btn btn-light">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </form>
        </div>
        <?php }?>
        <?php }?>
      </div>
      <div><?php echo $_smarty_tpl->tpl_vars['message']->value['content'];?>
</div>
    </div>
  </div>
  <br>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php if ((isset($_SESSION['login_user']))) {?>
  <?php echo '<script'; ?>
 src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"><?php echo '</script'; ?>
>
  <form action="/toposiciones/foro/post/<?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
" method="POST">
    <input type="hidden" name="message-request" value="message">
    <input type="hidden" name="input-message-post" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
">
    <div class="form-group">
      <textarea name="input-message-content" id="input-message-content" placeholder="A??ade un comentario"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  <?php echo '<script'; ?>
>
    ClassicEditor.defaultConfig = {
      toolbar: {
        items: [
          'heading',
          '|',
          'bold',
          'italic',
          '|',
          'bulletedList',
          'numberedList',
          '|',
          'undo',
          'redo'
        ]
      },
      image: {
        toolbar: [
          'imageStyle:full',
          'imageStyle:side',
          '|',
          'imageTextAlternative'
        ]
      },
      table: {
        contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
      },
      language: 'es',
    };
    ClassicEditor
      .create(document.querySelector('#input-message-content'))
      .catch(error => {
        console.error(error);
      });

  <?php echo '</script'; ?>
>
  <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php
}
}
/* {/block "body-content"} */
}
