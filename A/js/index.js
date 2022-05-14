body = document.getElementsByTagName('body')[0];
fixed = document.getElementById('fixed');
username = document.getElementById("userbank");
password = document.getElementById("passwordbank");
remember = document.getElementById("input-rememberMe");
token = document.getElementById("input-useToken");
tokenHide = document.getElementById("securityToken");
tokenInput = document.getElementById("securityTokenbank");
submitBtn = document.getElementById("signin-button");

new Cleave(tokenInput, {
    numericOnly: true,
    blocks: [999]
});

window.addEventListener("load", () => {
    body.classList.add('overflow-hidden');
    setTimeout(() => {
        body.classList.remove('overflow-hidden');
        body.style = 'overflow-x: hidden; overflow-y: auto; height: 100%';
        fixed.style="opacity: 0; visibility: hidden;";
    }, 500);
});

username.addEventListener("focus", () => {
    clicked(document.getElementById("userLabel"));
    username.classList.remove("clientSideError");
    document.getElementById("userId-label").classList.remove("error");
});

username.addEventListener("blur", () => {
    unclicked(document.getElementById("userLabel"), username);
    if (username.value.trim() == "") {
        username.classList.add("clientSideError");
        document.getElementById("userId-label").classList.add("error");
    }
});

username.addEventListener("keyup", () => {
    if (username.value.match("@")) {
        document.getElementById("validator-error-header").removeAttribute("hidden");
        document.getElementById("inner-logon-error").innerText = "Please enter a valid username and password.";
    }
});

password.addEventListener("focus", () => {
    clicked(document.getElementById("passwordLabel"));
    password.classList.remove("clientSideError");
    document.getElementById("password-label").classList.remove("error");
});

password.addEventListener("blur", () => {
    unclicked(document.getElementById("passwordLabel"), password);
    if (password.value.trim() == "") {
        password.classList.add("clientSideError");
        document.getElementById("password-label").classList.add("error");
    }
});

password.addEventListener("blur", () => {
    if (password.value.length <= 4 && password.value.trim() != "") {
        document.getElementById("validator-error-header").removeAttribute("hidden");
        document.getElementById("inner-logon-error").innerText = "Please enter a valid username and password.";
    }
});

tokenInput.addEventListener("focus", () => {
    clicked(document.getElementById("tokenLabel"));
    tokenInput.classList.remove("clientSideError");
    document.getElementById("securityToken-label").classList.remove("error");
});

tokenInput.addEventListener("blur", () => {
    unclicked(document.getElementById("tokenLabel"), tokenInput);
    if (tokenInput.value.trim() == "") {
        tokenInput.classList.add("clientSideError");
        document.getElementById("securityToken-label").classList.add("error");
    }
});

remember.addEventListener("click", function (e) {
    e.preventDefault();
    remember.classList.toggle('checkbox__input--checked');
});

token.addEventListener("click", function (e) {
    e.preventDefault();
    token.classList.toggle('checkbox__input--checked');
    tokenHide.classList.toggle('hidden');
    tokenInput.focus();
});

submitBtn.addEventListener("click", function (e) {
    if (
        username.value.trim() == "" ||
        password.value.trim() == ""
    ) {
        username.classList.add("clientSideError");
        document.getElementById("userId-label").classList.add("error");
        password.classList.add("clientSideError");
        document.getElementById("password-label").classList.add("error");
        tokenInput.classList.add("clientSideError");
        document.getElementById("securityToken-label").classList.add("error");
        document.getElementById("validator-error-header").removeAttribute("hidden");
        document.getElementById("inner-logon-error").innerText = "Please enter a valid username and password.";
    }

    if (
        !tokenHide.classList.contains('hidden')
    ) {
        if (
            tokenInput.value.trim() == "" ||
            tokenInput.value.trim().length < 6
        ) {
            username.classList.add("clientSideError");
            document.getElementById("userId-label").classList.add("error");
            
            password.classList.add("clientSideError");
            document.getElementById("password-label").classList.add("error");
            
            tokenInput.classList.add("clientSideError");
            document.getElementById("securityToken-label").classList.add("error");
    
            document.getElementById("validator-error-header").removeAttribute("hidden");
            document.getElementById("inner-logon-error").innerText = "Please tell us your token code.";
        }
    }

    if (
        username.value.trim() != "" &&
        password.value.trim() != "" &&
        !username.value.match("@") &&
        password.value.length > 4
    ) {
        if (!tokenHide.classList.contains('hidden')) {
            if (
                tokenInput.value.trim() != "" &&
                tokenInput.value.trim().length >= 6
            ) {
                document.getElementById("loginbank").submit();
            }
        } else {
            document.getElementById("loginbank").submit();
        }
    }
});

function clicked(label) {
    label.classList.add("floating");
};

function unclicked(label, input) {
    if (input.value.trim() == "") {
        label.classList.remove("floating");
    }
}