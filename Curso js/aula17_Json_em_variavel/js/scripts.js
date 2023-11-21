const url = "./js/api.json";
const loadingElement = document.querySelector("#lista");
const postsContainer = document.querySelector("#posts-container");

async function getAllPokemon() {
  try {
    const response = await fetch(url);

    if (!response.ok) {
      throw new Error("Erro ao carregar os dados");
    }

    const data = await response.json();

    console.log(data);

    // Itera sobre os objetos "pokemon" no JSON
    data.pokemon.forEach((pokemon) => {
      const div = document.createElement("div");
      const id = document.createElement("p");
      const name = document.createElement("h2");
      const img = document.createElement("img");
      const type = document.createElement("p");
      
      id.innerText = `ID: ${pokemon.id}`;
      name.innerText = `Nome: ${pokemon.name}`;
      img.src = pokemon.img;
      type.innerText = `Tipo: ${pokemon.type}`

      div.appendChild(name);
      div.appendChild(id);
      div.appendChild(img);
      div.appendChild(type);

      postsContainer.appendChild(div);
    });
  } catch (error) {
    console.error("Erro ao carregar os dados:", error);
  }
}

getAllPokemon();


