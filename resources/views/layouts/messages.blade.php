@if(Session::has('success'))
    <div class="alert alert-success alert-dismissable col-sm-8 col-sm-offset-2">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{Session::get('success')}}
    </div>
@endif
@if(count($errors) > 0)
    <div class="alert alert-danger alert-dismissable col-sm-8 col-sm-offset-2">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Errors: </strong>
        <ul>
        @foreach ($errors->all() as $error)
           <li> ❌ {{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif