let defaultTransform = 0;
function goNext() {
    defaultTransform = defaultTransform - 398;
    var sliders = document.getElementById("sliders");
    if (Math.abs(defaultTransform) >= sliders.scrollWidth / 1.7) defaultTransform = 0;
    sliders.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);
function goPrev() {
    var sliders = document.getElementById("sliders");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 398;
    sliders.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);

let defaultTransform2 = 0;
function goNext2() {
    defaultTransform2 = defaultTransform2 - 398;
    var sliders2 = document.getElementById("sliders2");
    if (Math.abs(defaultTransform2) >= sliders2.scrollWidth / 1.7) defaultTransform2 = 0;
    sliders2.style.transform = "translateX(" + defaultTransform2 + "px)";
}
next2.addEventListener("click", goNext2);
function goPrev2() {
    var sliders2 = document.getElementById("sliders2");
    if (Math.abs(defaultTransform2) === 0) defaultTransform2 = 0;
    else defaultTransform2 = defaultTransform2 + 398;
    sliders2.style.transform = "translateX(" + defaultTransform2 + "px)";
}
prev2.addEventListener("click", goPrev2);



let defaultTransform3 = 0;
function goNext3() {
    defaultTransform3 = defaultTransform3 - 398;
    var sliders3 = document.getElementById("sliders3");
    if (Math.abs(defaultTransform3) >= sliders3.scrollWidth / 1.7) defaultTransform3 = 0;
    sliders3.style.transform = "translateX(" + defaultTransform3 + "px)";
}
next3.addEventListener("click", goNext3);
function goPrev3() {
    var sliders3 = document.getElementById("sliders3");
    if (Math.abs(defaultTransform3) === 0) defaultTransform3 = 0;
    else defaultTransform3 = defaultTransform3 + 398;
    sliders3.style.transform = "translateX(" + defaultTransform3 + "px)";
}
prev3.addEventListener("click", goPrev3);
