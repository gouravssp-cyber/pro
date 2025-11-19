import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [
    tailwindcss(),
  ],
  build: {
    manifest: true,
    rollupOptions: {
      input: 'src/main.js',
    },
    outDir: 'dist',
  },
  server: {
    port: 5173,
    strictPort: true,
    hmr: {
      host: 'localhost',
    },
  },
});
