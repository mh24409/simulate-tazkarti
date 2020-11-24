<?php $__env->startSection('content'); ?>




<section class="container-fluid" style="background-color: #EEEEEE; height: 1000px; padding-top: 30px;">
    <div class="container" style="padding-bottom: 25px; padding-top: 50px;    ">
        <label for="" style="font-weight: bold; font-size: 30px;"> Matches</label>
        <div style="float: right;">
            <form class="form-inline">
                <input class="form-control mr-sm-2" style="width: 300px;" type="search" placeholder="Search"
                    aria-label="Search">
                <input class="form-control mr-sm-2" style="width: 300px;" type="search" placeholder="Search"
                    aria-label="Search">

                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="container">

        <?php $__currentLoopData = $matches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $match): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <div class="row" style="background-color: white; margin-bottom: 2px;">
                <div class="col text-left">
                    <img style="height: 60px;margin-top: 10px;margin-bottom: 10px; width: 70px"
                        src="<?php echo e(asset("storage/images/matches/$match->hometeamlogo")); ?>" alt="">
                    <label for="" style="font-weight: bold;"> <?php echo e($match->homeTeam); ?> </label>
                </div>
                <div class="col text-center" style="padding-top: 30px">
                    -
                </div>
                <div class="col text-right">
                    <label for="" style="font-weight: bold;"> <?php echo e($match->awayTeam); ?></label>
                    <img style="height: 60px; margin-top: 10px;margin-bottom: 10px; width: 70px"
                        src="<?php echo e(asset("storage/images/matches/$match->awayteamlogo")); ?>" alt="">

                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-around" style="background-color: white; margin-right: 2px;">
                    <div><label> <?php echo e($match->date); ?> :التاريخ</label>
                        <br>
                        <label> <?php echo e($match->time); ?> :الوقت </label></div>
                    <div>
                        <label><i class="far fa-calendar-alt" style="font-size: 50px;"></i></label>

                    </div>




                </div>

                <div class="col d-flex justify-content-around" style="background-color: white;">
                    <label> <?php echo e($match->name); ?> <br> <?php echo e($match->address); ?></label>

                    <label><i class="fas fa-university" style="font-size: 50px;"></i></label>

                </div>
            </div>
            <div id="myModal2" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>
                        <div class="modal-body">
                            <form method="POST" action="/storematchticket">
                                <?php echo csrf_field(); ?>

                                <input type="hidden" name="matchid" value="<?php echo e($match->id); ?>">
                                <input type="hidden" name="userid" value="<?php echo e(Auth::user()->id); ?>">
                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-4 pt-0">اختر الدرجه المفضله</legend>
                                        <div class="col-sm-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="position"
                                                    id="gridRadios1" value="first" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    FIRST -<?php echo e($match->Firstprice); ?>$
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="position"
                                                    id="gridRadios2" value="second">
                                                <label class="form-check-label" for="gridRadios2">
                                                    SECOND -<?php echo e($match->secondprice); ?>$
                                                </label>
                                            </div>
                                            <div class="form-check disabled">
                                                <input class="form-check-input" type="radio" name="position"
                                                    id="gridRadios3" value="third">
                                                <label class="form-check-label" for="gridRadios3">
                                                    THIRD -<?php echo e($match->thirdprice); ?>$
                                                </label>
                                            </div>
                                            <div class="form-check disabled">
                                                <input class="form-check-input" type="radio" name="position"
                                                    id="gridRadios4" value="vip">
                                                <label class="form-check-label" for="gridRadios4">
                                                    VIP -<?php echo e($match->thirdprice); ?>$
                                                </label>
                                            </div>
                                            <div class="form-check disabled">
                                                <input class="form-check-input" type="radio" name="position"
                                                    id="gridRadios5" value="vvip">
                                                <label class="form-check-label" for="gridRadios5">
                                                    VVIP -<?php echo e($match->vvipprice); ?>$
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">حجز</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col">
                    <?php if($match->avilabletickets>0): ?>
                    <img style="width: 20px" src="<?php echo e(asset('storage/images/active.svg')); ?>" alt=""> متاح
                    <?php else: ?>
                    <img style="width: 20px" src="<?php echo e(asset('storage/images/delete.svg')); ?>" alt=""> نفذت التذاكر

                    <?php endif; ?>
                </div>
                <div class="col text-right"> <?php echo e($match->groupstage); ?></div>
            </div>
            <button data-toggle="modal" data-target="#myModal2"
                style="width: 100%; height: 50px; margin-top: 10px; background-color: #219F45; color: white; border: unset;">حجز
                المباراه</button>
        </div>
        <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\tazkartii\resources\views/allmatches.blade.php ENDPATH**/ ?>