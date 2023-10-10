@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">



            <div class="row">
                {{-- <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Marka Sorgulama Talebi</p>
                                    <h4 class="mb-2"></h4>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="ri-pen-nib-fill font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col --> --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Mesaj</p>
                                    <h4 class="mb-2">{{ $messageCount }}</h4>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="fas fa-envelope font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Hizmet</p>
                                    <h4 class="mb-2">{{ $serviceCount }}</h4>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="ri-honour-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                {{-- <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Müşteri Yorumları</p>
                                    <h4 class="mb-2">
                                        <h4 class="mb-2"></h4>
                                    </h4>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="far fa-image font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col --> --}}
            </div><!-- end col -->
        </div><!-- end row -->


       

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">


                        <h5>Mesajlar</h5>
                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable"
                                        class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline"
                                        style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid"
                                        aria-describedby="datatable_info">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Ad Soyad</th>
                                                <th>Mail</th>
                                                <th>Durum</th>
                                                <th>Tarih</th>
                                                <th>İşlemler</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                            @php($i = 1)

                                            @foreach ($messages as $item)
                                                <tr class="odd">


                                                    <td> {{ $i++ }}</td>
                                                    <td>{{ $item->name }} </td>
                                                    <td>
                                                        @if ($item->read_status == 0)
                                                            <div class="font-size-13">
                                                                <i
                                                                    class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>
                                                                Okunmadı
                                                            </div>
                                                        @else
                                                            <div class="font-size-13">
                                                                <i
                                                                    class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>
                                                                Okundu
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->mail }}</td>
                                                    <td>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('detail.message', $item->id) }}">
                                                            <button class="btn btn-primary btn-sm">
                                                                <i class="far fa-eye"></i>
                                                            </button>
                                                        </a>

                                                        <a href="mailto:{{ $item->mail }}">
                                                            <button class="btn btn-success btn-sm">
                                                                <i class="fas fa-mail-bulk"></i>
                                                            </button>
                                                        </a>

                                                        <a href="{{ route('delete.message', $item->id) }}" id="delete">
                                                            <button class="btn btn-danger btn-sm">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </a>




                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->





    </div>

    </div>
@endsection
