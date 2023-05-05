@php 
    $myAsset = asset('phoenix/assets');     
    if(!$content) {
      $content ='content';
    }
@endphp
<main class="main">
    <div class="container-fluid px-0 " data-layout="container">
      @include("Admin::parts.phoenix.sidebar")
      @include("Admin::parts.phoenix.header")       
        <div class="content">
            <!--  content goes here-->
            @include("Admin::parts.phoenix.".$content)
        </div>  
    </div>
</main>