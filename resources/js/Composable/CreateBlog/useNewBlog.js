import { ref } from "vue"

export const useNewBlog = () => {
    const fileInput = ref(null);
    const courseFile = ref(null);
    const coursePhoto = ref(null);
    const urlImageFile = ref(null);

    const openFileInput = () => {
        fileInput.value.click();
    };

    const handleFileChange = () => {
        const selectedFile = fileInput.value.files[0];
        console.log(selectedFile);

        if (selectedFile) {
            setImageData(selectedFile);
        }
    };

    const handleDragOver = (event) => {
        event.preventDefault();
    };

    const handleDrop = (event) => {
        event.preventDefault();
        const selectedFile = event.dataTransfer.files[0];
        if (selectedFile) {
            setImageData(selectedFile);
        }
        fileInput.value = null;
    };

    const setImageData = (selectedFile) => {
        console.log(selectedFile);
        courseFile.value = selectedFile;
        urlImageFile.value = URL.createObjectURL(selectedFile);
        coursePhoto.value = selectedFile.name
        console.log('Archivo seleccionado:', selectedFile.name);
    };

    return {
        fileInput,
        courseFile,
        handleDrop,
        coursePhoto,
        urlImageFile,
        openFileInput,
        handleDragOver,
        handleFileChange,
    };
}
