@extends('layouts.app4')

@section('content')




<div class="conatiner">
    <div class=" d-flex justify-content-center " style="margin-bottom: 50px;">
        <h1 style="color: #219F45;"> List Of All Users <i class="fas fa-hand-point-down" style="font-size: 30px; "></i>
        </h1>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th class="d-none d-xl-block d-lg-block d-md-block" scope="col">Email</th>
                <th scope="col">Nation Id</th>
                <th scope="col">Mobile</th>
                <th scope="col">Info</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">1</th>
                <td>{{$user->fisrtname}}</td>
                <td>{{$user->thirdtname}}</td>
                <td class="d-none d-xl-block d-lg-block d-md-block">{{$user->email}}</td>
                <td>{{$user->nationalid}}</td>
                <td>{{$user->mobile}}</td>
                <td><a href="/userprofile/<?=$user->id?>" type="button" class="btn btn-light">more</a>
                </td>
            </tr>
            @endforeach
            

        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $users->links() }}
    </div>







</div>

@endsection