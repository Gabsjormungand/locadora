function Trocar(){
    let tipo = document.getElementById("veiculo").value
    if(tipo == "Básico"){
        document.getElementById("imagem").src="basíco.png"
        document.getElementById("valor").innerHTML = "99"
    }else if(tipo == "Esporte"){
        document.getElementById("imagem").src="esporte.png"
        document.getElementById("valor").innerHTML = "159"
    }else{
        document.getElementById("imagem").src="completo.png"
        document.getElementById("valor").innerHTML = "199"
    }

}
