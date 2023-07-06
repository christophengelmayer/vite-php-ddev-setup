This is an example code, simulating how to run [Vite](https://github.com/vitejs/vite) on traditional PHP sites inside [DDEV](https://ddev.com/).

A bare-minimum setup to serve as example to adapt to other scenarios ([WordPress](https://github.com/wp-bond/boilerplate/tree/master/app/themes/boilerplate), Laravel, etc).

For everything else beyond the PHP side please refer to the [Vite documentation](https://vitejs.dev), which is great. 

### Goal

- Handle the cleanest way possible;

### Setup

```
ddev start
ddev exec yarn install
ddev launch
```

### Usage 

For development, start Vite dev server inside ddev:

	ddev exec yarn dev

Build for production:

	ddev exec yarn build

The `helpers.php` script loads files from vite server and will fallback to production files from manifest if vite server is not running.

### Status

- Works gracefully!

### Note about the development host

A characteristic of this setup is that you'll run your project inside DDEV, for example https://vitephp.ddev.site/. Vite will be running at https://vitephp.ddev.site:5173 where our script and styles will be served from, but accessing https://vitephp.ddev.site:5173 directly will be empty, which is fine.

Of course, HMR and styles will work just fine! And fast!

- Mininum Node.js version >=14.18+

### Tips for multiple entries

You may find the need to handle multiple entries, for example, one js/css for the backend and another js/css for frontend. For that, it depends directly on how you want to organize your code.

So you can have:

- A single Vite [multi-page setup](https://vitejs.dev/guide/build.html#multi-page-app).
- A shared Vite setup, but outputing different entries in separated build steps, [example here](https://github.com/wp-bond/boilerplate/blob/master/themes/boilerplate/package.json).

### Docker dev environment
To get this running on Docker quickly, [check out this fork](https://github.com/mrothauer/vite-php-setup). Thanks @mrothauer
