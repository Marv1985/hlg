// const responseCreator = (value, input_text, iconName) => {
//   const response_container = document.createElement("div");
//   const message = document.createElement("i");
//   const tick = document.createElement("span");
//   // attach classes
//   tick.classList.add("material-symbols-outlined");
//   // attach content
//   response_container.classList.add("response_creator_message");
//   // tick.textContent = "check_circle";
//   tick.innerHTML = iconName;
//   message.textContent = input_text;
//   // prepend
//   response_container.appendChild(tick);
//   response_container.appendChild(message);
//   return response_container;
// };

// const contact_form = () => {
//   // Selecting the form element
//   const form = document.querySelector(".contact_form_parent form");

//   if (!form) {
//     return;
//   }

//   // check email regex
//   const isValidEmail = (email) => {
//     const emailRegex = /^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/;
//     return emailRegex.test(email);
//   }

//   const AllFields = form.querySelectorAll(".input_or_text_area");
//   AllFields.forEach((field, index) => {
//     const parent = field.querySelector(".forminator-field");
//     const label = parent.querySelector("label");
//     let inputResponse;
//     let textareaResponse;

//     // inputs
//     const inputParent = parent.querySelector("input");
    
//     if (inputParent) {
//       inputParent.addEventListener("change", () => {
//         if (inputParent.value.length > 0 && index === 0) {
//           if (!label.contains(inputResponse)) {
//             inputResponse = responseCreator(true, `Nice to meet you ${inputParent.value}`, "handshake");
//             label.append(inputResponse);
//           }
//         } else if (inputParent.value.length > 0 && index === 1) {
//           if (!label.contains(inputResponse) && isValidEmail(inputParent.value) === true) {
//             inputResponse = responseCreator(true, `Awesome!`, "check_circle");
//             label.append(inputResponse);
//           } else if (isValidEmail(inputParent.value) === false) {
//             inputResponse.remove();
//           }
//         } else if (inputParent.value.length > 0 && index === 2) {
//           if (!label.contains(inputResponse)) {
//             inputResponse = responseCreator(true, `Great!`, "check_circle");
//             label.append(inputResponse);
//           }
//         } else if (inputParent.value.length === 0) {
//           inputResponse.remove();
//         }
//       });
//       form.addEventListener('submit', () => {
//         if(inputResponse){
//           inputResponse.remove();
//         }
//       })
//     }

//     // text area
//     const textAreaParent = parent.querySelector("textarea");
//     if (textAreaParent) {
//       textAreaParent.addEventListener("input", () => {
//         if (textAreaParent.value.length > 0) {
//           if (!label.contains(textareaResponse)) {
//             textareaResponse = responseCreator(false, `Look's interesting!`, "mystery");
//             label.append(textareaResponse);
//           }
//         }
//         else if (textAreaParent.value.length === 0) {
//           textareaResponse.remove();
//         } 
//       });
//       form.addEventListener('submit', () => {
//         if(textareaResponse){
//           textareaResponse.remove();
//         }
//       })
//     }
//   });
// };

// window.addEventListener("DOMContentLoaded", contact_form);
