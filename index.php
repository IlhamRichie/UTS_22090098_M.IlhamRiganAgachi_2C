<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require_once('./assets/requires/config.php');
        require_once('./assets/requires/header1.php');
    ?>
</head>
<body>
    <div class="container">
        <div class="jdlaccr" style="font-size: 42px; color: blue;"> Daftar Produk </div>
        <div class="jdlaccr" style="font-size: 21px; color: blue;"> Barang dengan awalan "L" </div>
        <div class="card shadow-sm mb-5 bg-black rounded">
           <!-- <div class="card-body">
                <h5 class="card-title">Input Name:</h5>
                <p class="card-text">
                    <input type="text" class="input input-lg" style="width:100%" id="srchInv">
                </p>
            </div> -->
            <div class="card-footer">
                <button class="btn btn-primary" id="btnsearch">Update </button>
            </div>
        </div>
        
        <div id="infoinvaccr"></div>
    </div>
    <script src="./assets/scripts/js/harberweb.js"></script>
</body>
</html>