const inputs = document.querySelectorAll("#formulier input");
const button = document.querySelector("#formulier button");

button.addEventListener("click", (e) => {
  e.preventDefault();

  for (let i = 0; i < inputs.length; i++) {
    if (!inputs[i].value.length) {
      inputs[i].style.border = "1px solid red";
    }
  }
});

fetch("https://pokeapi.co/api/v2/pokemon/ditto")
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    const ID = document.querySelector("#container");
    console.log(data.sprites.front_default);
    ID.innerHTML = "<img src='" + data.sprites.front_default + "'/>";
  })
  .catch((error) => {
    console.warn(error);
  });
