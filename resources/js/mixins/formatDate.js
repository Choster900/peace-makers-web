export const formatDate = {
    methods: {
        formatDate(date){
            const d = new Date(date)
            const  month = "" + d.getMonth()
            let day = "" + d.getDate()
            const year = d.getFullYear()

            if (day.length < 2) day = "0" + day;
            const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

            return `${day} ${months[month]}, ${year}`;
        }
    }
}