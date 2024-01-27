{{-- @dd((empty($posts))) --}}
@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">
                                Tabel Kelola Admin
                            </h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10"
                                            style="width: fit-content;">
                                            No.
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10 ps-2">
                                            Nama
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10 ps-2">
                                            Email
                                        </th>
                                        <th
                                            class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-10 ps-2">
                                            Tanggal Daftar
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">
                                            Aksi
                                        </th>
                                        <th class="text-secondary opacity-10"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($users) == 0)
                                        <tr>
                                            <td colspan="7">
                                                <p class="text-xs font-weight-bold mb-0 text-center">
                                                    Tidak Ada Data Postingan
                                                </p>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="">
                                                    <span
                                                        class="text-secondary  text-xs font-weight-bold ps-4">{{ $loop->iteration }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $user->name }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="text-secondary text-xs ">{{ $user->email }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs ">{{ $user->registration_date }}</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center" style="gap:4px">
                                                        <a href="/activate/{{ $user->id }}">
                                                            <button
                                                                class="badge {{ $user->email_verified_at ? 'bg-success' : 'bg-primary' }} border-0"
                                                                {{ $user->email_verified_at ? 'disabled' : '' }}>
                                                                <i class="fas fa-check-circle"></i>
                                                                {{ $user->email_verified_at ? 'Terverifikasi' : 'Verifikasi' }}
                                                            </button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
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
@endsection

@section('scripts')
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
                title: 'Hapus Kategori?',
                text: "Kategori yang dihapus tidak dapat dikembalikan!",
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
