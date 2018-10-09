<!DOCTYPE html>
<html>
<head>
    <title>Formulir Tambah Barang</title>
</head>

<body>

    <form action="tambahUser.php" method="POST" enctype="multipart/form-data">

        <fieldset>

        <p>
            <label for="Name">Nama: </label>
            <input type="text" name="Name" placeholder="Nama" />
        </p>
        <p>
            <label for="Email">Email: </label>
            <input type="Email" name="Email" placeholder="email" />
        </p>
        <p>
            <label for="Password">Password: </label>
            <input type="password" name="Password" placeholder="password" />
        </p>
        <p>
            <label for="Foto">Foto: </label>
            <input type="file" name="Foto">
        </p>
        <p>
            <label for="Phone">Phone: </label>
            <input type="text" name="Phone" placeholder="phone" />
        </p>
        
        <p>
            <input type="submit" value="Daftarkan" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>