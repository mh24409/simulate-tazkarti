@extends('layouts.app4')

@section('content')



<div class="conatiner">
    <div class=" d-flex justify-content-center " style="margin-bottom: 50px;">
        <h1 style="color: #219F45;"> List Of All Events <i class="fas fa-hand-point-down" style="font-size: 30px; "></i>
        </h1>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Type</th>
                <th scope="col">Desc</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Info</th>

            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            @foreach ($events as $event)
            <tr>
                <th scope="row"><?= $i ?></th>
                <td>{{$event->type}}</td>
                <td>{{$event->disc}}</td>
                <td>{{$event->date}}</td>
                <td>{{$event->time}}</td>
                <?php $true=1 ; $false=0 ?>
                    @if ($event->status==1)
                    <td><a href="/updateevent/{{$event->id}}/{{$false}}" class="btn btn-danger">Inactive</a></td>
                    @else
                    <td><a href="/updateevent/{{$event->id}}/{{$true}}" class="btn" style="background-color: green; color: white;width: 80px">Active</a></td>
    
                    @endif
                    <?php $i++ ?>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $events->links() }}
    </div>







</div>

@endsection