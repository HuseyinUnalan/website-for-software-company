@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Profil Güncelle</h4>

                            <form action="{{ route('store.profile') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-xl"
                                            src="{{ !empty($editData->profile_image) ? url('upload/admin_images/' . $editData->profile_image) : url('upload/no_image.jpg') }}">
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Fotoğraf</label>
                                    <div class="col-sm-10">
                                        <input id="image" name="profile_image" class="form-control" type="file"
                                            value="{{ $editData->email }}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Ad Soyad</label>
                                    <div class="col-sm-10">
                                        <input name="name" class="form-control" type="text"
                                            value="{{ $editData->name }}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">E-mail</label>
                                    <div class="col-sm-10">
                                        <input name="email" class="form-control" type="text"
                                            value="{{ $editData->email }}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->





                                <hr>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Güncelle">


                            </form>







                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->



        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
