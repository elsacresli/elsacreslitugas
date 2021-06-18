console.log("hello")


var firebaseConfig = {
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        apiKey: "AIzaSyC3xVlrnkxJ2ZEoEWzxihvC2y2GslRjE1w",
        authDomain: "datasensor-ca0eb.firebaseapp.com",
        databaseURL: "https://datasensor-ca0eb.firebaseio.com",
        projectId: "datasensor-ca0eb",
        storageBucket: "datasensor-ca0eb.appspot.com",
        messagingSenderId: "903161331787",
        appId: "1:903161331787:web:e67414a43d3889cd830dce"
       // measurementId: "G-54DBY7R5XC"
      
    
          
};

firebase.initializeApp(firebaseConfig);

var database = firebase.database();

database.ref('/live').on('value', function(snapshot){ //huruf 'l' di 'live' nya harus huruf kecil sesuai di firebasenya
	console.log('tehe');
    
    child = snapshot.val();
    node1_val = child["Node1"];
    node2_val = child["Node2"];

    $("#do1").text(node1_val["DO"]);
    $("#ph1").text(node1_val["pH"]);
    $("#suhu1").text(node1_val["suhu"]);
    $("#tds1").text(node1_val["tds"]);
    $("#rssi1").text(node1_val["rssi"]);
    $("#tbdt1").text(node1_val["tbdt"]);
    $("#waktu1").text(node1_val["timestamp"]); //timestamp sesuai dengan key yang dipakai di firebase
    
    $("#do2").text(node2_val["DO"]);
    $("#ph2").text(node2_val["pH"]);
    $("#suhu2").text(node2_val["suhu"]);
    $("#tds2").text(node2_val["tds"]);
    $("#rssi2").text(node2_val["rssi"]);
    $("#tbdt2").text(node2_val["tbdt"]);
    $("#waktu2").text(node2_val["timestamp"]); //timestamp sesuai dengan key yang dipakai di firebase


  });

// cek juga rule di firebase
// harus seperti ini :
//
// {
//   "rules": {
//     ".read": "true", 
//     ".write": "true",  
//   }
// }

