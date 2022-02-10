module.exports = {
    mode: "jit",
    darkMode: "media",
    content: ["./app/**/*.php", "./resources/**/*.{php,vue,js}"],
    theme: {
        fontFamily: {
            sans: ["proxima-nova", "system-ui"],
            serif: ["adobe-garamond-pro", "Georgia", "serif"],
        },
        extend: {
            typography: {
                DEFAULT: {
                    css: {
                        h2: {
                            fontFamily: [
                                "adobe-garamond-pro",
                                "Georgia",
                                "serif",
                            ],
                            fontWeight: "regular",
                        },
                        p: {
                            fontFamily: [
                                "adobe-garamond-pro",
                                "Georgia",
                                "serif",
                            ],
                        },
                    },
                },
            },
            colors: {
                action: {
                    dark: {
                        DEFAULT: "#3095B4",
                        hover: "#1C81A0",
                    },
                    light: {
                        DEFAULT: "#3095B4",
                        hover: "#1C81A0",
                    },
                },
                background: {
                    dark: {
                        primary: "#141414",
                        secondary: "#252E3E",
                        tertiary: "#3A475F",
                    },
                    light: {
                        primary: "#ffffff",
                        secondary: "#F5F5F5",
                        tertiary: "#D1D6E0",
                    },
                },
                label: {
                    dark: {
                        primary: "#ffffff",
                        secondary: "rgba(255, 255, 255, 0.50)",
                        tertiary: "rgba(255, 255, 255, 0.25)",
                        reverse: "#ffffff",
                    },
                    light: {
                        primary: "#323232",
                        secondary: "#787878",
                        tertiary: "#B4B4B4",
                        reverse: "#ffffff",
                    },
                },
                brand: {
                    blue: "#005A8B",
                    teal: "#3095B4",
                    tealDarker: "#1C81A0",
                    "light-blue": "#BFDBEC",
                    orange: "#FF9500",
                    green: "#5FCC29",
                },
            },
            borderWidth: ["hover", "focus"],
            borderStyle: ["hover", "focus"],
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        // require("@tailwindcss/aspect-ratio"),
        // require("tailwindcss-safe-area"),
        // require("@tailwindcss/typography"),
        // require("@tailwindcss/forms"),
    ],
};
