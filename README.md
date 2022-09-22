=============================

**Git handleiding**

- ``` git add . ```
- ``` git push ```
- ``` git commit -m "een message" ```

<sup> *Do this from the root map of Laravel Git or stuff will go fucky wucky </sup>


=============================

[Installation Tailwind Css Laravel:](https://tailwindcss.com/docs/guides/laravel) 


1: ``` laravel new myprojectname ```

2: ``` cd myprojectname ```

3: ``` npm install -D tailwindcss postcss autoprefixer ```

4: ``` npx tailwindcss init -p ```

5: add this to the tailwind.config.js file (*can be found in the root of the project map*):
```

 module.exports = {
 
  content: [
    "./resources/**/*.blade.php",
    
    "./resources/**/*.js",
    
    "./resources/**/*.vue",
    
  ],
  
  theme: {
  
    extend: {},
    
  },
  
  plugins: [],
  
}

```
6: add this to the app.css file:
```

@tailwind base;

@tailwind components;

@tailwind utilities;

```
7: ``` npm run dev ``` 
in gitbash or other terminal


8:  add this to the html in your header
``` @vite('resources/css/app.css') ```


