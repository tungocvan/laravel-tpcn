@php 
    $myAsset = asset('phoenix/assets'); 
    //$content = 'content';
@endphp
<main class="main">
    <div class="container-fluid px-0 " data-layout="container">
      @include("parts.phoenix.sidebar")
      @include("parts.phoenix.header")       
        <div class="content">
            <!--  content goes here-->

            @include("parts.phoenix.".$content)
        </div>  
    </div>
</main>