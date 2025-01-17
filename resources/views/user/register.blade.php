<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">User Registration</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('user.register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="user_name" class="form-label">Full Name</label>
                                <input type="text" class="form-control @error('user_name') is-invalid @enderror"
                                    id="user_name" name="user_name" value="{{ old('user_name') }}" required>
                                @error('user_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="user_email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('user_email') is-invalid @enderror"
                                    id="user_email" name="user_email" value="{{ old('user_email') }}" required>
                                @error('user_email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="user_password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('user_password') is-invalid @enderror"
                                    id="user_password" name="user_password" required>
                                @error('user_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="user_password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control"
                                    id="user_password_confirmation" name="user_password_confirmation" required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>

                        <div class="mt-3 text-center">
                            <p>Already have an account? <a href="{{ route('user.login') }}">Login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
