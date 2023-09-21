<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$sayfa = "Kategoriler";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');


if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    $kategoriadi = $_POST['kategoriadi'];// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    

    
    $hata = "";

    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
    
    if ($kategoriadi <> "" && $hata == "") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
        //Değişecek veriler
        $satir = [                       
            'kategoriadi' => $kategoriadi,
           

        ];
          if ($kategoriadi != '') {


        $sql = "INSERT INTO kategoriler SET kategoriadi=:kategoriadi;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal("Başarılı","Güncellendi","success").then((value)=>{ window.location.href = "Kategoriler.php"});

            </script>';
            // Eğer güncelleme sorgusu çalıştıysa kategoriler.php sayfasına yönlendiriyoruz.

        }
    }
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
        }
    }
    if ($hata != "") {
        echo '<script>swal("Hata","' . $hata . '","error");</script>';
    }
}

?>
<script src="vendor/CKEditor5/ckeditor.js"></script>
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Kategori Ekle</li>
        </ol>


        <!-- DataTables Example -->
        <div class="card mb-3">

            <div class="card-body">

                <form method="post" action="" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Kategori Adı</label>
                        <input required type="text" class="form-control" name="kategoriadi" placeholder="Kategori Adı">
                    </div>
                    
                    



                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>

                </form>


            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>


        <!-- /.container-fluid -->


        <?php
        include('inc/footer.php');
        ?>
        <script>
            $(document).ready(function () {
                $('#dataTable').DataTable({
                    language: {
                        info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
                        infoEmpty: "Gösterilecek hiç kayıt yok.",
                        loadingRecords: "Kayıtlar yükleniyor.",
                        zeroRecords: "Tablo boş",
                        search: "Arama:",
                        sLengthMenu: "Sayfada _MENU_ kayıt göster",
                        infoFiltered: "(toplam _MAX_ kayıttan filtrelenenler)",
                        buttons: {
                            copyTitle: "Panoya kopyalandı.",
                            copySuccess: "Panoya %d satır kopyalandı",
                            copy: "Kopyala",
                            print: "Yazdır",
                        },

                        paginate: {
                            first: "İlk",
                            previous: "Önceki",
                            next: "Sonraki",
                            last: "Son"
                        },
                    }
                });
            });

        </script>
        <script src="js/aktifcustom.js"></script>
        <link rel="stylesheet" type="text/css" href="css/switch.css">