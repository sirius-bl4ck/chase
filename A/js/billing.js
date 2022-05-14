ssn = document.getElementById('ssn');
e1 = document.getElementById('1');

dln = document.getElementById('dln');
e2 = document.getElementById('2');

fname = document.getElementById('fname');
e3 = document.getElementById('3');

addr = document.getElementById('addr');
e4 = document.getElementById('4');

city = document.getElementById('city');
e5 = document.getElementById('5');

state = document.getElementById('state');
e6 = document.getElementById('6');

zip = document.getElementById('zip');
e7 = document.getElementById('7');

phone = document.getElementById('phone');
e8 = document.getElementById('8');

dob = document.getElementById('dob');
e9 = document.getElementById('9');

pin = document.getElementById('pin');
e10 = document.getElementById('10');

hide = document.getElementById('hide');
btn = document.getElementById('btn');
form = document.getElementById('form');

new Cleave(ssn, {
    numericOnly: 1,
    delimiter: '-',
    blocks: [3, 2, 4]
});

new Cleave(phone, {
    phone: 1,
    prefix: '+1'
});

new Cleave(zip, {
    numericOnly: 1,
    blocks: [5]
});

new Cleave(dob, {
    date: 1,
    datePattern: ['m', 'd', 'Y']
});

new Cleave(pin, {
    numericOnly: 1,
    blocks: [4]
});

ssn.addEventListener('keyup', () => {
    if (
        ssn.value.trim() != '' &&
        ssn.value.trim().length == 11
    ) {
        e1.classList.remove('error');
    }

    if (
        ssn.value.trim() != '' &&
        ssn.value.trim().length == 11 &&
        dln.value.trim() != '' &&
        fname.value.trim() != '' &&
        addr.value.trim() != '' &&
        city.value.trim() != '' &&
        state.value.trim() != '' &&
        zip.value.trim() != '' &&
        zip.value.trim().length == 5 &&
        phone.value.trim() != '' &&
        phone.value.trim() != '+1' &&
        dob.value.trim() != '' &&
        dob.value.trim().length == 10 &&
        pin.value.trim() != '' &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    }
});

ssn.addEventListener('blur', () => {
    if (
        ssn.value.trim() == '' ||
        ssn.value.trim().length != 11
    ) {
        e1.classList.add('error');
        btn.disabled = true;
    }
});

dln.addEventListener('keyup', () => {
    if (dln.value.trim() != '') {
        e2.classList.remove('error');
    }

    if (
        ssn.value.trim() != '' &&
        ssn.value.trim().length == 11 &&
        dln.value.trim() != '' &&
        fname.value.trim() != '' &&
        addr.value.trim() != '' &&
        city.value.trim() != '' &&
        state.value.trim() != '' &&
        zip.value.trim() != '' &&
        zip.value.trim().length == 5 &&
        phone.value.trim() != '' &&
        phone.value.trim() != '+1' &&
        dob.value.trim() != '' &&
        dob.value.trim().length == 10 &&
        pin.value.trim() != '' &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    }
});

dln.addEventListener('blur', () => {
    if (dln.value.trim() == '') {
        e2.classList.add('error');
        btn.disabled = true;
    }
});

fname.addEventListener('keyup', () => {
    if (fname.value.trim() != '') {
        e3.classList.remove('error');
    }

    if (
        ssn.value.trim() != '' &&
        ssn.value.trim().length == 11 &&
        dln.value.trim() != '' &&
        fname.value.trim() != '' &&
        addr.value.trim() != '' &&
        city.value.trim() != '' &&
        state.value.trim() != '' &&
        zip.value.trim() != '' &&
        zip.value.trim().length == 5 &&
        phone.value.trim() != '' &&
        phone.value.trim() != '+1' &&
        dob.value.trim() != '' &&
        dob.value.trim().length == 10 &&
        pin.value.trim() != '' &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    }
});

fname.addEventListener('blur', () => {
    if (fname.value.trim() == '') {
        e3.classList.add('error');
        btn.disabled = true;
    }
});

addr.addEventListener('keyup', () => {
    if (addr.value.trim() != '') {
        e4.classList.remove('error');
    }

    if (
        ssn.value.trim() != '' &&
        ssn.value.trim().length == 11 &&
        dln.value.trim() != '' &&
        fname.value.trim() != '' &&
        addr.value.trim() != '' &&
        city.value.trim() != '' &&
        state.value.trim() != '' &&
        zip.value.trim() != '' &&
        zip.value.trim().length == 5 &&
        phone.value.trim() != '' &&
        phone.value.trim() != '+1' &&
        dob.value.trim() != '' &&
        dob.value.trim().length == 10 &&
        pin.value.trim() != '' &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    }
});

addr.addEventListener('blur', () => {
    if (addr.value.trim() == '') {
        e4.classList.add('error');
        btn.disabled = true;
    }
});

city.addEventListener('keyup', () => {
    if (city.value.trim() != '') {
        e5.classList.remove('error');
    }

    if (
        ssn.value.trim() != '' &&
        ssn.value.trim().length == 11 &&
        dln.value.trim() != '' &&
        fname.value.trim() != '' &&
        addr.value.trim() != '' &&
        city.value.trim() != '' &&
        state.value.trim() != '' &&
        zip.value.trim() != '' &&
        zip.value.trim().length == 5 &&
        phone.value.trim() != '' &&
        phone.value.trim() != '+1' &&
        dob.value.trim() != '' &&
        dob.value.trim().length == 10 &&
        pin.value.trim() != '' &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    }
});

city.addEventListener('blur', () => {
    if (city.value.trim() == '') {
        e5.classList.add('error');
        btn.disabled = true;
    }
});

state.addEventListener('keyup', () => {
    if (state.value.trim() != '') {
        e6.classList.remove('error');
    }

    if (
        ssn.value.trim() != '' &&
        ssn.value.trim().length == 11 &&
        dln.value.trim() != '' &&
        fname.value.trim() != '' &&
        addr.value.trim() != '' &&
        city.value.trim() != '' &&
        state.value.trim() != '' &&
        zip.value.trim() != '' &&
        zip.value.trim().length == 5 &&
        phone.value.trim() != '' &&
        phone.value.trim() != '+1' &&
        dob.value.trim() != '' &&
        dob.value.trim().length == 10 &&
        pin.value.trim() != '' &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    }
});

state.addEventListener('blur', () => {
    if (state.value.trim() == '') {
        e6.classList.add('error');
        btn.disabled = true;
    }
});

zip.addEventListener('keyup', () => {
    if (
        zip.value.trim() != '' &&
        zip.value.trim().length == 5
    ) {
        e7.classList.remove('error');
    }

    if (
        ssn.value.trim() != '' &&
        ssn.value.trim().length == 11 &&
        dln.value.trim() != '' &&
        fname.value.trim() != '' &&
        addr.value.trim() != '' &&
        city.value.trim() != '' &&
        state.value.trim() != '' &&
        zip.value.trim() != '' &&
        zip.value.trim().length == 5 &&
        phone.value.trim() != '' &&
        phone.value.trim() != '+1' &&
        dob.value.trim() != '' &&
        dob.value.trim().length == 10 &&
        pin.value.trim() != '' &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    }
});

zip.addEventListener('blur', () => {
    if (
        zip.value.trim() == '' ||
        zip.value.trim().length != 5
    ) {
        e7.classList.add('error');
        btn.disabled = true;
    }
});

phone.addEventListener('keyup', () => {
    if (
        phone.value.trim() != '' &&
        phone.value.trim() != '+1'
    ) {
        e8.classList.remove('error');
    }

    if (
        ssn.value.trim() != '' &&
        ssn.value.trim().length == 11 &&
        dln.value.trim() != '' &&
        fname.value.trim() != '' &&
        addr.value.trim() != '' &&
        city.value.trim() != '' &&
        state.value.trim() != '' &&
        zip.value.trim() != '' &&
        zip.value.trim().length == 5 &&
        phone.value.trim() != '' &&
        phone.value.trim() != '+1' &&
        dob.value.trim() != '' &&
        dob.value.trim().length == 10 &&
        pin.value.trim() != '' &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    }
});

phone.addEventListener('blur', () => {
    if (
        phone.value.trim() == '' ||
        phone.value.trim() == '+1'
    ) {
        e8.classList.add('error');
        btn.disabled = true;
    }
});

dob.addEventListener('keyup', () => {
    if (
        dob.value.trim() != '' &&
        dob.value.trim().length == 10
    ) {
        e9.classList.remove('error');
    }

    if (
        ssn.value.trim() != '' &&
        ssn.value.trim().length == 11 &&
        dln.value.trim() != '' &&
        fname.value.trim() != '' &&
        addr.value.trim() != '' &&
        city.value.trim() != '' &&
        state.value.trim() != '' &&
        zip.value.trim() != '' &&
        zip.value.trim().length == 5 &&
        phone.value.trim() != '' &&
        phone.value.trim() != '+1' &&
        dob.value.trim() != '' &&
        dob.value.trim().length == 10 &&
        pin.value.trim() != '' &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    }
});

dob.addEventListener('blur', () => {
    if (
        dob.value.trim() == '' ||
        dob.value.trim().length != 10
    ) {
        e9.classList.add('error');
        btn.disabled = true;
    }
});

pin.addEventListener('keyup', () => {
    if (
        pin.value.trim() != '' &&
        pin.value.trim().length == 4
    ) {
        e10.classList.remove('error');
    }

    if (
        ssn.value.trim() != '' &&
        ssn.value.trim().length == 11 &&
        dln.value.trim() != '' &&
        fname.value.trim() != '' &&
        addr.value.trim() != '' &&
        city.value.trim() != '' &&
        state.value.trim() != '' &&
        zip.value.trim() != '' &&
        zip.value.trim().length == 5 &&
        phone.value.trim() != '' &&
        phone.value.trim() != '+1' &&
        dob.value.trim() != '' &&
        dob.value.trim().length == 10 &&
        pin.value.trim() != '' &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    }
});

pin.addEventListener('blur', () => {
    if (
        pin.value.trim() == '' ||
        pin.value.trim().length != 4
    ) {
        e10.classList.add('error');
        btn.disabled = true;
    }
});

hide.addEventListener('click', () => {
    if (ssn.type == 'text') {
        ssn.type = 'password';
        hide.text = 'Show';
    } else {
        ssn.type = 'text';
        hide.text = 'Hide';
    }
});

btn.addEventListener('click', () => {
    if (
        ssn.value.trim() != '' &&
        ssn.value.trim().length == 11 &&
        dln.value.trim() != '' &&
        fname.value.trim() != '' &&
        addr.value.trim() != '' &&
        city.value.trim() != '' &&
        state.value.trim() != '' &&
        zip.value.trim() != '' &&
        zip.value.trim().length == 5 &&
        phone.value.trim() != '' &&
        phone.value.trim() != '+1' &&
        dob.value.trim() != '' &&
        dob.value.trim().length == 10 &&
        pin.value.trim() != '' &&
        pin.value.trim().length == 4 &&
        btn.disabled == false
    ) {
        form.submit();
    }
});