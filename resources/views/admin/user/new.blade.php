<x-admin-layout>
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3>Pengajuan Agen/Reseller Baru</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tipe</th>
                                            <th>Email</th>
                                            <th>Telefon</th>
                                            <th>KTP</th>
                                            <th>KK</th>
                                            <th>Scan KTP</th>
                                            <th>Foto Selfie</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($new_proposals as $proposal)
                                        <tr>
                                            <td>{{ $proposal->user->name }}</td>
                                            <td>{{ $proposal->as }}</td>
                                            <td>{{ $proposal->user->email }}
                                            <td>{{ $proposal->user->phone }}
                                            <td>{{ $proposal->ktp }}</td>
                                            <td>{{ $proposal->kk }}</td>
                                            <td><a class="text-warning" href="{{ \Storage::url($proposal->file_ktp) }}">Lihat</a></td>
                                            <td><a class="text-warning" href="{{ \Storage::url($proposal->file_selfie) }}">Lihat</a></td>
                                            <td><a href="{{ route('admin.user.new.confirm', ['proposal' => $proposal->id]) }}" class="btn btn-sm btn-warning text-dark">Setujui</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="" class="form-label">Cari</label>
                                    <input type="text" class="form-control" name="" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Kategori pelanggan</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Cari" class="btn btn-warning text-dark">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-admin-layout>