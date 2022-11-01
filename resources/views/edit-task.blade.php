<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        body{
            background-color: silver;
        }
    </style>

    <title>To-Do list</title>
</head>
<body>
        <section style="padding-top: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h2>Edit task</h2>
                            </div>
                            <div class="card-body">
                        
                                <form method="POST" action="{{route('task.update')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$task->id}}">
                                    <div class="form-group">
                                        <label for="name"><h4>Edit Title</h4></label> 
                                        <input type="text" name="name" class="form-control" placeholder="Edit Task Title" value="{{$task->name}}" > <br>
                                    </div>
                                    <button type="submit" class="btn btn-success"> Edit task</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>