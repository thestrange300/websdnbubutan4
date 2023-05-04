import './bootstrap';
import {
    Dropdown,
    Modal,
    Ripple,
    initTE,
  } from "tw-elements";
  
initTE({ Modal, Dropdown, Ripple });

const button= document.getElementById("button");
const change = document.getElementById("change");
console.log("tes")

button.addEventListener("click", function() {
    change.classList.toggle("disabled");
    console.log("success")
});


