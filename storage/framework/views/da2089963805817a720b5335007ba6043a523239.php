<?php $__env->startSection('content'); ?>



<div class="container">

    <div class=" d-flex justify-content-center " style="margin-bottom: 50px;">
        <h1 style="color: #219F45;"> Add New Theater <i class="fas fa-hand-point-down" style="font-size: 30px; "></i>
        </h1>
    </div>

    <div class=" d-flex justify-content-center ">
        <div class="col-md-8">
            <form  method="POST" action="/storetheater">
<?php echo csrf_field(); ?>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style=" float: left;">
                        <label for="name" class="col-sm-3 col-form-label">name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="float: right;">
                        <label for="address" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                    </div>

                </section>

                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style=" float: left;">
                        <label for="chairsno" class="col-sm-3 col-form-label">chairs number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="chairsno" name="chairsno">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="float: right;">
                        <label for="firstno" class="col-sm-3 col-form-label">1st no</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="firstno" name="firstno">
                        </div>
                    </div>

                </section>



                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="secondno" class="col-sm-3 col-form-label">2nd no</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="secondno" name="secondno">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="thirdno" class="col-sm-3 col-form-label">3rd no</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="thirdno" name="thirdno">
                        </div>
                    </div>

                </section>

                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="vipno" class="col-sm-3 col-form-label">vip no</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="vipno" name="vipno">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="vvipno" class="col-sm-3 col-form-label">vvip no</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="vvipno" name="vvipno">
                        </div>
                    </div>

                </section>




                <div class="form-group row d-flex justify-content-center " style="margin-top: 50px;">

                    <div class="col-sm-10 ">
                        <button name="addtheaterbtn" style="background-color: #219F45; color: white;" type="submit"
                            class="btn  btn-block">ADD</button>
                    </div>
                </div>
            </form>
        </div>
    </div>





</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\tazkartii\resources\views/dashboard/addtheater.blade.php ENDPATH**/ ?>