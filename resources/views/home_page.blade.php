<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- styles --}}
        {{-- @vite('resources/css/app.css') --}}
        @vite('node_modules/bootstrap/dist/css/bootstrap.css')

        {{-- bs js --}}
        @vite('node_modules/bootstrap/dist/js/bootstrap.bundle.js')
        @vite('resources/js/app.js')
        @vite('resources/js/perkembangan.js')

        {{-- icon --}}
        @vite('node_modules/bootstrap-icons/font/bootstrap-icons.css')
    </head>
    <body>
        <div class="container vh-100 mx-0">
            <div class="row bg-secondary vh-100 vw-100">
                <div class="w-50 position-absolute top-50 start-50 translate-middle text-center">
                    <div class="bg-white p-4 rounded-3">
                        <h2 class="fw-bold text-uppercase mb-5">Deteksi Gangguan Autisme</h2>
                        <form class="d-flex" role="">
                            <input class="w-50 form-control me-2" type="search" placeholder="Umur Anak">
                            <input class="form-control me-2" type="search" placeholder="Masukkan gejala">
                            <button class="btn btn-outline-success" type="submit">Periksa</button>
                        </form>
                        <div class="mt-3">
                            <h6>ingin fitur lebih?</h6>
                            <form action="">
                                <a href="{{ route('home_dasboard') }}" class="btn bg-primary me-2" style="min-width: 10vw;">Login</a>
                                <a class="btn btn-danger" style="min-width: 10vw;">Register</a>
                            </form>
                        </div>

                        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  ...
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>
