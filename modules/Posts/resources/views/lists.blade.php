<div class="container mt-2">
<div class="row">
  <table id="datatables" class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">post_title</th>
        <th scope="col">post_status</th>
        <th scope="col">post_type</th>
        <th scope="col"></th>
        <th scope="col"></th>
        
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">post_title</th>
        <th scope="col">post_status</th>
        <th scope="col">post_type</th>
        <th scope="col"></th>
        <th scope="col"></th>        
      </tr>
    </tfoot>
  </table>
</div>
</div>
  
@section('scripts')
 {{-- https://datatables.net/examples/server_side/row_details.html --}}
 {{-- https://yajrabox.com/docs/laravel-datatables/master/edit-column --}}
  <script>
    $(document).ready(function () {
        $('#datatables').DataTable({
            processing: true,
            serverSide: true,
            search: {
              return: true,
            },
            ajax: "{{route('posts.data')}}",
            "columns" : [
              {"data":"ID"},
              {"data":"post_title"},
              {"data":"post_status"},
              {"data":"post_type"},
              {"data":"edit"},
              {"data":"delete"},
            ],
        });
    });
  </script>
@endsection

  