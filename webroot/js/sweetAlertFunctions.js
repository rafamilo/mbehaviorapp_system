const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

function sweetToastSuccess(title) {
    toast({
        type: 'success',
        title: title
    });
}

function sweetToastError(title) {
    toast({
        type: 'error',
        title: title
    });
}

function sweetToastInfo(title) {
    toast({
        type: 'info',
        title: title
    });
}

function sweetError(title, text, cancelButtonText) {
    return swal({
        type: 'error',
        title: title,
        text: text,
        showCancelButton: true,
        showConfirmButton: false,
        cancelButtonText: cancelButtonText,
    })
}

function sweetInfo(title, text, cancelButtonText) {
    return swal({
        type: 'info',
        title: title,
        text: text,
        showCancelButton: true,
        showConfirmButton: false,
        cancelButtonText: cancelButtonText,
    })
}

function sweetErrorWithRedirection(title, text, confirmButtonText, url, cancelButtonText) {
    return swal({
        type: 'error',
        title: title,
        text: text,
        confirmButtonText: confirmButtonText,
        preConfirm: () => { window.open(url, '_blank') },
        showCancelButton: true,
        cancelButtonText: cancelButtonText
    })
}

function sweetSuccessWithRedirection(title, text, confirmButtonText, url, cancelButtonText) {
    return swal({
        type: 'success',
        title: title,
        text: text,
        confirmButtonText: confirmButtonText,
        preConfirm: () => { window.open(url, '_blank') },
        showCancelButton: true,
        cancelButtonText: cancelButtonText
    })
}

function sweetSuccessWithRedirectionWithoutBlank(title, text, confirmButtonText, url, cancelButtonText) {
    return swal({
        type: 'success',
        title: title,
        text: text,
        confirmButtonText: confirmButtonText,
        preConfirm: () => { window.location.replace(url) },
        showCancelButton: true,
        cancelButtonText: cancelButtonText
    });
}

function sweetSuccessWithReload(title, text, confirmButtonText) {
    return swal({
        type: 'success',
        title: title,
        text: text,
        confirmButtonText: confirmButtonText,
        preConfirm: () => { location.reload() }
    })
}

function sweetDeleteInfo(controller, id, funcao, id_funcao) {
    return swal({
        type: 'info',
        title: 'Atenção',
        text: 'Tem certeza que deseja excluir este registro?',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Excluir',
        preConfirm: () => {
            return excluirComSweetAlert(controller, id, funcao, id_funcao);
        }
    })
}

function sweetSuccess(title, text, confirmButtonText) {
    return swal({
        type: 'success',
        title: title,
        text: text,
        confirmButtonText, confirmButtonText
    });
}

function sweetInfoCallback(title, text, confirmButtonText) {
    return swal({
        type: 'info',
        title: title,
        text: text,
        confirmButtonText, confirmButtonText
    });
}