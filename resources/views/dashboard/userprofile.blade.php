@extends('layouts.app4')

@section('content')
@foreach ($user as $user)
<section class="back" style=" padding-top: 30px;">
    <div class="d-flex justify-content-center" style="height: 100px;">
        <img style=" height: 150px; width: 150px; z-index: 10;" class="rounded border border-dafault"
            src="{{asset('storage/images/users/'.$user->personalimage)}}" alt="">
    </div>
    <div class="d-flex justify-content-center" style="color: white;">
        <div class="col-7 border border-dafault" style=" padding-top: 100px; margin-bottom: 20px ; padding-bottom: 50px">
            <div class="table-responsive">
                <table class="table " style="color: white;">

                    <tbody>

                        <tr>
                            <th> <i class="fas fa-file-signature" style="font-size: 15px;"></i> First Name</th>
                            <td>
                                <div class="d-flex justify-content-between"><span>{{$user->fisrtname}}</span> <span
                                        style="text-right"><a class="btn btn-danger btn-sm" href="/sendnoti/<?=$user->id?>/<?=$code='Xcv0h6'?>">send
                                            notification</a></span></div>
                            </td>

                        </tr>
                        <tr>
                            <th> <i class="fas fa-file-signature" style="font-size: 15px;"></i> second Name</th>

                            <td>
                                <div class="d-flex justify-content-between"><span>{{$user->secondtname}}</span> <span
                                        style="text-right"><a class="btn btn-danger btn-sm" href="/sendnoti/<?=$user->id?>/<?=$code='Qwe5r6'?>">send
                                            notification</a></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-file-signature" style="font-size: 15px;"></i> last Name</th>

                            <td>
                                <div class="d-flex justify-content-between"><span>{{$user->thirdtname}}</span> <span
                                        style="text-right"><a class="btn btn-danger btn-sm" href="/sendnoti/<?=$user->id?>/<?=$code='As2d0'?>">send
                                            notification</a></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-file-signature" style="font-size: 15px;"></i> Mom name</th>

                            <td>
                                <div class="d-flex justify-content-between"><span>{{$user->momname}}</span> <span
                                        style="text-right"><a class="btn btn-danger btn-sm" href="/sendnoti/<?=$user->id?>/<?=$code='Fg3h7'?>">send
                                            notification</a></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-male" style="font-size: 20px;"></i> Gender</th>

                            <td>
                                {{$user->gender}}
                            </td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-file-medical" style="font-size: 15px;"></i> blood</th>

                            <td>
                                {{$user->blood}}
                            </td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-phone-square" style="font-size: 15px;"></i> Mobile</th>

                            <td>
                                <div class="d-flex justify-content-between"><span>{{$user->mobile}}</span> <span
                                        style="text-right"><a class="btn btn-danger btn-sm" href="/sendnoti/<?=$user->id?>/<?=$code='Iu5p6'?>">send
                                            notification</a></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-passport" style="font-size: 15px;"></i> Nationality</th>

                            <td>
                                <div class="d-flex justify-content-between"><span>{{$user->national}}</span> <span
                                        style="text-right"><a class="btn btn-danger btn-sm" href="/sendnoti/<?=$user->id?>/<?=$code='Vb66n'?>">send
                                            notification</a></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-passport" style="font-size: 15px;"></i> National ID</th>

                            <td>
                                <div class="d-flex justify-content-between"><span>{{$user->nationalid}}</span> <span
                                        style="text-right"><a class="btn btn-danger btn-sm" href="/sendnoti/<?=$user->id?>/<?=$code='Jk5l6'?>">send
                                            notification</a></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-envelope-open-text" style="font-size: 15px ;"></i> Email</th>

                            <td>
                                <div class="d-flex justify-content-between"><span>{{$user->email}}</span> <span
                                        style="text-right"><a class="btn btn-danger btn-sm" href="/sendnoti/<?=$user->id?>/<?=$code='K5ly9'?>">send
                                            notification</a></span></div>
                            </td>
                        </tr>

                    </tbody>


                </table>
            </div>

            @if ($user->status==0)
            <a style="width:100%" class="btn btn-success btn-sm" href="/updateuser/<?=$user->id?>/1" disabled="disabled">Active him </a>
            @endif
        </div>



    </div>

</section>
@endforeach

@endsection