let currency = document.querySelector('#currency');
currency.addEventListener("change", () => {
   let sIndex = currency.options.selectedIndex;
   window.location = '../currency/change?curr=' + currency.options[sIndex].value;
})
