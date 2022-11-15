<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buying</title>
</head>
<body>
<center>
        <br>
        <br>
        <a href="https://localhost/ProjectSentra/Homee.php">
        <img src="Logo som.png"></a>
        <br>
        <br>
        <a href="https://localhost/ProjectSentra/New%20Arrival.php">New Arrival</a>
        <a href="https://localhost/ProjectSentra/SKincare.php">Skincare</a>
        <a href="https://localhost/ProjectSentra/About%20Us.php">About Us</a>
        <br>
        <h1>Be You, Be Somethinc!</h1>
        <br>
        <br><table border="1">
            <td>
        <?php if(isset($_POST['mkn1']))
        echo $_POST['nw1']."<br/>";
    if(isset($_POST['nw2']))
        echo $_POST['nw2']."<br/>";
    if(isset($_POST['nw3']))
        echo $_POST['nw3']."<br/>";
    if(isset($_POST['nw4']))
        echo $_POST['nw4']."<br/>";

    ?></td><br></table></center>
    <br>
    <center>
    Tipe Pembayaran : <br>
    <?php echo $_POST['tipepby']?>
    <br>
    <br>
    Nama Pengirim : <br>
    <?php echo $_POST["nama"]?>
    <br>
    <br>
    Alamat Tujuan: <br>
    <?php echo $_POST["alamat"]?>
    <h1>Terima Kasih Sudah Memesan</h1>
</center>
</body>
</html>