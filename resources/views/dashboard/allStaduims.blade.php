@extends('layouts.app4')

@section('content')



<div class="conatiner">
    <div class=" d-flex justify-content-center " style="margin-bottom: 50px;">
        <h1 style="color: #219F45;"> List Of All Staduims <i class="fas fa-hand-point-down" style="font-size: 30px; "></i>
        </h1>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Chairs Number</th>
                <th>Info</th>
            </tr>
        </thead>
        <tbody id="intial_table">
            <?php $i = 1 ?>
            @foreach ($staduims as $staduim)
            <tr >
                <th > <?= $i ?></th>
                <td>{{$staduim->name}}</td>
                <td>{{$staduim->address}}</td>
                <td>{{$staduim->noOfChairs}}</td>
                <td><button type="button" class="btn btn-light">more</button></td>

            </tr><?php $i++ ?>
            @endforeach

        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $staduims->links() }}
    </div>

</div>

@endsection




