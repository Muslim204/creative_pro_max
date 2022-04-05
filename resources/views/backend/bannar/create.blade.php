@extends ('layouts.backendapp')


@section('content')

<div class="card w-50 m-auto">
    <div class="card-header">
        <h1 style="color:white; background-color:black" >Add Bannar Items</h1>
    </div>
    <div class="card-body">
        <form action="{{route('bannar.store')}}" method="POST" enctype="multipart/form-data">
            @csrf 

            @error('bannar_name')
                <span class="text-danger">
                    {{$message}}
                </span>
            @enderror
            <input type="text" name="bannar_name" placeholder="Bannar Name" class="form-control mb-3">
             @error('bannar_image')
                <span class="text-danger">
                    {{$message}}
                </span>
            @enderror
            <input type="file" name="bannar_image" class="form-control mb-3">
            <button class="btn btn-large btn-primary">Add Bannar</button>
        </form>
    </div>
</div>

@endsection

