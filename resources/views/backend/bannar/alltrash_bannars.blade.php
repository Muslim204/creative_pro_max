@extends ('layouts.backendapp')



@section('content')
<div class="card">
    <div class="card-header bg-dark">
        <h1 style="color:white;">All Trash Bannars</h1>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr>
                <th> Sl</th>
                <th> Bannar Name</th>
                <th> Bannar Image</th>
                <th> Bannar Created At</th>
                <th> Bannar Updated At</th>
                <th> Actions</th>
            </tr>
           @foreach($bannars as $key=>$bannar)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$bannar->bannar_name}}</td>
                <td>
                    <img  style="width:50px; height:50px;" src="{{asset('/storage/image/'.$bannar->bannar_image)}}" alt="">
                    {{$bannar->bannar_image}}</td>
                <td>{{$bannar->created_at}}</td>
                <td>{{$bannar->updated_at}}</td>
                <td>
                    <a href="{{route('restore.bannar', $bannar->id)}}" class="btn btn-small btn-primary text-light">Restore</a>
                    <form class="d-inline-block" action="{{route('parmanent.bannar.delete',$bannar->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-small btn-danger text-light">Delete</button>

                    </form>
                </td>
            </tr>
           @endforeach
       
        </table>
    </div>
    
</div>
@endsection
