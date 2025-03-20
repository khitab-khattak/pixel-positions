import defaultTheme from "tailwindcss/defaultTheme";

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.vue",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
            },
            fontSize: {  // ✅ Fixed (was "fontsize")
                "2xs": ".625rem", // 10px
            },
            colors: {
                primary: "#1E293B", // Custom primary color
                secondary: "#64748B", // Custom secondary color
            },
        },
    },
    plugins: [],
};
