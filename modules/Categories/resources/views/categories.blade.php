<h3>Categories Module</h3>
<!-- Select Option -->
<div class="mb-3">
<label class="form-label" for="selectOne">Select <span
   class="text-secondary">(Optional)</span></label>
   <select class="form-select" aria-label="Default select example">
     <option selected>Open this select menu</option>     
     @php
        echo getCategoriesOptions($category);
     @endphp
   </select>
</div>