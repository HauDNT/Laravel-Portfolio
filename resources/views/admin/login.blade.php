<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Login</title>
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/css/admin_side.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/css/admin_side.css" />
</head>

<body>
    <div class="admin-login-wrapper">
        <div class="admin-login-content d-flex">
            <div class="admin-login-title-side w-50 p-2 d-none d-md-block">
                <h1 class="admin-login-title-side--heading lh-base">Welcome to <br />
                    <span class="website-brand">My Portfolio</span>
                </h1>
                <span class="admin-login-title-side--divide"></span>
                <p class="admin-login-title-side--detail">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, architecto nihil cumque suscipit,
                    eius dolor, impedit laudantium modi molestiae nobis itaque? Tempora nesciunt quas voluptate a
                    pariatur quidem sit dolor.
                </p>
            </div>
            <div class="admin-login-form-side d-flex flex-column justify-content-center align-items-start w-50 ms-3">
                <h1 class="text-center w-100">Login</h1>
                <div class="admin-login-form w-100">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        <p class="admin-login-form--field-title">Username</p>
                        <input type="text" name="username" class="admin-login-form--field-input"
                            placeholder="Enter your username" />
                        <p class="admin-login-form--field-title">Password</p>
                        <input type="password" name="password" class="admin-login-form--field-input"
                            placeholder="Enter your password" />

                        @if ($errors->any())
                            <div style="color: red; padding: 10px 0;">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <div class="admin-login-form--submit">
                            <button>Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.js"
        integrity="sha512-XJgPMFq31Ren4pKVQgeD+0JTDzn0IwS1802sc+QTZckE6rny7AN2HLReq6Yamwpd2hFe5nJJGZLvPStWFv5Kww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="/js/app.js"></script>
</body>

</html>
