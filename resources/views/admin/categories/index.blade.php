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
                                Tabel Kategori
                            </h6>
                        </div>
                    </div>
                    <div class="ms-4 mt-2 pb-1">
                        <button href="" type="button" class="btn bg-gradient-primary"
                            style="margin-bottom: 0px "data-bs-toggle="modal" data-bs-target="#createCategoriesModal">
                            <i class="fas fa-plus"></i> Tambah Kategori</button>
                    </div>
                    <div class="modal fade" id="createCategoriesModal" tabindex="-1" role="dialog"
                        aria-labelledby="createCategories" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="createCategories">Tambah Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/dashboard/categories" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <strong>Nama Kategori</strong>
                                        <div class="input-group input-group-outline mt-2">
                                            <input type="text" name="nama" id="nama"
                                                class="form-control p-2 @error('nama') is-invalid @enderror"
                                                placeholder="Masukan nama kategori" value="{{ old('nama') }}" required>
                                        </div>
                                        @error('nama')
                                            <div class="text-sm text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn bg-gradient-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn bg-gradient-primary">Tambahkan
                                            Kategori</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-4 px-4 pb-2">
                        <div class="row d-flex align-items-stretch">
                            @if ($categories->count() == 0)
                                <div class="col-lg-3 col-md-6 mb-6 mx-auto">
                                    <div class="card bg-cover text-center d-flex flex-column h-100"
                                        style="background-image: url('https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/img-3.jpg');">
                                        <div class="card-body z-index-2 py-9">
                                            <h2 class="text-white">Belum Mengupload Buku</h2>
                                        </div>
                                        <div class="mask bg-gradient-primary border-radius-lg"></div>
                                    </div>
                                </div>
                            @else
                                @foreach ($categories as $category)
                                    <div class="col-lg-3 col-md-6 mb-6">
                                        <a href="/dashboard/categories/{{ $category->id }}">
                                            <div class="card bg-cover text-center d-flex flex-column h-100"
                                                style="background-image: url('https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/img-3.jpg');">
                                                <div class="card-body z-index-2 py-6">
                                                    <h2 class="text-white">{{ $category->nama }}</h2>
                                                    <h4 class="text-white">{{ $category->jumlah }} Postingan</h4>
                                                    <a class="btn bg-gradient-info "
                                                        href="/dashboard/categories/{{ $category->id }}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <button type="button" class="btn bg-gradient-warning border-0 "
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editCategoriesModal{{ $category->id }}">
                                                        <i class="fas fa-edit"></i>
                                                    </button>

                                                    <form action="/dashboard/categories/{{ $category->id }}" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn bg-gradient-danger border-0 "
                                                            onclick="confirmDelete(event)">
                                                            <i class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                                <div class="mask bg-gradient-primary border-radius-lg"></div>
                                            </div>
                                        </a>
                                    </div>


                                    <!-- Modal -->
                                    <div class="modal fade" id="editCategoriesModal{{ $category->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="editCategories{{ $category->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editCategories{{ $category->id }}">Edit
                                                        Kategori</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="/dashboard/categories/{{ $category->id }}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <div class="modal-body">
                                                        <strong>Nama Kategori</strong>
                                                        <div class="input-group input-group-outline mt-2 ">
                                                            <input type="text" name="nama" id="nama"
                                                                class="form-control p-2 @error('nama') is-invalid @enderror"
                                                                placeholder="Masukan nama kategori"
                                                                value="{{ old('nama', $category->nama) }}" required>
                                                        </div>
                                                        @error('nama')
                                                            <div class="text-sm text-danger">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn bg-gradient-primary">Simpan
                                                            Perubahan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
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
                title: 'Hapus Postingan?',
                text: "Postingan yang dihapus tidak dapat dikembalikan!",
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
