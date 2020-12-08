

document.querySelectorAll('textarea[type="text"]').forEach(b => {
    b.addEventListener('focusout', setInputBackground)
});

function setInputBackground() {
    this.style.backgroundColor = !!this.value ? "white" : "rgb(255,221,221)";
}

function emptyField(){
    if (this.style.backgroundColor = "rgb(255,221,221)"){
        return false;
    }
    if (this.style.backgroundColor = "white"){
        return true;
    }
}

