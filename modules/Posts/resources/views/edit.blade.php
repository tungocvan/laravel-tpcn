
<h2>Edit {{$id}}</h2>
<textarea name="editor1" id="editor1" rows="10" cols="80">
    This is my textarea to be replaced with CKEditor 4.
</textarea>
<hr />
<div class="input-group">
  <span class="input-group-btn">
    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
      <i class="fa fa-picture-o"></i> Choose
    </a>
  </span>
  <input id="thumbnail" class="form-control" type="text" name="filepath">
</div>
<hr />
<div id="holder" style="margin-top:15px;max-height:100px;"></div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="/plugin/ckeditor/ckeditor.js"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
  // Replace the <textarea id="editor1"> with a CKEditor 4
  // instance, using default configuration.
  CKEDITOR.replace( 'editor1' );
  $('#lfm').filemanager('file');
</script>
