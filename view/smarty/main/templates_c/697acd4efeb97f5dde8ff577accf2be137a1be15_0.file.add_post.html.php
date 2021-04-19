<?php
/* Smarty version 3.1.39, created on 2021-04-18 10:38:14
  from '/srv/http/toposiciones/view/smarty/main/templates/add_post.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607c0c16dc1732_56171964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '697acd4efeb97f5dde8ff577accf2be137a1be15' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/add_post.html',
      1 => 1618742293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607c0c16dc1732_56171964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1818353730607c0c16dbcd28_69324563', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_1818353730607c0c16dbcd28_69324563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_1818353730607c0c16dbcd28_69324563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"><?php echo '</script'; ?>
>
<div class="page-header">
  <h2><?php echo $_smarty_tpl->tpl_vars['page']->value->pageTitle;?>
</h2>
</div>
<form action="/toposiciones/crear-post/" method="POST">
  <div class="form-group">
    <label for="input-post-title">Título</label>
    <input type="text" class="form-control" id="input-post-title" name="input-post-title" maxlength="250">
    <small id="titleHelp" class="form-text text-muted">Máximo 250 caracteres.</small>
  </div>
  <div class="form-group">
    <label for="input-post-content">Contenido</label>
    <div class="ck-input-post-content">
      <textarea name="input-post-content" id="input-post-content"></textarea>
    </div>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Publicar</button>
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
    .create(document.querySelector('#input-post-content'))
    .catch(error => {
      console.error(error);
    });
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body-content"} */
}
