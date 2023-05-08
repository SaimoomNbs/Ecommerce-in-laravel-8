@if(session('success'))
    <div class="alert alert-success alert-dismissable fade show text-center bg-success text-white rounded-0">
        <!-- <button class="close" data-dismiss="alert" aria-label="Close">×</button> -->
        {{session('success')}}
    </div>
@endif


@if(session('error'))
    <div class="alert alert-danger alert-dismissable fade show text-center bg-danger text-white rounded-0">
        <!-- <button class="close" data-dismiss="alert" aria-label="Close">×</button> -->
        {{session('error')}}
    </div>
@endif