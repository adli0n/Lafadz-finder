
    <body>
	<section class="slice slice-lg" style="background:linear-gradient(135deg,#8e76db 0,#727cf5 60%);!important">
            <div class="container pt-lg pb-lg-md">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h2 class="mb-4 text-white">Search Lafadz Al-Qu'ran</h2>
                <form action="search.php" method="get" id="main-search-form">
                            <div class="form-group bg-white rounded px-2 py-2 shadow">
                                <div class="row">
                                    <div class="col-8 col-md-9">
                                        <div class="input-group input-group-transparent shadow-none">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border-0"><i class="far fa-search"></i></span>
                                            </div>
                                            <input type="text" class="form-control border-0 shadow-none"  name="q" id="search-box" placeholder="Ketikkan lafaz yang dicari" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                     <a href="#" class="alert alert-news" data-toggle="tooltip" data-original-title="See changelog">
                            <span class="badge badge-pill badge-warning">Tips</span>
                            <span class="alert-content">Gunakan spasi untuk pemisah antar-kata agar lebih akurat</span>
                            <i class="far fa-angle-right"></i>
                        </a>
                        </form>
                    </div>
                </div>
            </div>
            <a href="#cse" class="tongue tongue-bottom tongue-white scroll-me">
                <i class="far fa-angle-down"></i>
            </a>
        </section>
        <div class="container mt-5">
        <div class="row">
                    <div class="col-lg-6">
                        <div id="accordion_1" data-accordion="1">
                            <div class="card mb-3">
                                <div class="card-header py-4 collapsed" id="heading_2_2" data-toggle="collapse" data-target="#collapse_2_2" aria-expanded="false" aria-controls="collapse_2_2">
                                    <h5 class="heading h5 font-weight-normal mb-0"><i class="fas fa-brain mr-3"></i>Maintenance</h5>
                                </div>

                                <div id="collapse_2_2" class="collapse" aria-labelledby="heading_2_2" data-parent="#accordion_2">
                                    <div class="card-body">
                                <p>Perbaikan pencarian lafaz Al-Qur'an</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="accordion_2" data-accordion="1">
                            <div class="card mb-3">
                                <div class="card-header py-4 collapsed" id="heading_2_1" data-toggle="collapse" data-target="#collapse_2_1" aria-expanded="false" aria-controls="collapse_2_1">
                                    <h5 class="heading h5 font-weight-normal mb-0"><i class="fas fa-cog fa-spin mr-3"></i>Pengaturan</h5>
                                </div>

                                <div id="collapse_2_1" class="collapse" aria-labelledby="heading_2_1" data-parent="#accordion_2">
                                    <div class="card-body">
                            <input type="checkbox" id="os" name="order" class="custom-checkbox" checked="checked"/>
                            <label for="os">Perhitungkan keterurutan</label> <br>
                            <input type="checkbox" id="vw" name="vowel" class="custom-checkbox" checked="checkes"/>
                            <label for="vw">Perhitungkan huruf vokal</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
         <section id="cse" class="slice slice-lg bg-white" style="margin-top:-10px">
            <div class="container-fluid">
                <div class="row row-grid align-items-center justify-content-around">
                    <div class="col-lg-5">
                        <div class="img-back-shape">
                            <img alt="Image placeholder" src="assets/img/new/WERLS-find-alquran.png" class="img-center img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="pr-md-4 mr-3 ml-3">
                            <h3 class="font-weight-light mb-4" ><strong class="font-weight-700">Lafadz Al-Qur'an Finder</strong></h3>
                            <p class="lead mb-5 ">adalah aplikasi pencari lafadz pada Al-Quran. Aplikasi ini dibuat untuk memudahkan pencarian ayat pada Al-Quran hanya dengan aksara Latin biasa berdasarkan pelafalan pembicara bahasa Indonesia, tanpa perlu mengetikkannya dalam aksara Arab</p>
                            <div class="card shadow bg-secondary border-0 mb-4">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="icon icon-shape icon-teal rounded-circle">
                                            <i class="fas fa-info"></i>
                                        </div>
                                        <div class="icon-text pl-4">
                                            <h5 class="font-weight-bold">Informasi</h5>
                                            <p class="mb-0">Jika ada masalah dalam pencarian,atau ingin memberi saran, dan sebagainnya silahkan hubungi Kami dengan mengisi Form Contact,Terima kasih.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="icon icon-shape icon-green rounded-circle">
                                            <i class="fas fa-question"></i>
                                        </div>
                                        <div class="icon-text pl-4">
                                            <h5 class="font-weight-bold">Cara Penggunaan</h5>
                                            <p class="mb-0">Ketikkan potongan ayat Al-Quran, Pengetikan tidak harus benar cara penulisannya
                                            contoh: alhamdulillahi, rabbil-'alamin innalloha ma'a shoobiriin, laa ilaaha illallaah, kun fayakuun.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         
        <script type="text/javascript">
            
            var placeHolderText = "";
            
            $(document).ready(function(){
                placeHolderText = $('#search-box').val();
                
                $('#search-box').focus(function(){
                    if ($(this).val() == placeHolderText) {
                        $(this).removeClass('empty');
                        $(this).val('');
                    }
                });

                $('#search-box').blur(function(){
                    if ($(this).val() == '') {
                        $(this).addClass('empty');
                        $(this).val(placeHolderText);
                    }
                });
                
                $('#button-option').click(function(){
                    $(this).hide(); 
                    $('#search-checkboxes').css({display : 'inline-block'});
                });

                //                $('#search-checkboxes').mouseleave(function(){
                //                    $(this).hide(); 
                //                    $('#button-option').css({display : 'inline-block'});
                //                });
                
                $('#button-help').click(function(){
                    $('#search-help-box').slideToggle('fast');
                });
                
                $('#main-search-form').submit(function(){
                    if($('#search-box').val() == placeHolderText || $('#search-box').val() == '')
                        return false;
                });
            });
        </script>

    </body>