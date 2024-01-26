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
                                Tabel Pemerintah Desa
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
                                    @if (count($villageGovernments) == 0)
                                        <tr>
                                            <td colspan="7">
                                                <p class="text-xs font-weight-bold mb-0 text-center">
                                                    Tidak Ada Data Pemerintah Desa
                                                </p>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($villageGovernments as $villageGovernment)
                                            <tr data-id="{{ $villageGovernment->id }}" class="row1">
                                                <td class="">
                                                    <span class="text-secondary  text-xs font-weight-bold ps-4"><i
                                                            class="fa fa-sort"></i></span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $villageGovernment->nama }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $villageGovernment->jabatan }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $villageGovernment->formatted_purna_tugas }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a>
                                                        <button data-bs-toggle="modal"
                                                            data-bs-target="#editDataModal{{ $villageGovernment->id }}"
                                                            class="badge bg-warning border-0"><i class="fas fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <form
                                                        action="/dashboard/village-governments/{{ $villageGovernment->id }}"
                                                        method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-gradient-danger border-0 "
                                                            onclick="confirmDelete(event)">
                                                            <i class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="editDataModal{{ $villageGovernment->id }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="editData{{ $villageGovernment->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="editData{{ $villageGovernment->id }}">
                                                                Edit
                                                                Kategori</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form
                                                            action="/dashboard/village-governments/{{ $villageGovernment->id }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <div class="modal-body">
                                                                <div>
                                                                    <strong>Nama</strong>
                                                                    <div class="input-group input-group-outline ">
                                                                        <input type="text" name="nama" id="nama"
                                                                            class="form-control p-2 @error('nama') is-invalid @enderror"
                                                                            placeholder="Masukan nama kategori"
                                                                            value="{{ old('nama', $villageGovernment->nama) }}"
                                                                            required>
                                                                    </div>
                                                                    @error('nama')
                                                                        <div class="text-sm text-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="mt-3">
                                                                    <strong>Jabatan</strong>
                                                                    <div class="input-group input-group-outline ">
                                                                        <select class="form-control" name="jabatan"
                                                                            required>
                                                                            <option class="opacity-5" value="">Pilih
                                                                                Jabatan</option>
                                                                            <option value="Kepala Desa"
                                                                                @if ($villageGovernment->jabatan == 'Kepala Desa') selected @endif>
                                                                                Kepala Desa</option>
                                                                            <option value="Sekretaris Desa"
                                                                                @if ($villageGovernment->jabatan == 'Sekretaris Desa') selected @endif>
                                                                                Sekretaris Desa
                                                                            </option>
                                                                            <option value="Kaur Umum"
                                                                                @if ($villageGovernment->jabatan == 'Kaur Umum') selected @endif>
                                                                                Kaur Umum</option>
                                                                            <option value="Kaur Pembangunan"
                                                                                @if ($villageGovernment->jabatan == 'Kaur Pembangunan') selected @endif>
                                                                                Kaur
                                                                                Pembangunan</option>
                                                                            <option value="Kaur Keuangan"
                                                                                @if ($villageGovernment->jabatan == 'Kaur Keuangan') selected @endif>
                                                                                Kaur Keuangan
                                                                            </option>
                                                                            <option value="Kasi Pemerintahan"
                                                                                @if ($villageGovernment->jabatan == 'Kasi Pemerintahan') selected @endif>
                                                                                Kasi
                                                                                Pemerintahan</option>
                                                                            <option value="Kasi Pelayanan"
                                                                                @if ($villageGovernment->jabatan == 'Kasi Pelayanan') selected @endif>
                                                                                Kasi Pelayanan
                                                                            </option>
                                                                            <option value="Kaur Keuangan"
                                                                                @if ($villageGovernment->jabatan == 'Kaur Keuangan') selected @endif>
                                                                                Kaur Keuangan
                                                                            </option>
                                                                            <option value="Kepala Dusun I"
                                                                                @if ($villageGovernment->jabatan == 'Kepala Dusun I') selected @endif>
                                                                                Kepala Dusun I
                                                                            </option>
                                                                            <option value="Kepala Dusun II"
                                                                                @if ($villageGovernment->jabatan == 'Kepala Dusun II') selected @endif>
                                                                                Kepala Dusun II
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
                                                                            value="{{ old('purna_tugas', $villageGovernment->purna_tugas) }}"
                                                                            required>
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
                <form action="/dashboard/village-governments" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="">
                            <strong>Nama</strong>
                            <div class="input-group input-group-outline ">
                                <input type="text" name="nama" id="nama"
                                    class="form-control p-2 @error('nama') is-invalid @enderror"
                                    placeholder="Masukan nama..." value="{{ old('nama') }}" required>
                            </div>
                            @error('nama')
                                <div class="text-sm text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <strong>jabatan</strong>
                            <div class="input-group input-group-outline ">
                                <select class="form-control" name="jabatan" required>
                                    <option class="opacity-5" value="">Pilih Jabatan</option>
                                    <option value="Kepala Desa">Kepala Desa</option>
                                    <option value="Sekretaris Desa">Sekretaris Desa</option>
                                    <option value="Kaur Umum">Kaur Umum</option>
                                    <option value="Kaur Pembangunan">Kaur Pembangunan</option>
                                    <option value="Kaur Keuangan">Kaur Keuangan</option>
                                    <option value="Kasi Pemerintahan">Kasi Pemerintahan</option>
                                    <option value="Kasi Pelayanan">Kasi Pelayanan</option>
                                    <option value="Kaur Keuangan">Kaur Keuangan</option>
                                    <option value="Kepala Dusun I">Kepala Dusun I</option>
                                    <option value="Kepala Dusun II">Kepala Dusun II</option>
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
                                        required>
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
                    url: "{{ url('/village-governments/custom-sortable') }}",
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


        @if (session('success'))
            <
            script >
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: "{{ session('success') }}",
                    timer: 3000, // This will automatically close the SweetAlert after 3 seconds
                    showConfirmButton: false
                }); <
            />
        @endif
        @if (session('failed'))
            <
            script >
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: "{{ session('failed') }}",
                    timer: 5000, // This will automatically close the SweetAlert after 3 seconds
                    showConfirmButton: false
                }); <
            />
        @endif
    </script>

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
