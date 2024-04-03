/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],

    theme: {
        extend: {
            colors: {
                dark: {
                    DEFAULT: "#1A202C", // Define your dark mode colors
                },
            },
            fontFamily: {
                inter: ["Inter", "sans-serif"],
                sfpro: ["SF Pro Text", "sans-serif"],
            },
            backgroundImage: {
                "form-gr":
                    "linear-gradient(175.10deg, rgba(4, 4, 4, 0.33) -3.38%,rgba(74, 74, 74, 0) 104.291%);",
            },
            screens: {
                tablet: "640px",
                // => @media (min-width: 640px) { ... }

                laptop: "1024px",
                // => @media (min-width: 1024px) { ... }

                desktop: "1280px",
                // => @media (min-width: 1280px) { ... }
            },
        },
    },
    plugins: [],
};
