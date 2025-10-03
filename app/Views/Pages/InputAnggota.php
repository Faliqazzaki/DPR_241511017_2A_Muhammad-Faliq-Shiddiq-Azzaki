<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="col">
                <form action="/input/anggota" method="post">
                    <label for="nama_depan">Nama depan</label>    
                    <input type="text" name="nama_depan" id="nama_depan" required>
                    <br><br>
                    <label for="nama_belakang">Nama belakang</label>    
                    <input type="text" name="nama_belakang" id="nama_belakang" required>
                    <br><br>
                    <label for="gelar_depan">Gelar depan</label>    
                    <input type="text" name="gelar_depan" id="gelar_depan" required>
                    <br><br>
                    <label for="gelar_belakang">Gelar belakang</label>    
                    <input type="text" name="gelar_belakang" id="gelar_belakang" required>
                    <br><br>
                    <label for="jabatan">Jabatan</label>    
                    <input type="text" name="jabatan" id="jabatan" required>
                    <br><br>
                    <label for="status_pernikahan">Status Pernikahan</label>    
                    <input type="text" name="status_pernikahan" id="status_pernikahan" required>
                    <br><br>
                    <button type="button" name="input">Input</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>