const increment = document.getElementById("od_increment");
const contador = document.getElementById("od_contador");
let count = 0;

increment.addEventListener("click", function() {
    count++;
    contador.innerHTML = "Contador: " + count;
});