<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Titre de la tâche : <?php echo e($task->title); ?></h2>
      <p>Description : <?php echo e($task->description); ?></p>
      <p>Date d'ajout : Le <?php echo e($task->created_at->locale('fr')->isoFormat('D MMMM YYYY')); ?></p>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\assessment-laravel-install\laravel-test-version\resources\views/task.blade.php ENDPATH**/ ?>