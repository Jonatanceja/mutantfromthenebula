import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: [...refreshPaths, 'site/templates/**'],
    }),
  ],
  server: {
    // Herd sirve el sitio en https://*.test; sin esto el navegador bloquea los módulos JS del dev server (CORS)
    cors: true,
  },
  resolve: {
    alias: {
      '@': '/resources/js',
    },
  },
})
