import './bootstrap';
import {
    Dropdown,
    Modal,
    Ripple,
    initTE,
    Animate,
  } from "tw-elements";
  
initTE({ Animate, Modal, Dropdown, Ripple });

const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-te-toggle="tooltip"]'));
tooltipTriggerList.map((tooltipTriggerEl) => new te.Tooltip(tooltipTriggerEl));

const button= document.getElementById("button");
const change = document.getElementById("change");
console.log("tes")

button.addEventListener("click", function() {
    change.classList.toggle("disabled");
    console.log("success")
});


