<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Student Management system</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   
   
   <style>        
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;

}


.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}


.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}


div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

.card:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease-in-out;
}

.jumbotron {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}
a.btn:hover {
    transform: scale(1.1); 
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); 
    text-decoration: none;
    background: linear-gradient(135deg, #2575fc, #6a11cb); 
}


@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                      </button>
                </nav>

            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <!-- The sidebar -->
                <div class="sidebar">
                    <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    <a class="{{ request()->is('students') ? 'active' : '' }}" href="{{ url('/students') }}">Students</a>
                    <a class="{{ request()->is('teachers') ? 'active' : '' }}" href="{{ url('/teachers') }}">Teachers</a>
                    <a class="{{ request()->is('courses') ? 'active' : '' }}" href="{{ url('/courses') }}">Courses</a>
                    <a class="{{ request()->is('batches') ? 'active' : '' }}" href="{{ url('/batches') }}">Batches</a>
                    <a class="{{ request()->is('enrollments') ? 'active' : '' }}" href="{{ url('/enrollments') }}">Enrollments</a>
                    <a class="{{ request()->is('payments') ? 'active' : '' }}" href="{{ url('/payments') }}">Payments</a>
                </div>

            </div>

            <div class="col-md-9">
                
                   
                           @yield('content')
                    
            </div>


        </div>
    </div>
    
</body>
</html>