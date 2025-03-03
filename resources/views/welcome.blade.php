<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />


    </head>
    <body class="bg-light text-dark d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Login</h5>
                            <form wire:submit="login">
                                <!-- Email Address -->
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input
                                        wire:model="email"
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        required
                                        autofocus
                                        autocomplete="email"
                                        placeholder="email@example.com"
                                    />
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input
                                        wire:model="password"
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        required
                                        autocomplete="current-password"
                                        placeholder="Password"
                                    />
                                </div>

                                <!-- Remember Me -->
                                <div class="form-check">
                                    <input
                                        wire:model="remember"
                                        type="checkbox"
                                        class="form-check-input"
                                        id="remember"
                                    />
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary w-100">Log in</button>
                                </div>

                                @if (Route::has('password.request'))
                                    <div class="text-center mt-2">
                                        <a href="{{ route('password.request') }}" class="text-muted">Forgot your password?</a>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
            @livewire('auth.login')
        </div>

        <!-- Bootstrap JS (Optional for interactivity like modals, tooltips) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

</html>
