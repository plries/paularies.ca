const codes = document.getElementsByClassName("code-dropdown");
const btn = document.getElementsByClassName("code-dropdown-btn");
const carets = document.getElementsByClassName("caret");

for (let i = 0; i < btn.length; i++) {
    btn[i].addEventListener("click", function() {
        const code = codes[i];
        const caret = carets[i];
        
        if (code.style.maxHeight == "") {
            code.style.maxHeight = "2000px";
            caret.style.transform = "rotate(180deg)";
        } else {
            code.style.maxHeight = "";
            code.style.overflow = "hidden";
            caret.style.transform = "rotate(0deg)";
        }

    });

}


