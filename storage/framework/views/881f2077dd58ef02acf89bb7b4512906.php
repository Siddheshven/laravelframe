<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="color: white">Konoha Academy</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/')); ?>" style="color: white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/register')); ?>" style="color: white">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/customer')); ?>" style="color: white">Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/upload')); ?>" style="color: white">Upload</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <form action="<?php echo e($url); ?>" method="POST">

        <?php echo csrf_field(); ?>
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary"><?php echo e($title); ?></h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name:</label>
                    <input type="text" name="name" id="" class="form-control"
                        value="<?php echo e(old('name', isset($customer->user_name) ? $customer->user_name : '')); ?>" />
                    <span class="text-danger">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Email:</label>
                    <input type="email" name="email" id="" class="form-control"
                        value="<?php echo e(old('email', isset($customer->email) ? $customer->email : '')); ?>" />
                    <span class="text-danger">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control" />
                    <span class="text-danger">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="" class="form-control" />
                    <span class="text-danger">
                        <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Country:</label>
                    <input type="text" name="country" id="" class="form-control"
                        value="<?php echo e(old('country', isset($customer->country) ? $customer->country : '')); ?>" />
                    <span class="text-danger">
                        <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">State:</label>
                    <input type="text" name="state" id="" class="form-control"
                        value="<?php echo e(old('state', isset($customer->state) ? $customer->state : '')); ?>" />
                    <span class="text-danger">
                        <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="">Address:</label>
                    <textarea name="address" class="form-control" id=""
                        rows="3"><?php echo e(old('country', isset($customer->country) ? $customer->country : '')); ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Gender:</label><br />
                    <div class="form-check form-check-inline">
                        <label for="" class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="M"
                                <?php if(isset($customer->gender)): ?> <?php echo e($customer->gender == 'M' ? 'checked' : ''); ?> <?php endif; ?>>Male
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label for="" class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="F"
                                <?php if(isset($customer->gender)): ?> <?php echo e($customer->gender == 'F' ? 'checked' : ''); ?> <?php endif; ?>>Female
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label for="" class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="O"
                                <?php if(isset($customer->gender)): ?> <?php echo e($customer->gender == 'O' ? 'checked' : ''); ?> <?php endif; ?>>Other
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Date of birth:</label>
                    <input type="date" name="dob" id="" class="form-control"
                    value="<?php echo e(old('dob', isset($customer->dob) ? $customer->dob : '')); ?>" />
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Submit
                    </button>
                </div>
            </div>
        </div>

    </form>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\laravelframe\resources\views/customer.blade.php ENDPATH**/ ?>