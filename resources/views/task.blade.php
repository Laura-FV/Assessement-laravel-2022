<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Titre de la tâche : {{$task->title}}</h2>
      <p>Description : {{$task->description}}</p>
      <p>Date d'ajout : Le {{$task->created_at->locale('fr')->isoFormat('D MMMM YYYY')}}</p>
  </body>
</html>
