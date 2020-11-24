@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-8 " style="margin-top: 50px">
            <form method="POST" action="/updateinfo" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="codeinput" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                        <input type="text" name="code" alt="" class="form-control" id="codeinput">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="input" class="col-sm-2 col-form-label">new data</label>
                    <div class="col-sm-10">
                        <input type="text" name="newdata" alt="" class="form-control" id="input">
                    </div>
                </div>
        
                <?php $n =Auth::user()->id?>
                <input type="hidden" name="userid" value="<?=$n?>">
        
                <button type="submit" style="background-color: #219F45;color: white;margin-top: 50px" class="btn  col-12">send</button>
                  
        
            </form>
        </div>
    </div>
</div>



@endsection
