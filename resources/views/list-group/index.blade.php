@extends('layouts.app')

@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">List Group Whatsapps </h4>



                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="" onclick="updateGroup()" class="btn btn-primary">
                                    <svg class="icon-22" width="22" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.2301 7.29052V3.2815C11.2301 2.85523 11.5701 2.5 12.0001 2.5C12.3851 2.5 12.7113 2.79849 12.763 3.17658L12.7701 3.2815V7.29052L17.55 7.29083C19.93 7.29083 21.8853 9.23978 21.9951 11.6704L22 11.8861V16.9254C22 19.373 20.1127 21.3822 17.768 21.495L17.56 21.5H6.44C4.06 21.5 2.11409 19.5608 2.00484 17.1213L2 16.9047L2 11.8758C2 9.4281 3.87791 7.40921 6.22199 7.29585L6.43 7.29083H11.23V13.6932L9.63 12.041C9.33 11.7312 8.84 11.7312 8.54 12.041C8.39 12.1959 8.32 12.4024 8.32 12.6089C8.32 12.7659 8.3648 12.9295 8.45952 13.0679L8.54 13.1666L11.45 16.1819C11.59 16.3368 11.79 16.4194 12 16.4194C12.1667 16.4194 12.3333 16.362 12.4653 16.2533L12.54 16.1819L15.45 13.1666C15.75 12.8568 15.75 12.3508 15.45 12.041C15.1773 11.7594 14.7475 11.7338 14.4462 11.9642L14.36 12.041L12.77 13.6932V7.29083L11.2301 7.29052Z"
                                            fill="currentColor"></path>
                                    </svg> &nbsp; Update Group WA</a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <p>Jangan Lakukan Terus Menerus Mengupdate Data Group, Dapat Mengakibatkan di banned/ blokir nomber
                            WA yang terdaftar di Settingan Fonnte.</p>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>ID Group</th>
                                        <th>Nama Group</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $list)
                                        <tr>
                                            <td>{{ $list->id_group }}</td>
                                            <td>{{ $list->nama_group }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID Group</th>
                                        <th>Nama Group</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="loader-update" style="display: none;">
        <div class="spinner-border text-info" role="status">
            <span class="visually-hidden">Loading...</span>
        </div><br>
        Loading...
    </div>
@endsection

@section('js')
    <!-- Tambahkan script SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        function updateGroup() {
            // Tampilkan loader
            showLoader();

            // Lakukan AJAX untuk update group
            $.ajax({
                url: "{{ route('list-group.update') }}",
                type: 'GET',
                success: function(response) {
                    hideLoader(); // Sembunyikan loader

                    if (response.status == true) {
                        // Tampilkan notifikasi sukses
                        showNotification('success', 'Update Group WA berhasil!');
                    } else {
                        // Tampilkan notifikasi error
                        showNotification('error', 'Gagal melakukan update Group WA.');
                    }
                },
                error: function() {
                    hideLoader(); // Sembunyikan loader
                    // Tampilkan notifikasi error
                    showNotification('error', 'Terjadi kesalahan saat menghubungi server.');
                }
            });
        }

        function showLoader() {
            Swal.fire({
                title: 'Update Data Group...',
                onBeforeOpen: () => {
                    Swal.showLoading();
                },
                customClass: {
                    popup: 'swal2-center',
                    content: 'swal2-center'
                },
                allowOutsideClick: false
            });
        }

        function hideLoader() {
            Swal.close();
        }

        function showNotification(type, message) {
            // Tampilkan notifikasi SweetAlert2
            Swal.fire({
                icon: type,
                title: message,
                showConfirmButton: true,
                timer: 1500
            });
        }
    </script>

    <style>
        .swal2-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@endsection
