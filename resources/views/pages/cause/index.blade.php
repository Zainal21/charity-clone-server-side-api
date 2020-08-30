@include('layout.header')
 <!-- Page Wrapper -->
 <div id="wrapper">

  @include('layout.sidebar')
  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
      
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        @include('layout.dropdown')
      </nav>
      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Master Data Cause</h1>
         
        </div>

        <div class="row">

          <!-- Area Chart -->
          <div class="col-lg-12">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Cause</h6>
              <a href="{{url('/causes/create')}}" class="btn btn-sm btn-primary">Add item</a>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Thumnail</th>
                          <th>Goal</th>
                          <th>Description</th>
                          <th>Date End</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Thumnail</th>
                          <th>Goal</th>
                          <th>Description</th>
                          <th>Date End</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                       @foreach ($cause as $item)
                       <tr>
                        <td>{{$item->title}}</td>
                        <td>{{$item->category}}</td>
                       <td><img src="{{\Storage::url($item->thumbnail)}}"width="100px"  class="img-fluid" height="100px" alt=""></td>
                       <td>{{$item->goal}}</td>
                        <td>{{$item->description}}</td>
                       <td>{{$item->date_end}}</td>
                       <td>
                        <form action="{{url('/causes/delete/'. $item->id)}}" method="post" class="d-inline my-2">
                          @csrf
                          @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                          </form>   
                          <a href="{{url('/causes/edit/'. Crypt::Encrypt($item->id))}}" class="btn btn-sm btn-primary my-2">Edit</a></td>
                      </tr>
                       @endforeach
                       
                       
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    @include('layout.cp')
    <!-- End of Footer -->

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