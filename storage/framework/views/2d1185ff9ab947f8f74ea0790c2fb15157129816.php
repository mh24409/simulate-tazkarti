<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center" style="padding-top: 50px;">
        <div class="col-md-8">
            <div class=" text-center"><?php echo e(__('التقدم بطلب التسجيل')); ?></div>
            <br>
            <div class=" text-center text-muted" ><?php echo e(__('الرجاء التأكد من البيانات  حتي يتم الموافقه علي طلبك')); ?></div>

            <div class="card-body">
                <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0 text-right">
                                    <button class="btn btn-outline-success " data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        البيانات الشخصيه
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-group row ">
                                        <label for="fisrtname"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('FisrtName')); ?></label>

                                        <div class="col-md-6">
                                            <input id="fisrtname" type="text"
                                                class="form-control <?php $__errorArgs = ['fisrtname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="fisrtname" value="<?php echo e(old('fisrtname')); ?>" required
                                                autocomplete="fisrtname" autofocus>

                                            <?php $__errorArgs = ['fisrtname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- secondname -->
                                    <div class="form-group row ">
                                        <label for="secondname"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('SecondName')); ?></label>

                                        <div class="col-md-6">
                                            <input id="secondname" type="text"
                                                class="form-control <?php $__errorArgs = ['secondname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="secondname" value="<?php echo e(old('secondname')); ?>" required
                                                autocomplete="secondname" autofocus>

                                            <?php $__errorArgs = ['secondname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- thirdname -->
                                    <div class="form-group row">
                                        <label for="thirdname"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('ThirdName')); ?></label>

                                        <div class="col-md-6">
                                            <input id="thirdname" type="text"
                                                class="form-control <?php $__errorArgs = ['thirdname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="thirdname" value="<?php echo e(old('thirdname')); ?>" required
                                                autocomplete="thirdname" autofocus>

                                            <?php $__errorArgs = ['thirdname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- momname -->
                                    <div class="form-group row">
                                        <label for="momname"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('MomName')); ?></label>

                                        <div class="col-md-6">
                                            <input id="momname" type="text"
                                                class="form-control <?php $__errorArgs = ['momname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="momname" value="<?php echo e(old('momname')); ?>" required
                                                autocomplete="momname" autofocus>

                                            <?php $__errorArgs = ['momname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- gender -->
                                    <div class="form-group row">
                                        <label for="gender"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gender')); ?></label>

                                        <div class="col-md-6">
                                            <input id="gender" type="text"
                                                class="form-control <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="gender"
                                                value="<?php echo e(old('gender')); ?>" required autocomplete="gender" autofocus>

                                            <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- blood -->
                                    <div class="form-group row">
                                        <label for="blood"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('Blood Type')); ?></label>

                                        <div class="col-md-6">
                                            <input id="blood" type="text"
                                                class="form-control <?php $__errorArgs = ['blood'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="blood"
                                                value="<?php echo e(old('blood')); ?>" required autocomplete="blood" autofocus>

                                            <?php $__errorArgs = ['blood'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- idtype -->
                                    <div class="form-group row">
                                        <label for="idtype"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('ID Type')); ?></label>

                                        <div class="col-md-6">
                                            <input id="idtype" type="text"
                                                class="form-control <?php $__errorArgs = ['idtype'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="idtype"
                                                value="<?php echo e(old('idtype')); ?>" required autocomplete="idtype" autofocus>

                                            <?php $__errorArgs = ['idtype'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-right" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-success  collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        مستندات شخصيه
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <!-- national -->
                                    <div class="form-group row">
                                        <label for="national"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('National')); ?></label>

                                        <div class="col-md-6">
                                            <input id="national" type="text"
                                                class="form-control <?php $__errorArgs = ['national'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="national" value="<?php echo e(old('national')); ?>" required
                                                autocomplete="national" autofocus>

                                            <?php $__errorArgs = ['national'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- nationalid -->
                                    <div class="form-group row">
                                        <label for="nationalid"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('National Id')); ?></label>

                                        <div class="col-md-6">
                                            <input id="nationalid" type="number"
                                                class="form-control <?php $__errorArgs = ['nationalid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="nationalid" value="<?php echo e(old('nationalid')); ?>" required
                                                autocomplete="nationalid" autofocus>

                                            <?php $__errorArgs = ['nationalid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- national id image -->
                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('National Id Image')); ?></label>

                                        <div class="col-md-6">
                                            <input type="file" name="nationalimage" class="form-control"
                                                id="nationalimage" placeholder="number">
                                        </div>
                                    </div>
                                    <!-- personal image -->
                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('Personal Image')); ?></label>

                                        <div class="col-md-6">
                                            <input type="file" name="personalimage" class="form-control"
                                                id="personalimage" placeholder="number">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-right" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn  btn-outline-success collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        بيانات التواصل
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <!-- mobile -->
                                    <div class="form-group row">
                                        <label for="mobile"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mobile')); ?></label>

                                        <div class="col-md-6">
                                            <input id="mobile" type="number"
                                                class="form-control <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="mobile"
                                                value="<?php echo e(old('mobile')); ?>" required autocomplete="mobile" autofocus>

                                            <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- E-Mail Address -->
                                    <div class="form-group row">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                                value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="password" required autocomplete="new-password">

                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="form-group text-center mb-0" style="margin-top: 40px;">
                        <div class=" ">
                            <button type="submit" class="btn btn-outline-success">
                                <?php echo e(__('تقديم البيانات')); ?>

                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\tazkartii\resources\views/auth/register.blade.php ENDPATH**/ ?>