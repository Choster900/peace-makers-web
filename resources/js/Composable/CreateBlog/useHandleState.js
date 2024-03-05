import { ref } from "vue"

export const useHandleState = () => {

    const stateSecciont = ref(null);

    return {
        stateSecciont,
    }
}
