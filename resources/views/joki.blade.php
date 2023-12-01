<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/joki.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Dominator Store</title>
  </head>
  <body>
    <div class="nav-container">
      <div class="nav-logo">
        <img src="assets/img/logods.png" alt="Logo Dominator Store">
        <div class="nav-title">Dominator Store</div>
      </div>    
      <div class="nav-link">
        <a href="#event" class="link-list">Event</a>
        <a href="#promo" class="link-list">Promo</a>
      </div>
    </div>
    <main>
    <div class="container-fluid text-center pt-4">
      <div class="row justify-content-between">
        <div class="col-md-4">
          <!-- Kolom pertama -->
          <div class="col">
            <img src="assets/img/icontopup.jpeg" class="card-img" alt="Gambar Toko" />
            <div class="card-body-title">
              <h5 class="card-title text-start p-0 pt-2">Joki Rank Mobile Legends</h5>
              <h6 class="card-subtitle pt-4"> Perhatikan kembali informasi berikut Sebelum Order!!</h6>
              <div class="card-text"> Orderan Joki dicek Pukul 09.00 - 21.00 WIB</div>
                <div class="card-text"> Akan Dicek di Hari Berikutnya Jika Melewati Batas Pengecekan Orderan</div>
              <div class="col text-start p-0 pt-4">Cara Order :</div>
              <ol class="text-start p-0 ml-5">
                <li>Matikan verifikasi akun untuk mempermudah login</li>
                <li>Jika akun di login tanpa izin, maka proses joki Akan dibatalkan dan uang hangus</li>
                <li>Dimohon menunggu sesuai estimasi proses dan jangan spam Admin</li>
                <li>Jika ada problem saat login ke akun, maka akan segera di Hubungi oleh Admin</li>
                <li>Jika akun belum diproses selama 2x24 Jam harap hubungi Kontak Kami/Admin</li>
                <li>Jika menemukan adanya penjoki yang menawarkan jasa joki tanpa dari nomer wa resmi / instagram official kami @dominatorstore_ Customer akan mendapatkan joki gratis / diamond (Lapor Ke Admin Dominator Store / Kontak Kami yang ada di website) dan memberikan bukti</li>
                <li>Jika proses joki sudah selesai maka akan dihubungi Admin Jika Butuh Bantuan Harap Hubungi Admin Dominator Store Terimakasih</li>
              </ol>
              <h6 class="card-subtitle text-danger pt-4">UNTUK JOKI SATUAN  APABILA ORDER LEBIH DARI 1 BINTANG/STAR SILAHKAN CHAT ADMIN TERLEBIH DAHULU</h6>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <!-- Kolom kedua -->
          <div class="card">
            <div class="card-body-all">
              <h5 class="card-title">Lengkapi Data</h5>
              <p class="card-text">Masukkan User ID</p>
              <form action="">
              <div class="form-group row justify-content-center align-item-center">
                <label for="loginvia" class="col-sm-4 text-left">Login Via</label>
                <div class="col-sm-4">
                <select name="loginvia" id="loginvia" class="form-control rounded-pill">
                  <option value="log">Login akun via</option>
                  <option value="moonton">Moonton(Rekomendasi)</option>
                  <option value="vk">VK</option>
                  <option value="tiktok">Tiktok</option>
                  <option value="facebook">Facebook</option>
                  </select>
                </div>
              </div>
              <div class="form-group row justify-content-center align-item-center">
                <label for="email" class="col-sm-4 text-left">Email/No.Telp</label>
                <div class="col-sm-4">
                  <input type="text" name="email" id="email" placeholder="Email" class="form-control rounded-pill" />
                </div>
              </div>
              <div class="form-group row justify-content-center align-item-center">
                <label for="password" class="col-sm-4 text-left">Password</label>
                <div class="col-sm-4">
                <input type="text" name="password" id="password" placeholder="Password" class="form-control rounded-pill" />
              </div>
              </div>
              <div class="form-group row justify-content-center align-item-center">
                <label for="reqhero" class="col-sm-4 text-left">Request Hero</label>
                <div class="col-sm-4">
                <input type="text" name="reqhero" id="reqhero" placeholder="Request Hero" class="form-control rounded-pill" />
              </div>
              </div>
              <div class="form-group row justify-content-center align-item-center">
                <label for="nickname" class="col-sm-4 text-left">Nickname</label>
                <div class="col-sm-4">
                <input type="text" name="nickname" id="nickname" placeholder="Nickname" class="form-control rounded-pill" />
              </div>
              </div>
              <div class="form-group row justify-content-center align-item-center">
                <label for="keterangan" class="col-sm-4 text-left">Keterangan</label>
                <div class="col-sm-4">
                <input type="text" name="keterangan" id="keterangan" placeholder="Keterangan" class="form-control rounded-pill" />
              </div>
              </div>
              <div class="form-group row justify-content-center align-item-center">
                <label for="whatsapp" class="col-sm-4 text-left">Nomor Whatsapp</label>
                <div class="col-sm-4">
                <input type="text" name="whatsapp" id="whatsapp" placeholder="whatsapp" class="form-control rounded-pill" />
              </div>
              </div>
            </div>
          </form>
          </div>

          <!-- Pilihan Paket -->
          <div class="card">
            <div class="card-body-all">
              <h5 class="card-title">Pemilihan Paket</h5>
              <div class="row">
                <!-- Card produk pertama -->
                <div class="col-md-4">
                  <input type="radio" class="btn-check" name="rank" id="rank1" autocomplete="off">
                  <label class="btn" for="rank1">
                  <div class="card">
                    <img src="assets/rank/gm.png" class="card-img-top" alt="Produk 1" />
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-muted">GRAND MASTER</h6>
                      <p class="card-text">Rp. 4.000</p>
                    </div>
                  </div>
                  </label>
                </div>
              </div>
            </div>
          </div>        
          
          <!-- Metode Pembayaran -->
          <div class="card">
            <div class="card-body-all">
              <h5 class="card-title">Metode Pembayaran</h5>
              <p class="card-text">Pilih Metode Pembayaran</p>
              <div class="row">
                <!-- card pembayaran Gopay -->
                <input type="radio" class="btn-check" name="payment" id="payment" autocomplete="off">
                  <label class="btn" for="payment">
                <div class="col-md-12 d-flex justify-content-center ">
                  <div class="card-pay w-50 pt-2">
                    <img src="assets/pay/gopay.png" class="card-img-top" alt="Produk 1" />
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-white">Gopay a.n. Dominator Store</h6>
                      <p class="card-text text-white">089512532617</p>
                    </div>
                  </div>
                </div>
                  </label>
                <!-- card pembayaran DANA -->
                <div class="col-md-12 d-flex justify-content-center">
                  <div class="card-pay w-50 pt-2">
                    <img src="assets/pay/dana.png" class="card-img-top" alt="Produk 1" />
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-white">Dana a.n. Iwan Kurniawan</h6>
                      <p class="card-text text-white">089512532617</p>
                    </div>
                  </div>
                </div>
                <!-- card pembayaran OVO -->
                <div class="col-md-12 d-flex justify-content-center ">
                  <div class="card-pay w-50 pt-2">
                    <img src="assets/pay/ovo.png" class="card-img-top" alt="Produk 1" />
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-white">OVO a.n. Dominator Store</h6>
                      <p class="card-text text-white">089512532617</p>
                    </div>
                  </div>
                </div>
                <!-- card pembayaran Shopeepay -->
                <div class="col-md-12 d-flex justify-content-center ">
                  <div class="card-pay w-50 pt-2">
                    <img src="assets/pay/shopeepay.png" class="card-img-top" alt="Produk 1" />
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-white">Shopeepay a.n. Dominator Store</h6>
                      <p class="card-text text-white">089512532617</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Konfirmasi Pembayaran -->
          <div class="card">
            <div class="card-body-all">
              <h5 class="card-title">Konfirmasi Pembayaran</h5>
              <p class="card-text">Lampiran Bukti Transaksi</p>
              <input type="file" name="" id="" placeholder="Lampirkan Foto"/>
              <div class="nav-order">
                <a href="" class="btn-order">Order</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </main>
    <footer class="footer mt-auto py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-logo">
              <img src="assets/img/logods.png" alt="Logo Toko" />
            </div>
          </div>
          <div class="col-md-6 text-md-right">
            <div class="footer-social">
              <h5 class="card-text">Contact Me</h5>
              <a href="https://www.facebook.com/profile.php?id=61552239549351&mibextid=LQQJ4d" class="social-icon"><i class="fab fa-facebook"></i></a>
              <a href="https://www.tiktok.com/@dominatorstore?_t=8h63l1Yv1V3&_r=1" class="social-icon"><i class="fab fa-tiktok"></i></a>
              <a href="https://instagram.com/dominatorstore?igshid=MTl1ZnQ4Nnl3MmlvMA==" class="social-icon"><i class="fab fa-instagram"></i></a>
              <a href="http://wa.me/6289512532617" class="social-icon"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>&copy; Copyright 2023 | Dominatorstore.</p>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>