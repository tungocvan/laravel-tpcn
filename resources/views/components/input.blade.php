@php
     $myAsset = asset('freshcart');   
     $name = $options['name'] ?? 'name';
     $title = $options['title'] ?? '' ;
     $placeholder = $options['placeholder'] ?? $title ;
     $type = $options['type'] ?? 'text';   
     $value = $options['value'] ?? 'submit'; 
     $selectArray =$options['select'] ?? [['value' => '1','title' => 'One'],['value' => '2','title' => 'Two']];
     $selected = $options['selected'] ?? 'Open this select menu';
     $checked = $options['checked'] ?? '';
     $disabled = $options['disabled'] ?? '';
     $valueInput = $options['value'] ?? '';
     $number = (string) rand(100,999);
     $switch = $options['switch'] ?? '';
     $multiple = $options['multiple'] ?? '';
@endphp
<div class="mb-2" style="padding: 5px">
    @switch($type)
        @case('submit')
            <input class="btn btn-primary me-1 mb-1" type="submit" name="{{ $name }}" value="{{$value}}" />   
            @break
        @case('date')             
            <label class="form-label">Date</label>
            <input type="text" name="{{ $name }}" class="form-control flatpickr flatpickr-input" placeholder="{{ $options['placeholder'] ?? 'Select Date' }}" readonly="readonly" />
            @break
        @case('file')
        <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
              </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="filepath">
          </div>
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
            @break
        @case('checkbox')
            <div class="form-check {{ $switch ? 'form-switch':'' }}">
            <input class="form-check-input" type="{{$type}}"  id="{{ $name }}" name="{{ $name }}" {{ $checked?'checked':'' }} {{ $disabled?'disabled':'' }}   />
            <label class="form-check-label" for="{{ $name }}">
                {{ $title }}
            </label>
            </div>
            @break
        @case('radio')                        
            <div class="form-check">
                <input class="form-check-input" type="{{$type}}" name="{{ $name }}" id="{{ $name. $number  }}" {{ $checked?'checked':'' }} {{ $disabled?'disabled':'' }}  value="{{ $valueInput }}">
                <label class="form-check-label" for="{{ $name. $number  }}">
                    {{ $title }}
                </label>
            </div>
            @break
        @case('select')            
            @if ($title !=='')
                 <label class="form-label" for="{{ $name }}">{{ $title }}</label>
            @endif
            <select class="form-select" aria-label="Default select" name="{{ $name }}[]" {{ $multiple?'multiple':'' }} >
                @if ($selected =='Open this select menu')
                    <option selected>Open this select menu</option>
                @endif
              @foreach ($selectArray as $item)
                <option {{ $item['value'] ==  $selected?'selected':'' }} value="{{$item['value']}}">{{$item['title']}}</option>
              @endforeach
            </select>
            @break       
            @default
            @if ($title !=='')
                 <label class="form-label" for="{{ $name }}">{{ $title }}</label>
            @endif            
            <input class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" type="{{$type}}" name="{{ $name }}" value="{{ old($name) }}" placeholder="{{ $placeholder }}">        
            @error($name)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror    
            @break
    @endswitch
      
</div>  
@section('js') 
    <script src="{{ $myAsset.'/libs/jquery/dist/jquery.min.js' }} "></script>
    <script src="{{ $myAsset.'/libs/flatpickr/dist/flatpickr.min.js' }} "></script>
    <script src="{{ $myAsset.'/libs/inputmask/dist/jquery.inputmask.min.js' }} "></script>
    <script src="{{ $myAsset.'/js/theme.min.js' }} "></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
@endsection