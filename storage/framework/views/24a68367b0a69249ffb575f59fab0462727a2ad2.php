<?php $__env->startSection('content'); ?>



<div class="container">

    <div class=" d-flex justify-content-center " style="margin-bottom: 50px;">
        <h1 style="color: #219F45;"> Add New Match <i class="fas fa-hand-point-down" style="font-size: 30px; "></i></h1>
    </div>

    <div class=" d-flex justify-content-center ">
        <div class="col-md-8">
            <form method="POST" action="/storematch" enctype="multipart/form-data">
                <?php echo csrf_field(); ?> 

                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style=" float: left;">
                        <label for="hometeam" class="col-sm-3 col-form-label">Home Team</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="hometeam" name="hometeam">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="float: right;">
                        <label for="awayteam" class="col-sm-3 col-form-label">Away Team</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="awayteam" name="awayteam">
                        </div>
                    </div>

                </section>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style=" float: left;">
                        <label for="hometeamlogo" class="col-sm-3 col-form-label">Home Team logo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="hometeamlogo" name="hometeamlogo">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="float: right;">
                        <label for="awayteamlogo" class="col-sm-3 col-form-label">Away Team logo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="awayteamlogo" name="awayteamlogo">
                        </div>
                    </div>

                </section>

                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5">
                        <label for="groupstage" class="col-sm-3 col-form-label">Group Stage</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="groupstage" name="groupstage">
                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="staduim" class="col-sm-3 col-form-label">Staduim</label>
                        <div class="col-sm-9">
                            <select name="staduimid" class="custom-select mr-sm-2" id="staduim">
                                <option selected>Choose...</option>
                                <?php $__currentLoopData = $staduims; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staduim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  value="<?php echo e($staduim->id); ?>"><?php echo e($staduim->name); ?></option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                </section>

                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="time" class="col-sm-3 col-form-label">Time</label>
                        <div class="col-sm-9">
                            <input type="time" class="form-control"  id="time" name="time">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="date" class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                    </div>

                </section>

                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="opentime" class="col-sm-3 col-form-label">Open Time</label>
                        <div class="col-sm-9">
                            <input type="time" class="form-control"  id="opentime" name="opentime">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="closetime" class="col-sm-3 col-form-label">Close Time</label>
                        <div class="col-sm-9">
                            <input type="time" class="form-control" id="closetime" name="closetime">
                        </div>
                    </div>

                </section>


                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="chairsno" class="col-sm-3 col-form-label">No. of fans</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="chairsno" name="chairsno">

                        </div>
                    </div>
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="firstrightno" class="col-sm-3 col-form-label">No. 1st right</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="firstrightno" name="firstrightno">

                        </div>
                    </div>
                    

                </section>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="firstleftno" class="col-sm-3 col-form-label">No. 1st left</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="firstleftno" name="firstleftno">
                        </div>
                    </div>
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="secondrightno" class="col-sm-3 col-form-label">No. 2nd right</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="secondrightno" name="secondrightno">

                        </div>
                    </div>
                    

                </section>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="secondleftno" class="col-sm-3 col-form-label">No. 2nd left</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="secondleftno" name="secondleftno">
                        </div>
                    </div>
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="thirdrightno" class="col-sm-3 col-form-label">No. 3rd right</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="thirdrightno" name="thirdrightno">

                        </div>
                    </div>
                   

                </section>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="thirdleftno" class="col-sm-3 col-form-label">No. 3rd left</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="thirdleftno" name="thirdleftno">
                        </div>
                    </div>
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="vipno" class="col-sm-3 col-form-label">No. of vip</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="vipno" name="vipno">

                        </div>
                    </div>
                    

                </section>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="vvipno" class="col-sm-3 col-form-label">no. of vvip</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="vvipno" name="vvipno">
                        </div>
                    </div>
                    <div class="form-group row col-5  " style="display: inline-block;">
                        <label for="secondprice" class="col-sm-3 col-form-label">2nd price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="secondprice" name="secondprice">
                        </div>
                    </div>
                    
                   

                </section>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="firstprice" class="col-sm-3 col-form-label">1st price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="firstprice" name="firstprice">

                        </div>
                    </div>
                    
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="thirdprice" class="col-sm-3 col-form-label">3rd price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="thirdprice" name="thirdprice">

                        </div>
                    </div>
                    

                </section>

                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="vipprice" class="col-sm-3 col-form-label">vip price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="vipprice" name="vipprice">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="vvipprice" class="col-sm-3 col-form-label">vvip price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="vvipprice" name="vvipprice">
                        </div>
                    </div>


                </section>




                <div class="form-group row d-flex justify-content-center " style="margin-top: 50px;">

                    <div class="col-sm-10 ">
                        <button name="addmatchbtn" style="background-color: #219F45; color: white;" type="submit"
                            class="btn  btn-block">ADD</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\my projects\tazkartii\resources\views/dashboard/addmatch.blade.php ENDPATH**/ ?>