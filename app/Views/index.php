<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css?v=3.2.0') ?>">

    <script>
    (function(w, d) {
        function(j, k, l, m) {
            j[l] = j[l] || {};
            j[l].executed = [];
            j.zaraz = {
                deferred: [],
                listeners: []
            };
            j.zaraz.q = [];
            j.zaraz._f = function(n) {
                return async function() {
                    var o = Array.prototype.slice.call(arguments);
                    j.zaraz.q.push({
                        m: n,
                        a: o
                    })
                }
            };
            for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
            j.zaraz.init = () => {
                var q = k.getElementsByTagName(m)[0],
                    r = k.createElement(m),
                    s = k.getElementsByTagName("title")[0];
                s && (j[l].t = k.getElementsByTagName("title")[0].text);
                j[l].x = Math.random();
                j[l].w = j.screen.width;
                j[l].h = j.screen.height;
                j[l].j = j.innerHeight;
                j[l].e = j.innerWidth;
                j[l].l = j.location.href;
                j[l].r = k.referrer;
                j[l].k = j.screen.colorDepth;
                j[l].n = k.characterSet;
                j[l].o = (new Date).getTimezoneOffset();
                if (j.dataLayer)
                    for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                            ...x[1],
                            ...y[1]
                        })), {}))) zaraz.set(w[0], w[1], {
                        scope: "page"
                    });
                j[l].q = [];
                for (; j.zaraz.q.length;) {
                    const z = j.zaraz.q.shift();
                    j[l].q.push(z)
                }
                r.defer = !0;
                for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith(
                    "_zaraz_"))).forEach((B => {
                    try {
                        j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                    } catch {
                        j[l]["z_" + B.slice(7)] = A.getItem(B)
                    }
                }));
                r.referrerPolicy = "origin";
                r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                q.parentNode.insertBefore(r, q)
            };
            ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
    </script>
    <script>
    function showError(message) {
        var errorDiv = document.getElementById('error-message');
        errorDiv.innerHTML = '<div class="alert alert-danger" role="alert">' + message + '</div>';
    }

    // Fungsi untuk memeriksa URL setelah submit dan menampilkan pesan kesalahan jika diperlukan
    function checkLoginError() {
        var urlParams = new URLSearchParams(window.location.search);
        var errorParam = urlParams.get('error');

        if (errorParam === 'error') {
            showError('NO KK atau Password salah. Silakan coba lagi.');
        }
    }

    // Panggil fungsi checkLoginError saat halaman dimuat
    document.addEventListener('DOMContentLoaded', checkLoginError);

    // Fungsi untuk memvalidasi formulir sebelum dikirim
    function validateForm() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Implementasikan logika validasi yang sesuai di sini
        // Contoh: Cek apakah kedua input tidak kosong
        if (username.trim() === '' || password.trim() === '') {
            showError('NO KK dan Password harus diisi.');
            return false; // Form tidak dikirim
        }

        // Jika ingin menambahkan logika validasi lainnya, tambahkan di sini

        // Jika validasi berhasil, kosongkan pesan kesalahan dan kembalikan true
        document.getElementById('error-message').innerHTML = '';
        return true; // Form dikirim
    }
    </script>
    <script>
    // ...

    // Fungsi untuk memeriksa URL setelah submit dan menampilkan pesan kesalahan jika diperlukan
    function checkLoginError() {
        var urlParams = new URLSearchParams(window.location.search);
        var errorParam = urlParams.get('error');

        if (errorParam === 'error') {
            showError('NO KK atau Password salah. Silakan coba lagi.');

            // Tambahkan logika untuk memeriksa jumlah kesalahan login
            var loginAttemptsParam = urlParams.get('login_attempts');
            var loginAttempts = parseInt(loginAttemptsParam);

            if (!isNaN(loginAttempts) && loginAttempts > 3) {
                showError(
                    'Mohon maaf, sepertinya Anda belum teraktivasi. Silakan hubungi kami di kantor Desa Mekarjaya untuk aktivasi akun.'
                );
            }
        }
    }

    // ...
    </script>



</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="assets/index2.html"><b>Admin</b>DESA</a>
        </div>


        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Masukan Username dan Password</p>
                <form action="" method="POST">

                    <?php if(session()->getFlashdata('error')) { ?>
                    <div class="alert alert-danger">
                        <?php echo session()->getFlashdata('error')?>

                    </div>
                    <?php } ?>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username"
                            value="<?php echo session()->getFlashdata('username')?>">
                        <!-- ... -->
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password"
                            name="password">
                        <!-- ... -->
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" name="login" class="btn btn-primary btn-block" value="LOGIN">Sign
                                In</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/dist/js/adminlte.min.js?v=3.2.0') ?>"></script>
</body>

</html>