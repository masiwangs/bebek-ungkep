<x-client-layout>
    <div class="content-wrapper container">
        <div class="page-content">
            <div class="page-heading">
                <h3 class="h3 text-dark">Pengajuan Kemitraan Agen</h3>
            </div>
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">Link proposal</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <p><a href="https://drive.google.com/file/d/12Ms2TVLuuXbDrG2sSPCpy9KtOMRvclOq/view">https://drive.google.com/file/d/12Ms2TVLuuXbDrG2sSPCpy9KtOMRvclOq/view</a></p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">No KTP</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="text" name="ktp" value="" class="form-control">
                                        @error('ktp')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">No KK</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="text" name="kk" value="" class="form-control">
                                        @error('kk')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">Scan KTP</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="file" name="up_ktp" class="form-control">
                                        @error('file_ktp')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4 col-lg-2 d-lg-flex justify-content-end">
                                        <label for="" class="form-label">Foto Diri</label>
                                    </div>
                                    <div class="col-8 col-lg-10">
                                        <input type="file" name="up_selfie" class="form-control">
                                        @error('file_selfie')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Ajukan Diri sebagai Agen" class="btn btn-danger">
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