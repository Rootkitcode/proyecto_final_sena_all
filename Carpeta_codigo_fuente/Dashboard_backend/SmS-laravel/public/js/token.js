let input_token_produccion = document.getElementById('input_token_produccion')
let btn_generar_token_produccion = document.getElementById('btn_generar_token_produccion')
let input_token_sandbox = document.getElementById('input_token_sandbox')
let btn_generar_token_sandbox = document.getElementById('btn_generar_token_sandbox')

btn_generar_token_produccion.addEventListener('click',GenerarTokenProduccion)
btn_generar_token_sandbox.addEventListener('click',GenerarTokenSandbox)

function random() {
    return Math.random().toString(36).substr(2); // Eliminar `0.`
};
function GenerarTokenSandbox(){
    input_token_sandbox.value = random() + random() + random() + random()+ random();
}
function GenerarTokenProduccion(){
    input_token_produccion.value = random() + random() + random() + random()+ random();
}
