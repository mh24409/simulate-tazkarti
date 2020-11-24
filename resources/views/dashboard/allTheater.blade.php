@extends('layouts.app4')

@section('content')



<div class="conatiner">
    <div class=" d-flex justify-content-center " style="margin-bottom: 50px;">
        <h1 style="color: #219F45;"> List Of All Theater <i class="fas fa-hand-point-down" style="font-size: 30px; "></i>
        </h1>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Chairs No</th>
                <th scope="col">Info</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            @foreach ($theaters as $theater)
            
            <tr>
            <th scope="row"><?= $i ?></th>
                <td>{{$theater->name}}</td>
                <td>{{$theater->address}}</td>
                <td>{{$theater->chairsno}}</td>
                <td><button type="button" class="btn btn-light">more</button></td>
            </tr>
            <?php $i++ ?>
            @endforeach
           
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $theaters->links() }}
    </div>







</div>

@endsection