<?php
/* Smarty version 3.1.39, created on 2021-06-14 17:51:46
  from '/srv/http/toposiciones/view/smarty/main/templates/theme_add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c79732e39283_12053132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '515ad89151e8c93cc994fd2adcca2846482aa4ec' => 
    array (
      0 => '/srv/http/toposiciones/view/smarty/main/templates/theme_add.html',
      1 => 1623693100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c79732e39283_12053132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166105895960c79732e36be0_05653801', "body-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/main_layout.html');
}
/* {block "body-content"} */
class Block_166105895960c79732e36be0_05653801 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body-content' => 
  array (
    0 => 'Block_166105895960c79732e36be0_05653801',
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
<form action="/toposiciones/temas/crear/" method="POST">
  <div class="form-group">
    <label for="input-theme-name">Título</label>
    <input type="text" class="form-control" id="input-theme-name" name="input-theme-name" maxlength="250" />
    <small id="emailHelp" class="form-text text-muted">Máximo 250 caracteres.</small>
  </div>
  <div class="form-group">
    <label for="input-theme-category">Categoría</label><br />
    <select id="inputSearchCategory" class="form-control form-control-md" name="input-theme-category"></select>
  </div>

  <div class="form-group">
    <label for="input-theme-content">Contenido</label>
    <div class="ck-input-theme-content">
      <textarea name="input-theme-content" id="input-theme-content"></textarea>
    </div>
  </div>
  <br />
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<?php echo '<script'; ?>
>
  window.onload = function () {
    searchExactCategoryJSON();
  };
  ClassicEditor.defaultConfig = {
    toolbar: {
      items: [
        "heading",
        "|",
        "bold",
        "italic",
        "|",
        //"uploadImage",
        //"|",
        "bulletedList",
        "numberedList",
        "|",
        "undo",
        "redo",
      ],
    },
    image: {
      toolbar: [
        "imageStyle:full",
        "imageStyle:side",
        "|",
        "imageTextAlternative",
      ],
    },
    table: {
      contentToolbar: ["tableColumn", "tableRow", "mergeTableCells"],
    },
    language: "es",
  };
  ClassicEditor.create(document.querySelector("#input-theme-content")).catch(
    (error) => {
      console.error(error);
    }
  );
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body-content"} */
}
