/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#00d4ff',
        darkbg: '#07111f',
        neon: '#00f0ff'
      },
      boxShadow: {
        neon: '0 0 20px rgba(0,212,255,0.7)',
      }
    },
  },
  plugins: [],
}