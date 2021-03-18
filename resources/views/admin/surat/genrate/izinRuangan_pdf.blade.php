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
  /* margin-right: 10px; */
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
  margin-top: -20px;
 
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
            <p>No <span style="margin-left: 45px;">:</span> &emsp; {{ $data1['nomor_surat'] }} 
            <br> Perihal <span style="margin-left: 20px;">:</span> &emsp; Permohonan Peminjaman Ruangan Dan Peralatan
            <br>Lampiran <span style="margin-left: 3px;">:</span> &emsp; -</p>
            <p style="margin-bottom: -10px;">Yth Kepala Akademik Universitas Bumigora Mataram</p>
                <div class="tab">
                    <p>di- <br> Tempat</p>
                </div>
            <p style="margin-bottom: -10px;">Assalaamu’alaykum Warohmatullahi Wabarokaatuh.</p>
            <p style="margin-bottom: -10px;">Sehubungan dengan akan diadakannya  kegiatan  <strong>{{ $data1['kegiatan']}}</strong>. 
            maka dengan ini kami mengajukan permohonan peminjaman Ruangan dan perlatan yang akan kami laksanakan pada :</p> 
                <div class="tab">
                    <p style="margin-bottom: -10px;">Hari, Tanggal <span style="margin-left: 3px;">:</span> &emsp; {{ $data1['hari']}}, {{ $data1['tanggal']}} </p>
                    <p style="margin-bottom: -10px;">Waktu <span style="margin-left: 50px;">:</span> &emsp; {{ $data1['waktu']}} WITA s/d Selesai</p>
                    <p style="margin-bottom: -10px;">Tempat <span style="margin-left: 43px;">:</span> &emsp; {{ $data1['tempat']}}</p>
                </div>
            <p>Untuk itu kami memohon meminjam Ruangan dan Alat untuk pelaksanaan kegiatan tersebut. Hal-hal yang kami butuhkan tertera pada lampiran bersama dengan surat ini.
            <br> Demikian yang dapat kami sampaikan. Atas perhatian Bapak/Ibu kami ucapkan terima kasih.</p>
            <p style="margin-top: -10px;"> Wassalaamu’alaykum Warohmatullaahi Wabarokaatuh.</p>
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
                        <p style="font-style: italic;">Menyetujui</p>
                    </div>
                    <div class="kiri">
                        <p>Kepala Akademik</p>
                            <br>
                    
                        <p> <span style="text-decoration: underline;"> <strong>Fatimatuzzahra, M.Kom</strong></span>
                        <br>NIK.20.6.378</p> 
                    </div>
                    <div class="kanan">
                        <p>Wakil Rektor II </p>
                            <br>
                    
                        <p> <span style="text-decoration: underline;"> <strong>Syafrianti Febriana S.E</strong></span>
                        <br>NIK.15.5.241</p> 
                    </div>
                </div>  
        </div>
                               
    </div> 