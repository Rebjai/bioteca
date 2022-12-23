import { useToast } from "vue-toastification"

function handleErrorMessages(errObj) {
    const toast = useToast()
    return Object.values(errObj).map(err => toast.error(err))
}
function handleSuccessMessages(errObj) {
    const toast = useToast()
    return toast.success('Petición exitosa')
}

export {handleErrorMessages, handleSuccessMessages}
export default handleErrorMessages