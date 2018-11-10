@include('nav')
<!DOCTYPE html>
<html lang="en">

<head>
  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="home.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Add Courses</li>
      </ol>
      <h2>Add New Course</h2><br><br>
      @if(session('info'))
        <!-- <div class="col-lg-6 alert alert-success alert-dismissible">
            
        </div> -->
        <div class="alert alert-primary alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{session('info')}}
  </div>
      @endif
        <form method="post" action="{{URL::to('/storecourse')}}">
          <div class="row">
            <div class="col-md-4">
              <label>Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Duration</label>
              <input type="text" name="duration" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Fee</label>
              <input type="text" name="fee" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Description</label>
              <input type="text" name="description" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Teacher</label>
              
              <select name="instructer" class="form-control">
                @if(count($instructers) > 0)
                @foreach($instructers->all() as $instructer)
                <option>{{$instructer->name}}</option>
                @endforeach
                @endif
              </select>
            </div>
            
          </div><br>
          <div class="row">
            <div class="col-md-2">
              <input type="hidden" name="token" value="csrf_token()">
              <input type="submit" name="add" value="Save" class="btn btn-primary">
              <input type="submit" name="cancle" value="Cancle" class="btn btn-danger">

            </div>
          </div>
        </form>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
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
