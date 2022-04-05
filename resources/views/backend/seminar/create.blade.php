@extends ('layouts.backendapp')


@section('content')

<div class="card w-50 m-auto">
    <div class="card-header">
        <h1 style="color:white; background-color:black" >Add Seminar Items</h1>
    </div>
    <div class="card-body">
        <form action="{{route('seminar.store')}}" method="POST" enctype="multipart/form-data">
            @csrf 
               @error('topic')
                <span class="text-danger">
                    {{$message}}
                </span>
            @enderror
            <input type="text" placeholder="Topic" name="topic" class="form-control">
               @error('date')
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
            <input type="date" placeholder="--/--/----/" name="date" class="form-control">
             @error('time')
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
            <input type="time" placeholder="time" name="time" class="form-control">
            <button type="submit" class="btn btn-large btn-primary">Add Seminar</button>
        </form>
    </div>
</div>

@endsection

