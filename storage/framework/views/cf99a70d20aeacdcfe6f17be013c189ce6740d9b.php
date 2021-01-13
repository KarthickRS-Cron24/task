<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo e($errors); ?>

    <form action="name/manual" method="POST">
    <?php echo csrf_field(); ?>
    <label for="username">Username</label>
    <input type="text" name="username" id="username"><br>
        <span style='color : red'><?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    <br>
    <label for="password">Password</label>
    <input type="text" name='password' id='password'><br>
    <span style='color : red'><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span><br>
    <input type="submit" name='sub' value="Registration">
    </form>
</body>
</html><?php /**PATH /opt/lampp/htdocs/karthick/example-app/resources/views/check.blade.php ENDPATH**/ ?>