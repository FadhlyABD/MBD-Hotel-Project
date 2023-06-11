let add_room_t_form = document.getElementById('add_room_t_form');
let edit_room_t_form = document.getElementById('edit_room_t_form');
let room_t_name_inp = document.getElementById('room_t_name_inp');
let room_t_price_inp = document.getElementById('room_t_price_inp');
let room_t_quantity_inp = document.getElementById('room_t_quantity_inp');
let room_t_guests_inp = document.getElementById('room_t_guests_inp');
let room_t_desc_inp = document.getElementById('room_t_desc_inp');

add_room_t_form.addEventListener('submit', function(e){
    e.preventDefault();
    add_room_t();
});

edit_room_t_form.addEventListener('submit', function(e){
    e.preventDefault();
    submit_edit_room_t();
});

function add_room_t() {
    let data = new FormData();
    // data.append('name', add_room_t_form.elements['room_t_name'].value);
    // data.append('price', add_room_t_form.elements['room_t_price'].value);
    // data.append('quantity', add_room_t_form.elements['room_t_quantity'].value);
    // data.append('guests', add_room_t_form.elements['room_t_guests'].value);
    // data.append('desc', add_room_t_form.elements['room_t_desc'].value);
    data.append('name', room_t_name_inp.value);
    data.append('price', room_t_price_inp.value);
    data.append('quantity', room_t_quantity_inp.value);
    data.append('guests', room_t_guests_inp.value);
    data.append('desc', room_t_desc_inp.value);
    data.append('add_room_t','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms_crud.php", true);
    
    xhr.onload = function(){
        var myModal = document.getElementById('add-room-t');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if(this.responseText == 1){
            alert('success', 'New room added!');
            // add_room_t_form.elements['room_t_name'].value = '';
            // add_room_t_form.elements['room_t_price'] = '';
            // add_room_t_form.elements['room_t_quantity'].value = '';
            // add_room_t_form.elements['room_t_guests'].value = '';
            // add_room_t_form.elements['room_t_desc'].value = '';
            room_t_name_inp.value = '';
            room_t_price_inp.value = '';
            room_t_quantity_inp.value = '';
            room_t_guests_inp.value = '';
            room_t_desc_inp.value = '';
            add_room_t_form.reset();
            get_all_room_t();
        }
        else{
            alert('error', 'No changes saved!');
        }
    }   
    xhr.send(data);
}

function get_all_room_t() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onload = function(){
        document.getElementById('room-t-data').innerHTML = this.responseText;
    }
    
    xhr.send('get_all_room_t');
}

function edit_room_t(id) {
    let data = new FormData();

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onload = function(){
        console.log(JSON.parse(this.responseText));
        let data = JSON.parse(this.responseText);
        edit_room_t_form.elements['room_t_name'].value = data.roomdata.NAMA_JENIS;
        edit_room_t_form.elements['room_t_desc'].value = data.roomdata.DESKRIPSI;
        edit_room_t_form.elements['room_t_price'].value = data.roomdata.HARGA1;
        edit_room_t_form.elements['room_t_quantity'].value = data.roomdata.kuantitas;
        edit_room_t_form.elements['room_t_guests'].value = data.roomdata.max_guest;
        edit_room_t_form.elements['room_t_id'].value = data.roomdata.jk_id;

    }   
    xhr.send('get_room_t='+id);
}

function submit_edit_room_t(id) {
    let data = new FormData();
    data.append('id', edit_room_t_form.elements['room_t_id'].value);
    data.append('name', edit_room_t_form.elements['room_t_name'].value);
    data.append('price', edit_room_t_form.elements['room_t_price'].value);
    data.append('quantity', edit_room_t_form.elements['room_t_quantity'].value);
    data.append('guests', edit_room_t_form.elements['room_t_guests'].value);
    data.append('desc', edit_room_t_form.elements['room_t_desc'].value);
    // data.append('name', room_t_name_inp.value);
    // data.append('price', room_t_price_inp.value);
    // data.append('quantity', room_t_quantity_inp.value);
    // data.append('guests', room_t_guests_inp.value);
    // data.append('desc', room_t_desc_inp.value);
    data.append('edit_room_t','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms_crud.php", true);
    
    xhr.onload = function(){
        var myModal = document.getElementById('edit-room-t');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if(this.responseText == 1){
            alert('success', 'Room data edited!');
            // add_room_t_form.elements['room_t_name'].value = '';
            // add_room_t_form.elements['room_t_price'] = '';
            // add_room_t_form.elements['room_t_quantity'].value = '';
            // add_room_t_form.elements['room_t_guests'].value = '';
            // add_room_t_form.elements['room_t_desc'].value = '';
            // room_t_name_inp.value = '';
            // room_t_price_inp.value = '';
            // room_t_quantity_inp.value = '';
            // room_t_guests_inp.value = '';
            // room_t_desc_inp.value = '';
            edit_room_t_form.reset();
            get_all_room_t();
        }
        else{
            alert('error', 'No changes saved!');
        }
    }   
    xhr.send(data);
}

function toggle_status(id,val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        console.log(JSON.parse(this.responseText));
        if (this.responseText = 1) {
            alert('success','Status toggled!');
            get_all_room_t();
        } else {
            alert('error','Server down!');
            get_all_room_t();
        }
    }
    
    xhr.send('toggle_status='+id+'&status_values='+val);
}

function rem_room_t(val) {
    if (confirm("Are you sure? You're going to delete this room anjai!")) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/rooms_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onload = function(){
            if (this.responseText == 1) {
                alert('success','Room removed!');
                get_all_room_t();
            } else {
                alert('error','Server down!');
            }
        }
        
        xhr.send('rem_room_t='+val);
    }
    
}

window.onload = function(){
    get_all_room_t();
}