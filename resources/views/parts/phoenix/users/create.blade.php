@php 
    $myAsset = asset('phoenix/assets'); 
    //$title = ['user_login','user_pass','user_nicename','user_email','user_url','user_registered','user_activation_key','user_status','display_name'];
@endphp


<div class="container">
    <div class="row">
      <form method="POST" action="{{ route('user-add') }}" id="register-form">
        @csrf 
      <div class="mb-3">
        <label class="form-label" for="username">Username</label>
        <input class="form-control @error('username') is-invalid @enderror" id="username" type="text" name="username" value="{{ old('username') }}" placeholder="username...">        
        @error('username')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
       @enderror
      </div>      
      <div class="mb-3">
        <label class="form-label" for="email">Email address </label>
        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="name@example.com">   
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
       @enderror     
      </div>
      <div class="mb-3">
        <label class="form-label" for="firstname">Firstname</label>
        <input class="form-control @error('firstname') is-invalid @enderror" id="firstname" type="text" name="firstname" value="{{ old('firstname') }}" placeholder="firstname...">        
      </div>       
      <div class="mb-3">
        <label class="form-label" for="lastname">Lastname</label>
        <input class="form-control @error('lastname') is-invalid @enderror" id="lastname" type="text" name="lastname" value="{{ old('lastname') }}" placeholder="lastname...">        
      </div>       
      <div class="mb-3">
        <label class="form-label" for="website">Website</label>
        <input class="form-control @error('website') is-invalid @enderror" id="website" type="text" name="website" value="{{ old('website') }}" placeholder="website...">        
      </div>       
      <div class="mb-3">
        <label class="form-label" for="password">Password</label>
        <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" value="{{ old('password') }}" placeholder="password...">        
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
       @enderror 
      </div>     
      <div class="form-check">
        <input class="form-check-input" id="sendemail" name="sendemail" type="checkbox" value="{{ old('sendemail') }}" />
        <label class="form-check-label" for="sendemail">Send the new user an email about their account.</label>
      </div>        
      <div class="mb-3" for="role">
        <label class="form-label">Role</label>
        <select class="form-select" aria-label="Default select example" name="role" id="role">
          <option selected="customer">Customer</option>
          <option value="administrator">Administrator</option>
          <option value="customer">Customer</option>
          <option value="manager">Manager</option>
        </select>
      </div>
      <div class="mb-3">
        <input class="btn btn-primary me-1 mb-1" type="submit" name="addnew" value="Add new user" />
      </div>  
      </form>
    </div>
</div>    

