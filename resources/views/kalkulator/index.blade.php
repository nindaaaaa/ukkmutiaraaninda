<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKK</title>
    <style>
        body{
            background-color: #BCEAD5;
            color: #31304D;
            margin: 5px;
            padding: 5px;
            font-family: "Comic Sans MS";
            font-size: 20px;
        }
        .calculator-buttons input{
            background-color: #96B6C5;
            color: #102C57;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.8);
            width: 100px;
            height: 50px;
            padding: 5px;
            margin: 5px;
            font-size: 20px;
            font-family: "Comic Sans MS";
            
            
        }
    </style>
</head>
<body>
    <div class="calculator">
        <center><h1>KALKULATOR SEDERHANA</h1>
        <form action="{{route('proses.store')}}" method="post">
        @csrf
        <label for="a">Masukkan Angka Pertama</label><br>
        <input type="number" name="a" id="a"><br><br>
        <label for="b">Masukkan Angka Kedua</label><br>
        <input type="number" name="b" id="b"><br><br>

        <div class="calculator-buttons input">
            <input type="submit" value="Tambah" name="op">
            <input type="submit" value="Kurang" name="op">
            <input type="submit" value="Kali" name="op">
            <input type="submit" value="Bagi" name="op">
            <input type="submit" value="Reset" name="op">
        </div>
    </form>
    </center>
    </div>
    
</body>
</html>