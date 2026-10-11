"use strict";

const messageForm = document.getElementById("messageForm");
const messageInput = document.getElementById("messageInput");
const messageOutput = document.getElementById("messageOutput");

const domInput = document.getElementById("domInput");
const domButton = document.getElementById("domButton");
const domOutput = document.getElementById("domOutput");

const statusMessage = document.getElementById("status");

messageForm.addEventListener("submit", (event) => {
  event.preventDefault();

  messageOutput.textContent = messageInput.value;
  statusMessage.textContent = "Message displayed safely as text.";
});

domButton.addEventListener("click", () => {
  domOutput.textContent = domInput.value;
  statusMessage.textContent = "DOM input displayed safely as text.";
});