<style>
.tab { 
       /* display:inline-block;  */
       margin-left: 70px;       
}
.tabulasi {
    margin-left: 50px; 
    margin-right: 50px;
}
.sekertaris {
    margin-left: 450px; 
    margin-right: 50px;
}
.border {
    border-top-style: none;
    border-right-style: none;
    border-bottom-style: solid;
    border-left-style: none;
    margin-left: 50px; 
    margin-right: 50px;
    border: 4px;
}
.kiri {
  width: 50%;
  float: left;
  padding: 1px;
  border: none;
  text-align: center;
  margin-right: 10px;
  margin-top: -23px;
  
}
.kanan {
  width: 50%;
  float: left;
  padding: 1px;
  border: none;
  text-align: center;
}
.tengah {
  width: 100%;
  float: none;
  padding: 1px;
  border: none;
  text-align: center;
 
}

</style>    
    <div class="card" align="center" style="color: midnightblue;">
        <div class="border">
            <h3 style="margin-top: 1px; padding-bottom: 1px;">UNIVERSITAS BUMIGORA MATARAM <br> Kesatuan Amal Mahasiswa Islam
            <br> <p style="font-size: 10px; margin-top: -20px;">Sekretariat : Jln. Ismail Marzuki Telp. 087 865 361 640 Kota Mataram <br>
                Email: kamil@stmikbumigora.ac.id.</p>
            </h3>
        </div>
    </div>

    <!-- <img src="{{ asset('image/ubg.png') }}"> -->

    <div class="card">
        <div class="tabulasi">
            <p style="margin-left: 450px; margin-bottom: -20px; margin-top: 1px;">Mataram</p>
            <p>No <span style="margin-left: 45px;">:</span> &emsp; {{ $data['nomor_surat'] }} 
            <br>Lampiran <span style="margin-left: 3px;">:</span> &emsp; -
            <br> Perihal <span style="margin-left: 20px;">:</span> &emsp; Izin Kegiatan</p>
            <p style="margin-bottom: -10px;">Yth Rektor UNIVERSITAS Bumigora Mataram</p>
                <div class="tab">
                    <p style="margin-bottom: -10px;">Cq. Wakil Rektor III</p>
                    <p>di- <br> Tempat</p>
                </div>
            <p style="margin-bottom: -10px;">Assalaamu’alaykum Warohmatullahi Wabarokaatuh.</p>
            <p style="margin-bottom: -10px;">Sehubungan dengan akan diadakannya  kegiatan  <strong>{{ $data['kegiatan']}}</strong>. Untuk itu, kami bermaksud memohon dukungan pihak kampus berupa izin kegiatan. 
            Adapun kegiatan akan dilaksanakan pada :</p> 
                <div class="tab">
                    <p style="margin-bottom: -10px;">Hari, Tanggal <span style="margin-left: 3px;">:</span> &emsp; {{ $data['hari']}}, {{ $data['tanggal']}} </p>
                    <p style="margin-bottom: -10px;">Waktu <span style="margin-left: 50px;">:</span> &emsp; {{ $data['waktu']}} WITA s/d Selesai</p>
                    <p style="margin-bottom: -10px;">Tempat <span style="margin-left: 43px;">:</span> &emsp; {{ $data['tempat']}}</p>
                </div>
            <p>Demikian surat ini kami buat, atas perhatian Bapak, kami mengucapkan  terimakasih banyak.
            <br style="margin-bottom: -50px;"> Wassalaamu’alaykum Warohmatullaahi Wabarokaatuh.</p>
                <div class="card">
                    <div class="kiri">
                        <p>ketua UKM LDK KAMIL</p>
                            <br>
                    
                        <p> <span style="text-decoration: underline;"> <strong>Degi suprayogi</strong></span>
                        <br> NIM. 1809530024 </p> 
                    </div>
                    <div class="kanan"> 
                        <p>Sekertaris</p>
                            <br>
                            
                        <p> <span style="text-decoration: underline;"> <strong>Moh. Rizky Fahly</strong></span>
                        <br> NIM. 1901010009 </p> 
                    </div>
                    <div class="tengah">
                        <p style="font-style: italic;">Mengetahui</p>
                    </div>
                    <div class="kiri">
                        <p>Pembina LDK KAMIL</p>
                            <br>
                    
                        <p> <span style="text-decoration: underline;"> <strong>Dian Syafitri C.S., MDig.MMedia</strong></span>
                        <br> NIK. 98.6.92 </p> 
                    </div>
                    <div class="kanan"> 
                        <p>Ketua BEM</p>
                            <br>
                            
                        <p> <span style="text-decoration: underline;"> <strong>Dedy Kurniawan</strong></span>
                        <br> NIM. 12345678 </p> 
                    </div>
                    <div class="tengah">
                        <p style="font-style: italic;">Menyetujui</p>
                        <p style="margin-top: -10px;">Wakil Rektor III</p>
                            <br>
                            
                        <p> <span style="text-decoration: underline;"> <strong>Mayadi, M.Kom</strong></span>
                        <br> NIK. 16.6.253 </p> 
                    </div>
                </div>  
        </div>
                               
    </div> 