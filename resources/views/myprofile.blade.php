@extends('layouts.app2')

@section('content')
@foreach ($user as $user)
<section class="back" style=" padding-top: 30px;">
    <div class="d-flex justify-content-center" style="height: 100px;">
        <img style=" height: 150px; width: 150px; z-index: 10;" class="rounded border border-dafault"
            src="{{asset('storage/images/users/'.$user->personalimage)}}" alt="">
    </div>
    <div class="d-flex justify-content-center" style="color: white;">
        <div class="col-7 border border-dafault" style=" padding-top: 100px;">
            <div class="table-responsive">
                <table class="table " style="color: white;">
                    
                    <tbody>

                        <tr>
                            <th> <i class="fas fa-file-signature" style="font-size: 15px;"></i> First Name</th>
                            <td>{{$user->fisrtname}}</td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-file-signature" style="font-size: 15px;"></i> second Name</th>
                            <td>{{$user->secondtname}}</td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-file-signature" style="font-size: 15px;"></i> last Name</th>
                            <td>{{$user->thirdtname}}</td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-file-signature" style="font-size: 15px;"></i> Mom name</th>
                            <td>{{$user->momname}}</td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-male" style="font-size: 20px;"></i> Gender</th>
                            <td>{{$user->gender}}</td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-file-medical" style="font-size: 15px;"></i> blood</th>
                            <td>{{$user->blood}}</td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-phone-square" style="font-size: 15px;"></i> Mobile</th>
                            <td>{{$user->mobile}}</td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-passport" style="font-size: 15px;"></i> Nationality</th>
                            <td>{{$user->national}}</td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-passport" style="font-size: 15px;"></i> National ID</th>
                            <td>{{$user->nationalid}}</td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-envelope-open-text" style="font-size: 15px;"></i> Email</th>
                            <td>{{$user->email}}</td>
                        </tr>
                    </tbody>
                    
                    
                </table>
            </div>


        </div>



    </div>

</section>
@endforeach

@endsection