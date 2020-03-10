let searchData = null

fetchQuery('/search/getTitle', (response) => {
    response = JSON.parse(response);
    searchData = response;
})

let searchInput = document.querySelector('#search-input');
let searchInputHidden = document.querySelectorAll('.search-input-hidden');
let searchSpanHidden = document.querySelectorAll('.search-span-hidden');
searchInput.addEventListener('input', (e) => {
    if(e.target.value.length > 1){
        for (let val of searchInputHidden){
            val.style.display = ""
        }
        let regexp = new RegExp(e.target.value, 'i' );
        let searchDataArr = [];
        for (let i = 0; i < searchData.length; ++i) {

           if(regexp.test(searchData[i]))
           {
               searchDataArr.push(searchData[i])
           }
        }

        for (let i = 0; i < searchDataArr.length; ++i){
            searchInputHidden[i].value = searchDataArr[i];
            searchInputHidden[i].style.display = "block"
            searchSpanHidden[i].style.display = "block"
            let defaultValue = e.target.value;

            let count = 0

            e.target.addEventListener('keydown', (e)=> {
                if(e.key === "ArrowDown"){
                    if(count > searchDataArr.length-1)
                        count = 0;
                    e.target.value = searchDataArr[count++];
                }

                if(e.key === "ArrowUp"){
                    if(count < 0)
                        count = searchDataArr.length-1;
                    e.target.value = searchDataArr[count--];
                }


                if(e.key ==="Escape" ){
                    e.target.value = "";
                    for (let val of searchInputHidden){
                        val.style.display = ""
                    }

                }

            });

            searchSpanHidden[i].addEventListener('click' , () => {
                e.target.value = searchDataArr[i];

            })

        }

    }else
    {
        for (let val of searchInputHidden){
            val.style.display = ""
        }

    }

})