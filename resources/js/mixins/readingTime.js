export const readingTime = {
    methods: {
        readingTime(text) {
            let minutes = 0;
            const contentString = JSON.stringify(text);
            const words = contentString.split(" ").length;
            const wordsPerMinute = 100;
            minutes = Math.ceil(words / wordsPerMinute);
            return minutes;
        }
    }
}