<?php
$sayfa = "Kategoriler";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

if (isset($_POST['sil'])) {
//print_r($_POST);exit();
$silinecekler = implode(', ', $_POST['sil']);

$sorgu = $baglanti->prepare('select * FROM `kategoriler` WHERE `id` IN (' . $silinecekler . ')');
 $sorgu->execute();
//sorgu çalıştırılıp veriler alınıyor
while ($sonuc = $sorgu->fetch()) {
	@unlink($sonuc["kategoriadi"]);//eski dosya siliniyor. isteğe bağlı
	}

    $sorgu = $baglanti->prepare('DELETE FROM `kategoriler` WHERE `id` IN (' . $silinecekler . ')');
    	$sorgu->execute();

}

$sorgu = $baglanti->prepare("SELECT * FROM kategoriler order by id");

$sorgu->execute();

?>

<head>
    <script language="javascript"> function confirmDel() {
            var agree = confirm("Silmek istediğinizden emin misiniz?\nBu işlem geri alınamaz!");
            if (agree) {
                return true;
            } else {
                return false;
            }
        } </script>
    <script src="js/tumunusil.js"></script>
</head>

<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Kategoriler</li>
        </ol>
        <form action="" method="post">
            <a class="btn btn-primary" href="kategoriekle.php">Yeni Kategori Ekle</a>

            <a class="btn btn-danger font-18" href="#" data-toggle="modal"
               data-target="#tumunuSil"><i class="fa fa-trash"> Seçilenleri sil</i></a>
               <div class="modal fade" id="tumunuSil" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">İçerik</h5>
                            <button class="close" type="button" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Seçilen tüm kategoriler silinecektir.</div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-danger font-18"><i class="fa fa-trash"> Seçilenleri
                                    sil</i></button>
                            <button class="btn btn-secondary" type="button"
                                    data-dismiss="modal">Kapat
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Kategoriler
                </div>
                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>
                                    <div class="checkbox">
                                        <input type="checkbox" id="select_all" onclick="TumunuSec();" value="">
                                        <label for=""></label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Kategori Adı</th>
                                <th>Sil</th>
                            </tr>
                            </thead>

                            <tbody>
 <?php
                            
                                
                             while ($sonuc = $sorgu->fetch()) { ?>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input class="chck" type="checkbox" name="sil[]"
                                                   value="<?php echo $sonuc['id']; ?>">
                                            <label for="<?php echo $sonuc['id']; ?>"></label>
                                        </div>
                                    </td>
                                    <td contenteditable="true"

                                        onBlur="veriKaydet(this,'id','<?= $sonuc["id"] ?>')"
                                        onClick="duzenle(this);"><?= $sonuc["id"] ?>
									</td>
									<td contenteditable="true"

                                        onBlur="veriKaydet(this,'kategoriadi','<?= $sonuc["kategoriadi"] ?>')"
                                        onClick="duzenle(this);"><?= $sonuc["kategoriadi"] ?>
									</td>
									<td>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                           data-target="#sil<?= $sonuc["id"] ?>"><span class="fa fa-trash fa-2x"></span></a>
                                       </td>

                                        <!-- Logout Modal-->
                                        <div class="modal fade" id="sil<?= $sonuc["id"] ?>" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Sil</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Kategoriyi silmek istediğinizden emin misiniz?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary pull-left mx-4" type="button"
                                                                data-dismiss="modal">İptal
                                                        </button>
                                                        <a class="btn btn-danger pull-right mx-4"
                                                           href="Sil.php?sayfa=kategoriler&id=<?= $sonuc["id"] ?>">Sil</a>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </td>
                                </tr>
                                <?php
                            } //while bitimi
                            ?>
                            </tbody>
                        </table>
        </form>
    </div>
</div>
<div class="card-footer small text-muted"></div>
</div>

</div>
<!-- /.container-fluid -->
<?php
include('inc/footer.php');
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#select_all').on('click', function () {
            if ($('#select_all:checked').length == $('#select_all').length) {
                $('input.chck:checkbox').prop('checked', true);
            } else {
                $('input.chck:checkbox').prop('checked', false);

            }
        });
    });
</script>
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
<script>
    function duzenle(deger) {
        $(deger).css("background", "#fffacd");
        //seçilen hücrenin rengini değiştiriyoruz
    }

    function veriKaydet(deger, alan, id) {
        $(deger).css("background", "#FFF url(yukleniyor.gif) no-repeat right");
        //

        $.ajax({
            url: "duzenleKaydet.php", //verileri göndereceğimiz url
            type: "POST", //post ile gönderilecek
            data: 'alan=' + alan + '&deger=' + deger.innerHTML.split('+').join('{0}') + '&id=' + id,
            // verileri alan deger ve id olarak yolluyoruz
            //+ (artı) post edilirken boşluk ile değişiyor 
            //bunu engellemek için + değeri {0} ile değiştirdim 
            //kayıt yaparkende index.php de geri değişimini yapıyoruz 
            success: function (data) {
                if (data == true) {
                    $(deger).css("background", "#fff");
                    // eğer veriler veri tabanına yazılmış ise hücrenin
                    //arka plan rengini beyaza geri döndürüyoruz
                }

                else {
                    $(deger).css("background", "#f00");
                    $("#sonuc").text("Hata veri düzenlenmedi");

                    //Eğer hata varsa hücre rengini kırmızı ve
                    // tablo altında hata mesajı yazdırıyoruz
                }
            }
        });
    }
</script>
<script src="js/aktifcustom.js"></script>
<link rel="stylesheet" type="text/css" href="css/switch.css">