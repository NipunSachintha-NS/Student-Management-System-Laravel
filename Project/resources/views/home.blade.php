@extends('layout')

@section('content')
<div class="container mt-4">
    <!-- Hero Section -->
    <div class="jumbotron text-white text-center" 
         style="background: linear-gradient(135deg, rgba(106, 17, 203, 0.5), rgba(37, 117, 252, 0.5)), url('1.jpg'); border-radius: 10px; padding: 50px 20px;">
        <h1 class="display-4 font-weight-bold" style = "text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.6)">Welcome to the Student Management System</h1>
        <p class="lead"  style = "text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6)">Your all-in-one platform to manage students, teachers, courses, and more.</p>
        <a href="{{ url('/students') }}" 
            class="btn btn-lg shadow-sm mt-3" 
            style="border-radius: 25px; 
                    background: linear-gradient(135deg, #6a11cb, #2575fc); 
                    color: white; 
                    font-weight: bold; 
                    padding: 15px 30px; 
                    text-transform: uppercase; 
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); 
                    transition: transform 0.3s ease, box-shadow 0.3s ease;">
                Get Started
         </a>

    </div>

    
    <div class="row text-center mt-5">
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0" style="background: linear-gradient(135deg, #ffd700, #f7a76c); border-radius: 15px;">
                <div class="card-body">
                    <h3><i class="fas fa-user-graduate fa-2x text-primary"></i></h3>
                    <h4 class="mt-2">Total Students</h4>
                    <h1 class="font-weight-bold">150</h1>
                    <p class="text-muted">Explore student details and records.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0" style="background:linear-gradient(135deg, #89f7fe, #66a6ff); border-radius: 15px;">
                <div class="card-body">
                    <h3><i class="fas fa-chalkboard-teacher fa-2x text-success"></i></h3>
                    <h4 class="mt-2">Total Teachers</h4>
                    <h1 class="font-weight-bold">25</h1>
                    <p class="text-muted">Manage your teaching staff efficiently.</p>
                </div>
            </div>
        </div>
     
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0" style="background:linear-gradient(135deg,rgb(26, 196, 46),rgb(121, 186, 90)); border-radius: 15px;">
                <div class="card-body">
                    <h3><i class="fas fa-book-open fa-2x text-info"></i></h3>
                    <h4 class="mt-2" >Total Courses</h4>
                    <h1 class="font-weight-bold">20</h1>
                    <p class="text-muted">View and organize courses seamlessly.</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
