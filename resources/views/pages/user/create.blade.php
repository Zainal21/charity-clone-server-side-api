@include('layout.header')
<!-- Page Wrapper -->
<div id="wrapper">

    @include('layout.sidebar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                @include('layout.dropdown')
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Add User</h1>
                </div>

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-lg-12">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary">Add item</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="title">Name</label>
                                                <input type="text" id="title" class="form-control" name="title"
                                                    autofocus="" value="">
                                            </div>
                                            <div class="form-group">
                                              <label for="Goal">Goal</label>
                                              <input type="text" id="Goal" class="form-control" name="Goal"
                                              autofocus="" value="" placeholder="12000 in Rupiah">
                                            </div>
                                            <div class="form-group">
                                              <label for="Date End">Email</label>
                                              <input type="date" id="Goal" class="form-control" name="date_end"
                                              autofocus="" value="" placeholder="Date End">
                                            </div>
                                            <div class="form-group">
                                                <label for="Date End">Confirm Pasword</label>
                                                <input type="date" id="Goal" class="form-control" name="date_end"
                                                autofocus="" value="" placeholder="Date End">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Add </button>
                                        <a href="{{url('/users')}}" class="btn btn-danger">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        @include('layout.cp')

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@include('layout.modal_lg')
@include('layout.footer')
