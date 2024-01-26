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
                                Tabel Karang Taruna
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
                                    @if (count($karangTarunas) == 0)
                                        <tr>
                                            <td colspan="5">
                                                <p class="text-xs font-weight-bold mb-0 text-center">
                                                    Tidak Ada Data Anggota Karang Taruna
                                                </p>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($karangTarunas as $karangTaruna)
                                            <tr data-id="{{ $karangTaruna->id }}" class="row1">
                                                <td class="">
                                                    <span class="text-secondary  text-xs font-weight-bold ps-4"><i
                                                            class="fa fa-sort"></i></span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $karangTaruna->nama }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $karangTaruna->jabatan }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $karangTaruna->formatted_purna_tugas }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a>
                                                        <button data-bs-toggle="modal"
                                                            data-bs-target="#editDataModal{{ $karangTaruna->id }}"
                                                            class="badge bg-warning border-0"><i class="fas fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <form action="/dashboard/karang-tarunas/{{ $karangTaruna->id }}" method="post"
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
                                            <div class="modal fade" id="editDataModal{{ $karangTaruna->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="editData{{ $karangTaruna->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editData{{ $karangTaruna->id }}">
                                                                Edit
                                                                Kategori</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="/dashboard/karang-tarunas/{{ $karangTaruna->id }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <div class="modal-body">
                                                                <div>
                                                                    <strong>Nama</strong>
                                                                    <div class="input-group input-group-outline ">
                                                                        <input type="text" name="nama" id="nama"
                                                                            class="form-control p-2 @error('nama') is-invalid @enderror"
                                                                            placeholder="Masukan nama kategori"
                                                                            value="{{ old('nama', $karangTaruna->nama) }}" required>
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
                                                                            <option class="opacity-5" value="">Pilih Jabatan</option>
                                                                            <option value="Ketua" @if ($karangTaruna->jabatan == 'Ketua') selected @endif>Ketua</option>
                                                                            <option value="Sekretaris" @if ($karangTaruna->jabatan == 'Sekretaris') selected @endif>Sekretaris</option>
                                                                            <option value="Bendahara 1" @if ($karangTaruna->jabatan == 'Bendahara 1') selected @endif>Bendahara 1</option>
                                                                            <option value="Bendahara 2" @if ($karangTaruna->jabatan == 'Bendahara 2') selected @endif>Bendahara 2</option>
                                                                            <option value="Koordinator Bidang Lingkungan Hidup" @if ($karangTaruna->jabatan == 'Koordinator Bidang Lingkungan Hidup') selected @endif>Koordinator Bidang Lingkungan Hidup</option>
                                                                            <option value="Koordinator Bidang Olahraga" @if ($karangTaruna->jabatan == 'Koordinator Bidang Olahraga') selected @endif>Koordinator Bidang Olahraga</option>
                                                                            <option value="Koordinator Bidang Kesejahteraan Sosial" @if ($karangTaruna->jabatan == 'Koordinator Bidang Kesejahteraan Sosial') selected @endif>Koordinator Bidang Kesejahteraan Sosial</option>
                                                                            <option value="Koordinator Bidang Pendidikan dan Pelatihan, Bidang Humas" @if ($karangTaruna->jabatan == 'Koordinator Bidang Pendidikan dan Pelatihan, Bidang Humas') selected @endif>Koordinator Bidang Pendidikan dan Pelatihan, Bidang Humas</option>
                                                                            <option value="Koordinator Bidang Kerohanian" @if ($karangTaruna->jabatan == 'Koordinator Bidang Kerohanian') selected @endif>Koordinator Bidang Kerohanian</option>
                                                                            <option value="Koordinator Bidang Kewira usahaan" @if ($karangTaruna->jabatan == 'Koordinator Bidang Kewirausahaan') selected @endif>Koordinator Bidang Kewirausahaan</option>
                                                                            <option value="Koordinator Bidang Jurnalis" @if ($karangTaruna->jabatan == 'Koordinator Bidang Jurnalis') selected @endif>Koordinator Bidang Jurnalis</option>
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
                                                                            value="{{ old('purna_tugas', $karangTaruna->purna_tugas) }}"
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
                <form action="/dashboard/karang-tarunas" method="POST">
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
                            <strong>Jabatan</strong>
                            <div class="input-group input-group-outline ">
                                <select class="form-control" name="jabatan" required>
                                    <option class="opacity-5" value="">Pilih
                                        Jabatan</option>
                                    <option value="Ketua">Ketua</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                    <option value="Bendahara 1">Bendahara 1</option>
                                    <option value="Bendahara 2">Bendahara 2</option>
                                    <option value="Koordinator Bidang Lingkungan Hidup">Koordinator Bidang Lingkungan Hidup</option>
                                    <option value="Koordinator Bidang Olahraga">Koordinator Bidang Olahraga</option>
                                    <option value="Koordinator Bidang Kesejahteraan Sosial">Koordinator Bidang Kesejahteraan Sosial</option>
                                    <option value="Koordinator Bidang Pendidikan dan Pelatihan, Bidang Humas">Koordinator Bidang Pendidikan dan Pelatihan, Bidang Humas</option>
                                    <option value="Koordinator Bidang Kerohanian">Koordinator Bidang Kerohanian</option>
                                    <option value="Koordinator Bidang Kewirausahaan">Koordinator Bidang Kewirausahaan</option>
                                    <option value="Koordinator Bidang Jurnalis">Koordinator Bidang Jurnalis</option>
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
                    url: "{{ url('/karang-tarunas/custom-sortable') }}",
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
