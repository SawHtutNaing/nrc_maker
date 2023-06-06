let  all = [];

document.addEventListener("DOMContentLoaded", function() {
    fetch('nrc.json')
    .then(response => response.json())
    .then(data => {
    all = [...data.data ];
    })
})



let state_number = document.getElementById('state_number');
let town_ship = document.getElementById('town_ship');


state_number.addEventListener('change' , ()=>{
    town_ship.innerHTML = "";

    let current_value =state_number.value ;
    
    let town_ship_list = all.filter(el => el.nrc_code == current_value);
    town_ship_list.map(el => {
        town_ship.innerHTML +=  `<option value="${el.name_en}"> ${el.name_en} </option>`
           
        
    })
})