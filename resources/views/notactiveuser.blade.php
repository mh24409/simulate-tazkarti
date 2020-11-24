@extends('layouts.app2')

@section('content')


<div class="container" style="margin-top: 50px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center r" >Warnning Message</div>

                <div class="card-body ">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="text-center" style="letter-spacing: 1px;">
                        Sorry, but your request to have FAN ID has not been approved yet
<br> <br> <br>
                        your data is now being reviewed and approval will soon be sent to you

                    </div>
                    <br> 
                    <br><br>

                    <div class="text-right">good luck</div>
                    <div class="text-right" style="color: green;">Tazkarti</div>


                </div>
            </div>
        </div>
    </div>
</div>

</section>

@endsection