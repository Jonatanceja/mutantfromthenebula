import theme from 'tailwindcss/defaultTheme'
import colors from 'tailwindcss/colors'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

/** @type {import('tailwindcss').Config} */
module.exports = {
  theme: {
    extend: {
      colors: { accent: 'var(--accent)' },
      fontFamily: {
        display: ["'Barlow Condensed'", 'sans-serif'],
        tech: ["'JetBrains Mono'", 'monospace'],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [forms, typography],
  content: [
    'site/templates/**/*.html',
    'site/templates/**/*.php',
    'resources/**/*.js',
    'resources/**/*.vue',
  ],
}
