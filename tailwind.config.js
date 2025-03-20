/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    screens: {
      smTablet: "35.9375em", // 575px
      tablet: "41.25em", // 660px
      lgTablet: "51.5em", // 824px
    },
    gridTemplateColumns: {
      twoCols: "1fr 1fr",
    },
    colors: {
      primaryGreen: "#E0F1E8",
      brightGreen: "#0C7D69",
      darkGrey: "#2A4144",
      grey: "#86A2A5",
      black: "#000000",
      white: "#FFFFFF",
    },
    extend: {},
  },
  plugins: [],
};
