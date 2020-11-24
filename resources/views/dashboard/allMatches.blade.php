@extends('layouts.app4')

@section('content')



<div class="conatiner">
    <div class=" d-flex justify-content-center " style="margin-bottom: 50px;">
        <h1 style="color: #219F45;"> List Of All Matches <i class="fas fa-hand-point-down" style="font-size: 30px; "></i>
        </h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Home Team</th>
                    <th scope="col">Away Team</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Info</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                @foreach ($matches as $match)
                <tr>
                    <th scope="row"><?= $i?></th>
                    <td>{{$match->homeTeam}}</td>
                    <td>{{$match->awayTeam}}</td>
                    <td>{{$match->date}}</td>
                    <td>{{$match->time}}</td>
                    <?php $true=1 ; $false=0 ?>
                    @if ($match->status==1)
                    <td><a href="/updatematch/{{$match->id}}/{{$false}}" class="btn btn-danger">Inactive</a></td>
                    @else
                    <td><a href="/updatematch/{{$match->id}}/{{$true}}" class="btn" style="background-color: green; color: white;width: 80px">Active</a></td>
    
                    @endif
    
                    
                </tr>
                <?php $i++ ?>
                @endforeach
                
                
            </tbody>
        </table>
    </div>
    

    <div class="d-flex justify-content-center">
        {{ $matches->links() }}
    </div>







</div>

@endsection