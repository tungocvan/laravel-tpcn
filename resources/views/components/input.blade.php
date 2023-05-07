<div class="mb-3">
    <label class="form-label" for="username">Username</label>
    <input class="form-control @error('username') is-invalid @enderror" id="username" type="text" name="username" value="{{ old('username') }}" placeholder="username...">        
    @error('username')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
   @enderror
</div>