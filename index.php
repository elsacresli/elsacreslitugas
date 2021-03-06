<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="src.css">
    <link rel="stylesheet" href="chart.js">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-database.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Monitor Pencemaran Air</title>
    <style>
    * {
        margin:0; 
        padding:0;
    }
 
    nav {
        margin:auto;
        text-align: center;
        width: 100%;
        font-family: arial;
    } 
    
    nav ul {
        background:#37988e;
        padding: 0 20px;
        list-style: none;
        position: relative;
        display: inline-table;
        width: 100%;
     }

    nav ul li{
        float:left;
    }

    nav ul li:hover{
        background:#d68d9a;
    }

    nav ul li:hover a{
        color:#000;
    }

    nav ul li a{
        display: block;
        padding: 25px;
        color: #fff;
        text-decoration: none;
    }
    </style>
</head>
<body>

    <header>
        <h1>MONITORING PENCEMARAN AIR SUNGAI TELLO</h1>
    </header>

    <main>
        
    
        <aside>
            <article>        
           
            <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127155.557548158!2d119.44141000860687!3d-5.166084174371565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf02913ab952cf%3A0x411b5b4ddbe2913d!2sKota%20Makassar%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1615261683542!5m2!1sid!2sid" width="300" height="370" style="border:0;" allowfullscreen="" loading="lazy"></iframe>



            </section>
            </article>
        </aside>
        <div id="content">
            <nav>
            <ul>
                <li><a href="http://localhost/monitor/index.php">Home</a></li>
                <li><a href="http://localhost/monitor/node1.php">Grafik Node 1</a></li>
                <li><a href="http://localhost/monitor/node2.php">Grafik Node 2</a></li>
            </ul>
            </nav>
            <b>Limit</b></br>
                    <small>Nilai DO = 3 mg/L. Nilai Suhu = C. Nilai TDS = 1000 mg/L. Nilai pH = 6-8,5. Nilai Kekeruhan = 25 NTU</small></br>

          <label>
          <aside>
          <article>
                <section>
                    <h2>Node 1</h2>
                    <table id="tb_1">
                        <tr>
                            <th>DO</th>
                            <td>
                            <a id="do1">0</a>
                            <a hidden="" id="hasil_do1"></a>
                            <div hidden="">
                            <a id="hasil_do1_baik"></a>
                            <a id="hasil_do1_cukup_baik"></a>
                            <a id="hasil_do1_buruk"></a>
                        </div>
                            </td>
                        </tr>
                        <tr>
                            <th>pH</th>
                            <td>
                            <a id="ph1">0</a>
                            <div hidden="">
                            <a hidden="" id="hasil_ph1"></a>
                            <a id="hasil_ph1_asam"></a>
                            <a id="hasil_ph1_netral"></a>
                            <a id="hasil_ph1_basa"></a>
                        </div>
                            </td>
                        </tr>
                        <tr>
                            <th>TDS</th>
                            <td>
                            <a id="Tds1">0</a>
                            <div hidden="">
                            <a hidden="" id="hasil_tds1"></a>
                            <a id="hasil_tds1_baik"></a>
                            <a id="hasil_tds1_cukup_buruk"></a>
                            <a id="hasil_tds1_buruk"></a>
                        </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Suhu</th>
                            <td>
                            <a id="suhu1">0</a>
                            <div hidden="">
                            <a hidden="" id="hasil_suhu1"></a>
                            <a id="hasil_suhu1_dingin"></a>
                            <a id="hasil_suhu1_normal"></a>
                            <a id="hasil_suhu1_panas"></a>
                        </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Keruh</th>
                            <td>
                            <a id="tbdt1">0</a>
                            <div hidden="">
                            <a hidden="" id="hasil_keruh1"></a>
                            <a id="hasil_keruh1_baik"></a>
                            <a id="hasil_keruh1_agak_keruh"></a>
                            <a id="hasil_keruh1_buruk"></a>
                        </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Rssi</th>
                            <td id="rssi1">0</td>
                        </tr>
                        <tr>
                            <th>Tanggal/Waktu</th>
                            <td id="waktu1">0</td>
                        </tr>    
                        <tr>
                            <th>keterangan</th>
                            <td>
                                <a id="hasil_akhir1">0</a>
                            </td>
                        </tr>   
                    </table>
              
            
                            <button hidden="" id="btn1" onclick="myFunction()">Try it</button>
                            <div hidden="" style="width: 400px;height:300px; ">
                                <canvas id="myChart"></canvas>
                            </div>
                        </section>
                    </article>
                </aside>
            </label>

            <div hidden="">
             <a id="r1"></a>
             <a id="r2"></a>
             <a id="r3"></a>
             <a id="r4"></a>
             <a id="r5"></a>
             <a id="r6"></a>
             <a id="r7"></a>
             <a id="r8"></a>
             <a id="r9"></a>
             <a id="r10"></a>
             <a id="r11"></a>
             <a id="r12"></a>
             <a id="r13"></a>
             <a id="r14"></a>
             <a id="r15"></a>
             <a id="r16"></a>
             <a id="r17"></a>
             <a id="r18"></a>
             <a id="r19"></a>
             
             <a id="r_1"></a>
             <a id="r_2"></a>
             <a id="r_3"></a>
             <a id="r_4"></a>
             <a id="r_5"></a>
             <a id="r_6"></a>
             <a id="r_7"></a>
             <a id="r_8"></a>
             <a id="r_9"></a>
             <a id="r_10"></a>
             <a id="r_11"></a>
             <a id="r_12"></a>
             <a id="r_13"></a>
             <a id="r_14"></a>
             <a id="r_15"></a>
             <a id="r_16"></a>
             <a id="r_17"></a>
             <a id="r_18"></a>
             <a id="r_19"></a>  
             </div>     

            <label>
                <aside>
                    <article>
                        <section>    
                                <h2>Node 2</h2>
                    
                    <table id="tb_2">
                        <tr>
                            <th>DO</th>
                            <td>
                            <a id="do2">0</a>
                                
                            <div hidden="">
                            <a hidden="" id="hasil_do2"></a>
                            <a id="hasil_do2_baik"></a>
                            <a id="hasil_do2_cukup_baik"></a>
                            <a id="hasil_do2_buruk"></a>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <th>pH</th>
                            <td>    
                            <a id="ph2">0</a>
                            <div hidden="">
                            <a hidden="" id="hasil_ph2"></a>
                            <a id="hasil_ph2_asam"></a>
                            <a id="hasil_ph2_netral"></a>
                            <a id="hasil_ph2_basa"></a>
                        </div>
                            </td>
                        </tr>
                        <tr>
                            <th>TDS</th>
                            <td>
                            <a id="Tds2">0</a>
                            <div hidden="">
                            <a hidden="" id="hasil_tds2"></a>
                            <a id="hasil_tds2_baik"></a>
                            <a id="hasil_tds2_cukup_buruk"></a>
                            <a id="hasil_tds2_buruk"></a>
                        </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Suhu</th>
                            <td>
                            <a id="suhu2">0</a>
                            <div hidden="">
                            <a hidden="" id="hasil_suhu2"></a>
                            <a id="hasil_suhu2_dingin"></a>
                            <a id="hasil_suhu2_normal"></a>
                            <a id="hasil_suhu2_panas"></a>
                        </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Keruh</th>
                            <td>
                            <a id="keruh2">0</a>
                            <div hidden="">
                            <a hidden="" id="hasil_keruh2"></a>
                            <a id="hasil_keruh2_baik"></a>
                            <a id="hasil_keruh2_agak_keruh"></a>
                            <a id="hasil_keruh2_buruk"></a>
                        </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Rssi</th>
                            <td id="rssi2">0</td>
                        </tr>
                        <tr>
                            <th>Tanggal/Waktu</th>
                            <td id="waktu2">0</td>
                        </tr>    
                        <tr>
                            <th>keterangan</th>
                            <td>
                                <a id="hasil_akhir2">0</a>
                            </td>
                        </tr>   
                    </table>
                    

        
                            <button hidden="" id="btn2" onclick="myFunction1()">Try it</button>
            
         
                            <div hidden="" style="width: 400px;height: 300px; float: left">
                                <canvas id="myChart1"></canvas>
                            </div>
                        </section>
                    </article>
                </aside>
            </label>
            <div hidden="">
             <a id="r1_2"></a>
             <a id="r2_2"></a>
             <a id="r3_2"></a>
             <a id="r4_2"></a>
             <a id="r5_2"></a>
             <a id="r6_2"></a>
             <a id="r7_2"></a>
             <a id="r8_2"></a>
             <a id="r9_2"></a>
             <a id="r10_2"></a>
             <a id="r11_2"></a>
             <a id="r12_2"></a>
             <a id="r13_2"></a>
             <a id="r14_2"></a>
             <a id="r15_2"></a>
             <a id="r16_2"></a>
             <a id="r17_2"></a>
             <a id="r18_2"></a>
             <a id="r19_2"></a>
             
             <a id="r_1_2"></a>
             <a id="r_2_2"></a>
             <a id="r_3_2"></a>
             <a id="r_4_2"></a>
             <a id="r_5_2"></a>
             <a id="r_6_2"></a>
             <a id="r_7_2"></a>
             <a id="r_8_2"></a>
             <a id="r_9_2"></a>
             <a id="r_10_2"></a>
             <a id="r_11_2"></a>
             <a id="r_12_2"></a>
             <a id="r_13_2"></a>
             <a id="r_14_2"></a>
             <a id="r_15_2"></a>
             <a id="r_16_2"></a>
             <a id="r_17_2"></a>
             <a id="r_18_2"></a>
             <a id="r_19_2"></a>  
             </div>   
            
        </div>
        <script type="text/javascript" src="src.js"></script>
        <script type="text/javascript" src="chart.js"></script>

<script> 
window.onload = function(){
document.getElementById('btn1').click();
document.getElementById('btn2').click();

var scriptTag = document.createElement("script");
scriptTag.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js";
document.getElementsByTagName("head")[0].appendChild(scriptTag);
}

function myFunction() {
    var do1=document.getElementById("do1").innerHTML;
    var ph1=document.getElementById("ph1").innerHTML;
    var tds1=document.getElementById("Tds1").innerHTML;
    var suhu1=document.getElementById("suhu1").innerHTML;
    var keruh1=document.getElementById("keruh1").innerHTML;
    var rssi1=document.getElementById("rssi1").innerHTML;


//-------------------------------PERHITUNGAN NILAI DO, Ph, Suhu, TDS, dan Keruh--------------------------------------

        //PERHITUNGAN NILAI DO 
        if(do1 <= 4){
            $('#hasil_do1_baik').html('0');
            $('#hasil_do1_cukup_baik').html('0');
            $('#hasil_do1_buruk').html('1');
        }
        else if (do1 > 4 && do1 < 8) {
            $('#hasil_do1_baik').html((do1-4)/(8-4));
            $('#hasil_do1_cukup_baik').html((do1-4)/(8-4));
            $('#hasil_do1_buruk').html((8-do1)/(8-4));
        }
        else if (do1 >=8) {
            $('#hasil_do1_buruk').html('0');

            if (do1 >= 10) {
                $('#hasil_do1_baik').html('1');
            }
            else{
               $('#hasil_do1_baik').html('0');;
            }

            if (do1 >= 8 && do1 <=10) {
               $('#hasil_do1_cukup_baik').html((10-do1)/(10-4));
            }
            else{
                $('#hasil_do1_cukup_baik').html('0');
            }

        }
        else{
           // echo "tdk ada";
        }


        //PERHITUNGAN NILAI PH
        if(ph1 <= 6){
            $('#hasil_ph1_asam').html('1');
            $('#hasil_ph1_netral').html('0');
            $('#hasil_ph1_basa').html('0');
        }
        else if (ph1 > 6 && ph1 < 9) {
            $('#hasil_ph1_asam').html((9-ph1)/(9-6));
            $('#hasil_ph1_netral').html((ph1-6)/(9-6));
            $('#hasil_ph1_basa').html((ph1-6)/(9-6));
        }
        else if (ph1 >=9) {
            $('#hasil_ph1_asam').html('0');
            $('#hasil_ph1_basa').html('1');
            
            if (ph1 > 9 && ph1 < 10.5){
                $('#hasil_ph1_netral').html((10.5-ph1)/(10.5-6));
            }
            else if (ph1 > 10.5) {
                $('#hasil_ph1_netral').html('0');

            }
            
            else if(ph1 = 9){
                $('#hasil_ph1_netral').html((ph1-6)/(9-6));

            }
            else{

            }
        }
        else{
            //echo "tdk ada";
        }


    //PERHITUNGAN NILAI SUHU
        if (suhu1 <= 25) {
            $('#hasil_suhu1_dingin').html('1');
            $('#hasil_suhu1_normal').html('0');
            $('#hasil_suhu1_panas').html('0');
        }
        else if(suhu1 > 25 && suhu1 < 32){
            $('#hasil_suhu1_dingin').html((32-suhu1)/(32-25));
            $('#hasil_suhu1_normal').html((suhu1-25)/(32-25));
            $('#hasil_suhu1_panas').html((suhu1-25)/(32-25));
        }
        else if (suhu1 >= 32) {
            $('#hasil_suhu1_dingin').html('0');
            $('#hasil_suhu1_panas').html('1');

            if(suhu1 >=32 && suhu1 <34){
                $('#hasil_suhu1_normal').html((34-suhu1)/(34-25));
            }
            else if(suhu1 >= 34){
                $('#hasil_suhu1_normal').html('0');
            }
            else{
                
            }
        }
        else{
               // echo "tdk ada";
            }


    //PERHITUNGAN NILAI TDS

            if(tds1 <= 1000){
                $('#hasil_tds1_baik').html('1');
                $('#hasil_tds1_cukup_buruk').html('0');
                $('#hasil_tds1_buruk').html('0');
            }
            else if (tds1 > 1000 && tds1 < 1020) {
                $('#hasil_tds1_baik').html((1020-tds1)/(1020-1000));
                $('#hasil_tds1_cukup_buruk').html((tds1-1000)/(1020-1000));
                $('#hasil_tds1_buruk').html((tds1-1000)/(1020-1000));
            }
            else if (tds1 >=1020) {
                $('#hasil_tds1_baik').html('0');
                $('#hasil_tds1_buruk').html('1');

                if (tds1 >=1020 && tds1 <= 1022) {
                    $('#hasil_tds1_cukup_buruk').html((1022-tds1)/(1022-1000));
                }
                else{
                    $('#hasil_tds1_cukup_buruk').html('0');

                }
            }else{
               // echo "tdk ada";
            }

          

    //PERHITUNGAN NILAI KERUH

            if(keruh1 <= 25){
                $('#hasil_keruh1_baik').html('1');
                $('#hasil_keruh1_agak_keruh').html('0');
                $('#hasil_keruh1_buruk').html('0');
            }
            else if (keruh1 > 25 && keruh1 < 30) {
                $('#hasil_keruh1_baik').html((30-keruh1)/(30-25));
                $('#hasil_keruh1_agak_keruh').html((keruh1-25)/(30-25));
                $('#hasil_keruh1_buruk').html((keruh1-25)/(30-25));
            }
            else if (keruh1 >=30) {
                $('#hasil_keruh1_baik').html('0');
                $('#hasil_keruh1_buruk').html('1');
                if (keruh1 >= 30 && keru1 <= 32) {
                    $('#hasil_keruh1_agak_keruh').html((32-keruh1)/(32-25));
                }
                else if (keruh1 > 32) {
                    $('#hasil_keruh1_agak_keruh').html('0');

                }
            }else{
                //echo "tdk ada";
            }
//--------------------------------------PENENTUAN NILAI MINIMAL DARI RULE-------------------------------------------------
    


    var hasil_do1_baik=document.getElementById("hasil_do1_baik").innerHTML;
    var hasil_do1_cukup_baik=document.getElementById("hasil_do1_cukup_baik").innerHTML;
    var hasil_do1_buruk=document.getElementById("hasil_do1_buruk").innerHTML;
    var hasil_ph1_asam=document.getElementById("hasil_ph1_asam").innerHTML;
    var hasil_ph1_netral=document.getElementById("hasil_ph1_netral").innerHTML;
    var hasil_ph1_basa=document.getElementById("hasil_ph1_basa").innerHTML;
    var hasil_suhu1_dingin=document.getElementById("hasil_suhu1_dingin").innerHTML;
    var hasil_suhu1_normal=document.getElementById("hasil_suhu1_normal").innerHTML;
    var hasil_suhu1_panas=document.getElementById("hasil_suhu1_panas").innerHTML;
    var hasil_tds1_baik=document.getElementById("hasil_tds1_baik").innerHTML;
    var hasil_tds1_cukup_buruk=document.getElementById("hasil_tds1_cukup_buruk").innerHTML;
    var hasil_tds1_buruk=document.getElementById("hasil_tds1_buruk").innerHTML;
    var hasil_keruh1_baik=document.getElementById("hasil_keruh1_baik").innerHTML;
    var hasil_keruh1_agak_keruh=document.getElementById("hasil_keruh1_agak_keruh").innerHTML;
    var hasil_keruh1_buruk=document.getElementById("hasil_keruh1_buruk").innerHTML;

    rl1 = new Array(hasil_do1_baik,hasil_ph1_netral,hasil_suhu1_normal,hasil_tds1_baik,hasil_keruh1_agak_keruh);
    nilai_r1=Math.min.apply(null, rl1);
    $('#r1').html(nilai_r1.toFixed(2));
    $('#r_1').html(nilai_r1.toFixed(2));

    rl2 = new Array(hasil_do1_baik,hasil_ph1_netral,hasil_suhu1_dingin,hasil_tds1_baik,hasil_keruh1_baik);
    nilai_r2=Math.min.apply(null, rl2);
    $('#r2').html(nilai_r2.toFixed(2));
    $('#r_2').html(nilai_r2.toFixed(2));



    rl3 = new Array(hasil_do1_baik,hasil_ph1_netral,hasil_suhu1_normal,hasil_tds1_cukup_buruk,hasil_keruh1_baik);
    nilai_r3=Math.min.apply(null, rl3);
    $('#r3').html(nilai_r3.toFixed(2));
    $('#r_3').html(nilai_r3.toFixed(2));


    rl4 = new Array(hasil_do1_baik,hasil_ph1_asam,hasil_suhu1_normal,hasil_tds1_baik,hasil_keruh1_baik);
    nilai_r4=Math.min.apply(null, rl4);
    $('#r4').html(nilai_r4.toFixed(2));
    $('#r_4').html(nilai_r4.toFixed(2));


    rl5 = new Array(hasil_do1_baik,hasil_ph1_netral,hasil_suhu1_normal,hasil_tds1_baik,hasil_keruh1_baik);
    nilai_r5=Math.min.apply(null, rl5);
    $('#r5').html(nilai_r5.toFixed(2));
    $('#r_5').html(nilai_r5.toFixed(2));


    rl6 = new Array(hasil_do1_baik,hasil_ph1_netral,hasil_suhu1_panas,hasil_tds1_baik,hasil_keruh1_baik);
    nilai_r6=Math.min.apply(null, rl6);
    $('#r6').html(nilai_r6.toFixed(2));
    $('#r_6').html(nilai_r6.toFixed(2));


    rl7 = new Array(hasil_do1_baik,hasil_ph1_basa,hasil_suhu1_normal,hasil_tds1_baik,hasil_keruh1_baik);
    nilai_r7=Math.min.apply(null, rl7);
    $('#r7').html(nilai_r7.toFixed(2));
    $('#r_7').html(nilai_r7.toFixed(2));

    rl8 = new Array(hasil_do1_buruk,hasil_ph1_asam,hasil_suhu1_dingin,hasil_tds1_cukup_buruk,hasil_keruh1_buruk);
    nilai_r8=Math.min.apply(null, rl8);
    $('#r8').html(nilai_r8.toFixed(2));
    $('#r_8').html(nilai_r8.toFixed(2));

    rl9 = new Array(hasil_do1_buruk,hasil_ph1_basa,hasil_suhu1_dingin,hasil_tds1_cukup_buruk,hasil_keruh1_agak_keruh);
    nilai_r9=Math.min.apply(null, rl9);
    $('#r9').html(nilai_r9.toFixed(2));
    $('#r_9').html(nilai_r9.toFixed(2));

    rl10 = new Array(hasil_do1_baik,hasil_ph1_asam,hasil_suhu1_panas,hasil_tds1_cukup_buruk,hasil_keruh1_agak_keruh);
    nilai_r10=Math.min.apply(null, rl10);
    $('#r10').html(nilai_r10.toFixed(2));
    $('#r_10').html(nilai_r10.toFixed(2));

    rl11 = new Array(hasil_do1_buruk,hasil_ph1_basa,hasil_suhu1_panas,hasil_tds1_cukup_buruk,hasil_keruh1_agak_keruh);
    nilai_r11=Math.min.apply(null, rl11);
    $('#r11').html(nilai_r11.toFixed(2));
    $('#r_11').html(nilai_r11.toFixed(2));


    rl12 = new Array(hasil_do1_cukup_baik,hasil_ph1_basa,hasil_suhu1_dingin,hasil_tds1_cukup_buruk,hasil_keruh1_agak_keruh);
    nilai_r12=Math.min.apply(null, rl12);
    $('#r12').html(nilai_r12.toFixed(2));
    $('#r_12').html(nilai_r12.toFixed(2));


    rl13 = new Array(hasil_do1_buruk,hasil_ph1_asam,hasil_suhu1_dingin,hasil_tds1_buruk,hasil_keruh1_buruk);
    nilai_r13=Math.min.apply(null, rl13);
    $('#r13').html(nilai_r13.toFixed(2));
    $('#r_13').html(nilai_r13.toFixed(2));


    rl14 = new Array(hasil_do1_buruk,hasil_ph1_basa,hasil_suhu1_dingin,hasil_tds1_cukup_buruk,hasil_keruh1_agak_keruh);
    nilai_r14=Math.min.apply(null, rl14);
    $('#r14').html(nilai_r14.toFixed(2));
    $('#r_14').html(nilai_r14.toFixed(2));


    rl15 = new Array(hasil_do1_cukup_baik,hasil_ph1_asam,hasil_suhu1_panas,hasil_tds1_buruk,hasil_keruh1_buruk);
    nilai_r15=Math.min.apply(null, rl15);
    $('#r15').html(nilai_r15.toFixed(2));
    $('#r_15').html(nilai_r15.toFixed(2));


    rl16 = new Array(hasil_do1_buruk,hasil_ph1_netral,hasil_suhu1_panas,hasil_tds1_buruk,hasil_keruh1_buruk);
    nilai_r16=Math.min.apply(null, rl16);
    $('#r16').html(nilai_r16.toFixed(2));
    $('#r_16').html(nilai_r16.toFixed(2));


    rl17 = new Array(hasil_do1_buruk,hasil_ph1_basa,hasil_suhu1_dingin,hasil_tds1_buruk,hasil_keruh1_buruk);
    nilai_r17=Math.min.apply(null, rl17);
    $('#r17').html(nilai_r17.toFixed(2));
    $('#r_17').html(nilai_r17.toFixed(2));


    rl18 = new Array(hasil_do1_cukup_baik,hasil_ph1_basa,hasil_suhu1_panas,hasil_tds1_buruk,hasil_keruh1_buruk);
    nilai_r18=Math.min.apply(null, rl18);
    $('#r18').html(nilai_r18.toFixed(2));
    $('#r_18').html(nilai_r18.toFixed(2));

    rl19 = new Array(hasil_do1_buruk,hasil_ph1_basa,hasil_suhu1_panas,hasil_tds1_cukup_buruk,hasil_keruh1_agak_keruh);
    nilai_r19=Math.min.apply(null, rl19);
    $('#r19').html(nilai_r19.toFixed(2));
    $('#r_19').html(nilai_r19.toFixed(2));


    var r1=document.getElementById("r1").innerHTML;
    var r2=document.getElementById("r2").innerHTML;
    var r3=document.getElementById("r3").innerHTML;
    var r4=document.getElementById("r4").innerHTML;
    var r5=document.getElementById("r5").innerHTML;
    var r6=document.getElementById("r6").innerHTML;
    var r7=document.getElementById("r7").innerHTML;
    var r8=document.getElementById("r8").innerHTML;
    var r9=document.getElementById("r9").innerHTML;
    var r10=document.getElementById("r10").innerHTML;
    var r11=document.getElementById("r11").innerHTML;
    var r12=document.getElementById("r12").innerHTML;
    var r13=document.getElementById("r13").innerHTML;
    var r14=document.getElementById("r14").innerHTML;
    var r15=document.getElementById("r15").innerHTML;
    var r16=document.getElementById("r16").innerHTML;
    var r17=document.getElementById("r17").innerHTML;
    var r18=document.getElementById("r18").innerHTML;
    var r19=document.getElementById("r19").innerHTML;


    var r_1=document.getElementById("r1").innerHTML;
    var r_2=document.getElementById("r2").innerHTML;
    var r_3=document.getElementById("r3").innerHTML;
    var r_4=document.getElementById("r4").innerHTML;
    var r_5=document.getElementById("r5").innerHTML;
    var r_6=document.getElementById("r6").innerHTML;
    var r_7=document.getElementById("r7").innerHTML;
    var r_8=document.getElementById("r8").innerHTML;
    var r_9=document.getElementById("r9").innerHTML;
    var r_10=document.getElementById("r10").innerHTML;
    var r_11=document.getElementById("r11").innerHTML;
    var r_12=document.getElementById("r12").innerHTML;
    var r_13=document.getElementById("r13").innerHTML;
    var r_14=document.getElementById("r14").innerHTML;
    var r_15=document.getElementById("r15").innerHTML;
    var r_16=document.getElementById("r16").innerHTML;
    var r_17=document.getElementById("r17").innerHTML;
    var r_18=document.getElementById("r18").innerHTML;
    var r_19=document.getElementById("r19").innerHTML;

    

         a1 = r1*10;
         a2 = r2*10;
         a3 = r3*10;
         a4 = r4*10;
         a5 = r5*10;
         a6 = r6*10;
         a7 = r7*10;
         a8 = r8*20;
         a9 = r9*20;
         a10 = r10*20;
         a11 = r11*20;
         a12 = r12*20;
         a13 = r13*30;
         a14 = r14*30;
         a15 = r15*30;
         a16 = r16*30;
         a17 = r17*30;
         a18 = r18*30;
         a19 = r19*30;

         ra1=r_1*1;
         ra2=r_2*1;
         ra3=r_3*1;
         ra4=r_4*1;
         ra5=r_5*1;
         ra6=r_6*1;
         ra7=r_7*1;
         ra8=r_8*1;
         ra9=r_9*1;
         ra10=r_10*1;
         ra11=r_11*1;
         ra12=r_12*1;
         ra13=r_13*1;
         ra14=r_14*1;
         ra15=r_15*1;
         ra16=r_16*1;
         ra17=r_17*1;
         ra18=r_18*1;
         ra19=r_19*1;

         r_all = ra1+ra2+ra3+ra4+ra5+ra6+ra7+ra8+ra9+ra10+ra11+ra12+ra13+ra14+ra15+ra16+ra17+ra18+ra19;

         a_all = a1+a2+a3+a4+a5+a6+a7+a8+a9+a10+a11+a12+a13+a14+a15+a16+a17+a18+a19;
         //r_all= r_1+r_2+r_3+r_4+r_5+r_6+r_7+r_8+r_9+r_10+r_11+r_12+r_13+r_14+r_15+r_16;

        

        if(a_all == 0 || r_all == 0){
            ai_format=0;
            $('#hasil_akhir1').html("0% TIDAK TERCEMAR");
        }
        else{
        var ai = a_all/r_all;
        var ai_format = ai.toFixed(2);
              
        
        var ai_akhir1 = ai_format/30 * 100;
        var ai_akhir = ai_akhir1.toFixed(2);



        if (ai_akhir >=0 && ai_akhir < 11) {
           $('#hasil_akhir1').html(+ai_akhir+"% TIDAK TERCEMAR");
        }
        else if(ai_akhir >=11 && ai_akhir < 51) {
            $('#hasil_akhir1').html(+ai_akhir+"% TERCEMAR SEDANG");
        }
        else if(ai_akhir >=51 && ai_akhir < 101) {
            $('#hasil_akhir1').html(+ai_akhir+"% TERCEMAR BERAT");
        }
        }
    






 var ctx = document.getElementById("myChart").getContext('2d');
 var lineChartData
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["DO", "pH", "TDS", "Suhu", "Keruh", "Rssi"],
                datasets: [{
                    label: '',
                    data: [do1, ph1, tds1, suhu1, keruh1, rssi1],
                    
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });




}














function myFunction1() {
    var do2=document.getElementById("do2").innerHTML;
    var ph2=document.getElementById("ph2").innerHTML;
    var tds2=document.getElementById("Tds2").innerHTML;
    var suhu2=document.getElementById("suhu2").innerHTML;
    var keruh2=document.getElementById("keruh2").innerHTML;
    var rssi2=document.getElementById("rssi2").innerHTML;
    
//-------------------------------PERHITUNGAN NILAI DO, Ph, Suhu, TDS, dan Keruh--------------------------------------

        //PERHITUNGAN NILAI DO 
        if(do2 <= 4){
            $('#hasil_do2_baik').html('0');
            $('#hasil_do2_cukup_baik').html('0');
            $('#hasil_do2_buruk').html('1');
        }
        else if (do2 > 4 && do2 < 8) {
            $('#hasil_do2_baik').html((do2-4)/(8-4));
            $('#hasil_do2_cukup_baik').html((do2-4)/(8-4));
            $('#hasil_do2_buruk').html((8-do2)/(8-4));
        }
        else if (do2 >=8) {
            $('#hasil_do2_buruk').html('0');

            if (do2 >= 10) {
                $('#hasil_do2_baik').html('1');
            }
            else{
               $('#hasil_do2_baik').html('0');;
            }

            if (do2 >= 8 && do2 <=10) {
               $('#hasil_do2_cukup_baik').html((10-do2)/(10-4));
            }
            else{
                $('#hasil_do2_cukup_baik').html('0');
            }

        }
        else{
           // echo "tdk ada";
        }


        //PERHITUNGAN NILAI PH
        if(ph2 <= 6){
            $('#hasil_ph2_asam').html('1');
            $('#hasil_ph2_netral').html('0');
            $('#hasil_ph2_basa').html('0');
        }
        else if (ph2 > 6 && ph2 < 9) {
            $('#hasil_ph2_asam').html((9-ph2)/(9-6));
            $('#hasil_ph2_netral').html((ph2-6)/(9-6));
            $('#hasil_ph2_basa').html((ph2-6)/(9-6));
        }
        else if (ph2 >=9) {
            $('#hasil_ph2_asam').html('0');
            $('#hasil_ph2_basa').html('1');
            
            if (ph2 > 9 && ph2 < 10.5){
                $('#hasil_ph2_netral').html((10.5-ph2)/(10.5-6));
            }
            else if (ph2 > 10.5) {
                $('#hasil_ph2_netral').html('0');

            }
            
            else if(ph2 = 9){
                $('#hasil_ph2_netral').html((ph2-6)/(9-6));

            }
            else{

            }
        }
        else{
            //echo "tdk ada";
        }


    //PERHITUNGAN NILAI SUHU
        if (suhu2 <= 25) {
            $('#hasil_suhu2_dingin').html('1');
            $('#hasil_suhu2_normal').html('0');
            $('#hasil_suhu2_panas').html('0');
        }
        else if(suhu2 > 25 && suhu2 < 32){
            $('#hasil_suhu2_dingin').html((32-suhu2)/(32-25));
            $('#hasil_suhu2_normal').html((suhu2-25)/(32-25));
            $('#hasil_suhu2_panas').html((suhu2-25)/(32-25));
        }
        else if (suhu2 >= 32) {
            $('#hasil_suhu2_dingin').html('0');
            $('#hasil_suhu2_panas').html('1');

            if(suhu2 >=32 && suhu2 <34){
                $('#hasil_suhu2_normal').html((34-suhu2)/(34-25));
            }
            else if(suhu2 >= 34){
                $('#hasil_suhu2_normal').html('0');
            }
            else{
                
            }
        }
        else{
               // echo "tdk ada";
            }


    //PERHITUNGAN NILAI TDS

            if(tds2 <= 1000){
                $('#hasil_tds2_baik').html('1');
                $('#hasil_tds2_cukup_buruk').html('0');
                $('#hasil_tds2_buruk').html('0');
            }
            else if (tds2 > 1000 && tds2 < 1020) {
                $('#hasil_tds2_baik').html((1020-tds2)/(1020-1000));
                $('#hasil_tds2_cukup_buruk').html((tds2-1000)/(1020-1000));
                $('#hasil_tds2_buruk').html((tds2-1000)/(1020-1000));
            }
            else if (tds2 >=1020) {
                $('#hasil_tds2_baik').html('0');
                $('#hasil_tds2_buruk').html('1');

                if (tds2 >=1020 && tds2 <= 1022) {
                    $('#hasil_tds2_cukup_buruk').html((1022-tds2)/(1022-1000));
                }
                else{
                    $('#hasil_tds2_cukup_buruk').html('0');

                }
            }else{
               // echo "tdk ada";
            }

          

    //PERHITUNGAN NILAI KERUH

            if(keruh2 <= 25){
                $('#hasil_keruh2_baik').html('1');
                $('#hasil_keruh2_agak_keruh').html('0');
                $('#hasil_keruh2_buruk').html('0');
            }
            else if (keruh2 > 25 && keruh2 < 30) {
                $('#hasil_keruh2_baik').html((30-keruh2)/(30-25));
                $('#hasil_keruh2_agak_keruh').html((keruh2-25)/(30-25));
                $('#hasil_keruh2_buruk').html((keruh2-25)/(30-25));
            }
            else if (keruh2 >=30) {
                $('#hasil_keruh2_baik').html('0');
                $('#hasil_keruh2_buruk').html('1');
                if (keruh2 >= 30 && keru2 <= 32) {
                    $('#hasil_keruh2_agak_keruh').html((32-keruh2)/(32-25));
                }
                else if (keruh2 > 32) {
                    $('#hasil_keruh2_agak_keruh').html('0');

                }
            }else{
                //echo "tdk ada";
            }
//--------------------------------------PENENTUAN NILAI MINIMAL DARI RULE-------------------------------------------------
    


    var hasil_do2_baik=document.getElementById("hasil_do2_baik").innerHTML;
    var hasil_do2_cukup_baik=document.getElementById("hasil_do2_cukup_baik").innerHTML;
    var hasil_do2_buruk=document.getElementById("hasil_do2_buruk").innerHTML;
    var hasil_ph2_asam=document.getElementById("hasil_ph2_asam").innerHTML;
    var hasil_ph2_netral=document.getElementById("hasil_ph2_netral").innerHTML;
    var hasil_ph2_basa=document.getElementById("hasil_ph2_basa").innerHTML;
    var hasil_suhu2_dingin=document.getElementById("hasil_suhu2_dingin").innerHTML;
    var hasil_suhu2_normal=document.getElementById("hasil_suhu2_normal").innerHTML;
    var hasil_suhu2_panas=document.getElementById("hasil_suhu2_panas").innerHTML;
    var hasil_tds2_baik=document.getElementById("hasil_tds2_baik").innerHTML;
    var hasil_tds2_cukup_buruk=document.getElementById("hasil_tds2_cukup_buruk").innerHTML;
    var hasil_tds2_buruk=document.getElementById("hasil_tds2_buruk").innerHTML;
    var hasil_keruh2_baik=document.getElementById("hasil_keruh2_baik").innerHTML;
    var hasil_keruh2_agak_keruh=document.getElementById("hasil_keruh2_agak_keruh").innerHTML;
    var hasil_keruh2_buruk=document.getElementById("hasil_keruh2_buruk").innerHTML;

    rl1_2 = new Array(hasil_do2_baik,hasil_ph2_netral,hasil_suhu2_normal,hasil_tds2_baik,hasil_keruh2_agak_keruh);
    nilai_r1_2=Math.min.apply(null, rl1_2);
    $('#r1_2').html(nilai_r1_2.toFixed(2));
    $('#r_1_2').html(nilai_r1_2.toFixed(2));

    rl2_2 = new Array(hasil_do2_baik,hasil_ph2_netral,hasil_suhu2_dingin,hasil_tds2_baik,hasil_keruh2_baik);
    nilai_r2_2=Math.min.apply(null, rl2_2);
    $('#r2_2').html(nilai_r2_2.toFixed(2));
    $('#r_2_2').html(nilai_r2_2.toFixed(2));



    rl3_2 = new Array(hasil_do2_baik,hasil_ph2_netral,hasil_suhu2_normal,hasil_tds2_cukup_buruk,hasil_keruh2_baik);
    nilai_r3_2=Math.min.apply(null, rl3_2);
    $('#r3_2').html(nilai_r3_2.toFixed(2));
    $('#r_3_2').html(nilai_r3_2.toFixed(2));


    rl4_2 = new Array(hasil_do2_baik,hasil_ph2_asam,hasil_suhu2_normal,hasil_tds2_baik,hasil_keruh2_baik);
    nilai_r4_2=Math.min.apply(null, rl4_2);
    $('#r4_2').html(nilai_r4_2.toFixed(2));
    $('#r_4_2').html(nilai_r4_2.toFixed(2));


    rl5_2 = new Array(hasil_do2_baik,hasil_ph2_netral,hasil_suhu2_normal,hasil_tds2_baik,hasil_keruh2_baik);
    nilai_r5_2=Math.min.apply(null, rl5_2);
    $('#r5_2').html(nilai_r5_2.toFixed(2));
    $('#r_5_2').html(nilai_r5_2.toFixed(2));


    rl6_2 = new Array(hasil_do2_baik,hasil_ph2_netral,hasil_suhu2_panas,hasil_tds2_baik,hasil_keruh2_baik);
    nilai_r6_2=Math.min.apply(null, rl6_2);
    $('#r6_2').html(nilai_r6_2.toFixed(2));
    $('#r_6_2').html(nilai_r6_2.toFixed(2));


    rl7_2 = new Array(hasil_do2_baik,hasil_ph2_basa,hasil_suhu2_normal,hasil_tds2_baik,hasil_keruh2_baik);
    nilai_r7_2=Math.min.apply(null, rl7_2);
    $('#r7_2').html(nilai_r7_2.toFixed(2));
    $('#r_7_2').html(nilai_r7_2.toFixed(2));

    rl8_2 = new Array(hasil_do2_buruk,hasil_ph2_asam,hasil_suhu2_dingin,hasil_tds2_cukup_buruk,hasil_keruh2_buruk);
    nilai_r8_2=Math.min.apply(null, rl8_2);
    $('#r8_2').html(nilai_r8_2.toFixed(2));
    $('#r_8_2').html(nilai_r8_2.toFixed(2));

    rl9_2 = new Array(hasil_do2_buruk,hasil_ph2_basa,hasil_suhu2_dingin,hasil_tds2_cukup_buruk,hasil_keruh2_agak_keruh);
    nilai_r9_2=Math.min.apply(null, rl9_2);
    $('#r9_2').html(nilai_r9_2.toFixed(2));
    $('#r_9_2').html(nilai_r9_2.toFixed(2));

    rl10_2 = new Array(hasil_do2_baik,hasil_ph2_asam,hasil_suhu2_panas,hasil_tds2_cukup_buruk,hasil_keruh2_agak_keruh);
    nilai_r10_2=Math.min.apply(null, rl10_2);
    $('#r10_2').html(nilai_r10_2.toFixed(2));
    $('#r_10_2').html(nilai_r10_2.toFixed(2));

    rl11_2 = new Array(hasil_do2_buruk,hasil_ph2_basa,hasil_suhu2_panas,hasil_tds2_cukup_buruk,hasil_keruh2_agak_keruh);
    nilai_r11_2=Math.min.apply(null, rl11_2);
    $('#r11_2').html(nilai_r11_2.toFixed(2));
    $('#r_11_2').html(nilai_r11_2.toFixed(2));


    rl12_2 = new Array(hasil_do2_cukup_baik,hasil_ph2_basa,hasil_suhu2_dingin,hasil_tds2_cukup_buruk,hasil_keruh2_agak_keruh);
    nilai_r12_2=Math.min.apply(null, rl12_2);
    $('#r12_2').html(nilai_r12_2.toFixed(2));
    $('#r_12_2').html(nilai_r12_2.toFixed(2));


    rl13_2 = new Array(hasil_do2_buruk,hasil_ph2_asam,hasil_suhu2_dingin,hasil_tds2_buruk,hasil_keruh2_buruk);
    nilai_r13_2=Math.min.apply(null, rl13_2);
    $('#r13_2').html(nilai_r13_2.toFixed(2));
    $('#r_13_2').html(nilai_r13_2.toFixed(2));


    rl14_2 = new Array(hasil_do2_buruk,hasil_ph2_basa,hasil_suhu2_dingin,hasil_tds2_cukup_buruk,hasil_keruh2_agak_keruh);
    nilai_r14_2=Math.min.apply(null, rl14_2);
    $('#r14_2').html(nilai_r14_2.toFixed(2));
    $('#r_14_2').html(nilai_r14_2.toFixed(2));


    rl15_2 = new Array(hasil_do2_cukup_baik,hasil_ph2_asam,hasil_suhu2_panas,hasil_tds2_buruk,hasil_keruh2_buruk);
    nilai_r15_2=Math.min.apply(null, rl15_2);
    $('#r15_2').html(nilai_r15_2.toFixed(2));
    $('#r_15_2').html(nilai_r15_2.toFixed(2));


    rl16_2 = new Array(hasil_do2_buruk,hasil_ph2_netral,hasil_suhu2_panas,hasil_tds2_buruk,hasil_keruh2_buruk);
    nilai_r16_2=Math.min.apply(null, rl16_2);
    $('#r16_2').html(nilai_r16_2.toFixed(2));
    $('#r_16_2').html(nilai_r16_2.toFixed(2));


    rl17_2 = new Array(hasil_do2_buruk,hasil_ph2_basa,hasil_suhu2_dingin,hasil_tds2_buruk,hasil_keruh2_buruk);
    nilai_r17_2=Math.min.apply(null, rl17_2);
    $('#r17_2').html(nilai_r17_2.toFixed(2));
    $('#r_17_2').html(nilai_r17_2.toFixed(2));


    rl18_2 = new Array(hasil_do2_cukup_baik,hasil_ph2_basa,hasil_suhu2_panas,hasil_tds2_buruk,hasil_keruh2_buruk);
    nilai_r18_2=Math.min.apply(null, rl18_2);
    $('#r18_2').html(nilai_r18_2.toFixed(2));
    $('#r_18_2').html(nilai_r18_2.toFixed(2));

    rl19_2 = new Array(hasil_do2_buruk,hasil_ph2_basa,hasil_suhu2_panas,hasil_tds2_cukup_buruk,hasil_keruh2_agak_keruh);
    nilai_r19_2=Math.min.apply(null, rl19_2);
    $('#r19_2').html(nilai_r19_2.toFixed(2));
    $('#r_19_2').html(nilai_r19_2.toFixed(2));


    var r1_2=document.getElementById("r1_2").innerHTML;
    var r2_2=document.getElementById("r2_2").innerHTML;
    var r3_2=document.getElementById("r3_2").innerHTML;
    var r4_2=document.getElementById("r4_2").innerHTML;
    var r5_2=document.getElementById("r5_2").innerHTML;
    var r6_2=document.getElementById("r6_2").innerHTML;
    var r7_2=document.getElementById("r7_2").innerHTML;
    var r8_2=document.getElementById("r8_2").innerHTML;
    var r9_2=document.getElementById("r9_2").innerHTML;
    var r10_2=document.getElementById("r10_2").innerHTML;
    var r11_2=document.getElementById("r11_2").innerHTML;
    var r12_2=document.getElementById("r12_2").innerHTML;
    var r13_2=document.getElementById("r13_2").innerHTML;
    var r14_2=document.getElementById("r14_2").innerHTML;
    var r15_2=document.getElementById("r15_2").innerHTML;
    var r16_2=document.getElementById("r16_2").innerHTML;
    var r17_2=document.getElementById("r17_2").innerHTML;
    var r18_2=document.getElementById("r18_2").innerHTML;
    var r19_2=document.getElementById("r19_2").innerHTML;


    var r_1_2=document.getElementById("r1_2").innerHTML;
    var r_2_2=document.getElementById("r2_2").innerHTML;
    var r_3_2=document.getElementById("r3_2").innerHTML;
    var r_4_2=document.getElementById("r4_2").innerHTML;
    var r_5_2=document.getElementById("r5_2").innerHTML;
    var r_6_2=document.getElementById("r6_2").innerHTML;
    var r_7_2=document.getElementById("r7_2").innerHTML;
    var r_8_2=document.getElementById("r8_2").innerHTML;
    var r_9_2=document.getElementById("r9_2").innerHTML;
    var r_10_2=document.getElementById("r10_2").innerHTML;
    var r_11_2=document.getElementById("r11_2").innerHTML;
    var r_12_2=document.getElementById("r12_2").innerHTML;
    var r_13_2=document.getElementById("r13_2").innerHTML;
    var r_14_2=document.getElementById("r14_2").innerHTML;
    var r_15_2=document.getElementById("r15_2").innerHTML;
    var r_16_2=document.getElementById("r16_2").innerHTML;
    var r_17_2=document.getElementById("r17_2").innerHTML;
    var r_18_2=document.getElementById("r18_2").innerHTML;
    var r_19_2=document.getElementById("r19_2").innerHTML;

    

         a1_2 = r1_2*10;
         a2_2 = r2_2*10;
         a3_2 = r3_2*10;
         a4_2 = r4_2*10;
         a5_2 = r5_2*10;
         a6_2 = r6_2*10;
         a7_2 = r7_2*10;
         a8_2 = r8_2*20;
         a9_2 = r9_2*20;
         a10_2 = r10_2*20;
         a11_2 = r11_2*20;
         a12_2 = r12_2*20;
         a13_2 = r13_2*30;
         a14_2 = r14_2*30;
         a15_2 = r15_2*30;
         a16_2 = r16_2*30;
         a17_2 = r17_2*30;
         a18_2 = r18_2*30;
         a19_2 = r19_2*30;

         ra1_2=r_1_2*1;
         ra2_2=r_2_2*1;
         ra3_2=r_3_2*1;
         ra4_2=r_4_2*1;
         ra5_2=r_5_2*1;
         ra6_2=r_6_2*1;
         ra7_2=r_7_2*1;
         ra8_2=r_8_2*1;
         ra9_2=r_9_2*1;
         ra10_2=r_10_2*1;
         ra11_2=r_11_2*1;
         ra12_2=r_12_2*1;
         ra13_2=r_13_2*1;
         ra14_2=r_14_2*1;
         ra15_2=r_15_2*1;
         ra16_2=r_16_2*1;
         ra17_2=r_17_2*1;
         ra18_2=r_18_2*1;
         ra19_2=r_19_2*1;

         a_all_2 = a1_2+a2_2+a3_2+a4_2+a5_2+a6_2+a7_2+a8_2+a9_2+a10_2+a11_2+a12_2+a13_2+a14_2+a15_2+a16_2+a17_2+a18_2+a19_2;

         //r_all= r_1+r_2+r_3+r_4+r_5+r_6+r_7+r_8+r_9+r_10+r_11+r_12+r_13+r_14+r_15+r_16;

         r_all_2 = ra1_2+ra2_2+ra3_2+ra4_2+ra5_2+ra6_2+ra7_2+ra8_2+ra9_2+ra10_2+ra11_2+ra12_2+ra13_2+ra14_2+ra15_2+ra16_2+ra17_2+ra18_2+ra19_2;
         // aaaa=1+9+5;
         // $('#hasil_akhir2').html(aaaa);




        if(a_all_2 == 0 || r_all_2 == 0){
            ai_format_2=0;
            $('#hasil_akhir2').html("0% TIDAK TERCEMAR");
        }
        else{
        var ai_2 = a_all_2/r_all_2;
        var ai_format_2 = ai_2.toFixed(2);
              
        
        var ai_akhir1_2 = ai_format_2/30 * 100;
        var ai_akhir_2 = ai_akhir1_2.toFixed(2);



        if (ai_akhir_2 >=0 && ai_akhir_2 < 11) {
           $('#hasil_akhir2').html(+ai_akhir_2+"% TIDAK TERCEMAR");
        }
        else if(ai_akhir_2 >=11 && ai_akhir_2 < 51) {
            $('#hasil_akhir2').html(+ai_akhir_2+"% TERCEMAR SEDANG");
        }
        else if(ai_akhir_2 >=51 && ai_akhir_2 < 101) {
            $('#hasil_akhir2').html(+ai_akhir_2+"% TERCEMAR BERAT");
        }
        }
    






 var ctx = document.getElementById("myChart1").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["DO", "pH", "TDS", "Suhu", "Keruh", "Rssi"],
                datasets: [{
                    label: '',
                    data: [do2, ph2, tds2, suhu2, keruh2, rssi2],
                    
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });



}
</script>
        <!-- <script>
       //var myFirebaseRef = new Firebase('https://www.gstatic.com/firebasejs/8.2.1/firebase-database.js');
       //var database = firebase.database();
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["DO", "pH", "TDS", "Suhu", "Keruh", "Rssi"],
                datasets: [{
                    label: '',
                    data: ['5', '8', '2', '9', '15', '25'],
                    
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script> -->
    <!-- <script>
        // var do3=document.getElementById("do2").innerHTML;
         var ph2=document.getElementById("ph2").innerHTML;
        // var tds2=document.getElementById("Tds2").innerHTML;
        // var suhu2=document.getElementById("suhu2").innerHTML;
        // var keruh2=document.getElementById("keruh2").innerHTML;
        var ctx = document.getElementById("myChart1").getContext('2d');
        var do2 = $('#do2').val();
        var ph2 = $('#ph2').val();
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["DO", "pH", "TDS", "Suhu", "Keruh", "Rssi"],
                datasets: [{
                    data: [document.getElementById("do2").innerHTML, var ph2, 5, 4, 3],
                    // backgroundColor: [
                    // 'rgba(255, 99, 132, 0.2)',
                    // 'rgba(54, 162, 235, 0.2)',
                    // 'rgba(255, 206, 86, 0.2)',
                    // 'rgba(75, 192, 192, 0.2)',
                    // 'rgba(153, 102, 255, 0.2)'
                    // ],
                    // borderColor: [
                    // 'rgba(255,99,132,1)',
                    // 'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)'
                    // ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script> -->
    </main>

     <footer>
        &copy; 2020, by Elsa Project
     </footer>
</body>
</html>
