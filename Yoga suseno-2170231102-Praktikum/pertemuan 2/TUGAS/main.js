{
    document.write("Hi " );
    let nm = prompt("Your Name ? ") 
    document.write(nm) ;
    document.write(" Selamat Mencoba")
}


function hasil() {
    var nilai = document.getElementById("angka"). value;
        if(nilai >= 80 && nilai < 101){
            alert('Nilai anda A')
        }else if(nilai >= 70 && nilai <= 80){
            alert('Nilai anda AB')
        }else if(nilai >= 65 && nilai <= 71){
            alert('Nilai anda B')
        }else if(nilai >= 60 && nilai <= 66){
            alert('Nilai anda C')
        }else if(nilai >= 40 && nilai <= 56){
            alert('Nilai anda D')
        }else{
            alert('Nilai anda E')
        }
     
}