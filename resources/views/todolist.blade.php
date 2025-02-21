<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo-List</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        table button {
            margin-left: 20px
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
         <div class="container">
            <a class="navbar-brand" href="#">Todolist</a>
        </div>
    </nav>
    <div class="container">

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Task Name</h5>
                <form class="form-inline">
                    <div class="form-group col-md-10 col-lg-10 col-sm-10">
                        <input type="text" class="form-control col-md-12 col-sm-12" id="task" placeholder="Task Name" >
                    </div>
                    <button class="btn btn-primary">save</button>
                </form>
            </div>
        </div>
        <!-- Current Tasks -->
        <div class="card card-default">
            <div class="card-body">
                <h5 class="card-title">Tasks</h5>
                <table class="table table-striped task-table">
                    <tbody>
                        <tr>
                            <td>
                                <del>Jogging</del>
                            </td>
                            <!-- Task Buttons -->
                            <td class="text-md-right text-sm-right">
                                    <button class="btn btn-success" disabled >completed</button>
                                    <button class="btn btn-primary">edit</button>
                                    <button class="btn btn-danger">delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Homework</td>
                            <!-- Task Buttons -->
                            <td class="text-md-right text-sm-right">
                                    <button class="btn btn-success">completed</button>
                                    <button class="btn btn-primary">edit</button>
                                    <button class="btn btn-danger">delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>