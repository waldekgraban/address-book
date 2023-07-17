<!DOCTYPE html>
<html>
<head>
    <title>Nowy wpis do książki adresowej</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Dodaj wpis</h1>

        <form action="/" method="POST">
            <div class="mb-3">
                <label for="first_name" class="form-label">Imię:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Nazwisko:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Numer telefonu:</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Adres e-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Adres fizyczny:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <button type="submit" class="btn btn-primary">Dodaj</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
