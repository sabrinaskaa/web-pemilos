let showDownCard = (iconId,cardId) => {
    const icon = document.getElementById(iconId),
    card = document.getElementById(cardId)
    if(icon && card){
        icon.addEventListener('click', ()=>{
            card.classList.toggle('card-hasil')
            })
        }
}
let showDownText = (iconId,textId) => {
    const icon = document.getElementById(iconId),
    text = document.getElementById(textId)
    if(icon && text){
        icon.addEventListener('click', ()=>{
            text.classList.toggle('text-show')
        })
    }
}
let showText = (iconId,showId) => {
    const icon = document.getElementById(iconId),
    show = document.getElementById(showId)
    if(icon && show){
        icon.addEventListener('click', ()=>{
            show.classList.toggle('text')
        })
    }
}
for(let i=1; i < 4; ++i){
    showDownCard('down-icon'+i,'card'+i)
    showDownText('down-icon'+i,'down-text'+i)
    showText('down-icon'+i,'text'+i)
}