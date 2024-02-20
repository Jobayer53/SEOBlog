/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                helvetica: ["Nunito", "sans-serif"],
            },
            spacing: {
                container: "1230px",
                containshap: "1330px",
            },
            colors: {
                LIGHTBLUE: "#40A2D8",
                LIGHTYELLOW: "#FFCD3C",
                MILDYELLOW: "#F8E559",
                OFFWHITE: "#FFFFEC",
            },
            screens: {
                smd: "350px",
            },
        },
    },
    plugins: [],
  }
