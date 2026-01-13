document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.file-btn input[type="file"]').forEach(input => {
        const btn = input.closest('.file-btn');
        const fileContainer = input.closest('.file-group').querySelector('.file-name-container');

        input.addEventListener('change', () => {
            btn.querySelector('.file-btn__check').style.opacity = input.files.length ? '1' : '0';
            btn.querySelector('.file-btn__text').style.opacity = input.files.length ? '0' : '1';

            fileContainer.innerHTML = '';

            if (input.files.length > 0) {
                btn.style.pointerEvents = 'none';
                btn.style.opacity = '0.7';
                
                const fileName = input.files[0].name;

                const nameSpan = document.createElement('span');
                nameSpan.className = 'file-name-text';
                nameSpan.textContent = fileName;

                const removeBtn = document.createElement('span');
                removeBtn.className = 'file-remove-btn';
                removeBtn.textContent = '×';

                removeBtn.addEventListener('click', () => {
                    input.value = '';
                    btn.querySelector('.file-btn__check').style.opacity = '0';
                    btn.querySelector('.file-btn__text').style.opacity = '1';
                    fileContainer.innerHTML = '';

                    btn.style.pointerEvents = 'auto';
                    btn.style.opacity = '1';
                });

                fileContainer.appendChild(nameSpan);
                fileContainer.appendChild(removeBtn);
            } else {
                btn.style.pointerEvents = 'auto';
                btn.style.opacity = '1';
            }
        });
    });
});
