<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- styles --}}
        {{-- @vite('resources/css/app.css') --}}
        @vite('resources/css/customFont.css')
        @vite('node_modules/bootstrap/dist/css/bootstrap.css')
        {{-- @vite('node_modules/toastr/build/toastr.css') --}}
        {{-- bs js --}}
        @vite('node_modules/bootstrap/dist/js/bootstrap.bundle.js')
        @vite('resources/js/app.js')
        @vite('resources/js/perkembangan.js')
        @vite('resources/js/data_anak.js')
        {{-- @vite('node_modules/toastr/build/toastr.js') --}}

        {{-- icon --}}
        @vite('node_modules/bootstrap-icons/font/bootstrap-icons.css')
    </head>
    <body style="font-family: 'Montserrat'">
        <div class="container vh-100 mx-0">
            <div class="row bg-primary vh-100 vw-100">

                 {{-- side menu --}}
                <div style="max-width: 20vw" class="d-lg-block d-sm-none bg-primary-subtle text-white p-2">
                    <div class="" style="height: 13vh;">
                        
                    </div>
                    {{--  border-top border-primary-subtle border-2 --}}
                    <div class="offcanvas-body mt-3">
                        <div class="accordian accordion-flush" id="parentMenu">
                            <div class="accordion-item mt-2">
                                <div class="accordian-header">
                                    <a class="btn accordion-button" href="{{ route('home_dasboard') }}"><i class="bi bi-clipboard-data-fill fs-4 text-body-secondary"></i><span class="text-body-secondary ms-3 fs-5 fw-bold text-uppercase">Dasboard</span>
                                    </a>
                                </div>
                            </div>

                            <div class="accordion-item mt-2 mb-4">
                                <div class="accordian-header">
                                    <a class="btn accordion-button" href="{{ route('hasil') }}"><i class="bi bi-file-medical-fill fs-5 text-body-secondary"></i><span class="text-body-secondary ms-3 fs-5 fw-bold text-uppercase">Hasil Diagnosa</span>
                                    </a>
                                </div>
                                {{-- <div id="menu_diagnosa" class="accordiom-collapse" data-bs-parent="#parentMenu">
                                    <div class="accordion-body ms-5">
                                        <a class="btn d-block fs-6 p-0 w-100 fw text-start" href="{{ route('riwayat_diagnosa') }}">Riwayat</a>
                                        <a class="btn d-block fs-6 p-0 w-100 fw text-start" href="{{ route('hasil') }}">Hasil Diagnosa</a>
                                        <a class="btn d-block fs-6 p-0 fw w-100 text-start" href="{{ route('perkembangan') }}">Perkembangan</a>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="accordion-item mt-2">
                                <div class="accordian-header">
                                    <button class="accordion-button collapsed"><i class="bi bi-person-check fs-4 text-body-secondary"></i><span class="ms-3 fs-5 fw-bold text-uppercase text-body-secondary">Konsultasi</span>
                                    </button>
                                </div>
                                <div id="menu_pakar" class="accordiom-collapse" data-bs-parent="#parentMenu">
                                    <div class="accordion-body ms-5">
                                        <a class="btn d-block fs-6 p-0 fw w-100 text-start" href="{{ route('jadwal') }}">Jadwal Konsultasi</a>
                                        <a class="btn d-block fs-6 p-0 fw w-100 text-start" href="{{ route('riwayat') }}">Riwayat Konsultasi</a>
                                        <a class="btn d-block fs-6 p-0 fw w-100 text-start" href="{{ route('pakar') }}">Data Pakar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mt-2">
                                <div class="accordian-header">
                                    <button class="accordion-button collapsed"><i class="bi bi-virus fs-4 text-body-secondary"></i><span class="ms-3 fs-5 fw-bold text-uppercase text-body-secondary">Data Gangguan</span>
                                    </button>
                                </div>
                                <div id="menu_autisme" class="accordiom-collapse" data-bs-parent="#parentMenu">
                                    <div class="accordion-body ms-5">
                                        <a class="btn d-block fs-6 p-0 fw w-100 text-start" href="{{ route('jenis') }}">Jenis</a>
                                        <a class="btn d-block fs-6 p-0 fw w-100 text-start" href="{{ route('gejala') }}">Gejala</a>
                                        <a class="btn d-block fs-6 p-0 fw w-100 text-start" href="{{ route('penanganan') }}">Penanganan</a>
                                        <a class="btn d-block fs-6 p-0 fw w-100 text-start" href="{{ route('aturan') }}">Aturan</a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="accordion-item mt-2">
                                <div class="accordian-header">
                                    <button class="accordion-button collapsed"><i class="bi bi-people fs-4 text-body-secondary"></i><span class="ms-3 fs-5 fw-bold text-uppercase text-body-secondary">Profile</span>
                                    </button>
                                </div>
                                <div id="menu_autisme" class="accordiom-collapse" data-bs-parent="#parentMenu">
                                    <div class="accordion-body ms-5">
                                        <a class="btn d-block fs-6 p-0 fw w-100 text-start" href="{{ route('pakar') }}">Pakar</a>
                                        <a class="btn d-block fs-6 p-0 fw w-100 text-start" href="{{ route('gejala') }}">Pengguna</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        
                    </div>          
                </div>

                {{-- respon rendah --}}
                <div class="d-lg-none position-absolute start-0 z-1 mt-5">
                    <button class="btn btn-primary d-block mb-3" data-bs-toggle="offcanvas" data-bs-target="#side_menu"><i class="bi bi-list fs-1"></i></i></button>
                    {{-- <a class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Profil" href="{{ route('home_dasboard') }}"><i class="bi bi-house-door-fill fs-1"></i></a> --}}
                </div>
                
                {{-- side menu --}}
                <div style="max-width: 50vw" class="offcanvas offcanvas-start bg-primary text-white p-2" id="side_menu">
                    <div class="bg-white rounded-2">
                        <div class="p-2 w-100">
                            <div class="row text-primary">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="bi bi-person-bounding-box fs-2"></i>
                                    <span class="fs-4 text-uppercase fw-semibold">pengguna</span>
                                    <i class="bi bi-bell-fill fs-4"></i>
                                </div>
                                {{-- <div class="col-auto">
                                    <span class="fs-2">USERNAME</span>
                                </div> --}}
                            </div>
                            {{-- <div class="text-center text-black">
                                <span>Status</span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="offcanvas-body mt-3">
                        <div class="accordian accordion-flush" id="parentMenu">
                            <div class="accordion-item">
                                <div class="accordian-header">
                                    <button class="accordion-button collapsed"><i class="bi bi-file-medical-fill fs-4"></i><span class="ms-3 fs-5 fw-bold text-uppercase">Diagnosa</span>
                                    </button>
                                </div>
                                <div id="menu_diagnosa" class="accordiom-collapse" data-bs-parent="#parentMenu">
                                    <div class="accordion-body ms-5">
                                        {{-- <a class="btn d-block fs-5 p-0 w-100 fw-semibold text-start" href="{{ route('riwayat') }}">Riwayat</a> --}}
                                        <a class="btn d-block fs-5 p-0 w-100 fw-semibold text-start" href="{{ route('hasil') }}">Hasil Diagnosa</a>
                                        {{-- <a class="btn d-block fs-5 p-0 fw-semibold w-100 text-start" href="{{ route('perkembangan') }}">Perkembangan</a> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mt-2">
                                <div class="accordian-header">
                                    <button class="accordion-button collapsed"><i class="bi bi-person-check fs-4"></i><span class="ms-3 fs-5 fw-bold text-uppercase">Pakar</span>
                                    </button>
                                </div>
                                <div id="menu_pakar" class="accordiom-collapse" data-bs-parent="#parentMenu">
                                    <div class="accordion-body ms-5">
                                        <a class="btn d-block fs-5 p-0 fw-semibold w-100 text-start" href="{{ route('jadwal') }}">Jadwal Konsultasi</a>
                                        <a class="btn d-block fs-5 p-0 fw-semibold w-100 text-start" href="{{ route('riwayat') }}">Riwayat Konsultasi</a>
                                        <a class="btn d-block fs-6 p-0 fw w-100 text-start" href="{{ route('pakar') }}">Data Pakar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mt-2">
                                <div class="accordian-header">
                                    <button class="accordion-button collapsed"><i class="bi bi-virus fs-4"></i><span class="ms-3 fs-5 fw-bold text-uppercase">Data Autisme</span>
                                    </button>
                                </div>
                                <div id="menu_autisme" class="accordiom-collapse" data-bs-parent="#parentMenu">
                                    <div class="accordion-body ms-5">
                                        <a class="btn d-block fs-5 p-0 fw-semibold w-100 text-start" href="{{ route('jenis') }}">Jenis</a>
                                        <a class="btn d-block fs-5 p-0 fw-semibold w-100 text-start" href="{{ route('gejala') }}">Gejala</a>
                                        <a class="btn d-block fs-5 p-0 fw-semibold w-100 text-start" href="{{ route('penanganan') }}">Penanganan</a>
                                        <a class="btn d-block fs-5 p-0 fw-semibold w-100 text-start" href="{{ route('aturan') }}">Aturan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>   
                </div>

                {{-- navbar --}}
                <div class="w-100 bg-primary-subtle p-4 position-absolute start-0 z-1 shadow">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <img src="{{ asset('storage/images/logo.svg') }}" alt="" style="height: 6vh">
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-envelope-fill me-4 fs-4"></i>
                            <i class="bi bi-bell-fill me-4 fs-4"></i>
                            <i class="bi bi-person-bounding-box fs-3"></i></div>
                    </div>
                </div>

                {{-- konten --}}
                <div class="col bg-secondary p-4 d-flex align-items-center">
                    <div style="max-height: 92vh; min-height: 92vh" class="card w-100 p-4">
                        <div class="mt-5"  data-bs-spy="scroll" data-bs-smooth-scroll="true" style="overflow-y: scroll">
                            @yield('container')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
