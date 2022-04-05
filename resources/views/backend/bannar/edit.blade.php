@extends ('layouts.backendapp')


@section('content')

<div class="card w-50 m-auto">
    <div class="card-header">
        <h1 style="color:white; background-color:black" >Edit Bannar Items</h1>
    </div>
    <div class="card-body">
        <form action="{{route('bannar.update' , $oldbannar_data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf 
            @method('PUT')

            @error('bannar_name')
                <span class="text-danger">
                    {{$message}}
                </span>
            @enderror
            <input type="text" name="bannar_name" placeholder="Bannar Name" class="form-control mb-3" value="{{$oldbannar_data->bannar_name}}">
             @error('bannar_image')
                <span class="text-danger">
                    {{$message}}
                </span>
            @enderror
            <input type="file" name="bannar_image" class="form-control mb-3">
                <img width="150"  src="{{asset('storage/image/'. $oldbannar_data->bannar_image)}}" alt=""> </br>
                <button class="btn btn-large btn-primary my-3">Update</button>
        </form>
    </div>
</div>

@endsection

