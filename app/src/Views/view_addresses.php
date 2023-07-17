<!DOCTYPE html>
<html>
<head>
    <title>Książka adresowa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Książka adresowa</h1>

        <table class="table">
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Numer telefonu</th>
                <th>Adres e-mail</th>
                <th>Adres fizyczny</th>
                <th>Akcje</th>
            </tr>
            <?php foreach ($addresses as $address): ?>
            <tr>
                <td><?php echo $address->first_name; ?></td>
                <td><?php echo $address->last_name; ?></td>
                <td><?php echo $address->phone_number; ?></td>
                <td><?php echo $address->email; ?></td>
                <td><?php echo $address->address; ?></td>
                <td>
                    <form action="/" method="POST" style="display: inline-block;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="<?php echo $address->id; ?>">
                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
                    <a href="/edit/<?php echo $address->id; ?>" class="btn btn-primary">Edytuj</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <a href="/add" class="btn btn-success">Dodaj wpis</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
