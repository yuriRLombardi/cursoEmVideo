/*
    Feito por: Yuri
    Data: 17/04/24
*/
function carregar() {
    var msg = document.getElementById('msg')
    var img = document.getElementById('imagem')
    var data = new Date()
    var hora = 17//data.getHours()
    msg.innerHTML = `Agora são ${hora} horas.`
    if (hora >= 0 && hora < 12) {
        //BOM DIA
        img.src = 'manha.png'
        document.body.style.background = '#DBA6A9'
    }
    else if(hora >= 12 && hora < 18){
        //BOA TARDE
        img.src = 'tarde.png'
        document.body.style.background = '#D38C57'
    }
    else{
        //BOA NOITE 
        img.src = 'noite.png'
        document.body.style.background = '#031F3F'
    }
}
