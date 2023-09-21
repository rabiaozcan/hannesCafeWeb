<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$sayfa = "Ürünler";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');
if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    $kategoriadi= $_POST['kategoriadi']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $adi = $_POST['adi'];
    $aciklama=$_POST['aciklama'];
	$fiyat=$_POST['fiyat'];
    $aktif = 0;
    if (isset($_POST['aktif'])) $aktif = 1;
    $hata = "";

    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
    if ($adi <> "" && $fiyat <> "" && isset($_FILES['foto'])) {

        if ($_FILES['foto']['error'] != 0) {
            $hata .= 'Dosya yüklenirken hata gerçekleşti lütfen daha sonra tekrar deneyiniz.';
        } else {

            $dosya_adi = strtolower($_FILES['foto']['name']);
            if (file_exists('images/' . $dosya_adi)) {
                $hata .= " $dosya_adi diye bir dosya var";
            } else {
                $boyut = $_FILES['foto']['size'];
                if ($boyut > (20480 * 20480 * 2)) {
                    $hata .= ' Dosya boyutu 20MB den büyük olamaz.';
                } else {
                    $dosya_tipi = $_FILES['foto']['type'];
                    $dosya_uzanti = explode('.', $dosya_adi);
                    $dosya_uzanti = $dosya_uzanti[count($dosya_uzanti) - 1];

                    if (!in_array($dosya_tipi, ['image/png', 'image/jpeg','image/jpg']) || !in_array($dosya_uzanti, ['png', 'jpg','jpeg'])) {
                        //if (($dosya_tipi != 'image/png' || $dosya_uzanti != 'png' )&&( $dosya_tipi != 'image/jpeg' || $dosya_uzanti != 'jpg')) {
                        $hata .= ' Hata, dosya türü JPEG veya PNG olmalı.';
                    } else {
                        $foto = $_FILES['foto']['tmp_name'];
                        copy($foto, '../img/' . $dosya_adi);


                        //Eklencek veriler diziye ekleniyor
                        $satir = [
							'kategoriadi'=>$kategoriadi,
							'adi' => $adi,
                            'foto' => $dosya_adi,
                            'aciklama' => $aciklama,
                            'fiyat' => $fiyat,
                            'aktif' => $aktif,
							
                           
                        ];
                        $sorgu = $baglanti->prepare("SELECT * FROM urunler order by id");
                        // Veri ekleme sorgumuzu yazıyoruz.
                        
                        $sql = "INSERT INTO urunler SET  kategoriadi=:kategoriadi,adi=:adi,foto=:foto,  aciklama=:aciklama, fiyat=:fiyat, aktif=:aktif;";
                        $durum = $baglanti->prepare($sql)->execute($satir);

                        if ($durum) {
                            echo '<script>swal("Başarılı","Ürün Eklendi","success").then((value)=>{ window.location.href = "urunler.php"});</script>';
                        }


                    }
                }
            }
        }
    }
    if($hata!=""){
        echo '<script>swal("Hata","'.$hata.'","error");</script>';
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
            <li class="breadcrumb-item active">Ürün Ekle</li>
        </ol>


        <!-- DataTables Example -->
        <div class="card mb-3">

            <div class="card-body">

                <form method="post" action="urunEkle.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="foto">Fotoğraf</label>
                        <input  type="file" name="foto" class="form-control-file" id="foto">
                    </div>

                     <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategoriadi" >
                        <?php
                           
                      
                            foreach($baglanti->query('SELECT * FROM kategoriler') as $listele) {
                            $sonuc = $listele['kategoriadi'];
                           

                            ?>

                            <option value="<?php  echo $sonuc; ?>"> <?php  echo $sonuc; ?></option>
                           
                        
                              <?php } ?>
					 
                     </select></div>

   
 

                    <div class="form-group">
                        <label for ="adi ">Adı</label>
                        <input required type="text" class="form-control" name="adi" placeholder="Adı">
                    </div>

                    <div class="form-group">
                        <label for="aciklama">Açıklama</label>
                        <textarea name="aciklama" id="aciklama"></textarea>

                        <script>
                            ClassicEditor
                                .create(document.querySelector('#aciklama'))
                                .then(editor => {
                                    console.log(editor);
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>

                    </div>

                    <div class="form-group">
                        <label>Fiyat</label>
                        <input required type="text" class="form-control" name="fiyat" placeholder="₺">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="aktif" id="aktif">
                        <label class="form-check-label" for="aktif">Stokta var mı?</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>

                </form>


            </div>
        </div>
        <div class="card-footer small text-muted"></div>


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