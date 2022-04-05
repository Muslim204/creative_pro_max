@extends ('layouts.backendapp')



@section('content')
<div class="card">
    <div class="card-header bg-dark">
        <h1 style="color:white;">Your all posted bannars are being shown below.</h1>
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

            @forelse($bannars as $key=>$bannar)
                <tr>
                    <td>{{++$key}}</td>
                    <td> {{$bannar->bannar_name}} </td>
                    <td>
                        <img width="50" height="50" src="{{asset('storage/image/'. $bannar->bannar_image)}}" alt="{{$bannar->bannar_image}}">
                        {{$bannar->bannar_image}}</td>
                    <td> {{$bannar->created_at}}</td>
                    <td> {{$bannar->updated_at}} </td>
                    <td>
                        <a class="btn btn small btn-primary text-light " href="{{route('bannar.edit',$bannar->id)}}">Edit</a>
                          <button class=" delete_button btn btn-danger btn-small ">Delete</button>
                         <form class="d-inline-block" action="{{route('bannar.destroy' , $bannar->id)}}" method="POST">
                             @csrf 
                             @method('DELETE')
                           
                         </form>
                        <a class="btn btn small btn-primary text-light " href="#">Status</a>
                    </td>
                 </tr>
            @empty

            @endforelse
        </table>
        <span>
            {{$bannars->links()}} 
        </span>
    </div>
    
</div>
@endsection

@section('sweet_alert')

<script>  
$('.delete_button').click(function(){
Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $(this).next().submit();
  }
})
});

</script>

@endsection