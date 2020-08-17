<div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
        @foreach ($subcategories as $subcat)
          <a href="#" class="list-group-item filter" data-id="{{$subcat->id}}">{{$subcat->name}}</a> 
        @endforeach         
        </div>

</div>