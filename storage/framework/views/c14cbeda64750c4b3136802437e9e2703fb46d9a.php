<?php $__env->startSection('content'); ?>
    <section class="container-fluid" style="background-color: #EEEEEE; padding-top: 30px;">
        <div class="container">

            <!-- events -->
            <div style="padding-bottom: 25px;">
                <label for="" style="font-weight: bold; font-size: 30px;"> Events</label>
                <label style="float: right;" for=""> <a href="/allevents"> View All Events</a></label>
            </div>
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <section style="padding: 0px; margin-top: 5px">
                    <div class="container text-right clearfix" style="background-color: white;padding: 0px;">
                        <img style="height: 100px;float: right; margin-left: 20px;"
                            src="<?php echo e(asset("storage/images/events/$event->eventimage")); ?>" alt="">

                        <div style="padding-top: 20px;">

                            <label class="text-muted"> <?php echo e($event->type); ?> </label>
                            <br>
                            <label style="font-size: 20px; font-weight: bold;"> <?php echo e($event->disc); ?></label>

                        </div>

                    </div>
                    <div class="container text-right clearfix" style="background-color: white;margin-top: 5px;">
                        <div class="row" style="padding: 20px;">
                            <div class="col">
                                <label> <?php echo e($event->date); ?> </label><br>
                                <label> <?php echo e($event->time); ?> </label><br>

                            </div>
                            <div class="col">
                                <label> <?php echo e($event->name); ?></label><br>
                                <label class="text-muted"><?php echo e($event->address); ?> </label>

                            </div>

                        </div>

                    </div>
                    <!-- event Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="/storeeventticket">
                                        <?php echo csrf_field(); ?>

                                        <input type="hidden" name="eventid" value="<?php echo e($event->id); ?>">
                                        <input type="hidden" name="userid" value="<?php echo e(Auth::user()->id); ?>">
                                        <fieldset class="form-group">
                                            <div class="d-flex justify-content-end">
                                                <div> <?php echo e($event->disc); ?> </div>
                                                <div> <img style="height: 100px;float: right; margin-left: 20px;"
                                                        src="<?php echo e(asset("storage/images/events/$event->eventimage")); ?>"
                                                        alt=""></div>
                                            </div>
                                            <div class="row">
                                                <legend class="col-form-label col-sm-4 pt-0">اختر الدرجه المفضله</legend>
                                                <div class="col-sm-8">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="position"
                                                            id="gridRadios1" value="first" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            FIRST -<?php echo e($event->priceoffirst); ?>$
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="position"
                                                            id="gridRadios2" value="second">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            SECOND -<?php echo e($event->priceofsecond); ?>$
                                                        </label>
                                                    </div>
                                                    <div class="form-check disabled">
                                                        <input class="form-check-input" type="radio" name="position"
                                                            id="gridRadios3" value="third">
                                                        <label class="form-check-label" for="gridRadios3">
                                                            THIRD -<?php echo e($event->priceofthird); ?>$
                                                        </label>
                                                    </div>
                                                    <div class="form-check disabled">
                                                        <input class="form-check-input" type="radio" name="position"
                                                            id="gridRadios3" value="vip">
                                                        <label class="form-check-label" for="gridRadios3">
                                                            VIP -<?php echo e($event->priceofvip); ?>$
                                                        </label>
                                                    </div>
                                                    <div class="form-check disabled">
                                                        <input class="form-check-input" type="radio" name="position"
                                                            id="gridRadios3" value="vvip">
                                                        <label class="form-check-label" for="gridRadios3">
                                                            VVIP -<?php echo e($event->priceofvip); ?>$
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div style="width: 100%">
                                            <button style="width: 100%" type="submit" class="btn btn-success">حجز</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container text-right clearfix"
                        style="background-color: white;margin-top: 5px;padding-bottom: 30px;">
                        <p style="padding-top: 20px;" class="text-muted"><?php echo e($event->disc); ?></p>
                        <div class="row text-center">
                            <div class="col">

                                <?php if($event->avilabletickets > 0): ?>
                                    <img style="width: 20px" src="<?php echo e(asset('storage/images/active.svg')); ?>" alt=""> متاح
                                <?php else: ?>
                                    <img style="width: 20px" src="<?php echo e(asset('storage/images/delete.svg')); ?>" alt=""> نفذت
                                    التذاكر

                                <?php endif; ?>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-success btn-lg" data-toggle="modal"
                                    data-target="#myModal">حجز تذكره</button>
                            </div>

                        </div>

                    </div>



                </section>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <!-- matches -->
            <div style="padding-bottom: 25px; padding-top: 50px;    ">
                <label for="" style="font-weight: bold; font-size: 30px;"> Matches</label>
                <label style="float: right;" for=""> <a href="/allmatches"> View All Matches</a></label>
            </div>
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
                                <label> <?php echo e($match->time); ?> :الوقت </label>
                            </div>
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
                                            <div class="d-flex justify-content-between">
                                                <div><img
                                                        style="height: 60px;margin-top: 10px;margin-bottom: 10px; width: 70px"
                                                        src="<?php echo e(asset("storage/images/matches/$match->hometeamlogo")); ?>"
                                                        alt=""></div>
                                                <div style="margin-top: 20px">VS</div>
                                                <div><img
                                                        style="height: 60px; margin-top: 10px;margin-bottom: 10px; width: 70px"
                                                        src="<?php echo e(asset("storage/images/matches/$match->awayteamlogo")); ?>"
                                                        alt=""></div>
                                            </div>
                                            <div class="d-flex justify-content-center"> <img
                                                    style="height: 150px; margin-top: 10px;margin-bottom: 10px; width: 250px"
                                                    src="<?php echo e(asset('storage/images/Stadium.png')); ?>" alt=""> </div>
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
                                                            VIP -<?php echo e($match->vipprice); ?>$
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
                                        <div style="width: 100%">
                                            <button style="width: 100%" type="submit" class="btn btn-success">حجز</button>
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
                            <?php if($match->avilabletickets > 0): ?>
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

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <!-- my tickets -->
            <div style="padding-bottom: 25px; padding-top: 50px;    ">
                <label for="" style="font-weight: bold; font-size: 30px;"> My Tickets</label>
                <label style="float: right;" for=""> <a href="/mytickets"> View All Tickets</a></label>
            </div>
            <div class="">
                <div style="background-color: white; margin-bottom: 5px ; height: 70px;padding-top: 20px" class="row">
                    <div class="col" style="display: inline-block"> show</div>
                    <div class="col text-center" style="display: inline-block"> name</div>
                    <div class="col text-center" style="display: inline-block"> status</div>
                </div>
                <?php $__currentLoopData = $matchetickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="background-color: white; margin-bottom: 2px ; height: 60px;" class="row">
                        <div style="margin-left: 10px"><img style="width: 20px"
                                src="<?php echo e(asset('storage/images/deleviered.svg')); ?>" alt=""></div>

                        <div class="col" style="display: inline-block"> <label
                                style="font-weight: bold; margin-bottom: 2px;">
                                <?php echo e($ticket->homeTeam); ?> vs <?php echo e($ticket->awayTeam); ?></label><br> <label
                                style="font-size: 10px; letter-spacing: 5px;"><?php echo e($ticket->date); ?>

                                <?php echo e($ticket->time); ?></label></div>
                        <div class="col text-center" style="display: inline-block;padding-top: 20px">
                            <?php echo e($ticket->fisrtname); ?>

                            <?php echo e($ticket->thirdtname); ?>

                        </div>
                        <div class="col text-center" style="display: inline-block ;padding-top: 20px"> deleivered</div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $eventticket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="background-color: white; margin-bottom: 2px ; height: 60px;" class="row">
                        <div style="margin-left: 10px"><img style="width: 20px"
                                src="<?php echo e(asset('storage/images/deleviered.svg')); ?>" alt=""></div>

                        <div class="col" style="display: inline-block"> <label
                                style="font-weight: bold; margin-bottom: 2px;">
                                <?php echo e($ticket->disc); ?></label><br> <label
                                style="font-size: 10px; letter-spacing: 5px;"><?php echo e($ticket->date); ?>

                                <?php echo e($ticket->time); ?></label></div>
                        <div class="col text-center" style="display: inline-block; padding-top: 20px">
                            <?php echo e($ticket->fisrtname); ?>

                            <?php echo e($ticket->thirdtname); ?>

                        </div>
                        <div class="col text-center" style="display: inline-block ; padding-top: 20px"> deleivered</div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </div>

        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\my projects\tazkartii\resources\views/index.blade.php ENDPATH**/ ?>