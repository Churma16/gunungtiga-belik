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
                                Tabel Postingan
                            </h6>
                        </div>
                    </div>
                    <div class="d-flex px-3 pt-2">
                        <a class="btn btn-primary" href="/dashboard/posts/create"><i class="fas fa-plus"></i> Buat
                            Postingan</a>
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
                                            class="text-uppercase text-center text-secondary text-xs font-weight-bolder opacity-10">
                                            Gambar
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10 ps-2">
                                            Judul
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">
                                            Tanggal Posting
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">
                                            Penulis
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">
                                            Aksi
                                        </th>
                                        <th class="text-secondary opacity-10"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (empty($posts))
                                        <tr>
                                            <td colspan="7">
                                                <p class="text-xs font-weight-bold mb-0 text-center">
                                                    Tidak Ada Data Postingan
                                                </p>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td class="">
                                                    <span
                                                        class="text-secondary  text-xs font-weight-bold ps-4">{{ $loop->iteration }}</span>
                                                </td>
                                                <td class="align-middle text-center" style="max-width: 50px">
                                                    <img src="{{ asset('storage/' . $post->gambar) }}" class="me-3 rounded"
                                                        alt="user1" width="100%" />
                                                </td>
                                                <td class="align-middle">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $post->judul }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs ">{{ $post->post_date }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs ">{{ $post->user->name }}</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center" style="gap:4px">
                                                        <a href="/dashboard/posts/{{ $post->slug }}">
                                                            <button class="badge bg-primary border-0"><i
                                                                    class="fas fa-eye"></i>
                                                            </button>
                                                        </a>
                                                        <a>
                                                            <button class="badge bg-warning border-0"><i
                                                                    class="fas fa-edit"></i>
                                                            </button>
                                                        </a>
                                                        <form action="/dashboard/posts/{{ $post->slug }}" method="post"
                                                            class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="badge bg-gradient-danger border-0 "
                                                                onclick="confirmDelete(event)">
                                                                <i class="fas fa-trash"></i></button>
                                                        </form>
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
