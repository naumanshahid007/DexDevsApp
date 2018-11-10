@include('nav')
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

  <div class="content-wrapper"   style="padding: 50px; ">
    <div class="container-fluid" style="box-shadow: 5px 5px 5px 5px ;"><br>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb" style="padding: 10px;">
        <li class="breadcrumb-item">
          <a href="home.php">Students</a>
        </li>
        <li class="breadcrumb-item active">Add Students</li>
      </ol>
      <h1>Add New Student</h1><hr><br>
      <h2>Student Personal Information</h2>
      @if(session('info'))
        <!-- <div class="col-lg-6 alert alert-success alert-dismissible">
            
        </div> -->
        <div class="alert alert-primary alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{session('info')}}
  </div>
      @endif
        <form method="post" action="{{ URL::to('/storestudent') }}">
          <div class="row">
            <div class="col-md-4">
              <label>Student Name</label>
              <input type="text" name="stname" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Student Phone Number</label>
              <input type="text" name="stnumber" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Gaurdian Name</label>
              <input type="text" name="gname" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Gaurdian Phone Number</label>
              <input type="text" name="gnumber" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Gender</label>
              <select class="form-control" name="gender">
                <option>Male</option>
                <option>FeMale</option>
              </select>
            </div>
            <div class="col-md-4">
              <label>Email</label>
              <input type="email" name="aemail" class="form-control">
            </div>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <label>Address</label>
              <textarea class="form-control" name="address"></textarea>
            </div>
          </div>
          <h2>Course Details</h2>
          <div class="row">
            <div class="col-md-4">
               <label>Course Name</label>
            <select name="instructer" class="form-control">
                @if(count($courses) > 0)
                @foreach($courses->all() as $course)
                <option>{{$course->name}}</option>
                @endforeach
                @endif
              </select>
            </div>
            <div class="col-md-4">
              <input type="hidden" name="token" value="csrf_token()">
              <label>Course Duration</label>
              <select name="instructer" class="form-control">
                @if(count($courses) > 0)
                @foreach($courses->all() as $course)
                <option>{{$course->duration}}</option>
                @endforeach
                @endif
              </select>
            </div>
            <div class="col-md-4">
              <label>Course Fee</label>
              <select name="instructer" class="form-control">
                @if(count($courses) > 0)
                @foreach($courses->all() as $course)
                <option>{{$course->fee}}</option>
                @endforeach
                @endif
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Course Instructer</label>
              <select name="instructer" class="form-control">
                @if(count($courses) > 0)
                @foreach($courses->all() as $course)
                <option>{{$course->instructer}}</option>
                @endforeach
                @endif
              </select>
            </div>
            <div class="col-md-4">
              <label>Course Start Month</label>
              <input type="date" name="cstartmonth" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Course End Month</label>
              <input type="date" name="cendmonth" class="form-control">
            </div>
          </div>
           <div class="row">
            
            <div class="col-md-4">
              <label>Course Start Date</label>
              <input type="date" name="cstartdate" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Course End Date</label>
              <input type="date" name="cendtdate" class="form-control">
            </div>
          </div> 
          <h2>Student Fee Details</h2>
            <div class="row">
              <div class="col-md-4">
                <label>Reg Fee</label>
                <input type="text" name="regfee" class="form-control">
              </div>
              <div class="col-md-3">
                
              </div>
              <div class="col-md-4">
                <label>Total Fee</label>
                <input type="text" name="totalfee"  class="form-control" style="background-color: white;">
              </div>
              <div class="col-md-4">
                <label>Date</label>
                <input type="date" name="ddate" class="form-control">
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-2">
                <input type="hidden" name="token" value="{{ csrf_token() }}">
                <input type="submit" name="submit" value="Save" class="btn btn-primary">  
              </div>
            </div>
        </form>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper--><BR><BR><BR>
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
