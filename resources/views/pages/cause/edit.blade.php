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
                    <h1 class="h3 mb-0 text-gray-800">Edit Cause</h1>
                </div>

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-7">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary">Edit item</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" id="title" class="form-control" name="title"
                                                    autofocus="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Kategori</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="" class="form-control">-Pilih Kategori-</option>
                                                    <option value="" class="form-control">Berita</option>
                                                    <option value="" class="form-control">Artikel</option>
                                                    <option value="" class="form-control">Pengumuman</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="Goal">Goal</label>
                                              <input type="text" id="Goal" class="form-control" name="Goal"
                                              autofocus="" value="" placeholder="12000 in Rupiah">
                                            </div>
                                            <div class="form-group">
                                              <label for="Date End">Date end</label>
                                              <input type="date" id="Goal" class="form-control" name="date_end"
                                              autofocus="" value="" placeholder="Date End">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Deskripsi</label>
                                                <textarea id="description" cols="30" rows="10" class="form-control"
                                                    style="height: auto;" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="m-0 font-weight-bold text-primary">Meta Data</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Thumnail</label>
                                                <div class="mb-2">
                                                    <img src="" class="img-fluid" alt="" id="upload-img-preview"
                                                        style="display: none;">
                                                    <a href="#" class="text-danger" id="upload-img-delete"
                                                        style="display: none;">Delete Cover
                                                        Image</a>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" accept="image/*" name="cover" id="cover"
                                                        class="custom-file-input js-upload-image form-control">
                                                    <label class="custom-file-label " for="cover">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-whitesmoke">
                                            <button type="submit" class="btn btn-simpan  btn-primary">
                                                Add
                                            </button>

                                        <a href="{{url('/causes')}}" class="btn btn-danger  btn-secondary">
                                                Back
                                            </a>
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

<@include('layout.modal_lg')
@include('layout.footer')
