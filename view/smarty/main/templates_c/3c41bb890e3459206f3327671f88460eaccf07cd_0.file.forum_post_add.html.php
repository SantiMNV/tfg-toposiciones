<?php
/* Smarty version 3.1.39, created on 2021-06-10 17:12:38
  from '/srv/http/toposiciones/view/smarty/main/templates/forum_post_add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c248061235f1_62812721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c41bb890e3459206f3327671f88460eaccf07cd' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/forum_post_add.html',
      1 => 1623345146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c248061235f1_62812721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11207197260c2480611ea16_50909163', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_11207197260c2480611ea16_50909163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_11207197260c2480611ea16_50909163',
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
<form action="/toposiciones/foro/crear-post/" method="POST">
  <div class="form-group">
    <label for="input-post-title" maxlength="250">Título</label>
    <input type="text" class="form-control" id="input-post-title" name="input-post-title" maxlength="80">
    <small id="titleHelp" class="form-text text-muted">Máximo 80 caracteres.</small>
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
