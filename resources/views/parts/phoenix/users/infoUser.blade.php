@php 
    $myAsset = asset('phoenix/assets'); 
    //$title = ['user_login','user_pass','user_nicename','user_email','user_url','user_registered','user_activation_key','user_status','display_name'];
@endphp


<div class="container">
    <div class="row">
        <div class="card mb-3">
            <div class="card-body">
              <div class="row align-items-center g-3 text-center text-xxl-start">
                <div class="col-12 col-xxl-auto">
                  <div class="avatar avatar-5xl"><img class="rounded-circle" src="{{$myAsset}}/img/team/30.webp" alt=""></div>
                </div>
                <div class="col-12 col-sm-auto flex-1">
                  <h3 class="fw-bolder mb-2">{{ $user['user_nicename'] }}</h3>
                  <p class="mb-0">Chief tech officer,</p><a class="fw-bold" href="#!">Blue Beetles</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <div class="d-flex align-items-center mb-5">
                <h3>About lead</h3><button class="btn btn-link px-3" type="button">Edit</button>
              </div>
              <div class="mb-4">
                <div class="d-flex align-items-center mb-1">
                
                  <h5 class="text-1000 mb-0">Email</h5>
                </div><a href="mailto:{{ $user['user_email'] }}:">{{ $user['user_email'] }}</a>
              </div>
              
              
            </div>
          </div>
    </div>
</div>    
