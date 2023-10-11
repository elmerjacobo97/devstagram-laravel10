// tailwind.config.js
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'figtree': ['"Figtree"', 'serif'],
                'alexandria': ['"Alexandria"', 'sans-serif'],
            },
        },
    },
    plugins: [],
}
