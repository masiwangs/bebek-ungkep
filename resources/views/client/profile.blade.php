<x-client-layout>
    <div class="content-wrapper container">
        <div class="page-content">
            <div class="page-heading">
                <h3 class="h3 text-dark">Profil Akun</h3>
            </div>
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">Login sebagai</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <select class="form-select" aria-label="Default select example">
                                            @foreach (auth()->user()->roles as $user_role)
                                            <option value="{{ $user_role->role_id }}">{{ \Str::title($user_role->role->name) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">Nama Anda</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="text" name="name" value="{{ auth()->user()->name }}" id="" class="form-control">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">Email</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="email" readonly value="{{ auth()->user()->email }}" class="form-control">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">No HP</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="text" name="phone" value="{{ auth()->user()->phone }}" class="form-control">
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div> --}}
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Perbarui" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="h4">Menu Profil</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="{{ route('client.profile') }}" class="text-danger">Data Diri</a>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('client.security') }}" class="text-danger">Keamanan</a>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('client.proposal.agent.create') }}" class="text-danger">Pengajuan Agen</a>
                            </div>
                            <div class="mb-3">
                                <a href="" class="text-danger">Pengajuan Heureka/Industri</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-client-layout>