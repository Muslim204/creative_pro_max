@extends('layouts.backendapp')

@section('content')

<div class="card ">
    <div class="card-header">
        <h1>All your seminar are here</h1>
    </div>
    <div class="card-body">
       <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach($seminars as $key=>$seminar)
                    <li class="nav-item" role="presentation">
                    <button class="nav-link {{$key == 0 ? 'active': ''}}" id="home-tab" data-bs-toggle="tab" data-bs-target="#seminar{{$key}}" type="button" role="tab" aria-controls="home" aria-selected="true">{{$seminar->topic}}</button>
                </li>
                @endforeach
               
            
        </ul>
                <div class="tab-content" id="myTabContent">
                    @foreach($seminars as $index=>$seminar)
                         <div class="tab-pane fade  {{$index == 0 ? 'show active' : ''}}" id="seminar{{$index}}" role="tabpanel" aria-labelledby="home-tab">
                                <table class=" table table-responsive w-100 mt-5">
                                    <tr>
                                            <th>Sl</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Number</th>
                                    </tr>
                                       @foreach($seminar->leads as $key=>$lead)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$lead->name}}</td>
                                                <td>{{$lead->email}}</td>
                                                <td>{{$lead->number}}</td>
                                            </tr>
                                        @endforeach
                              
                                    
                                </table>
                         </div>
                        
                    @endforeach
        
                    
                  
                </div>
              
             
    
    </div>
</div>

@endsection