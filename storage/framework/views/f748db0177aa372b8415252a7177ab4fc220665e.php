<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <?php if(count($errors) >0): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e(error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php
        echo Form::open(array('url'=>'/validation'));
    ?>

    <table border=1>
        <tr>
            <td colspan="2" align="center">Login</td>
        </tr>
        <tr>
            <td>Username</td>
            <td><?php echo Form::text('username'); ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo Form::password('password'); ?></td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <?php echo Form::submit('Login'); ?>
            </td>
        </tr>
    </table>

    <?php Form::close(); ?>
</body>
</html><?php /**PATH /opt/lampp/htdocs/karthick/example-app/resources/views/validation.blade.php ENDPATH**/ ?>