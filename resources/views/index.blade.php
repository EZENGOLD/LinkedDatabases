@php
    // dd($universites);
@endphp

<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'EPAC') }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome5/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<section class="bg-dark col-lg-12">
    <section class="wrapper">
        <div class="row col-lg-12">
            <div class="col-lg-11 mt-5" style="margin: auto">
                <div class="card col-lg-6 m-auto">
                    <div class="card-header">
                        <h5>{{ $nom }}</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">Slug</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($universites as $un)
                                    <tr>
                                        <td class="text-center">{{ $un->nom }}</td>
                                        <td class="text-center">{{ $un->slug }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-11 mt-3 mb-3" style="margin: auto">
                <div class="card p-0 col-lg-6 m-auto border-0">
                    <div class="card-header bg-secondary">
                        <h5 class="text-center text-white">Posts</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded-lg mb-2">
                            <h6 class="text-right text-danger">GIT</h6>
                            <div class="col-lg-11">
                                @if ($git_posts->count() == 0)
                                    <div class="col-lg-11">
                                        <p class="text-center">Aucun post pour le moment</p>
                                    </div>
                                @else
                                @foreach ($git_posts as $post)
                                    <div class="col-lg-11">
                                        <h4 class="text-info" style="font-weight: bold">{{ $post->titre }}</h4>
                                        <p>{{ $post->contenu }}</p>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="border p-3 rounded-lg mb-2">
                            <h6 class="text-right text-danger">ABM</h6>
                            <div class="col-lg-11">
                                @if ($abm_posts->count() == 0)
                                    <div class="col-lg-11">
                                        <p class="text-center">Aucun post pour le moment</p>
                                    </div>
                                @else
                                    @foreach ($abm_posts as $post)
                                    <div class="col-lg-11">
                                        <h4 class="text-warning" style="font-weight: bold">{{ $post->titre }}</h4>
                                        <p>{{ $post->contenu }}</p>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="border p-3 rounded-lg mb-2">
                            <h6 class="text-right text-danger">PSA</h6>
                            <div class="col-lg-11">
                                @if ($psa_posts->count() == 0)
                                    <div class="col-lg-11">
                                        <p class="text-center">Aucun post pour le moment</p>
                                    </div>
                                @else
                                    @foreach ($psa_posts as $post)
                                    <div class="col-lg-11">
                                        <h4 class="text-warning" style="font-weight: bold">{{ $post->titre }}</h4>
                                        <p>{{ $post->contenu }}</p>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>


                        <div class="row col-lg-12">
                            <div class="col-lg-10 float-clear" style="margin: auto; margin-top: 1%;">
                                @if (session('error'))
                                <div class="alert alert-danger alert-dismissable out-sm-anim">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Echec !</strong><br> {{ session('error') }}
                                </div>
                                @endif

                                @if (session('success'))
                                <div class="alert alert-success alert-dismissable out-sm-anim">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Félicitations !</strong><br> {{ session('success') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <form class="form-horizontal m-auto style-form col-lg-8 p-3" method="POST" action="{{ route('post.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="titre" class="control-label col-lg-12">Titre *</label>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <input class="form-control" id="titre" name="titre" value="{{ old('titre') }}" minlength="2" type="text" required />
                                        @error('titre')
                                        <div style="font-size: 70%; padding: 5px 10% 0% 5px; color: red" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="contenu" class="control-label col-lg-12">Contenu du Post *</label>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <textarea class="form-control" name="contenu" value="{{ old('contenu') }}" minlength="2" id="contenu" required></textarea>
                                        @error('contenu')
                                        <div style="font-size: 70%; padding: 5px 10% 0% 5px; color: red" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="universite" class="control-label col-lg-12">Département *</label>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="mr-sm-2 sr-only" for="universite">Département</label>
                                        <select class="custom-select mr-sm-2" name="universite" id="universite">
                                            <option value="" selected>Choisissez...</option>
                                            @foreach ($universites as $un)
                                            <option value="{{ $un->id }}">{{ $un->nom }}</option>
                                            @endforeach
                                        </select>
                                        @error('universite')
                                        <div style="font-size: 70%; padding: 5px 10% 0% 5px; color: red" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="text-center m-auto">
                                <button class="btn btn-outline-secondary" type="submit">Ajouter <i class="fa fa-save ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<script src="{{ asset('bootstrap/js/jquery-3.5.1.slim.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
