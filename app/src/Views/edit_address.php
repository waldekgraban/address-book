<!DOCTYPE html>
<html>
<head>
    <title>Edytuj wpis w książce adresowej</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edytuj wpis w książce adresowej</h1>

        <form action="/" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?php echo $address->id; ?>">

            <div class="mb-3">
                <label for="first_name" class="form-label">Imię:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $address->first_name; ?>" required>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Nazwisko:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $address->last_name; ?>" required>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Numer telefonu:</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $address->phone_number; ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Adres e-mail:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $address->email; ?>" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Adres fizyczny:</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo $address->address; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Zapisz</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
