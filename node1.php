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
                    <!-- <small>Nilai DO = 3 mg/L</small></br>
                    <small>Nilai Suhu = C</small></br>
                    <small>Nilai TDS = 1000 mg/L</small></br>
                    <small>Nilai pH = 6-8,5</small></br>
                    <small>Nilai Kekeruhan = 25 NTU</small></br> -->

                    <small>Nilai DO = 3 mg/L. Nilai Suhu = C. Nilai TDS = 1000 mg/L. Nilai pH = 6-8,5. Nilai Kekeruhan = 25 NTU</small></br>

          <label>
          <aside>
          <article>
                <section>
                    <h2>Node 1</h2>
                    <table hidden="" id="tb_1">
                        <tr>
                            <th>DO</th>
                            <td>
                            <a id="do1">0</a>
                            <a hidden="" id="hasil_do1"></a>
                            </td>
                        </tr>
                        <tr>
                            <th>pH</th>
                            <td>
                            <a id="ph1">0</a>
                            <a hidden="" id="hasil_ph1"></a>
                            </td>
                        </tr>
                        <tr>
                            <th>TDS</th>
                            <td>
                            <a id="Tds1">0</a>
                            <a hidden="" id="hasil_tds1"></a>
                            </td>
                        </tr>
                        <tr>
                            <th>Suhu</th>
                            <td>
                            <a id="suhu1">0</a>
                            <a hidden="" id="hasil_suhu1"></a>
                            </td>
                        </tr>
                        <tr>
                            <th>Keruh</th>
                            <td>
                            <a id="keruh1">0</a>
                            <a hidden="" id="hasil_keruh1"></a>
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
                            <td id="hasil_akhir1">0</td>
                        </tr>   
                        
                            
                          <!---- <td id="waktu1">0
                                <script>
                                    var dt = new Date();
                                    document.getElementById("waktu1").innerHTML = dt.toLocaleString();
                                </script>
                            </td>--->

                    </table>
                            <button hidden="" id="btn" onclick="myFunction()">Try it</button>
                            <div style="width: 400px;height:300px; ">
                                <canvas id="do1Chart"></canvas>
                                <canvas id="ph1Chart"></canvas>
                                <canvas id="suhu1Chart"></canvas>
                                <canvas id="tds1Chart"></canvas>
                                <canvas id="keruh1Chart"></canvas>
                            </div>
                        </section>
                    </article>
                </aside>
            </label>

          <!-- <aside>
          </br></br></br>

                            <div style="width: 400px;height:300px; ">
                                <canvas id="do1Chart"></canvas>
                                <canvas id="ph1Chart"></canvas>

                            </div>

                
            </aside> -->


            

                    
            
            
        </div>
        <script type="text/javascript" src="src.js"></script>
        <script type="text/javascript" src="chart.js"></script>

<script>
window.onload = function(){
document.getElementById('btn').click();

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


    var ctx = document.getElementById("do1Chart").getContext('2d');
    var lineChartData
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["DO"],
                datasets: [{
                    label: 'DO',
                    backgroundColor: ['rgb(255, 99, 132)'],
                    borderColor: ['rgb(255, 99, 132)'],
                    data: [do1],
                    
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

    var ctx = document.getElementById("ph1Chart").getContext('2d');
    var lineChartData
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["pH"],
                datasets: [{
                    label: 'pH',
                    backgroundColor: ['rgba(56, 86, 255, 0.87)'],
                    borderColor: ['rgba(56, 86, 255, 0.87)'],
                    data: [ph1],
                    
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

    var ctx = document.getElementById("suhu1Chart").getContext('2d');
    var lineChartData
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["SUHU"],
                datasets: [{
                    label: 'SUHU',
                    backgroundColor: ['rgb(60, 179, 113)'],
                    borderColor: ['rgb(60, 179, 113)'],
                    data: [suhu1],
                    
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

    var ctx = document.getElementById("tds1Chart").getContext('2d');
    var lineChartData
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["TDS"],
                datasets: [{
                    label: 'TDS',
                    backgroundColor: ['rgb(175, 238, 239)'],
                    borderColor: ['rgb(175, 238, 239)'],
                    data: [tds1],
                    
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

    var ctx = document.getElementById("keruh1Chart").getContext('2d');
    var lineChartData
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["KERUH"],
                backgroundColor: ['rgba(56, 86, 255, 0.87)'],
                borderColor: ['rgba(56, 86, 255, 0.87)'],
                datasets: [{
                    label: 'KERUH',
                    data: [keruh1],
                    
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
    </main>

     <footer>
        &copy; 2020, by Elsa Project
     </footer>
</body>
</html>