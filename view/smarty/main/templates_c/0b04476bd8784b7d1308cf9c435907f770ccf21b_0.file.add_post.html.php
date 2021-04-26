<?php
/* Smarty version 3.1.39, created on 2021-04-19 10:12:44
  from 'C:\xampp\htdocs\toposiciones\view\smarty\main\templates\add_post.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607d3b7c627f98_77775479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b04476bd8784b7d1308cf9c435907f770ccf21b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toposiciones\\view\\smarty\\main\\templates\\add_post.html',
      1 => 1618817238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d3b7c627f98_77775479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_918278310607d3b7c621571_12858754', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_918278310607d3b7c621571_12858754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_918278310607d3b7c621571_12858754',
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
