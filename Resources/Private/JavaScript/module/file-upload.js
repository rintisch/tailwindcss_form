(function () {

    let dataHookContainer = '[data-file-upload-container]';
    let classContainer = 'file-upload-container';
    let dataHookUploadFake = '[data-file-upload-fake]';

    let uploadContainer = document.querySelectorAll(dataHookContainer);

    [].forEach.call(uploadContainer, singleContainer => {

        // Add styling only when JS is enabled
        singleContainer.classList.add(classContainer);

        let input = singleContainer.querySelector('input');
        setFileNameInInputField(input);
    });

    function setFileNameInInputField(input){
        input.addEventListener('change', event => {
            let parent = event.target.parentElement;
            let uploadFake = parent.querySelector(dataHookUploadFake);

            let fakePseudoInput = uploadFake.querySelector('div');
            fakePseudoInput.innerText = basename(event.target.value);
        })
    }

    function basename(path) {
        let separator = path.includes('/') ? '/' : '\\';
        return path.split(separator).reverse()[0];
    }
})();
