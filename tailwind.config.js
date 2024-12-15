/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#D4B29A",
                secondary: "#d5a37e",
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
            }
        },
    },
    plugins: [],
};
