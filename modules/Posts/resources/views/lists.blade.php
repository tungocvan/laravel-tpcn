<table id="datatables" class="table table-bordered">
    <tfoot>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">post_title</th>
        <th scope="col">post_status</th>
        <th scope="col">post_type</th>
      </tr>
    </tfoot>
    
  </table>
@section('scripts')
  <script>
    $(document).ready(function () {
        $('#datatables').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('posts.data')}}",
            "columns" : [
              {"data":"ID"},
              {"data":"post_title"},
              {"data":"post_status"},
              {"data":"post_type"},
            ],
        });
    });
  </script>
@endsection

  