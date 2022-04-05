@extends ('layouts.frontendapp')


@section('content')
 <!--============== Banner Part Goes Here ================-->
    @forelse($allbannars as $bannar)
            <section id="banner">
        <div class="slider-main">

                            <div class="slider-item">
                                <img src="" alt="">
                    <img style="height:400px" src="{{asset('/storage/image/'.$bannar->bannar_image)}}" alt="{{asset($bannar->bannar_image)}}" class="w-100">
                </div>
          
                    </div>
    </section>
    <!--============== Seminar Part Goes Here ================-->
    @empty
    @endforelse
    <section id="seminar" class="mt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="card border-0">
                        <div class="card-header text-center">
                            Upcoming Seminar Schedule
                        </div>
                        <div class="card-body text-center">
                            <div class="table-responsive seminar-table seminar-modal">
                                <table class="table table-striped mt-3 table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Topic</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $allseminars as $seminar )
                                        <tr>
                                                <td>{{$seminar->topic}}</td>
                                                <td>{{$seminar->date}}</td>
                                                <td>{{$seminar->time}}</td>
                                                <td>
                                                    <a href="{{route('seminar.join')}}"
                                                        class="btn-sm">Join</a>
                                                </td>
                                        </tr>
                                        @endforeach
                                  
                                                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection