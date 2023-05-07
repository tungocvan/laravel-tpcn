<textarea name={{ $options['name'] ?? 'editor1'}}  id={{ $options['id'] ?? 'editor1'}} rows={{ $options['rows'] ?? 10 }} cols={{ $options['cols'] ?? 80 }}>
    {{ $options['content'] ?? 'Ckeditor'}}
</textarea>
<script src="/plugin/ckeditor/ckeditor.js"></script>
<script>
  // Replace the <textarea id="editor1"> with a CKEditor 4
  // instance, using default configuration.
  CKEDITOR.replace( {{ $options['id'] ?? 'editor1' }} );
</script>