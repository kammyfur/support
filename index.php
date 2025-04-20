<?php

function l(string $en, string $fr) {
    if (str_starts_with($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'fr')) {
        return $fr;
    } else {
        return $en;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= l("Equestria.dev Support Center", "Centre de support Equestria.dev") ?></title>
    <link rel="shortcut icon" href="/support.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <br>
        <h1><?= l("Equestria.dev Support Center", "Centre de support Equestria.dev") ?></h1>
        <br>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?= l("Login with Familine", "Se connecter avec Familine") ?></h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?= l("Login with Equestria.horse", "Se connecter avec Equestria.horse") ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>