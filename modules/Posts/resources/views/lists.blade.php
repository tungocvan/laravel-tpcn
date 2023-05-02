<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">post_title</th>
        <th scope="col">post_status</th>
        <th scope="col">post_type</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $item)
      <tr>
        <th scope="row">{{$item->ID}}</th>
        <td>{{$item->post_title}}</td>
        <td>{{$item->post_status}}</td>
        <td>{{$item->post_type}}</td>
      </tr> 
      @endforeach           
        
    </tbody>
  </table>
  <ul class="pagination">
    <li class="page-item">
      @if($currentPage > 1)
        <a class="page-link" href="/posts?page={{$currentPage -1 }}" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
      @else
       <a class="page-link" href="/posts?page=1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
       </a>
      @endif  
      
    </li>
    @for ($i = 0; $i < $lastPage; $i++)
        @if ($lastPage > 15)
            @if($i<5)
                <li class="page-item {{$currentPage === $i+1 ?'active':''}}"><a class="page-link" href="/posts?page={{$i+1}}">{{$i+1}}</a></li>            
            @endif 
            @if($i === 5)
            <li class="page-item"><a class="page-link" href="/posts?page={{$i+1}}">...</a></li>            
            @endif   
            @if($i > $lastPage-5)
                <li class="page-item {{$currentPage === $i+1 ?'active':''}}"><a class="page-link" href="/posts?page={{$i+1}}">{{$i+1}}</a></li>            
            @endif
        @else    
            <li class="page-item {{$currentPage === $i+1 ?'active':''}}"><a class="page-link" href="/posts?page={{$i+1}}">{{$i+1}}</a></li>
        @endif

        
    @endfor
    @if($currentPage < $lastPage)
        <li class="page-item">
            <a class="page-link" href="/posts?page={{$currentPage + 1 }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    @else
        <li class="page-item">
            <a class="page-link" href="/posts?page={{$lastPage}}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    @endif 
  </ul>