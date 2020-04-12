<div class="app-main">
                    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                                        </i>
                                    </div>
                                    <div>Tambah Produk
                                        <div class="page-title-subheading">Penambahan produk terbaru jika belum pernah masuk pada database
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Produk
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Tambah Baru
                                                        </span>
                                                        
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Lihat Kategori Produk
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Lihat Stok
                                                        </span>
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div>            
                        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Tambah Produk</h5>
                                                <form class="" method= 'POST' action= "<?=route('proses-form')?>">
                                                    @csrf
                                                    <div class="position-relative form-group"><label for="nama-produk" class="">Nama Produk</label><input name="nama-produk" id="nama-produk" placeholder="Masukkan nama produk" type="text" class="form-control"></div>
                                                    
                                                    <div class="position-relative form-group"><label for="kategori" class="">Kategori</label><select name="kategori" id="kategori" class="form-control">
                                                        <option>Makanan</option>
                                                        <option>Minuman</option>
                                                        <option>Alat Tulis</option>
                                                    </select>
                                                </div>
                                                <div class="position-relative form-group"><label for="harga" class="">Harga</label><input name="harga" id="harga" placeholder="Harga" type="text" class="form-control"></div>
                                                    
                                                    
                                                    <button class="mt-1 btn btn-primary">Tambahkan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            
                    </div>
                    @include('layout.footer')
                    </div>
        </div>