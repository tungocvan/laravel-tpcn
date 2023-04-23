@php 
    $myAsset = asset('phoenix/assets'); 
    //$title = ['user_login','user_pass','user_nicename','user_email','user_url','user_registered','user_activation_key','user_status','display_name'];
@endphp

<div class="table-responsive table-reponsive-sm scrollbar w-100">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">user_login</th>          
          <th scope="col">user_nicename</th>
          <th scope="col">user_email</th>          
          <th scope="col">user_status</th>          
          <th scope="col">display_name</th>          
          <th scope="col">user_registered</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)            
              <tr>
                <th scope="row">{{ $user->ID }}</th>                
                <td>{{ $user->user_login }}</td>
                <td>{{ $user->user_nicename }}</td>
                <td>{{ $user->user_email }}</td>
                <td>{{ $user->user_status }}</td>
                <td>{{ $user->display_name }}</td>
                <td>{{ $user->user_registered }}</td>
                <td>
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="/home-phoenix/user/{{$user->ID}}">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>
