<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$sayfa = "Ürünler";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi AND urunler.kategori_id=kategoriler.id ");
$sorgu1->execute();

$sorgu = $baglanti->prepare('SELECT * FROM urunler Where id=:id');
$sorgu->execute(["id" => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor

       if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
               $kategoriadi= $_POST['kategoriadi']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $adi = $_POST['adi'];
    $aciklama=$_POST['aciklama'];
    $fiyat=$_POST['fiyat'];
    $aktif = 0;
    if (isset($_POST['aktif'])) $aktif = 1;
    $hata = "";


               if ($_FILES["foto"]["name"] != "") {
                $foto = strtolower($_FILES['foto']['name']);
                if (file_exists('images/' . $foto)) {
                    $hata = "$foto diye bir dosya var";
                } else {
                    $boyut = $_FILES['foto']['size'];
                    if ($boyut > (20480 * 20480 * 2)) {
                        $hata = 'Dosya boyutu 20MBden büyük olamaz.';
                    } else {
                        $dosya_tipi = $_FILES['foto']['type'];
                        $dosya_uzanti = explode('.', $foto);
                        $dosya_uzanti = $dosya_uzanti[count($dosya_uzanti) - 1];

                        if (!in_array($dosya_tipi, ['image/png', 'image/jpeg','image/jpg']) || !in_array($dosya_uzanti, ['png', 'jpg','jpeg'])) {
                            //if (($dosya_tipi != 'image/png' || $dosya_uzanti != 'png' )&&( $dosya_tipi != 'image/jpeg' || $dosya_uzanti != 'jpg')) {
                            $hata = 'Hata, dosya türü JPEG,JPG veya PNG olmalı.';
                        } else {
                            $dosya = $_FILES["foto"]["tmp_name"];
                            copy($dosya, "../img/" . $foto);
                            if(file_exists($sonuc["foto"])){


                            unlink('../img/' . $sonuc["foto"]); //eski dosya siliniyor.
                            }
                        }
                    }
                }
            } else {
                //Eğer kullanıcı fotoğraf seçmedi ise veri tabanındaki resimi değiştirmiyoruz
                $foto = $sonuc["foto"];
            }

            if ($adi <> "" && $hata == "") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
                //Değişecek veriler
                $satir = [
                    'id' => $_GET['id'],
                    'kategoriadi'=>$kategoriadi,
                    'adi' => $adi,
                    'foto' => $foto,
                    'aciklama' => $aciklama,
                    'fiyat' => $fiyat,
                    'aktif' => $aktif
             ];
                // Veri güncelleme sorgumuzu yazıyoruz.
             $sql = 'UPDATE  urunler SET kategoriadi=:kategoriadi,adi=:adi,foto=:foto,  aciklama=:aciklama, fiyat=:fiyat, aktif=:aktif WHERE id=:id;';             
             $durum = $baglanti->prepare($sql)->execute($satir);
             if ($durum)
            {
                echo '<script>swal("Başarılı","Ürün güncellendi","success").then((value)=>{ window.location.href = "urunler.php"});

                </script>';     // Eğer güncelleme sorgusu çalıştıysa urunler.php sayfasına yönlendiriyoruz.
            } else {
                    echo 'Düzenleme hatası oluştu: '; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
                }
            } else {
                echo 'Hata oluştu: ' . $hata; // dosya hatası ve form elemanlarının boş olma durumunua göre hata döndürüyoruz.
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
            <li class="breadcrumb-item active">Ürün Güncelle</li>
        </ol>


        <!-- DataTables Example -->
        <div class="card mb-3">

            <div class="card-body">

                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <img src="../img/<?= $sonuc["foto"] ?>" width="150" alt="">
                        <label for="foto">Fotoğraf</label>
                        <input type="file" name="foto" class="form-control-file" id="foto">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategoriadi">
                         
                        <option value="<?= $sonuc["kategoriadi"]?>"><?= $sonuc["kategoriadi"]?></option>
                        <?php
                           
                      
                            foreach($baglanti->query('SELECT * FROM kategoriler') as $listele) {
                            $kategori = $listele['kategoriadi'];
                           

                            ?>

                            <option value="<?php echo $kategori; ?>"><?php  echo $kategori; ?></option>
                           
                        
                              <?php } ?>

                     </select>
                 </div>
                 
                    <div class="form-group">
                        <label for="adi">Adı</label>
                        <input required type="text" value="<?= $sonuc['adi'] ?>" class="form-control" name="adi" placeholder="Adı">
                    </div>

                    <div class="form-group">
                        <label for="aciklama">Açıklama</label>
                        <textarea name="aciklama" id="aciklama"><?= $sonuc["aciklama"] ?></textarea>

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
                        <input required type="text" value="<?= $sonuc['fiyat'] ?>" class="form-control" name="fiyat" placeholder="₺">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="aktif" id="aktif"
                        <?php
                        if ($sonuc["aktif"] == 1){ echo "checked";}
                        ?>
                        >
                        <label class="form-check-label" for="aktif">Aktif mi?</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>

                </form>


            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>

        <!-- /.container-fluid -->


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