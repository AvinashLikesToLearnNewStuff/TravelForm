<!DOCTYPE html>
<html>

<head>
    <title>My To-Do List App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>My To-Do List</h1>
            <p>Welcome, [user]!</p>
            <a href="#">Log out</a>
        </div>
        <div class="content">
            <h2>To-Do Items:</h2>
            <ul class="list-group">
                <li class="list-group-item">
                    <input type="checkbox"> Task 1
                    <a href="#" class="btn btn-default btn-xs pull-right">Edit</a>
                    <a href="#" class="btn btn-danger btn-xs pull-right">Delete</a>
                </li>
                <li class="list-group-item">
                    <input type="checkbox"> Task 2
                    <a href="#" class="btn btn-default btn-xs pull-right">Edit</a>
                    <a href="#" class="btn btn-danger btn-xs pull-right">Delete</a>
                </li>
                <li class="list-group-item">
                    <input type="checkbox"> Task 3
                    <a href="#" class="btn btn-default btn-xs pull-right">Edit</a>
                    <a href="#" class="btn btn-danger btn-xs pull-right">Delete</a>
                </li>
            </ul>
            <form>
                <div class="form-group">
                    <label for="task">New Task:</label>
                    <input type="text" class="form-control" id="task">
                </div>
                <button type="submit" class="btn btn-default">Add</button>
            </form>
            <hr>
            <h2>Completed Tasks:</h2>
            <ul class="list-group">
                <li class="list-group-item disabled">
                    <input type="checkbox" checked> Task 4
                    <a href="#" class="btn btn-default btn-xs pull-right">Undo</a>
                    <a href="#" class="btn btn-danger btn-xs pull-right">Delete</a>
                </li>
                <li class="list-group-item disabled">
                    <input type="checkbox" checked> Task 5
                    <a href="#" class="btn btn-default btn-xs pull-right">Undo</a>
                    <a href="#" class="btn btn-danger btn-xs pull-right">Delete</a>
                </li>
            </ul>
        </div>
        <div class="footer">
            <p>&copy; 2023 My To