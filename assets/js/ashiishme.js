/**
 * Custom JS File
 *
 * Author Name: Ashish Yadav
 * Description: Script file for ashiishme that includes all the custom JavaScript.
 * @package ashiishme
 * @since 1.0.0
 */
// DO NOT EDIT ABOVE THIS LINE. IF YOU WANT TO USE THE CODE, PLEASE GIVE A PROPER CREDIT TO ME.

"use strict";

const canvas = document.getElementById('ashiish-canvas');
const context = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

window.onresize = function() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
}

function Circle(x, y, dx, dy, radius) {
  this.x = x;
  this.y = y;
  this.dx = dx;
  this.dy = dy;
  this.radius = radius;
  
  this.draw = function() {
    context.beginPath();
    context.arc(this.x, this.y, this.radius, Math.PI * 2, false);
    context.strokeStyle = "rgba(255,255,255, 0.1)";
    context.stroke();
    context.fill();
    context.fillStyle = "rgba(0,0,0,0.05)";
  }
  
  this.update = function() {
    if (this.x + this.radius > innerWidth || this.x - this.radius < 0) {
      this.dx = -this.dx;
    }

    if (this.y + this.radius > innerHeight || this.y - this.radius < 0) {
      this.dy = -this.dy;
    }

    this.x += this.dx;
    this.y += this.dy;
    
    this.draw();
  }
}

let circles = [];

for (let i = 0; i < 100; i++) {
  let radius = Math.random() * 10;
  let x = Math.random() * (innerWidth - radius * 2) + radius;
  let y = Math.random() * (innerHeight - radius * 2) + radius;
  let dx = (Math.random() - 0.5);
  let dy = (Math.random() - 0.5);
  circles.push(new Circle(x, y, dx, dy, radius));
}

function render() {
  requestAnimationFrame(render);
  context.clearRect(0, 0, innerWidth, innerHeight);
  for (var i = 0; i < circles.length; i++) {
    circles[i].update();
  } 
}

render();

// Mobile friendly

const menu_btn = document.getElementById('ashiishme-menu-btn');
const menu = document.querySelector('.mobile-menu');
menu_btn.addEventListener("click", () => {
  
  if(menu_btn.dataset.clicked === "0") {
    menu.style.marginLeft = "0px";
    menu.style.visibility = "visible";
    menu_btn.dataset.clicked = "1";
  } else {
    menu.style.marginLeft = "-60%";
    menu_btn.dataset.clicked = "0";
  }
});