let general_data;

let general_s_form = document.getElementById('general_s_form');
let site_title_inp = document.getElementById('site_title_inp');
let site_about_inp = document.getElementById('site_about_inp');

function get_general() {
    let site_title = document.getElementById('site_title');
    let site_about = document.getElementById('site_about');
    
    let shutdown_toggle = document.getElementById('shutdown-toggle');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onload = function(){
        general_data = JSON.parse(this.responseText);

        site_title.innerText = general_data.site_title;
        site_about.innerText = general_data.site_about;

        site_title_inp.value = general_data.site_title;
        site_about_inp.value = general_data.site_about;

        if(general_data.shutdown == 0){
            shutdown_toggle.checked = false;
            shutdown_toggle.value = 0;
        }
        else{
            shutdown_toggle.checked = true;
            shutdown_toggle.value = 1;
        }
    }
    
    xhr.send('get_general')
}

general_s_form.addEventListener('submit', function(e){
    e.preventDefault();
    upd_general(site_title_inp.value, site_about_inp.value)
})

function upd_general(site_title_val, site_about_val){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onload = function(){
        var myModal = document.getElementById('general-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if(this.responseText == 1){
            alert('success', 'Changes saved!');
            get_general();
        }
        else{
            alert('error', 'No changes saved!');
        }
    }
    
    xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
}

function upd_shutdown(val){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onload = function(){
        if(this.responseText == 1 && general_data.shutdown == 0){
            alert('success', 'Site has been shutdown!');
        }
        else{
            alert('success', 'Shutdown mode off');
        }
        get_general();
    }
    
    xhr.send('upd_shutdown='+val);
}

window.onload = function(){
    get_general();
}