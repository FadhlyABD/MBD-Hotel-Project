let facility_s_form = document.getElementById('facility_s_form');
let facility_name_inp = document.getElementById('facility_name_inp');
let facility_desc_inp = document.getElementById('facility_desc_inp');
let facility_price_inp = document.getElementById('facility_price_inp');


facility_s_form.addEventListener('submit', function(e){
    e.preventDefault();
    add_facility();
})

function add_facility(){
    let data = new FormData();
    data.append('name', facility_name_inp.value);
    data.append('desc', facility_desc_inp.value);
    data.append('price', facility_price_inp.value);
    data.append('add_facility','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/facilities_crud.php", true);
    
    xhr.onload = function(){
        var myModal = document.getElementById('facility-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if(this.responseText == 1){
            alert('success', 'New facility added!');
            facility_name_inp.value = '';
            facility_desc_inp.value = '';
            facility_price_inp.value = '';
            get_facility();
        }
        else{
            alert('error', 'No changes saved!');
        }
    }   
    xhr.send(data);
}

function get_facility() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/facilities_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onload = function(){
        document.getElementById('facility-data').innerHTML = this.responseText;
    }
    
    xhr.send('get_facility')
}

function rem_facility(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/facilities_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onload = function(){
        if (this.responseText == 1) {
            alert('success','Facility removed!');
            get_facility();
        } else {
            alert('error','Server down!');
        }
    }
    
    xhr.send('rem_facility='+val);
}

window.onload = function(){
    get_facility();
}


