@if(session('message'))
    <div class="container-fluid" style="padding: 0 85px;">
        <div class="alert alert-{{session('alert-type')}} alert-dismissible fade show" role="alert">
            {{session('message')}}
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif
