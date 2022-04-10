<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h1>contact message</h1>
    <p>Name :<?php echo e($details['name']); ?></p>
    <p>Email :<?php echo e($details['email']); ?></p>
    <p>Phone :<?php echo e($details['phone']); ?></p>
    <p>Message :<?php echo e($details['msg']); ?></p>
</body>
</html><?php /**PATH C:\Users\Lenovo\MobWeb\resources\views/emails/ContactMail.blade.php ENDPATH**/ ?>