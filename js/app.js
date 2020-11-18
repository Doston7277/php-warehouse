
    const form = document.getElementById('form');
    const nomi = document.getElementById('nomi');
    const miqdori = document.getElementById('miqdori');
    const narxi = document.getElementById('narxi');

    form.addEventListener('submit', e => {
        e.preventDefault();

        checkInputs();
    });

    function checkInputs() {
        // trim to remove the whitespaces
        const nomiValue = nomi.value.trim();
        const miqdoriValue = miqdori.value.trim();
        const narxiValue = narxi.value.trim();

        if(nomiValue === '') {
            setErrorFor(nomi, 'Error message');
        } else {
            setSuccessFor(nomi);
        }

        if(miqdoriValue === '') {
            setErrorFor(miqdori, 'Error message');
        } else {
            setSuccessFor(miqdori);
        }

        if(narxiValue === '') {
            setErrorFor(narxi, 'Error message');
        } else {
            setSuccessFor(narxi);
        }
    }

    function setErrorFor(input, message) {
        const formControl = input.parentElement;
        const small = formControl.querySelector('small');
        formControl.className = 'form-control error';
        small.innerText = message;
    }

    function setSuccessFor(input) {
        const formControl = input.parentElement;
        formControl.className = 'form-control success';
    }
