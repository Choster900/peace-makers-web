import { ref } from "vue"

export const useNewBlog = () => {
    const fileInput = ref(null);
    const urlImageFile = ref(null);
    const EnableForEdit = ref(false);

    //Constante a enviar a base de datos

    const idBlog = ref(null);
    const tituloBlog = ref('Lorem ipsum dolor sit amet consectetur adipiscing ');
    const descripcionBlog = ref(null);
    const fotoPrincipalBlog = ref(null);
    const contenidoDescripcionBlog = ref(null);
    const numeroVisitasBlog = ref(null);
    const fechaReflejadaBlog = ref(null);
    const estadoBlog = ref(null);

    const archivoFull = ref(null);

    //Fin de constantes
    // Funciones
    const openFileInput = () => {
        if (fileInput.value) {
            fileInput.value.click();
        }
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

        archivoFull.value = selectedFile
        console.log(selectedFile);
        urlImageFile.value = URL.createObjectURL(selectedFile);
        console.log('Archivo seleccionado:', selectedFile.name);
    };

    return {
        fileInput,
        handleDrop,
        archivoFull,
        urlImageFile,
        openFileInput,
        handleDragOver,
        handleFileChange, EnableForEdit,


        idBlog,
        tituloBlog, descripcionBlog, fotoPrincipalBlog, contenidoDescripcionBlog, numeroVisitasBlog,
        fechaReflejadaBlog, estadoBlog

    };
}
