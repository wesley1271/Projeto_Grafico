/* Elementos do form */
const formCadastro = document.getElementById('cadaster-form');
const nomeInput = document.getElementById('nome');
const emailInput = document.getElementById('email');
const senhaInput = document.getElementById('senha');
const btn = document.getElementById('btn');

/* erros de validação */
const nomeErr = document.getElementById('nomeErr');
const emailErr = document.getElementById('emailErr');
const senhaErr = document.getElementById('senhaErr');
const feedbackGeral = document.getElementById('feedback');


function validarEmail(email) {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email)
}

function todosValidos() {
    return (
        nomeInput.value.trim().length >= 3 && validarEmail(emailInput.value.trim()) && senhaInput.value.trim().length >= 6
    );
}

function validacaoForm() {

    nomeInput.addEventListener('blur', () => {
        const valorNome = nomeInput.value.trim();

        nomeErr.textContent = '';
        nomeInput.style.border = '1px solid #ced4da';

        if (valorNome === '') {
            nomeErr.textContent = 'Nome é obrigatório.';
            nomeInput.style.border = '2px solid #dc3545';
        }
        else if (valorNome.length < 3) {
            nomeErr.textContent = 'O nome deve conter 3 ou mais caracteres.';
            nomeInput.style.border = '2px solid #dc3545';
        }
        else {
            console.log('Nome válido');
            nomeInput.style.border = '1px solid #ced4da';
        }

        btn.disabled = !todosValidos();
    });

    emailInput.addEventListener('blur', () => {
        const valorEmail = emailInput.value.trim();

        emailErr.textContent = '';
        emailInput.style.border = '1px solid #ced4da';

        if (valorEmail === '') {
            emailErr.textContent = 'Email é obrigatório.';
            emailInput.style.border = '2px solid #dc3545';
        } else if (!validarEmail(valorEmail)) {
            emailErr.textContent = 'Formato de E-mail inválido (ex: nome@dominio.com).';
            emailInput.style.border = '2px solid #dc3545';
        } else {
            console.log('Email válido');
            emailInput.style.border = '1px solid #ced4da';
        }

        btn.disabled = !todosValidos();
    });

    senhaInput.addEventListener('blur', () => {
        const valorSenha = senhaInput.value.trim();

        senhaErr.textContent = '';
        senhaInput.style.border = '1px solid #ced4da';

        if (valorSenha === '') {
            senhaErr.textContent = 'Senha é obrigatória.';
            senhaInput.style.border = '2px solid #dc3545';
        } else if (valorSenha.length < 6) {
            senhaErr.textContent = 'Senha deve conter mais de 6 caracteres.';
            senhaInput.style.border = '2px solid #dc3545';
        } else {
            console.log('Senha válida');
            senhaInput.style.border = '1px solid #ced4da';
        }

        btn.disabled = !todosValidos();
    });
}

validacaoForm();


async function validacaoCadastro(e) {
    e.preventDefault();


    if (!todosValidos()) {
        feedbackGeral.textContent = 'Corrija os erros antes de enviar.';
        feedbackGeral.className = 'erro';
        return;
    }

    btn.disabled = true;

    const formData = new FormData(formCadastro);

    try {
        const resposta = await fetch('cadastro.php', {
            method: 'POST',
            body: formData
        });

        const resultado = await resposta.json();

        if (resultado.sucesso) {
            feedbackGeral.textContent = resultado.mensagem || 'Enviado!';
            feedbackGeral.className = 'sucesso';
            formCadastro.reset();
        } else {
            feedbackGeral.textContent = resultado.mensagem || 'Erro ao enviar.';
            feedbackGeral.className = 'erro';
        }

    } catch (e) {
        feedbackGeral.textContent = 'Erro de conexão.';
        feedbackGeral.className = 'erro';
    } finally {
        btn.disabled = false;
    }
 

}
formCadastro.addEventListener('submit', validacaoCadastro);