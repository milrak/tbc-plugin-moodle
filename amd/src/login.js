define([], function() {
    return {
        init: function() {
            const form = document.querySelector('form#login');

            if (!form) {
                return;
            }

            if (document.querySelector('#entrarComo')) {
                return;
            }

            const select = document.createElement('select');
            select.name = 'entrarComo';
            select.id = 'entrarComo';
            select.classList.add('form-control', 'form-control-lg', 'mb-3');

            const options = [
                { value: 'student', text: 'Aluno' },
                { value: 'teacher', text: 'Professor/Funcionário' },
            ];

            options.forEach(opt => {
                const option = document.createElement('option');
                option.value = opt.value;
                option.textContent = opt.text;
                select.appendChild(option);
            });

            const passwordField = form.querySelector('input#password');
            if (passwordField) {
                passwordField.closest('.form-group, div').insertAdjacentElement('afterend', select);
            }
        }
    };
});