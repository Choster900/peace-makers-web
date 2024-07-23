export const truncateString = {
    filters: {
        truncate: (text, length, suffix) => {
            if (text.length > length) {
                return text.substring(0, length) + suffix;
            } else {
                return text;
            }
        }
    },
}