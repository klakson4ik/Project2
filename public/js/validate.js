let pattern =  new Map ([
    ['login', '^\\w{3,}$'],
    ['email', '^\\w{2,30}@\\w{2,20}\.\\w{2,10}$'],
    ['password', '^\(?=.*\[0-9]\)\(?=.*\[a-z]\)\(?=.*\[A-Z]\)\[0-9a-zA-Z]{8,}$'],
    ['password-confirm', '^\(?=.*\[0-9]\)\(?=.*\[a-z]\)\(?=.*\[A-Z]\)\[0-9a-zA-Z]{8,}$'],
    ['telephone', '^\\d{11,14}$'],
    ['address', '^.{3,}$']
]);

let succussValidate = new Map ([
    ['login', false],
    ['email', false],
    ['password', false],
    ['password-confirm', false],
    ['telephone', false],
    ['address', false],
    ['password-ok', false]
])


let submit = document.querySelector('#send-form-validate')

let validateArr = document.querySelectorAll('.validate-form>input');
for (let val of validateArr){
    inputValidate(val);
    val.addEventListener("input", () =>{
        val.classList.add("no-validate");
        inputValidate(val)

    });


    function inputValidate(val) {
        if(pattern.has(val.name)){
            let regexp = new RegExp(pattern.get(val.name), 'i');
            if(regexp.test(val.value.trim())) {
                if (val.name === "password-confirm"){
                    if(val.value === val.parentNode.childNodes[10].value)
                    {
                        succussValidate.set('password-ok', true);
                        val.classList.remove("no-validate");
                        val.classList.add("validate");
                    }else{
                        succussValidate.set('password-ok', false);
                        val.classList.remove("validate");
                        val.classList.add("no-validate");
                    }
                }
                val.classList.remove("no-validate");
                val.classList.add("validate");
                succussValidate.set(val.name, true)

            }
            else{
                val.classList.remove("validate");
                val.classList.add("no-validate");
                succussValidate.set(val.name, false)
            }
        }
        let count = 0;

        for(let value of succussValidate.values()){
            if(value){
                ++count;
            }else{
                --count;
            }
        }

        // console.log(succussValidate)
        if(count === succussValidate.size)
            submit.disabled = false;
        else
            submit.disabled = true;
    }
}