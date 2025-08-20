@extends('layouts.app')
@section('title', 'Dashboard')
@section('data')
<div class="row justify-content-left">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="m-0 font-weight-bold">Profil Pengembang</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center mb-md-0 mb-4">
                        <img class="img-fluid rounded-circle shadow" src="{{ asset('template/img/teguh.jpg') }}"
                            alt="Foto Profil" style="max-width: 150px;">
                    </div>
                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tr>
                                <td style="width: 40%;">Nama Pengembang</td>
                                <td>Teguh Muhamad Ridhuwan</td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td>
                                    teguhmuhamadridhuwan@gmail.com<br>
                                    +6285795506810
                                </td>
                            </tr>
                            <tr>
                                <td>Mahasiswa</td>
                                <td>
                                    Politeknik Balekambang
                                </td>
                            </tr>
                        </table>
                        <p class="text-center mb-0">Connect with me: <a
                                href="https://www.instagram.com/lembayungsenja_06?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"
                                class="text-primary">Instagram</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection