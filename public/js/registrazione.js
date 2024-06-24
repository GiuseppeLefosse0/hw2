const form = document.forms['signup'];
form.addEventListener('submit', validazione_signup);
let i=0;

const errore1 = document.querySelector('#errore1');    
const errore2 = document.querySelector('#errore2'); 
const errore6 = document.querySelector('#errore6'); 
const errore7 = document.querySelector('#errore7'); 
const errore8 = document.querySelector('#errore8'); 
const errore9 = document.querySelector('#errore9'); 

function validazione_signup(event){
    event.preventDefault();
    i=0;

    if(form.username.value.length == 0 || 
        form.password.value.length == 0 ||
        form.email.value.length == 0 ||
        form.nome.value.length == 0 ||
        form.cognome.value.length == 0 ||
        form.password.value.length<5 ||
        form.password.value.length>15 ||
        !/^[a-zA-Z0-9_]{1,15}$/.test(form.username.value) ||
        !/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(form.email.value).toLowerCase()) ||
        !/^[a-zA-Z]+$/.test(form.nome.value) ||
        !/^[a-zA-Z]+$/.test(form.cognome.value)) {
            

        errore1.classList.add('hidden'); 
        errore2.classList.add('hidden'); 
        errore6.classList.add('hidden'); 
        errore7.classList.add('hidden'); 
        errore8.classList.add('hidden');
        errore9.classList.add('hidden');


        if(form.username.value.length == 0 || 
            form.password.value.length == 0 ||
            form.email.value.length == 0 ||
            form.nome.value.length == 0 ||
            form.cognome.value.length == 0) {
            errore2.classList.remove('hidden');
            document.querySelector('#errore3').classList.add('hidden');
            document.querySelector('#errore4').classList.add('hidden');
            document.querySelector('#errore5').classList.add('hidden');
        }else if(form.password.value.length<5 ||
            form.password.value.length>15) {
            errore1.classList.remove('hidden');
            document.querySelector('#errore3').classList.add('hidden');
            document.querySelector('#errore4').classList.add('hidden');
            document.querySelector('#errore5').classList.add('hidden');
        } else if(!/^[a-zA-Z0-9_]{1,15}$/.test(form.username.value)){
            errore6.classList.remove('hidden');
            document.querySelector('#errore3').classList.add('hidden');
            document.querySelector('#errore4').classList.add('hidden');
            document.querySelector('#errore5').classList.add('hidden');
        } else if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(form.email.value).toLowerCase())) {
            errore7.classList.remove('hidden');
            document.querySelector('#errore3').classList.add('hidden');
            document.querySelector('#errore4').classList.add('hidden');
            document.querySelector('#errore5').classList.add('hidden');
        } else if(!/^[a-zA-Z]+$/.test(form.nome.value)){
            errore8.classList.remove('hidden');
            document.querySelector('#errore3').classList.add('hidden');
            document.querySelector('#errore4').classList.add('hidden');
            document.querySelector('#errore5').classList.add('hidden');
        } else if(!/^[a-zA-Z]+$/.test(form.cognome.value)){
            errore9.classList.remove('hidden');
            document.querySelector('#errore3').classList.add('hidden');
            document.querySelector('#errore4').classList.add('hidden');
            document.querySelector('#errore5').classList.add('hidden');
        }

    } else {

        errore1.classList.add('hidden');
        errore2.classList.add('hidden');
        errore6.classList.add('hidden'); 
        errore7.classList.add('hidden'); 
        errore8.classList.add('hidden');
        errore9.classList.add('hidden');

        let parametri={
            'username': form.username.value,
            'password': form.password.value,
            'email': form.email.value,
            'nome': form.nome.value,
            'cognome': form.cognome.value
        };
        console.log(parametri);

        fetch('registrazione/username/'+encodeURIComponent(form.username.value)).then(handler).then(controllo);
        fetch('registrazione/email/'+encodeURIComponent(form.email.value)).then(handler).then(controllo);
    }
}

function handler(response) {
    const ritorno = response.text();
    return ritorno;
}

function controllo(ritorno) {
    if (ritorno == 'ok') { 
        i++;
            if(i==2){
             console.log('registrazione effettuata con successo');
             form.submit();
            } 
    }
    if (ritorno == 'username_utilizzato') {
        document.querySelector('#errore3').classList.remove('hidden'); 
        document.querySelector('#errore4').classList.add('hidden'); 
    }
    if (ritorno == 'email_utilizzata') { 
        document.querySelector('#errore4').classList.remove('hidden'); 
        document.querySelector('#errore3').classList.add('hidden');
    }
    if (ritorno == 'errore') { 
        document.querySelector('#errore5').classList.remove('hidden');

    }

}
