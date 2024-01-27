@extends('admin.layouts.main')

@section('styles')
    <style>
        table.dataTable,
        table.dataTable th,
        table.dataTable td {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1) !important;
        }

        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_paginate {
            font-size: small;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">
                                Tabel Pembinaan Kesejahteraan Keluarga (PKK)
                            </h6>
                        </div>
                    </div>
                    <div class="d-flex px-3 pt-2">
                        <button href="" type="button" class="btn bg-gradient-primary"
                            style="margin-bottom: 0px "data-bs-toggle="modal" data-bs-target="#createDataModal">
                            <i class="fas fa-plus"></i> Tambah Anggota</button>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive py-0 px-3">
                            <table class="table align-items-center mb-0" id="table">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bolder opacity-10 ps-2"
                                            style="width: fit-content;">
                                            #
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10 ps-2">
                                            Nama
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10 ps-2">
                                            Jabatan
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10 ps-2">
                                            Purna Tugas
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xs font-weight-bolder opacity-10 ps-2">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="tablecontents">
                                    @if (count($pkks) == 0)
                                        <tr>
                                            <td colspan="5">
                                                <p class="text-xs font-weight-bold mb-0 text-center">
                                                    Tidak Ada Data Anggota PKK
                                                </p>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($pkks as $pkk)
                                            <tr data-id="{{ $pkk->id }}" class="row1">
                                                <td class="">
                                                    <span class="text-secondary  text-xs font-weight-bold ps-4"><i
                                                            class="fa fa-sort"></i></span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $pkk->nama }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $pkk->jabatan }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $pkk->formatted_purna_tugas }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a>
                                                        <button data-bs-toggle="modal"
                                                            data-bs-target="#editDataModal{{ $pkk->id }}"
                                                            class="badge bg-warning border-0"><i class="fas fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <form action="/dashboard/pkks/{{ $pkk->id }}" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-gradient-danger border-0 "
                                                            onclick="confirmDelete(event)">
                                                            <i class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="editDataModal{{ $pkk->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="editData{{ $pkk->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editData{{ $pkk->id }}">
                                                                Edit
                                                                Kategori</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="/dashboard/pkks/{{ $pkk->id }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <div class="modal-body">
                                                                <div>
                                                                    <strong  class="required">Nama</strong>
                                                                    <div class="input-group input-group-outline ">
                                                                        <input type="text" name="nama" id="nama"
                                                                            class="form-control p-2 @error('nama') is-invalid @enderror"
                                                                            placeholder="Masukan nama kategori"
                                                                            value="{{ old('nama', $pkk->nama) }}"
                                                                            required>
                                                                    </div>
                                                                    @error('nama')
                                                                        <div class="text-sm text-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="mt-3">
                                                                    <strong  class="required">Jabatan</strong>
                                                                    <div class="input-group input-group-outline ">
                                                                        <select class="form-control" name="jabatan"
                                                                            required>
                                                                            <option class="opacity-5" value="">Pilih Jabatan</option>
                                                                            <option value="Ketua Tim Penggerak PKK" @if ($pkk->jabatan == 'Ketua Tim Penggerak PKK') selected @endif>
                                                                                Ketua Tim Penggerak PKK
                                                                            </option>
                                                                            <option value="Wakil Ketua" @if ($pkk->jabatan == 'Wakil Ketua') selected @endif>
                                                                                Wakil Ketua
                                                                            </option>
                                                                            <option value="Bendahara I" @if ($pkk->jabatan == 'Bendahara I') selected @endif>
                                                                                Bendahara I
                                                                            </option>
                                                                            <option value="Bendahara II" @if ($pkk->jabatan == 'Bendahara II') selected @endif>
                                                                                Bendahara II
                                                                            </option>
                                                                            <option value="Sekretaris I" @if ($pkk->jabatan == 'Sekretaris I') selected @endif>
                                                                                Sekretaris I
                                                                            </option>
                                                                            <option value="Sekretaris II" @if ($pkk->jabatan == 'Sekretaris II') selected @endif>
                                                                                Sekretaris II
                                                                            </option>
                                                                            <option value="POKJA I" @if ($pkk->jabatan == 'POKJA I') selected @endif>
                                                                                POKJA I
                                                                            </option>
                                                                            <option value="POKJA II" @if ($pkk->jabatan == 'POKJA II') selected @endif>
                                                                                POKJA II
                                                                            </option>
                                                                            <option value="POKJA III" @if ($pkk->jabatan == 'POKJA III') selected @endif>
                                                                                POKJA III
                                                                            </option>
                                                                            <option value="POKJA IV" @if ($pkk->jabatan == 'POKJA IV') selected @endif>
                                                                                POKJA IV
                                                                            </option>

                                                                        </select>
                                                                        @error('jabatan')
                                                                            <small class="text-danger mb-3">
                                                                                {{ $message }}
                                                                            </small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <strong>Purna Tugas</strong>
                                                                    <div class="input-group input-group-outline ">
                                                                        <input type="date" name="purna_tugas"
                                                                            id="purna_tugas"
                                                                            class="form-control p-2 @error('purna_tugas') is-invalid @enderror"
                                                                            placeholder="Masukan purna_tugas kategori"
                                                                            value="{{ old('purna_tugas', $pkk->purna_tugas) }}"
                                                                            >
                                                                    </div>
                                                                    @error('purna_tugas')
                                                                        <div class="text-sm text-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn bg-gradient-secondary"
                                                                    data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit"
                                                                    class="btn bg-gradient-primary">Simpan
                                                                    Perubahan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Create Modal --}}
    <div class="modal fade" id="createDataModal" tabindex="-1" role="dialog" aria-labelledby="createCategories"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createCategories">Tambah Anggota</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/dashboard/pkks" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="">
                            <strong class="required">Nama</strong>
                            <div class="input-group input-group-outline  ">
                                <input type="text" name="nama" id="nama"
                                    class="form-control p-2 @error('nama') is-invalid @enderror"
                                    placeholder="Masukan nama..." value="{{ old('nama') }}" required>
                            </div>
                            @error('nama')
                                <div class="text-sm text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <strong  class="required">Jabatan</strong>
                            <div class="input-group input-group-outline ">
                                <select class="form-control" name="jabatan" required>
                                    <option class="opacity-5" value="">Pilih
                                        Jabatan</option>
                                    <option value="Ketua Tim Penggerak PKK">
                                        Ketua Tim Penggerak PKK</option>
                                    <option value="Wakil Ketua">
                                        Wakil Ketua
                                    </option>
                                    <option value="Bendahara I">
                                        Bendahara I
                                    </option>
                                    <option value="Bendahara II">
                                        Bendahara II
                                    </option>
                                    <option value="Sekretaris I">
                                        Sekretaris I
                                    </option>
                                    <option value="Sekretaris II">
                                        Sekretaris II
                                    </option>
                                    <option value="POKJA I">
                                        POKJA I
                                    </option>
                                    <option value="POKJA II">
                                        POKJA II
                                    </option>
                                    <option value="POKJA III">
                                        POKJA III
                                    </option>
                                    <option value="POKJA IV">
                                        POKJA IV
                                    </option>
                                </select>
                                @error('jabatan')
                                    <small class="text-danger mb-3">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <strong>Purna Tugas</strong>
                                <div class="input-group input-group-outline">
                                    <input type="date" name="purna_tugas" id="purna_tugas"
                                        class="form-control p-2 @error('purna_tugas') is-invalid @enderror"
                                        placeholder="Masukan purnatugas kategori..." value="{{ old('purna_tugas') }}"
                                        >
                                </div>
                                @error('purna_tugas')
                                    <div class="text-sm text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn bg-gradient-primary">Tambahkan
                            Anggota</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function() {
            $("#table").DataTable();
            // this is need to Move Ordera accordin user wish Arrangement
            $("#tablecontents").sortable({
                items: "tr",
                cursor: 'move',
                opacity: 0.6,
                update: function() {
                    sendOrderToServer();
                }
            });

            function sendOrderToServer() {
                var order = [];
                var token = $('meta[name="csrf-token"]').attr('content');
                //   by this function User can Update hisOrders or Move to top or under
                $('tr.row1').each(function(index, element) {
                    order.push({
                        id: $(this).attr('data-id'),
                        position: index + 1
                    });
                });
                // the Ajax Post update
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "{{ url('/pkks/custom-sortable') }}",
                    data: {
                        order: order,
                        _token: token
                    },
                    success: function(response) {
                        if (response.status == "success") {
                            console.log(response);
                        } else {
                            console.log(response);
                        }
                    }
                });
            }
        });
    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                timer: 3000, // This will automatically close the SweetAlert after 3 seconds
                showConfirmButton: false
            });
        </script>
    @endif
    @if (session('failed'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: "{{ session('failed') }}",
                timer: 5000, // This will automatically close the SweetAlert after 3 seconds
                showConfirmButton: false
            });
        </script>
    @endif

    <script>
        function confirmDelete(event) {
            event.preventDefault();

            Swal.fire({
                title: 'Hapus Data?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batalkan'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Proceed with the form submission
                    event.target.closest('form').submit();
                }
            });
        }
    </script>
@endsection
