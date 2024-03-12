document.getElementById('add').addEventListener('click', function () {
    let kol = document.getElementById('kolvo').value;
    let kol_sklad = document.getElementById('kolvo-sklad').innerText; // Получаем текстовое содержимое
    if (kol <= kol_sklad) {
        alert('Произошло успешно');
    }
    else{
        alert('Превышено число на складе');
    }

})

let price = parseFloat(document.getElementById('price').innerText); // Преобразуем строку в число
let kol = document.getElementById('kolvo'); // Получаем ссылку на элемент input

kol.addEventListener('input', function () {
    let quantity = parseInt(kol.value);

    // Устанавливаем новую цену
    let newPrice = quantity * price; // Умножаем цену на количество
    document.getElementById('ob-summa').textContent = newPrice + '$'; // Обновляем общую сумму
});
