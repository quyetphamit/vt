@if(Session::has('flash_level'))
    <div class="{!! Session::get('flash_level') !!}">
        <strong>{!! Session::get('flash_message') !!}!</strong>
    </div>
@endif