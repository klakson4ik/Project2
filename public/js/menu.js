let categories = document.querySelectorAll(".menu>ul>li");

function showCategory (cat){

    for (let i = 0; i < cat.length; i++ ){
        cat[i].addEventListener("mouseover", (e) => {
            let childArr = [];

            if(e.currentTarget.childNodes[3] !== undefined) {
                let changeLi = e.currentTarget.childNodes[3].childNodes;
                e.currentTarget.childNodes[3].style.display = "block";
                for (let i = 0; i < changeLi.length; ++i) {
                    if (changeLi[i].nodeName === "LI") {
                        childArr.push(changeLi[i])
                    }
                }

            }
            showCategory(childArr);

        }, false);

        cat[i].addEventListener("mouseout", (e) => {
            if(e.currentTarget.childNodes[3] !== undefined) {
                e.currentTarget.childNodes[3].style.display = "";
            }
        }, false)
    }
}

showCategory(categories);



















