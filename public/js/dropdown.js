const dropdown = document.getElementById("dropdown");
const drop1 = document.getElementById("drop1");
console.log("tes")

dropdown.addEventListener("click", function() {
    drop1.classList.toggle("hidden");
    console.log("success")
});

import { Carousel, initTE } from "tw-elements";
initTE({ Carousel }, true );  
