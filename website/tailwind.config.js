/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],

  daisyui: {
    themes [
      {
        mytheme: {
        
          "primary": "#F2BD1D",
          
          "secondary": "#F2A81D",
                   
          "accent": "#F2F2F2",
                   
          "neutral": "#0D0D0D",
        },
      },
    ],
  },
  plugins: [require("daisyui")],
}


