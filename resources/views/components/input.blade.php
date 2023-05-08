@php
     $name = $options['name'];
     $title = $options['title'] ?? '' ;
@endphp
<div class="mb-3">
    @if ($title !=='')
        <label class="form-label" for="{{ $name }}">{{ $title }}</label>
    @endif
    
    <input class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" type="{{$options['type'] ?? 'text'}}" name="{{ $name }}" value="{{ old($name) }}" placeholder="{{ $name }}...">        
    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
   @enderror  
</div>  
